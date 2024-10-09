<?php

//http://www.xmpan.com

//http://www.xmpan.com
?>
<?php include './header.php'; ?>

<!-- 内容标题 -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">内容管理</h4>
    </div>
  </div>
</div>     
<!-- 内容标题 --> 

<!-- 名片 --> 
<div class="row">

	<!-- 脚本 -->
	<?php
		$perNumber = 16; //每页显示记录数
		$page = $_GET['page']; //获得当前页面值
		$count1 = mysql_query("select count(*) from content"); //获得记录总数
		$rs = mysql_fetch_array($count1);
		$totalNumber = $rs[0];

		$totalPage = ceil($totalNumber/$perNumber);
		if (!isset($page)) {
			$page = 1;
		}
		$startCount = ($page-1)*$perNumber;
		$result = mysql_query("select * from content order by id desc limit $startCount,$perNumber"); //根据前面计算出开始记录和记录数
		while ($row=mysql_fetch_array($result))
		{
	?>
	<!-- 脚本 -->
					
<div class="col-md-6 col-lg-3">
	<div class="card d-block">
		<img class="card-img-top" src="<?=$row['img']?>" alt="">
		<div class="card-body">
			<h5 class="card-title"><?=$row['bbr1']?> 的项目名 <?=$row['bbr2']?><span class="foot-right"><span class='badge badge-<?=$row['lx1']?>'><?=$row['lx']?></span></span></h5>
			<p class="card-text">内容: <?=$row['cont']?><br>日期: <?=$row['fbtime']?><br>项目人QQ: <?=$row['qq']?><br>项目地址: <?=$row['bqq']?><br>IP:<?=$row['ip']?></p>
			<span class="foot-left"><p>赞: <?=$row['zan']?>评: <?=$row['comt']?><a target="_blank" href="../cont.php?id=<?=$row['Id']?>">前台查看</a></p></span>
			<span class="foot-right"><a href="del.php?from=cont&id=<?=$row['Id']?>"><i class="mdi mdi-delete"></i></a></span>
		</div> <!-- end card-body-->
      <br>
	</div> <!-- end card-->
</div><!-- end col -->
                                                                                                         
	<?php
	   }
  ?>
</div>		
<!-- 名片 --> 
<div class="pagination pagination-rounded">
	<li class="page-item"><a class="page-link" href="cont.php?page=1">首页</a></li>
	<li class="page-item"><a class="page-link" id="pagebtn-s" href="cont.php?page=<?php echo $page - 1;?>">上页</a></li>
	<li class="page-item"><a class="page-link"><?php echo $page ?>/<?php echo $totalPage ?></a></li>
	<li class="page-item"><a class="page-link" id="pagebtn-x" href="cont.php?page=<?php echo $page + 1;?>">下页</a></li>
	<li class="page-item"><a class="page-link" href="cont.php?page=<?php echo $totalPage;?>">尾页</a></li>
</div>	

<?php include './footer.php'; ?>