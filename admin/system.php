<?php

//http://www.xmpan.com

//http://www.xmpan.com
?>
<?php include 'header.php'; ?>
<!-- 内容标题 -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">系统管理</h4>
    </div>
  </div>
</div>     
<!-- 内容标题 --> 

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">

             	<form action="submit.php" method="post">
                <?php
                mysql_query("set names utf8");
                $sql = "select * from system";//查询数据库
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                ?>
                <input value="system" name="from" style="display: none;"/>
                  <button type="button" class="btn btn-block btn-sm btn-info">基本管理</button>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4" class="col-form-label">网站标题</label>
                      <input value="<?=$row['title']?>" name="title"type="text" class="form-control" id="inputEmail4" placeholder="网站标题...">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4" class="col-form-label">小标题</label>
                      <input value="<?=$row['title2']?>" name="title2" type="text" class="form-control" id="inputPassword4" placeholder="小标题...">
                    </div>
                  </div>

                  <div class="form-group">
						<label for="inputAddress" class="col-form-label">网站域名</label>
						<input value="<?=$row['weburl']?>" name="weburl"  type="text" class="form-control" id="inputAddress" placeholder="http://www.pullba.xyz">
					</div>
                  
					<div class="form-group">
						<label for="inputAddress" class="col-form-label">关键词</label>
						<input value="<?=$row['webkey']?>" name="webkey" type="text" class="form-control" id="inputAddress" placeholder="关键词...">
					</div>

					<div class="form-group">
						<label for="inputAddress2" class="col-form-label">网站描述</label>
						<input value="<?=$row['webdes']?>" name="webdes" type="text" class="form-control" id="inputAddress2" placeholder="网站描述...">
					</div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4" class="col-form-label">站长QQ</label>
                        <input value="<?=$row['zzqq']?>" name="zzqq"type="text" class="form-control" id="inputEmail4" placeholder="站长QQ...">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4" class="col-form-label">客服QQ</label>
                        <input value="<?=$row['kfqq']?>" name="kfqq" type="text" class="form-control" id="inputPassword4" placeholder="客服QQ...">
                      </div>
                    </div>
                  
					<div class="form-group">
						<label for="inputAddress2" class="col-form-label">底部版权</label>
						<input value="<?=$row['footer']?>" name="footer" type="text" class="form-control" id="inputAddress2" placeholder="底部版权...">
					</div>
                  
                    <div class="form-group mb-3">
                        <label for="example-textarea">友情链接</label>
                        <textarea name="yqlj" class="form-control" id="inputAddress2" rows="5"><?=$row['yqlj']?></textarea>
                    </div>
                  	
                  	<br>
                  
					<button type="button" class="btn btn-block btn-sm btn-info">便签管理</button>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4" class="col-form-label">便签标题</label>
							<input value="<?=$row['gsbt']?>" name="gsbt"type="text" class="form-control" id="inputEmail4" placeholder="便签标题...">
						</div>
<!--
						<div class="form-group col-md-6">
                          <label for="inputEmail4" class="col-form-label">发布时间</label>
                          <input value="<?=$row['gstime']?>" name="gstime" type="text" class="form-control" id="datetimepicker5" data-toggle="datetimepicker" placeholder="发布时间..." data-target="#datetimepicker5"/>
                          <script type="text/javascript">
                            $(function () {
                              $('#datetimepicker5').datetimepicker();
                            });
                          </script>
						</div>
-->
						<div class="form-group col-md-6">
						<!-- 时间选择器 -->
                          <label for="inputEmail4" class="col-form-label">发布时间</label>
                          <input value="<?=$row['gstime']?>" name="gstime" type="text" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true" placeholder="发布时间..." data-target="#datetimepicker5"/>
						<!-- 时间选择器 -->
						</div>
					</div>
					
                  
					<div class="form-group">
						<label for="inputAddress2" class="col-form-label">便签配图URL</label>
						<input value="<?=$row['gsimg']?>" name="gsimg" type="text" class="form-control" id="inputAddress2" placeholder="http://xxx.xxx.xxx/jpg.jpg...">
                      	<?php include './tc1.php';?>
					</div>
                  
                    <div class="form-group mb-3">
                        <label for="example-textarea">网站公告</label>
                        <textarea name="webgg" class="form-control" id="example-textarea" rows="5"><?=$row['webgg']?></textarea>
                    </div>
                  
						<?php
							}
						?>
					<button type="submit" class="btn btn-primary">修 改</button>

				</form>

			</div> <!-- end card-body -->
		</div> <!-- end card-->
	</div> <!-- end col -->
</div>
<!-- 引入时间选择插件 -->
<?php include '../plug/time-selection/demo.php';?>
<?php include 'footer.php'; ?>