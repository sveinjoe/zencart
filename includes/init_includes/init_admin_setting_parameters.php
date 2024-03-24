<?php
$arrConfigs = array(
    'HEADING_TITLE' => array(
        'configuration_title' => 'Heading Title In Index.',
        'configuration_value' => 'Congratulations! You have successfully installed your Zen Cart&reg; E-Commerce Solution.',
        'configuration_description' => 'Home page welcome message, displayed in the middle of the home page.',
        'sort_order' => '1121',
    ),
    'TEXT_GREETING_GUEST' => array(
        'configuration_title' => 'Welcome to Guest.',
        'configuration_value' => 'Welcome <span class="greetUser">Guest!</span> Would you like to <a href="%s">log yourself in</a>?',
        'configuration_description' => 'Home page welcome message to guest, displayed in the middle of the home page. ',
        'sort_order' => '1122',
    ),
    'HEADER_SALES_TEXT' => array(
        'configuration_title' => 'Sales text in headers.',
        'configuration_value' => 'TagLine Here',
        'configuration_description' => 'Sales Text in headers. It often show at right about the logo.',
        'sort_order' => '1123',
    ),
);


$group_check = $db->Execute("SELECT min(configuration_group_id) as minid FROM " . TABLE_CONFIGURATION_GROUP . " WHERE 1");
if (!$group_check->EOF && $group_check->RecordCount() > 0 && $group_check->fields['minid'] > 0) {
    $group_id = $group_check->fields['minid'];
    //获取group id成功，尝试获取这个group下的全部常量
    $con_results = $db->Execute("SELECT configuration_key FROM " . TABLE_CONFIGURATION . " WHERE configuration_group_id = " . $group_id . "");
    $arrKeysExists = array();
    foreach($con_results as $con_result){
        $arrKeysExists[] = $con_result['configuration_key'];
    }
    foreach($arrConfigs as $key => $configItem){
        if(!in_array($key, $arrKeysExists)){
            $db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES('" . $configItem['configuration_title'] . "', '" . $key . "', '" . $configItem['configuration_value'] . "', '" . $configItem['configuration_description'] . "', ".$group_id.", '" . $configItem['sort_order'] . "', NULL, now(), NULL, '')");
        }
    }
}
