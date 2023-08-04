<?php
$schemahead = "http://";
if (( !empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') 
|| ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) 
|| ( !empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off')) {
	$schemahead = 'https://';
}
//自动设置为开启
if(!defined('FORCE_HTTPS')){
    $group_check = $db->Execute("SELECT min(configuration_group_id) as minid FROM " . TABLE_CONFIGURATION_GROUP . " WHERE 1");
    if (!$group_check->EOF && $group_check->RecordCount() > 0 && $group_check->fields['minid'] > 0) {
        $group_id = $group_check->fields['minid'];
    }else{
        die('get configuration group id error!');
    }
    $db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES('Use Force Https?', 'FORCE_HTTPS', 'on', 'When customer visite website in http://domain.com mode, location customer to https://domain.com mode.', ".$group_id.", '1113', NULL, now(), NULL, 'zen_cfg_select_option(array(\"on\", \"off\"),')");
}
//设置强制跳转到https页面
if(!defined('FORCE_HTTPS') || FORCE_HTTPS != "off"){
    if($schemahead != "https://"){
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        die();
    }
}

//自动设置为开启
if(!defined('FORCE_WWW_DOMAIN')){
    $group_check = $db->Execute("SELECT min(configuration_group_id) as minid FROM " . TABLE_CONFIGURATION_GROUP . " WHERE 1");
    if (!$group_check->EOF && $group_check->RecordCount() > 0 && $group_check->fields['minid'] > 0) {
        $group_id = $group_check->fields['minid'];
    }else{
        die('get configuration group id error!');
    }
    $db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES('Use Force www.domain.com?', 'FORCE_WWW_DOMAIN', 'on', 'When customer visite website in domain.com mode, location customer to www.domain.com mode.', ".$group_id.", '1113', NULL, now(), NULL, 'zen_cfg_select_option(array(\"on\", \"off\"),')");
}

//设置强制跳转到www页面
if(!defined('FORCE_WWW_DOMAIN') || FORCE_WWW_DOMAIN != "off"){
	if(strtolower(substr($_SERVER["HTTP_HOST"], 0, 4)) != "www.")
	{
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".$schemahead."www." . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
		die();
	}
}