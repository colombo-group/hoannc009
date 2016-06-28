<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quản trị </title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/icheck/flat/green.css') }}" rel="stylesheet">


    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>

    <!--[if lt IE 9]>
    <!--<script src="../assets/js/ie8-responsive-file-warning.js"></script>-->
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    <![endif]-->

</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>H-Phượt</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="{{ asset('backend/images/img.jpg') }}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Xin chào,</span>
                        <h2>Nguyễn Công Hoan</h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Website <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="admin/dashboard">Tổng quan</a></li>
                                    <li><a href="admin/setup">Cài đặt</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Bài viết <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="a">Danh sách</a>
                                    </li>
                                    <li><a href="b">Thêm mới</a>
                                    </li>
                                    <li><a href="c">Danh mục</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-users"></i>Người dùng<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="general_elements.html">Danh sách</a>
                                    </li>
                                    <li><a href="media_gallery.html">Thêm mới</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-comment"></i> Bình luận <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="tables.html">Tables</a>
                                    </li>
                                    <li><a href="tables_dynamic.html">Table Dynamic</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Live On</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('backend/images/img.jpg')}}" alt="">Hoan
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                <li><a href="javascript:;">  Trang cá nhân</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Cài đặt</a>
                                </li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                <li>
                                    <a>
                                            <span class="image">
                                        <img src="{{asset('backend/images/img.jpg')}}" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('page-content')
            <!-- footer content -->
            <footer>
                <div class="">
                    <p class="pull-right">Thiết kế bởi <a>Nguyễn Công Hoan</a>. |
                        <span class="lead"> <i class="fa fa-paw"></i> H-Phượt!</span>
                    </p>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->

        </div>

        <!-- /page content -->
    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

<!-- chart js -->
<script src="{{ asset('backend/js/chartjs/chart.min.js') }}"></script>
<!-- bootstrap progress js -->
<script src="{{ asset('backend/js/progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{ asset('backend/js/nicescroll/jquery.nicescroll.min.js') }}"></script>
<!-- icheck -->
<script src="{{ asset('backend/js/icheck/icheck.min.js') }}"></script>

<script src="{{ asset('backend/js/custom.js') }}"></script>

<!-- moris js -->
<script src="{{ asset('backend/js/moris/raphael-min.js') }}"></script>
<script src="{{ asset('backend/js/moris/morris.js') }}"></script>
<script src="{{ asset('backend/js/moris/example.js') }}"></script>

</body>

</html>