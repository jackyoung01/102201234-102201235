<?php


header('content-type: text/html; charset=utf-8');	

	ini_set('session.gc_maxlifetime', 999999999999); //设置时间
	session_start();
	if ($_SESSION['conn']=="index"){
		include("inc/config.php");//前台调用数据库连接信息
	}else {
		include("../inc/config.php");//二级目录调用数据库连接信息
	}
	$conn = mysql_connect($mysql_server_name,$mysql_username,$mysql_password); //连接数据库
	if (!$conn)//如果连接数据库失败 
	{
		die('连接数据库失败,请检查inc/config.php是否修改： ' . mysql_error());
	}
	mysql_select_db($mysql_database,$conn);//成功的话就执行以下代码
?>