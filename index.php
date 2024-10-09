<?php


?>
<?php include './jb.php';?>
<?php include './header.php';?>
	<!-- 内容标题 -->
	<div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<h4 class="page-title">门户首页</h4>
			</div>
		</div>
	</div>     
	<!-- 内容标题 --> 
	<?php include './sql.php' ?>
	<div class="mt-5 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">

					<div class="text-center">
						<img class="rounded-circle shadow" src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $result['zzqq']?>&s=5" height="140" alt="">
						<h3 class="mt-4">站长留下的便签</h3>
					  
						<!-- 便签卡 -->
						<br>
						<div class="row">
							<div class="col-12">
								<div class="card-deck-wrapper">
									<div class="card-deck">
										<div class="card d-block">
											<img class="card-img-top" src="<?php echo $result['gsimg']?>" alt="">
											<div class="card-body">
												<h5 class="card-title"><?php echo $result['gsbt']?></h5>
												<p class="card-text"><?php echo $result['webgg']?></p>
												<p class="card-text">
													<small class="text-muted">发布时间：<?php echo $result['gstime']?></small>
												</p>
											</div>
										</div> <!-- end card-->
									</div> <!-- end card-deck-->
								</div> <!-- end card-deck-wrapper-->
							</div> <!-- end col-->
						</div>
						<!-- 便签卡 -->
					  
						<div class="row mt-5">
							<div class="col-md-4">
								<div class="text-center mt-3 pl-1 pr-1">
									<i class="mdi mdi-heart-box bg-primary maintenance-icon text-white mb-2"></i>
									<h5 class="text-uppercase"><?php echo $cntcont;?>张</h5>
									<p class="text-muted">项目总数</p>
								</div>
							</div> <!-- end col-->
							<div class="col-md-4">
								<div class="text-center mt-3 pl-1 pr-1">
									<i class="mdi mdi-tooltip-text bg-primary maintenance-icon text-white mb-2"></i>
									<h5 class="text-uppercase"><?php echo $cntspk;?>条</h5>
									<p class="text-muted">评论总数</p>
								</div>
							</div> <!-- end col-->
							<div class="col-md-4">
								<div class="text-center mt-3 pl-1 pr-1">
									<i class="mdi mdi-thumb-up  bg-primary maintenance-icon text-white mb-2"></i>
									<h5 class="text-uppercase"><?php echo $rowzan[0];?>个</h5>
									<p class="text-muted">点赞总数</p>
								</div>
							</div> <!-- end col-->
						</div> <!-- end row-->
					</div> <!-- end /.text-center-->

				</div> <!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>
	<!-- end page -->

<?php include './footer.php';?>