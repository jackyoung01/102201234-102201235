<?php


?>
<?php include './jb.php';?>
<?php include './header.php';?>
		<!-- 内容标题 -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">项目墙</h4>
                </div>
            </div>
        </div>     
        <!-- 内容标题 --> 
		
		
		<!-- 名片 --> 
		<div class="row">
		
			<!-- 脚本 -->
			<?php
				$perNumber = 8; //每页显示记录数
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
                              <a href="cont.php?id=<?=$row['Id']?>">
                                <div class="card d-block">
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$row['bbr1']?>的项目卡<span class="foot-right"><span class='badge badge-<?=$row['lx1']?>'><?=$row['lx']?></span></span></h5>
                                        <h6 class="card-subtitle text-muted"><?=$row['bbr1']?> 项目 <?=$row['bbr2']?></h6>
                                    </div>
                                    <img class="img-fluid" src="<?=$row['img']?>" alt="">
                                    <div class="card-body">
										<p class="card-text"><?=$row['cont']?></p>	
                                      	<!--原-->
										<script type="text/javascript" src="assets/js/jquery.min.js" ></script>
                                      		<br>
                                            <span class="foot-left dianzan" id="dianzan">赞<?=$row['zan']?></span>
                                            <span class="foot-left">评论<?=$row['comt']?></span>
                                            <!--
                                                分享功能将在未来版本中更新
                                                <a href="javascript:;" class="sharebtn"><span class="foot-right mdi mdi-cards-heart"></span></a>
                                            -->
                                            <!--评论--><a href="cont.php?id=<?=$row['Id']?>"><span class="foot-right mdi mdi-comment-multiple"></span></a><!--评论-->
                                            <!--点赞-->
                                     <!--<a href="javascript:;" class="dza" rel="<?=$row['Id']?>" onclick="dianzan()"><span class="foot-right mdi mdi-cards-heart" id="<?=$row['Id']?>"
                                            style="color: <?php
                                                /*  $id = $row['Id'];
                                                $ip = $_SERVER["REMOTE_ADDR"];
                                                $sql1 = "select * from handle where cid='$id' and ip='$ip'"; //更新数据
                                                $result1 = mysql_query($sql1);
                                                if (mysql_num_rows($result1)) {
                                                    echo "#2B3AF0";
                                                }*/
                                            ?>;"></span></a>
-->
										<!--点赞-->
                                      <br>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                                </a>
                            </div><!-- end col -->
							<script type="text/javascript" src="assets/js/dianzan.js" ></script>
			<?php
			   }
          ?>
		</div>		
        <!-- 名片 --> 
			<div class="pagination justify-content-center" >
				<li class="page-item"><a class="page-link" href="bbq.php?page=1">首页</a></li>
				<li class="page-item"><a class="page-link" id="pagebtn-s" href="bbq.php?page=<?php echo $page - 1;?>">上页</a></li>
				<li class="page-item"><a class="page-link"><?php echo $page ?>/<?php echo $totalPage ?></a></li>
				<li class="page-item"><a class="page-link" id="pagebtn-x" href="bbq.php?page=<?php echo $page + 1;?>">下页</a></li>
				<li class="page-item"><a class="page-link" href="bbq.php?page=<?php echo $totalPage;?>">尾页</a></li>
			</div>		
		
<?php include './jb.php';?>
					</div> <!-- container -->

                </div> <!-- content -->

                <!-- 页脚 -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                版权所有 © <?php echo $result['footer'];?>
                            </div>
                          
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
									友情链接:<?php echo $result['yqlj'];?>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- 页脚 -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- App js -->
        <script src="./assets/javascript/app.min.js"></script>
    </body>
</html>
