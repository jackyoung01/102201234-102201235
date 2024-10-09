<?php

//http://www.xmpan.com

//http://www.xmpan.com
	
	error_reporting(0);
	session_start();
	$_SESSION['conn'] = 'admin';
	include '../inc/conn.php';
	include 'sql.php';
	mysql_query("set names utf8");
	
	if (!isset ($_SESSION['login'])) { 
		echo '<script>location.href="login.php"</script>';
	}
?>