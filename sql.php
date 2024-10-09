<?php



	
	error_reporting(0);
	session_start();
	$_SESSION['conn'] = 'admin';
	include './inc/conn.php';
	mysql_query("set names utf8");
	
	
	$sqlcont='select count(*) from content';
	$rescont=mysql_query($sqlcont);
	list($cntcont)=mysql_fetch_row($rescont);
	
	$sqlspk='select count(*) from comment';
	$resspk=mysql_query($sqlspk);
	list($cntspk)=mysql_fetch_row($resspk);
	
	$sqlzan="select sum(zan) as num from content"; 
	$reszan = mysql_query($sqlzan);
	$rowzan = mysql_fetch_array($reszan);
	
	
	
?>