<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title> 博客后台</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/back/css/bootstrap.min.css" rel="stylesheet">
    <link href="/back/css/font-awesome.min.css" rel="stylesheet">
    <link href="/back/css/animate.css" rel="stylesheet">
    <link href="/back/css/style.css" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
@include('admin.layouts.leftNav')
<!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li><a href="/"><i class="fa fa-home"></i></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-sign-out"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href=""
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    登出
                                </a>

                                <form id="logout-form" action="/admin/logout" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row J_mainContent" id="content-main">
            {{--右侧主体部分框架--}}
            <iframe id="J_iframe" width="100%" height="100%" src="/admin/index" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
    </div>
    <!--右侧部分结束-->
</div>

<!-- 全局js -->
<script src="/back/js/jquery.min.js?v=2.1.4"></script>
<script src="/back/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/back/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/back/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/back/js/plugins/layer/layer.min.js"></script>

<!-- 自定义js -->
<script src="/back/js/hAdmin.js"></script>
<script type="text/javascript" src="/back/js/index.js"></script>

<!-- 第三方插件 -->
<script src="/back/js/plugins/pace/pace.min.js"></script>
</body>

</html>
