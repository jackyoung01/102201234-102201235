<?php


	
	error_reporting(0);
	session_start();
	$_SESSION['conn'] = 'index';
	include 'inc/conn.php';
	header("Content-type: text/html; charset=utf-8");
	mysql_query("set names utf8");

	$a=array("#5bc0de","#428bca","#5cb85c","#f0ad4e","#d9534f"); 
	$random_keys=array_rand($a,2);
	
	$_SESSION['token'] = uniqid();
	$pagesess = 'page'.getenv("REMOTE_ADDR").date("YmdH");
	$_SESSION[$pagesess] = "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];

	$sql = "select * from system";//查询数据库
	$set = mysql_query($sql);
	$result = mysql_fetch_array($set);

?>