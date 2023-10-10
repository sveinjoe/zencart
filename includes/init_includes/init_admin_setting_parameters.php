<?php
if(!defined('HEADING_TITLE')){
    $group_check = $db->Execute("SELECT min(configuration_group_id) as minid FROM " . TABLE_CONFIGURATION_GROUP . " WHERE 1");
    if (!$group_check->EOF && $group_check->RecordCount() > 0 && $group_check->fields['minid'] > 0) {
        $group_id = $group_check->fields['minid'];
    }else{
        die('get configuration group id error!');
    }
    try{
        $db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES('Heading Title In Index.', 'HEADING_TITLE', 'Congratulations! You have successfully installed your Zen Cart&reg; E-Commerce Solution.', 'Home page welcome message, displayed in the middle of the home page. ', ".$group_id.", '1121', NULL, now(), NULL, '')");
    }catch(Exception $e){
        null;
    }
}
if(!defined('TEXT_GREETING_GUEST')){
    $group_check = $db->Execute("SELECT min(configuration_group_id) as minid FROM " . TABLE_CONFIGURATION_GROUP . " WHERE 1");
    if (!$group_check->EOF && $group_check->RecordCount() > 0 && $group_check->fields['minid'] > 0) {
        $group_id = $group_check->fields['minid'];
    }else{
        die('get configuration group id error!');
    }
    try{
        $db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES('Welcome to Guest.', 'TEXT_GREETING_GUEST', 'Welcome <span class=\"greetUser\">Guest!</span> Would you like to <a href=\"%s\">log yourself in</a>?', 'Home page welcome message to guest, displayed in the middle of the home page. ', ".$group_id.", '1122', NULL, now(), NULL, '')");
    }catch(Exception $e){
        null;
    }
}
if(!defined('HEADER_SALES_TEXT')){
    $group_check = $db->Execute("SELECT min(configuration_group_id) as minid FROM " . TABLE_CONFIGURATION_GROUP . " WHERE 1");
    if (!$group_check->EOF && $group_check->RecordCount() > 0 && $group_check->fields['minid'] > 0) {
        $group_id = $group_check->fields['minid'];
    }else{
        die('get configuration group id error!');
    }
    try{
        $db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES('Sales text in headers.', 'HEADER_SALES_TEXT', 'TagLine Here', 'Sales Text in headers. It often show at right about the logo.', ".$group_id.", '1123', NULL, now(), NULL, '')");
    }catch(Exception $e){
        null;
    }
}