<?php include './txtz.php';?>
<?php


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width">
        <title><?php echo $result['title'];?>丨<?php echo $result['title2'];?></title>
		<meta name="keywords" content="<?php echo $result['webkey'];?>">
		<meta name="description" content="<?php echo $result['webdes'];?>">
		<meta itemprop="name" content="<?php echo $result['title']?>丨<?php echo $result['title2']?>">  
        <!-- App favicon -->
        <link rel="shortcut icon" href="./favicon.ico">

        <!-- App css -->
        <!-- build:css -->
		<meta name=”referrer” content=”no-referrer” />
        <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" />
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
								<img src="./assets/htmlimg/logo.png" style="font-size:80px"></h1>
                        </span>
                        <span class="logo-sm">
                            <img src="./assets/htmlimg/logo_sm.png" alt="" height="16">
                        </span>
                    </a>

                    <!--- 导航 -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">导航</li>

                        <li class="side-nav-item">
                            <a href="./index.php" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">公告</span>
                                <span> 门户首页 </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="" class="side-nav-link">
                                <i class="dripicons-list"></i>
                                <span> 项目墙 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="./bbq.php">项目墙</a>
                                </li>
                                <li>
                                    <a href="./bbk.php">发布项目</a>
                                </li>
                                <li>
                                    <a href="/chating/creat.php">在线交流</a>
                                </li>
                              
                                <li style="display:none">
                                    <a href="./"></a>
                                </li>
                                <li style="display:none">
                                    <a href="./cont.php"></a>
                                </li>
                                <li style="display:none">
                                    <a href="./index.php"></a>
                                </li>
                            </ul>
                        </li>
<!--
                        <li class="side-nav-item">
                            <a href="" class="side-nav-link">
                                <i class="dripicons-rocket"></i>
                                <span> 管理员后台 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="./admin/index.php">进入后台</a>
                                <li style="display:none">
                                    <a href="./bbq.php"></a>
                                </li>
                                <li style="display:none">
                                    <a href="./bbk.php"></a>
                                </li>
                                <li style="display:none">
                                    <a href="./"></a>
                                </li>
                                <li style="display:none">
                                    <a href="./cont.php"></a>
                                </li>
                                <li style="display:none">
                                    <a href="./index.php"></a>
                                </li>
                                <li style="display:none">
                                    <a href="./help.php"></a>
                                <li style="display:none">
                                    <a href="./nmbbk.php"></a>
                                </li>
                                </li>
                            </ul>
                        </li>
-->
                    </ul>
                  
                    <!-- Help Box -->
                    <div class="help-box text-center text-white">
                        <a href="" class="float-right close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="./assets/htmlimg/help-icon.svg" height="90" alt="" />
                        <h5 class="mt-3">遇到问题?</h5>
                        <p class="mb-3">点击下面按钮联系客服</p>
                        <a href="tencent://Message/?Uin=<?php echo $result['kfqq'];?>&amp;websiteName=q-zone.qq.com&amp;Menu=yes" class="btn btn-outline-light btn-sm">联系我</a>
                    </div>
                    <!-- end Help Box -->
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