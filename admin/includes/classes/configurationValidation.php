<?php
/**
 * @package admin/includes/classes
 * configurationValidation.php
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Copyright 2019 mc12345678 @ mc12345678.com
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:  mc12345678 2019-Apr-08 added in v1.5.6b$
 *
 */

if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

if (!empty($_SESSION['language'])) {
    require zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/', 'configuration_validation.php', 'false');
}

class configurationValidation extends base
{
    static public function sanitizeEmail(&$val) {
        $results = array();
        $send_email_array = array();
        $send_to_array = array();
        $send_to_email = '';
        $send_to_name = '';
        $response = array();
        $final_result = '';
        $options = array(
                         'options' => array(
                                      'default' => false,
                                      ),
                         'flags' => array(''),
                         );
        
        if (isset($val)) {
            $send_to_array = explode(",", $val);
            // If count($send_to_array) > 1 then there are multiple addresses to be parsed.
            foreach ($send_to_array as $key => $address) {
                $send_to_name = '';
                $send_to_email = trim($address);
                // Collect the portion within <> symbols
                preg_match('/\<[^>]+\>/', $address, $send_email_array);
                // If there are parts to the above, then set/collect them.
                if (!empty($send_email_array)) {
                    $send_to_email = preg_replace ("/>/", "", $send_email_array[0]);
                    $send_to_email = trim(preg_replace("/</", "", $send_to_email));
                    $send_to_name  = trim(preg_replace('/\<[^*]*/', '', $address));
                }
                
                // Collect the individual name/email as part of an array.
                $results[$key]['send_to_name'] = filter_var($send_to_name, FILTER_SANITIZE_EMAIL, $options);
                $results[$key]['send_to_email'] = filter_var($send_to_email, FILTER_VALIDATE_EMAIL, $options);
                
                // Restore the inner email address back to its state for capture.
                if (!empty($send_email_array) && $results[$key]['send_to_email'] !== false) {
                    $results[$key]['send_to_email'] = '<' . $results[$key]['send_to_email'] . '>';
                }
                
                // If the email address is not assigned, but there is content in the name, validate that the name is a correct email address.
                if ($results[$key]['send_to_email'] === false && !empty($results[$key]['send_to_name'])) {
                  $results[$key]['send_to_name'] = filter_var($results[$key]['send_to_name'], FILTER_VALIDATE_EMAIL, $options);
                }
                
                // Remove array parameters that have failed validation.
                foreach ($results[$key] as $key2 => $value2) {
                      if (empty($value2)) {
                          unset($results[$key][$key2]);
                      }
                }
                unset($key2, $value2);
                
                // If this round of review identified no record, then move to the next record.
                if (empty($results[$key])) {
                    continue;
                }
                
                // Collect the filtered email information into a single record.
                $response[$key] = implode(" ", $results[$key]);
            }
            
            // Collect email addresses entered as a string.
            $final_result = implode(", ", $response);
        }
        
        // If there are no email addresses that are valid, then identify that failed validation.
        if (empty($final_result)) {
            return false;
        }
        
        // Provide the filtered value back as $val.
        $val = $final_result;
        
        // Set $configuration_value that is to be stored as the filtered email address.
        return $GLOBALS['configuration_value'] = $final_result;
    }
    
}//end of class
