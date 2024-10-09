<?php
//版本V1.0

//http://www.xmpan.com

//http://www.xmpan.com
?>
<?php include './jb.php'; ?>
<?php include '../jb.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width">        <title><?php echo $result['title'];?>丨<?php echo $result['title2'];?></title>
		<meta name="keywords" content="<?php echo $result['webkey'];?>">
		<meta name="description" content="<?php echo $result['webdes'];?>">
		<meta itemprop="name" content="<?php echo $result['title']?>丨<?php echo $result['title2']?>">  
        <!-- App favicon -->
        <link rel="shortcut icon" href="../favicon.ico">

        <!-- App css -->
        <!-- build:css -->
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- endbuild -->
      
        <!-- css -->
        <style type="text/css">
        .foot-left{
            float: left;
            font-size: 12px;
            margin-left: 10px;
            margin-top: 6px;
            font-family: "微软雅黑";
            font-weight: bold;
        }
        .foot-right{
            float: right;
            font-size: 14px;
            margin-right: 10px;
            margin-top: 6px;
        }
        </style>
        <!-- css -->
    </head>

    <body>

        <!-- 侧栏 -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO图标 -->
					<a class="logo text-center mb-4 active">
                        <span class="logo-lg">
								<h1 class="mdi mdi-heart-pulse" style="font-size:80px"></h1>
                        </span>
                        <span class="logo-sm">
                            <img src="../assets/htmlimg/logo_sm.png" alt="" height="16">
                        </span>
                    </a>

                    <!--- 导航 -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">管理员导航</li>

                        <li class="side-nav-item">
                            <a href="./index.php" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> 后台首页 </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="" class="side-nav-link">
                                <i class="dripicons-list"></i>
                                <span> 管理 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li style="display:none">
                                    <a href="./index.php"></a>
                                </li>
                                <li>
                                    <a href="./cont.php">内容管理</a>
                                </li>
                                <li>
                                  	<a href="./speak.php">评论管理</a>
                                </li>
                                <li>
                                    <a href="./system.php">系统管理</a>
                                </li>
                                <li>
                                    <a href="./password.php">密码修改</a>
                                </li>
                            </ul>
                        </li>
                      
                        <li class="side-nav-item">
                          <a href="../index.php" class="side-nav-link">
                            <input type="submit" class="btn btn-warning btn-rounded" style="width:100%" value="返回主站">
                          </a>
                        </li> 

    					<li class="side-nav-item">
                            <a href="" class="side-nav-link">
                              <!--退出-->    
                              <?php
                                  $a=$_REQUEST["a"];
                                  if ($a=="off")
                                  {
                                      unset ($_SESSION['login']);
                                      header('Location:login.php');
                                  }
                              ?>			
                              <form method="post" action="">
                                <input type="submit" class="btn btn-danger btn-rounded" style="width:100%" href="#" value="登出后台">
                                <input name="a" type="hidden" id="a" value="off" style="display: none;width: 0px;height: 0px;" />
                              </form>
                              <!--退出-->  
                            </a>
                          </li> 
                                       
                    </ul>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- 导航 -->

            </div>
            <!-- 侧栏 -->

            <!-- ============================================================== -->
            <!-- 分界线 -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- 顶栏 -->
                    <div class="navbar-custom">
                      
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a href="" class="nav-link right-bar-toggle mr-0">
                                        <!-- ip定位 -->
                                  已保存来访记录
                                  <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>  
                                  <script type="text/javascript">document.write(returnCitySN["cip"]+','+returnCitySN["cname"])</script>    
                                        <!-- ip定位 -->
                                </a>
                            </li>
                        </ul>
                      
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">搜索</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <!-- 顶栏 -->

                    <!-- Start Content-->
                    <div class="container-fluid">
						<!-- 头部引入页面-->