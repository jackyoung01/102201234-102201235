<?php


	
	error_reporting(0);
	session_start();
	$_SESSION['conn'] = 'index';
	include 'inc/conn.php';
	header("Content-type: text/html; charset=utf-8");
	mysql_query("set names utf8");
	
	$id = $_GET[id];
	$from = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
	$_SESSION['token'] = uniqid();
	
	mysql_query("set names utf8");
	$result = mysql_query("SELECT * FROM content where Id ='".$id."'");
	while($row = mysql_fetch_array($result))
	{
	
	if ($row['nm']=='0') {
		$obbrqq="1";
		$tbbrqq="1";
	}elseif($row['nm']=='1') {
		$obbrqq="1";
		$tbbrqq="0";
	}elseif($row['nm']=='2') {
		$obbrqq="0";
		$tbbrqq="1";
	}elseif($row['nm']=='3') {
		$obbrqq="0";
		$tbbrqq="0";
	}
	
	$pagesess = 'page'.getenv("REMOTE_ADDR").date("YmdH");
	if($_SESSION[$ssearsess]){
		$fhlist = $_SESSION[$pagesess];
	}else{
		$fhlist = 'index.php';
	}
	
	$sql = "select * from system";//查询数据库
	$set = mysql_query($sql);
	$result = mysql_fetch_array($set);
	
?>
<?php include './header.php';?>
		<!-- 内容标题 -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title"><?=$row['bbr1']?>的项目卡<span class="foot-right"><span class='badge badge-<?=$row['lx1']?>'><?=$row['lx']?></span></span></h4>
                </div>
            </div>
        </div>     
        <!-- 内容标题 --> 
		<!-- 卡片 -->
		<div class="row">
			<div class="col-sm-12">
				<!-- Profile -->
				<div class="card bg-primary">
					<div class="card-body profile-user-box">
						<div class="row">
						<!-- 卡片1 -->
							<div class="col-sm-6">
								<span class="float-left m-2 mr-4"><img src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $row['qq']?>&spec=100" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
								<div class="media-body">
									<h4 class="mt-1 mb-1 text-white">发布项目者</h4>
									<p class="font-13 text-white-50"><?=$row['bbr1']?></p>

									<ul class="mb-0 list-inline text-light">
										<li class="list-inline-item mr-3">
											<h5 class="mb-1">QQ号</h5>
											<p class="mb-0 font-13 text-white-50">
												<?php
													if ($obbrqq=="1")
													{
														echo $row['qq'];
													}
													else
													{ 
														echo "发布者隐藏了QQ";
													}
												?>
											</p>
										</li>
										<li class="list-inline-item">
											<h5 class="mb-1">留空</h5>
											<p class="mb-0 font-13 text-white-50">待升级</p>
										</li>
									</ul>
								</div> <!-- end media-body-->
							</div> <!-- end col-->
						<!-- 卡片1 -->					
						<!-- 卡片2 -->
							<div class="col-sm-6">
								<span class="float-left m-2 mr-4"><img src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $row['bqq']?>&spec=100" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
								<div class="media-body">

									<h4 class="mt-1 mb-1 text-white">项目名称</h4>
									<p class="font-13 text-white-50"><?=$row['bbr2']?></p>

									<ul class="mb-0 list-inline text-light">
										<li class="list-inline-item mr-3">
											<h5 class="mb-1">项目地址</h5>
											<p class="mb-0 font-13 text-white-50">
												<?php
													if ($tbbrqq=="1")
														{
															echo $row['bqq'];
														}
														else
														{ 
															echo "发布者隐藏了QQ";
														}
												?>  
											</p>
										</li>
										<li class="list-inline-item">
											<h5 class="mb-1">留空</h5>
											<p class="mb-0 font-13 text-white-50">待升级</p>
										</li>
									</ul>
								</div> <!-- end media-body-->
							</div> <!-- end col-->
					<!-- 卡片2 -->
					</div> <!-- end card-body/ profile-user-box-->
				</div><!--end profile/ card -->
			</div> <!-- end col-->
         </div><!-- end row -->
		<!-- 卡片 -->
         </div> 
          
<div class="row">
	<div class="col-md-4">
		<!-- Personal-Information -->
		<div class="card">
			<div class="card-body">
				<h4 class="header-title mt-0 mb-3">项目内容</h4>
				<p class="text-muted font-13">
					<?=$row['cont']?>
				</p>

				<hr>

				<div class="text-left">
					<!--原-->
					<script type="text/javascript" src="assets/js/jquery.min.js" ></script>
						<br>
						<span class="foot-left dianzan" id="dianzan">赞<?=$row['zan']?></span>
						<span class="foot-left">评论<?=$row['comt']?></span>
						<!--
							分享功能将在未来版本中更新
							<a href="javascript:;" class="sharebtn"><span class="foot-right mdi mdi-cards-heart"></span></a>
						-->
						<!--点赞  <a href="javascript:;" class="dza" rel="<?=$row['Id']?>" onclick="dianzan()"><span class="foot-right mdi mdi-cards-heart" id="<?=$row['Id']?>"
						style="color:<?php  /*
							$id = $row['Id'];
							$ip = $_SERVER["REMOTE_ADDR"];
							$sql1 = "select * from handle where cid='$id' and ip='$ip'"; //更新数据
							$result1 = mysql_query($sql1);
							if (mysql_num_rows($result1)) {
								echo "#2B3AF0";
							}
						*/?>;"></span></a>   -->
					<!--点赞-->
					<script type="text/javascript" src="assets/js/dianzan.js" ></script>
					<br>
				</div>
			</div>
		</div>
		<!-- Personal-Information -->

		<!-- Toll free number box-->
		 <!-- end card-->
		<!-- End Toll free number box-->

		<!-- 评论-->
         <div class="card">
			<div class="card-body">
				<h4 class="header-title mb-3">评论</h4>

				<div class="inbox-widget">
                  	<?php
						mysql_query("set names utf8");
						$result1 = mysql_query("SELECT * FROM comment where contid = '".$id."' order by Id asc limit 99999");
						while($row1 = mysql_fetch_array($result1))
						{
				    ?>
					<div class="inbox-item">
						<div class="inbox-item-img"><img src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $row1['plqq']?>&spec=100" class="rounded-circle" alt=""></div>
						<p class="inbox-item-author"><?=$row1['plname']?></p>
						<p class="inbox-item-text"><?=$row1['cont']?></p>
                      	<p class="inbox-item-text"><?=$row1['floor']?>#&nbsp;&nbsp;<?=$row1['pltime']?></p>
					</div>
                  	<?php
					   	}
					?>
				</div> <!-- end inbox-widget -->
			</div> <!-- end card-body-->
		</div> <!-- end card-->

	</div> <!-- end col-->

	<div class="col-md-8">
      	<!-- 站长留言-->
        <div class="card bg-success text-white">
            <div class="card-body">
                <div class="card-widgets">
                    <a href="" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                    <a data-toggle="collapse" href="" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                    <a href="" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                </div>
                <h5 class="card-title mb-0">来自站长的公告</h5>

                <div id="cardCollpase3" class="collapse pt-3 show">
					<?php echo $result['webgg']?>
                </div>
            </div>
        </div>
		<!-- 站长留言-->
        <!-- 图片卡-->
      	<script src="https://api.yum6.cn/ip.php?format=js"></script>
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3"><?=$row['bbr1']?>上传的图卡</h4>
                <div class="table-responsive">
                    <img class="card-img-top" src="<?=$row['syimg']?>">
                    <div class="card-body">
                    <!--  留起来备用
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as
                            a natural lead-in to additional content. This content is a little
                            bit longer.</p>
                    -->
                        <p class="card-text">
                            <small class="text-muted">上传时间:<?=$row['fbtime']?></small>
                        </p>
                    </div>
                </div> <!-- end table responsive-->
            </div> <!-- end col-->
        </div>
        <!-- 图片卡-->
		<!-- 评论框 -->
		<div class="card">
			<div class="card-body">
				<h4 class="header-title mb-3">评论</h4>
				<div class="table-responsive">
               
                <form action="submit.php" method="post" style="margin: 0px;padding: 0px;z-index: 999;">
                    <input name="form" style="display: none;" value="comt" />
                    <input name="token" style="display: none;" value="<?php echo $_SESSION['token']?>" />
                    <input name="from" style="display: none;" value="<?php echo $from;?>" />
                    <input name="floor" style="display: none;" value="<?=$row['comt']?>" />
                    <!-- <input name="plimg" style="display: none;" value="img/head/<?php echo mt_rand(1,21);?>.png" /> -->
                    <input name="contid" style="display: none;" value="<?php echo $_GET['id'];?>" />
                  	<div class="form-group mb-3">	
						<input name="plname" class="form-control" required oninvalid="setCustomValidity('内容不可为空...')" placeholder="你的名字" value="" style="width: 98%;margin-left: 1%;"/>
					</div>
					<div class="form-group mb-3">	
						<input name="plqq" class="form-control" required oninvalid="setCustomValidity('内容不可为空...')" placeholder="你的QQ" value="" style="width: 98%;margin-left: 1%;"/>
					</div>
					<div class="form-group mb-3">	
						<input name="cont" type="text"  onclick="com()" placeholder="快来评论吧..." class="form-control" id="textinput" required oninvalid="setCustomValidity('内容不可为空...')" oninput="setCustomValidity('')" autofocus="" style="width: 98%;margin-left: 1%;"/>
					</div>
                  <!-- 极验 --> 
                    <!-- <div>
                      <div id="embed-captcha" class="form-group mb-3"></div>
                      <p id="wait" class="show">正在加载验证码......</p>
                      <p id="notice" class="hide">请先完成验证</p>
                      <br>
                    </div>		
                  -->
                    <button type="submit" value="发表" id="tijiao" onclick="btndis()" class="btn btn-primary">发表</button>
                </form>  
          
				</div> <!-- end table responsive-->
			</div> <!-- end col-->
		</div> <!-- end row-->
		<!-- 评论框 -->
	</div><!-- end col -->
</div>          
          
          
        <?php
			}
		?>	          
<?php include './plug/geetest/geetest_index.php' ?> <!-- 极验引入 -->
<?php include './footer.php';?>


