<?php
/**
 * Header code file for the Search Input page
 *
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 Dec 25 New in v1.5.8-alpha $
 */
require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));
$breadcrumb->add(NAVBAR_TITLE_1);

//test:
//&keyword=die+hard&categories_id=10&inc_subcat=1&manufacturers_id=4&pfrom=1&pto=50&dfrom=01%2F01%2F2003&dto=12%2F20%2F2005
//added by sveinjoe<sveinjoe@gmail.com> 当搜索的参数有一个search_categories且值为1的时候，那么开始检索数据库里面是否有这个名字的目录，如果有直接定位到这个目录的链接

$sData['keyword'] = stripslashes(isset($_GET['keyword']) ? zen_output_string_protected($_GET['keyword']) : '');
$sData['search_categories'] = (isset($_GET['search_categories']) ? zen_output_string((int)$_GET['search_categories']) : 0);
$sData['search_in_description'] = (isset($_GET['search_in_description']) ? zen_output_string((int)$_GET['search_in_description']) : 1);
$sData['categories_id'] = (isset($_GET['categories_id']) ? zen_output_string((int)$_GET['categories_id']) : 0);
$sData['inc_subcat'] = (isset($_GET['inc_subcat']) ? zen_output_string((int)$_GET['inc_subcat']) : 1);
$sData['manufacturers_id'] = (isset($_GET['manufacturers_id']) ? zen_output_string((int)$_GET['manufacturers_id']) : 0);
$sData['dfrom'] = (isset($_GET['dfrom']) ? zen_output_string($_GET['dfrom']) : zen_output_string(DOB_FORMAT_STRING));
$sData['dto'] = (isset($_GET['dto']) ? zen_output_string($_GET['dto']) : zen_output_string(DOB_FORMAT_STRING));
$sData['pfrom'] = (isset($_GET['pfrom']) ? zen_output_string($_GET['pfrom']) : '');
$sData['pto'] = (isset($_GET['pto']) ? zen_output_string($_GET['pto']) : '');

if($sData['search_categories'] == 1){
    $categories_info = $db->Execute("SELECT * FROM " . TABLE_CATEGORIES_DESCRIPTION . " WHERE language_id = " . (int)$_SESSION['languages_id'] . " AND categories_name='" . $sData['keyword'] . "' LIMIT 1");
    if(!empty($categories_info->fields['categories_name'])){
        zen_redirect(zen_href_link(FILENAME_DEFAULT, 'cPath=' . (int)$categories_info->fields['categories_id']));
    }
}
// check manufacturers
$result = $db->Execute("SELECT manufacturers_id FROM " . TABLE_MANUFACTURERS . " LIMIT 1");
$skip_manufacturers = ($result->EOF);
