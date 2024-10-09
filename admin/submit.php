<?php
header('content-type: text/html; charset=utf-8');


	error_reporting(0);
	session_start();
	$_SESSION['conn'] = 'admin';
	include '../inc/conn.php';
	mysql_query("set names utf8");
	
	if (!isset ($_SESSION['login'])) { 
		echo '<script>location.href="login.php"</script>';
	}
	
	$sql_admin = 'select * from admin';
	$res_admin=mysql_query($sql_admin);
	$row_admin = mysql_fetch_array($res_admin);
	
	$from = $_POST['from'];
	
	if($from == 'pass'){
		//修改密码
		$oldpswd = md5($_POST['oldpswd']);
		$newpswd = md5($_POST['newpswd']);
		$newpswd2 = md5($_POST['newpswd2']);
		if($newpswd==$newpswd2){
			if($oldpswd!=$row_admin['pass']){
				echo "<script>alert('旧密码输入错误，请重新填写！');window.location.href='password.php';</script>";
			}else{
				$sql = "update admin set pass='$newpswd' where Id ='1'";
				$result = mysql_query($sql);
				unset ($_SESSION['login']);
				echo "<script>alert('密码修改成功，请使用新密码重新登陆！');window.location.href='login.php';</script>";
			}
		}else{
			echo "<script>alert('两次输入密码不一致，请重新填写！');window.location.href='password.php';</script>";
		}
	}elseif ($from == 'system') {
		//系统设置
		$title = $_POST['title'];
		$title2 = $_POST['title2'];
		$weburl = $_POST['weburl'];
		$webkey = $_POST['webkey'];
		$webdes = $_POST['webdes'];
		$footer = $_POST['footer'];
        $yqlj = $_POST['yqlj'];
      	$zzqq = $_POST['zzqq'];
        $webgg = $_POST['webgg'];
      	$kfqq = $_POST['kfqq'];
      	$gsbt = $_POST['gsbt'];
      	$gstime = $_POST['gstime'];
      	$gsimg = $_POST['gsimg'];
		$sql = "update system set title='$title',title2='$title2',weburl='$weburl',webkey='$webkey',webdes='$webdes',footer='$footer',yqlj='$yqlj',zzqq='$zzqq',webgg='$webgg',kfqq='$kfqq',gsbt='$gsbt',gstime='$gstime',gsimg='$gsimg' where Id ='1'";
		$result = mysql_query($sql);
		header('Location:system.php');
		
	}
	
?>