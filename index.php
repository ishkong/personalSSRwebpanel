<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="cn">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>SWEB管理面板 - 首页</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="./assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="./assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="./assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="./assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="./assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="./assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="./assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="./assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->

		</head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
		<!--PHP LOAD JSON--!>
		<?PHP
		$json_string = file_get_contents('shadowsocks.json');
		$data = json_decode($json_string, true);
		$myip = $_SERVER['SERVER_ADDR'];
		?>
		<!--PHP END--!>
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.php">SWEB管理面板</a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
						 <div class="page-actions">
                    <div class="btn-group">
                        <button type="button" class="btn btn-circle btn-outline red dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-plus"></i>&nbsp;
                            <span class="hidden-sm hidden-xs">菜单&nbsp;</span>&nbsp;
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="server.php?action=start">
                                    <i class="icon-docs"></i> 启动SSR服务 </a>
                            </li>
                            <li>
                                <a href="server.php?action=stop">
                                    <i class="icon-tag"></i> 停止SSR服务 </a>
                            </li>
                            <li>
                                <a href="server.php?action=restart">
                                    <i class="icon-share"></i> 重启SSR服务 </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="https://github.com/ishkong/SWEB">
                                    <i class="icon-flag"></i> 关于我们
                                </a>
                            </li>
                            <li>
                                <a href="support.html">
                                    <i class="icon-users"></i> 赞助
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="index.php" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">服务信息</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="log.php" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">运行日志</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="panel.php" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">面板信息</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="setting.php" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">SSR设置</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="app.html" class="nav-link nav-toggle">
                                <i class="icon-bulb"></i>
                                <span class="title">软件下载</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel">
                        <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
                            <i class="icon-settings"></i>
                        </div>
                        <div class="toggler-close">
                            <i class="icon-close"></i>
                        </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-small">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-small">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-small">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style</span>
                                <select class="sidebar-style-option form-control input-small">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="compact">Compact</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-small">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-small">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <h3 class="page-title"> 面板信息&nbsp;&nbsp;&nbsp;
                        <small><strong>服务状态:&nbsp;&nbsp;&nbsp;</strong>此处添加运行状态</small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>面板信息</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-bubbles font-red"></i>
                                        <span class="caption-subject font-red bold uppercase">信息</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#portlet_comments_1" data-toggle="tab"> 具体 </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_comments_1">
                                            <!-- BEGIN: Comments -->
                                            <div class="mt-comments">
                                                <div class="mt-comment">
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">服务器IP</span>
                                                        </div>
                                                        <div class="mt-comment-text"><?php echo $myip ?></div>
                                                    </div>
                                                </div>
                                                <div class="mt-comment">
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">端口</span>
                                                        </div>
                                                        <div class="mt-comment-text"><?php echo $data[server_port];?></div>
                                                    </div>
                                                </div>
                                                <div class="mt-comment">
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">连接密码</span>
                                                        </div>
                                                        <div class="mt-comment-text"><?php echo $data[password];?></div>
                                                    </div>
                                                </div>
                                                <div class="mt-comment">
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">加密方式</span>
                                                        </div>
                                                        <div class="mt-comment-text"><?php echo $data[password];?></div>
                                                    </div>
                                                </div>
												<div class="mt-comment">
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">协议</span>
                                                        </div>
                                                        <div class="mt-comment-text"><?php echo $data[protocol];?></div>
                                                    </div>
                                                </div>
												<div class="mt-comment">
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">混淆</span>
                                                        </div>
                                                        <div class="mt-comment-text"><?php echo $data[obfs];?></div>
                                                    </div>
                                                </div>
												<div class="mt-comment">
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">单线程限速</span>
                                                        </div>
                                                        <div class="mt-comment-text"><?php echo $data[speed_limit_per_con];?>kb/s</div>
                                                    </div>
                                                </div>
												<div class="mt-comment">
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">端口总限速</span>
                                                        </div>
                                                        <div class="mt-comment-text"><?php echo $data[speed_limit_per_user];?>kb/s</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END: Comments -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class=" icon-social-twitter font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">提示</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_actions_pending" data-toggle="tab"> 信息 </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_actions_pending">
                                            <!-- BEGIN: Actions -->
                                            <div class="mt-actions">
                                                <div class="mt-action">
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-magnet"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">1</span>
                                                                    <p class="mt-action-desc">协议与混淆不支持兼容模式，请严格按照网页上的配置来填写！</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-action">
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class=" icon-bubbles"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">2</span>
                                                                    <p class="mt-action-desc">如需使用原版Shadowsocks程序连接，请将协议设置为origin,混淆设置为plain。</p>
                                                                </div>
                                                            </div>                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-action">
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-call-in"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">3</span>
                                                                    <p class="mt-action-desc">单线程限速只每一个建立的链接进行限速，值为 0 时表示不限速。</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-action">
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class=" icon-bell"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">4</span>
                                                                    <p class="mt-action-desc">端口总限速为对整个端口的传输进行限速，值为 0 时表示不限速.</p>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-action">
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-magnet"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">5</span>
                                                                    <p class="mt-action-desc">限速不一定准确，会在速度限值左右波动。</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-action">
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-magnet"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">6</span>
                                                                    <p class="mt-action-desc">功能未完成。</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END: Actions -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-blue"></i>
                                        <span class="caption-subject font-blue bold uppercase">SSR链接</span>
                                    </div>
                                </div>
								<a>此处添加运行状态</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light tasks-widget ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-green-haze hide"></i>
                                        <span class="caption-subject font-green bold uppercase">二维码</span>
                                    </div>
                                </div>
								<img src="http://qr.liantu.com/api.php?&w=150?&text=此处添加运行状态"/>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> Copyright © <a href="https://www.shkong.cc/" target="_blank">Shkong</a>. All rights reserved.</div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="./assets/global/plugins/respond.min.js"></script>
<script src="./assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="./assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="./assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="./assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="./assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="./assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
        <script src="./assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
        <script src="./assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>