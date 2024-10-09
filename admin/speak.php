<?php

//http://www.xmpan.com

//http://www.xmpan.com
?>
<?php include './header.php'; ?>
<!-- 内容标题 -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">评论管理</h4>
    </div>
  </div>
</div>     

<!-- 列表 --> 
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">

				<div class="table-responsive-sm">
					<table class="table table-bordered table-centered mb-0">
						<thead>
							<tr>
								<th>楼数</th>
								<th>名字</th>
								<th> Q Q</th>
								<th>内容</th>
								<th>时间</th>
                              	<th>I P</th>
								<th class="text-center">管理</th>
							</tr>
						</thead>
						<tbody>
							<!-- 循环开始 -->
							
							<?php
								$perNumber = 16; //每页显示记录数
								$page = $_GET['page']; //获得当前页面值
								$count1 = mysql_query("select count(*) from comment"); //获得记录总数
								$rs = mysql_fetch_array($count1);
								$totalNumber = $rs[0];
				
								$totalPage = ceil($totalNumber/$perNumber);
								if (!isset($page)) {
									$page = 1;
								}
								$startCount = ($page-1)*$perNumber;
								$result = mysql_query("select * from comment order by id desc limit $startCount,$perNumber"); //根据前面计算出开始记录和记录数
								while ($row=mysql_fetch_array($result))
								{
							?>
							
							<tr>
								<td><a target="_blank" href="../cont.php?id=<?=$row['contid']?>"><?=$row['floor']?>楼</a></td>
								<td class="table-user">
									<img src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?=$row['plqq']?>&spec=100" alt="" "=" class="mr-2 rounded-circle"><?=$row['plname']?>
								</td>
								<td><?=$row['plqq']?></td>
								<td><?=$row['cont']?></td>
								<td><?=$row['pltime']?></td>
                              	<td><?=$row['ip']?></td>
								<td class="table-action text-center">
									<a href="del.php?from=speak&id=<?=$row['Id']?>" class="action-icon"> <i class="mdi mdi-delete"></i></a>
								</td>
							</tr>
							
							<?php
							   }
							?>
							
							<!-- 循环结束 -->
						</tbody>
					</table>
				</div>
			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>

<div class="pagination pagination-rounded">
	<li class="page-item"><a class="page-link" href="speak.php?page=1">首页</a></li>
	<li class="page-item"><a class="page-link" id="pagebtn-s" href="speak.php?page=<?php echo $page - 1;?>">上页</a></li>
	<li class="page-item"><a class="page-link"><?php echo $page ?>/<?php echo $totalPage ?></a></li>
	<li class="page-item"><a class="page-link" id="pagebtn-x" href="speak.php?page=<?php echo $page + 1;?>">下页</a></li>
	<li class="page-item"><a class="page-link" href="speak.php?page=<?php echo $totalPage;?>">尾页</a></li>
</div>	
                                                                                            
<?php include './footer.php'; ?>