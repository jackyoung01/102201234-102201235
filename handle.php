<?php


	
	session_start();
	$_SESSION['conn'] = 'index';
	include 'inc/conn.php';
	mysql_query("set names utf8");
	
	$id = $_POST['id'];
	$ip = $_SERVER["REMOTE_ADDR"];
	
	$sql = "select * from handle where cid='$id' and ip='$ip'"; //更新数据
	$result = mysql_query($sql);		
	
	if (mysql_num_rows($result)) {
		$sql1 = "select * from content where Id='$id'"; //更新数据
		$result1 = mysql_query($sql1);
		while ($bookInfo = mysql_fetch_array($result1)){ //返回查询结果到数组
	
		$xzan = $bookInfo["zan"];
	
		echo $xzan;
		}
	} else {
		$sql2 = "insert into handle (cid,ip) values('$id','$ip')"; //更新数据
		$result2 = mysql_query($sql2);
		
		$sql0 = "update content set zan=zan+1 where Id='$id'"; //更新数据
		$result0 = mysql_query($sql0);
		
		$sql1 = "select * from content where Id='$id'"; //更新数据
		$result1 = mysql_query($sql1);
		
		while ($bookInfo = mysql_fetch_array($result1)){ //返回查询结果到数组
	
		$xzan = $bookInfo["zan"];
	
		echo $xzan;
		}
	}	
	
?>