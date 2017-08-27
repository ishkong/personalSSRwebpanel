<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="cn">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>PSWP管理面板 - 服务设置</title>
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
		$json_string = file_get_contents('/etc/shadowsocks.json');
		$data = json_decode($json_string, true);
		?>
		<!--PHP END--!>
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="./assets/layouts/layout2/img/logo-default.png" alt="logo" class="logo-default" /> </a>
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
                        <li class="nav-item ">
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
                        <li class="nav-item  start active open">
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
                    <h3 class="page-title"> SSR设置
                        <small>在这里修改SSR的设置</small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>SSR设置</span>
                            </li>
                        </ul>	
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12 ">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> 修改</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form" action='set.php' method='post'>
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                <input type="number" class="form-control" id="setport" placeholder="<?php echo $data[server_port];?>">
                                                <label for="form_control_1">端口号</label>
                                                <span class="help-block">1-65535</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="password" class="form-control" id="setpassword" placeholder="<?php echo $data[password];?>">
                                                <label for="form_control_1">连接密码</label>
                                                
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="number" class="form-control" id="setspeed_limit_per_con" placeholder="<?php echo $data[speed_limit_per_con];?>">
                                                <label for="form_control_1">单线程限速:</label>
												<span class="help-block">0为无限制</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="number" class="form-control" id="setspeed_limit_per_user" placeholder="<?php echo $data[speed_limit_per_user];?>">
                                                <label for="form_control_1">总端口限速:</label>
												<span class="help-block">0为无限制</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="setprotocol_param" placeholder="">
                                                <label for="form_control_1">协议参数:</label>
												<span class="help-block">如果不懂，请保留为空</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="setobfs_param" placeholder="">
                                                <label for="form_control_1">混淆参数:</label>
												<span class="help-block">如果不懂，请保留为空</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <select class="form-control" id="setmethod">
                                                    <option value="none">none</option>
                                                    <option value="aes-256-cfb">aes-256-cfb</option>
                                                    <option value="aes-192-cfb">aes-192-cfb</option>
                                                    <option value="aes-128-cfb">aes-128-cfb</option>
													<option value="aes-256-cfb8">aes-256-cfb8</option>
													<option value="aes-192-cfb8">aes-192-cfb8</option>
													<option value="aes-128-cfb8">aes-128-cfb8</option>
													<option value="aes-256-ctr">aes-256-ctr</option>
													<option value="aes-192-ctr">aes-192-ctr</option>
													<option value="aes-128-ctr">aes-128-ctr</option>
													<option value="chacha20-ietf">chacha20-ietf</option>
													<option value="chacha20">chacha20</option>
													<option value="rc4-md5">rc4-md5</option>
													<option value="rc4-md5-6">rc4-md5-6</option>
                                                </select>
                                                <label for="setmethod">加密方式</label>
												<span class="help-block">当前选用的加密方式为：<?php echo $data[method];?></span>
                                            </div>
											<div class="form-group form-md-line-input">
                                                <select class="form-control" id="setprotocol">
                                                    <option value="origin">origin</option>
                                                    <option value="verify_deflate">verify_deflate</option>
                                                    <option value="auth_sha1_v4">auth_sha1_v4</option>
                                                    <option value="auth_sha1_v4_compatible">auth_sha1_v4_compatible</option>
													<option value="auth_aes128_md5">auth_aes128_md5</option>
													<option value="auth_aes128_sha1">auth_aes128_sha1</option>
													<option value="auth_chain_a">auth_chain_a(加密方式请选 none)</option>
													<option value="auth_chain_b">auth_chain_b(加密方式请选 none)</option>
                                                </select>
                                                <label for="setprotocol">协议方式</label>
												<span class="help-block">当前选用的协议方式为：<?php echo $data[protocol];?></span>
                                            </div>
											<div class="form-group form-md-line-input">
                                                <select class="form-control" id="setobfs">
                                                    <option value="plain">plain</option>
                                                    <option value="http_simple">http_simple</option>
                                                    <option value="http_post">http_post</option>
                                                    <option value="tls1.2_ticket_auth">tls1.2_ticket_auth</option>
													<option value="tls1.2_ticket_fastauth">tls1.2_ticket_fastauth</option>
													<option value="http_post_compatible">http_post_compatible</option>
													<option value="tls1.2_ticket_auth_compatible">tls1.2_ticket_auth_compatible</option>
													<option value="tls1.2_ticket_fastauth_compatible">tls1.2_ticket_fastauth_compatible</option>
                                                </select>
                                                <label for="setobfs">混淆方式</label>
												<span class="help-block">当前选用的混淆方式为：<?php echo $data[obfs];?></span>
                                            </div>
                                        </div>
                                        <div class="form-actions noborder">
                                            <input type="Submit" class="btn blue"></button>
                                            <input type="reset" class="btn default"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="./assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="./assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
        <script src="./assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
        <script src="./assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
