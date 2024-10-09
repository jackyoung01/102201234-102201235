<?php

//http://www.x6d.com

//http://www.x6d.com
?>
<?php include './header.php'; ?>
<!-- 内容标题 -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">后台首页</h4>
    </div>
  </div>
</div>     
<!-- 内容标题 --> 

<div class="row">
	<div class="col-md-4">
		<!-- Personal-Information -->
		<div class="card">
			<div class="card-body">
				<h4 class="header-title mt-0 mb-3">系统详情卡</h4>
				

				<hr>

				<div class="text-left">


					<p class="text-muted"><strong>系统版本 :</strong>
						<span class="ml-2"> V1.0 </span>
					</p>

				</div>
			</div>
		</div>
		<!-- Personal-Information -->
	</div> <!-- end col-->

	<div class="col-md-8">	
		<!-- End Chart-->

		<div class="row">
			<div class="col-sm-4">
				<div class="card tilebox-one">
					<div class="card-body">
						<i class="mdi mdi-heart-box float-right text-muted"></i>
						<h6 class="text-muted text-uppercase mt-0">表白卡总数</h6>
						<h2 class="m-b-20"><?php echo $cntcont;?>张</h2>
					</div> <!-- end card-body-->
				</div> <!--end card-->
			</div><!-- end col -->

			<div class="col-sm-4">
				<div class="card tilebox-one">
					<div class="card-body">
						<i class="mdi mdi-tooltip-text float-right text-muted"></i>
						<h6 class="text-muted text-uppercase mt-0">评论总数</h6>
						<h2 class="m-b-20"><?php echo $cntspk;?>条</h2>
					</div> <!-- end card-body-->
				</div> <!--end card-->
			</div><!-- end col -->

			<div class="col-sm-4">
				<div class="card tilebox-one">
					<div class="card-body">
						<i class="mdi mdi-thumb-up float-right text-muted"></i>
						<h6 class="text-muted text-uppercase mt-0">点赞总数</h6>
						<h2 class="m-b-20"><?php echo $rowzan[0];?>个</h2>
					</div> <!-- end card-body-->
				</div> <!--end card-->
			</div><!-- end col -->

		</div>
		<!-- end row -->
		 <!-- end row-->
	</div>
	<!-- end col -->
</div>

<?php include './footer.php'; ?>