<?php

//http://www.xmpan.com

//http://www.xmpan.com

	error_reporting(0);
	session_start();
	$_SESSION['conn'] = 'admin';
	include '../inc/conn.php';
	mysql_query("set names utf8");
	
	$username = $_POST['username'];//获取登录表单信息
	$password = md5($_POST['password']);//获取登录表单信息
	$sql = "select * from admin where user = '".$username."'";//查询数据库
	$set = mysql_query($sql);
	$result = mysql_fetch_array($set);
	if($result[pass] == $password){
		$_SESSION['login'] = $username;
		echo "<script>location.href='index.php';</script>";
	}
	mysql_close($con); //关闭数据库连接
?>
<?php include '../jb.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>登录丨<?php echo $result['title'];?>管理系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../favicon.ico">

        <!-- App css -->
        <!-- build:css -->
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- endbuild -->
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css"/>
    </head>

    <body class="authentication-bg">
      
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <span class="logo-lg">
                                        <h1 class="mdi mdi-heart-pulse" style="font-size:80px"></h1>
                                </span>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">登录管理后台</h4>
                                      <!-- ip定位 -->
                                      <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>  
                                      <!-- ip定位 -->
                                    <p class="text-muted mb-4">已保存来访记录<script type="text/javascript">document.write(returnCitySN["cip"]+','+returnCitySN["cname"])</script> </p>
                                </div>

                                <form method="post" action="#">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">账号</label>
                                        <input class="form-control" type="text" name="username" placeholder="请输入管理员账号...">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">密码</label>
                                        <input class="form-control" type="password" name="password" placeholder="请输入管理员密码..." >
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">长期登录</label>
                                        </div>
                                    </div>
                                 
                                  
                                  
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" id="embed-submit" type="submit"> 登 录 </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
        <footer class="footer footer-alt">
            版权所有 © <?php echo $result['footer'];?>
        </footer>

        <!-- App js -->
     	<?php include '../plug/geetest/geetest_admin.php' ?> <!-- 极验引入 -->
        <script src="../assets/javascript/app.min.js"></script>
    </body>
</html>
