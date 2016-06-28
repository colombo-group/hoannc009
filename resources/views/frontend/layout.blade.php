<html>
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>

    <link rel = "stylesheet" type="text/css" href="{{asset('/frontend/css/bootstrap.css')}}">
    <link rel = "stylesheet" type="text/css" href="{{asset('/frontend/css/bootstrap-hoan.css')}}">
    <link rel = "stylesheet" type="text/css" href="{{asset('/frontend/css/common.css')}}">
    <link rel = "stylesheet" type="text/css" href="{{asset('/frontend/css/login.css')}}">
    <link rel = "stylesheet" type="text/css" href="{{asset('/frontend/css/home.css')}}">
    <link rel = "stylesheet" type="text/css" href="{{asset('/frontend/css/category.css')}}">
    <link rel = "stylesheet" type="text/css" href="{{asset('/frontend/css/detail.css')}}">

    <script src="{{asset('/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div id = "header">
    <div class="container">
        <div id="header1" class="row">
            <div class="col-md-4 col-xs-6">
                <div id="input">
                    <form>
                        <input type="text" placeholder="Tìm kiếm">
                        <button type="submit"><img src="{{asset('/frontend/images/search.png')}}"></button>
                    </form>
                </div>
            </div>
            <div id="logo" class="col-md-6 col-xs-6">
                H-Phượt
            </div>
            <div id="social" class="col-md-2 col-xs-4">
                <a href=""><img src="{{asset('/frontend/images/f.png')}}"></a>
                <a href=""><img src="{{asset('/frontend/images/icon2.png')}}"></a>
                <a href=""><img src="{{asset('/frontend/images/g.png')}}"></a>
                <a href=""><img src="{{asset('/frontend/images/icon4.png')}}"></a>

            </div>
            <div class="auth col-md-2">

            </div>

        </div>
        <div class ="menu">
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li><a href=""><span class="glyphicon glyphicon-home"></span>Trang chủ</a></li>
                    <li><a href="">Miền Bắc</a></li>
                    <li><a href="">Miền Trung</a></li>
                    <li><a href="">Miền Nam</a></li>
                    <li><a href="">Nước ngoài</a></li>
                    <li><a href="">Tin tức</a></li>
                    @if(Auth::check())
                        <li><a href=""> {{Auth::user()->name}}</a></li>
                        <li><a href="/auth/logout">Đăng xuất </a></li>
                    @else
                        <li><a href="/auth/login">Đăng nhập </a></li>
                        <li><a href="/auth/register">Đăng ký </a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
@yield('top')

@yield('body')

<div id="footer">
    <div class="container">
        <div class ="menu">
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Bắc</a></li>
                    <li><a href="">Trung</a></li>
                    <li><a href="">Nam</a></li>
                    <li><a href="">Nước ngoài</a></li>
                    <li><a href="">Tin tức</a></li>
                    <li><a href="">Kinh nghiệm</a></li>
                </ul>
            </nav>
        </div>
        <div id="footer1">
            <p>H-Phượt</p>
            <span class="glyphicon glyphicon-copyright-mark"></span>
            Copyright hphuot.xyz. All rights reserved
        </div>
    </div>

</div>
</body>

</html>

