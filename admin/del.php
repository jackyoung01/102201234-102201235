<?php
header('content-type: text/html; charset=utf-8');

//http://www.xmpan.com

//http://www.xmpan.com

	error_reporting(0);
	session_start();
	$_SESSION['conn'] = 'admin';
	include '../inc/conn.php';
	mysql_query("set names utf8");
	
	if (!isset ($_SESSION['login'])) { 
		echo '<script>location.href="login.php"</script>';
	}
	
	$from = $_GET['from'];
	$id = $_GET['id'];
	
	
	if ($from=='cont') {
		$result = mysql_query("delete from content where Id = '$id' ");
		if($result){
			echo "<script>alert('内容删除成功！');window.location.href='cont.php';</script>";
		}else{
			echo "<script>alert('内容删除失败！');window.location.href='cont.php';</script>";
		}
	} elseif($from=='speak') {
		$result = mysql_query("delete from comment where Id = '$id' ");
		if($result){
			echo "<script>alert('评论删除成功！');window.location.href='speak.php';</script>";
		}else{
			echo "<script>alert('评论删除失败！');window.location.href='speak.php';</script>";
		}
	}
?>