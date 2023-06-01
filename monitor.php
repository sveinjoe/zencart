<?php
header("Content-type: text/html; charset=utf-8");
if(!empty($_GET["testserver"]) AND $_GET["testserver"]=="yes")
{
	echo getenv("SERVER_ADDR");
}else if(!empty($_GET["testserver"]) AND $_GET["testserver"]=="detail")
{
	echo "<pre>";
	print_r($_SERVER);
	echo "</pre>";
}else if(!empty($_GET["testserver"]) && $_GET["testserver"]=="arrDetail")
{
	echo json_encode($_SERVER);
	exit;
}else if(!empty($_GET["testserver"]) AND $_GET["testserver"]=="diskusage")
{
	$total = disk_total_space("/");
	$free = disk_free_space("/");
	echo "总的大小：" . $total . "<br>\n";
	echo "剩余大小：" . $free . "<br>\n";
	echo "使用率：" . 100*(($total - $free) / $total) . "%<br>\n";
}else if(!empty($_GET["testserver"]) AND $_GET["testserver"]=="average")
{
	$arr = array();
	if(function_exists('sys_getloadavg')){
		$arr['average'] = sys_getloadavg();
	}else{
		$arr['average'] = array(0,0,0);
	}
	$arr['diskleft'] = disk_free_space("/");
	echo json_encode($arr);
}
else
{
	echo getenv("HTTP_HOST");
}
?>