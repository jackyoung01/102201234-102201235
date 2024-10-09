<?php


	
	//数据提交调用
	session_start();
	$_SESSION['conn'] = 'index';
	include ('inc/conn.php');//连接数据库

	header("Content-type: text/html; charset=utf-8");
	mysql_query("set names utf8");
	
	$from = $_POST['from'];
	if ($_POST['form'] =='tijiao') {
		$token = $_POST['token'];
		if ($token == $_SESSION['token']) {
			$ip = $_SERVER["REMOTE_ADDR"];
			$fbtime = date('Y-m-d H:i:s',time());
			$cont = str_replace(' ','',$_POST['content']);
			$img = $_POST['imginput'];
          	$qq = $_POST['qq'];
          	$bqq = $_POST['bqq'];
          	$bbr1 = $_POST['bbr1'];
          	$bbr2 = $_POST['bbr2'];
          	$syimg = $_POST['syimg'];
			$nm = $_POST['nm'];
			$lx = $_POST['lx'];
			$lx1 = $_POST['lx1'];
			$zan = '0';
			$comt = '0';
			if($cont!=''){
				$sql = "insert into content (cont,img,nm,zan,comt,ip,fbtime,qq,bqq,bbr1,bbr2,syimg,lx,lx1) values('$cont','$img','$nm','$zan','$comt','$ip','$fbtime','$qq','$bqq','$bbr1','$bbr2','$syimg','$lx','$lx1')";
				$result = mysql_query($sql);
				unset($_SESSION['token']);
				header('Location:index.php');
			}else{
				echo "<script>alert('请填写有效内容后重新发布！');window.location.href='index.php';</script>";
			}
		} else {
			header('Location:index.php');
		}
	}elseif ($_POST['form'] =='comt') {
		$from = $_POST['from'];
		$floor = $_POST['floor'];
		$comt = $_POST['floor']+'1';
		if ($floor < 10) {
			$floor = $_POST['floor']+'1';
			$floor = '0'.$floor;
		} else {
			$floor = $_POST['floor']+'1';
		}
		$token = $_POST['token'];
		if ($token == $_SESSION['token']) {
			$plimg = $_POST['plimg'];
			$cont = $_POST['cont'];
			$ip = $_SERVER["REMOTE_ADDR"];
			$pltime = date('Y-m-d H:i:s',time());
			$contid = $_POST['contid'];
          	$plqq = $_POST['plqq'];
          	$plname = $_POST['plname'];
			$sql = "insert into comment (plimg,cont,floor,pltime,contid,ip,plqq,plname) values('$plimg','$cont','$floor','$pltime','$contid','$ip','$plqq','$plname')";
			$sql1 = "update content set comt='$comt' where Id ='".$contid."'";
			$result = mysql_query($sql);
			$result1 = mysql_query($sql1);
			header('Location:'.$from);
		} else {
			header('Location:'.$from);
		}
	}
?>













