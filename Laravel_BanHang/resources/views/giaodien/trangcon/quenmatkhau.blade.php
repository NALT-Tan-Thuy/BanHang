@extends('giaodien/main') @section('noidung') @section('title') Quên mật khẩu @endsection
<!-- nội dung -->
@section('css')
<link rel="stylesheet" type="text/css" href="giaodien/css/util.css">
<link rel="stylesheet" type="text/css" href="giaodien/css/main.css"> @endsection


<body style="background-color: #00BCD4;">
    <!-- phần menu chính -->
    <nav id="annavbar" class="navbar navbar-inverse navbar-md navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="hienThiTenShop" class="navbar-brand" href="#">Fuca Shop</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Áo
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="trangcon_Ao.html">Áo kiểu</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="trangcon_Ao.html">Áo thun</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="trangcon_Ao.html">Áo sơ mi</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="trangcon_Ao.html">Áo khoác</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quần
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Quần Kaki</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Quần Jean</a>
                            </li>
                            <li>
                                <a href="#">Quần Short</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Quần Jogger</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Đầm nữ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Giày
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Giày nam</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Giày nữ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nón
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Nón Snapback</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Nón Bucket</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Nón Phớt</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nếu chỉ có loại hàng => bỏ khác -->
                    <!-- <li><a href="#">Khác</a></li> -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Khác
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Không có sub_menu</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Ba lô & túi xách</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Loại hàng</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-shopping-cart"></span>10</a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-user"></span> Tài khoản</a>
                    </li>
                    <!-- <li>
                                <a href="#">
                                    <span class="fa fa-expeditedssl"></span> Đăng nhập</a>
                            </li> -->
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Xong phần menu -->
    <!-- <div class="limiter"> -->
    <div class="container" style="margin-top: 18vh;" id="forgetpass">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5 col-xs-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body" style="min-height: 75vh;">
                        <form class="" style="background-color: white; ">
                            <span class="login100-form-title">Quên mật khẩu</span>

                            <label for="">Nhập số điện thoại</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="email" placeholder="Email">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">GỬI</button>
                            </div>

                            <div class="text-center p-t-120">
                                <a class="txt2" href="#">
                                    <b> Quay về trang đăng nhập
                                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                    </b>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="js/jquery-v3.3.1.js"></script>
    <!--===============================================================================================-->
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="js/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script>
        $('ul.nav li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(500);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(500);
        });

        $('ul.nav li.dropdown').on('click', function (event) {
            event.stopPropagation();
        });
    </script>
</body>

<!-- Xong nội dung -->
@endsection