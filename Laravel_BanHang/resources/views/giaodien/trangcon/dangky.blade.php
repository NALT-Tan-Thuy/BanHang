@extends('giaodien/master') @section('noidung') @section('title') Đăng ký @endsection
<!-- nội dung -->
@section('css')
<link rel="stylesheet" type="text/css" href="giaodien/css/util.css">
<link rel="stylesheet" type="text/css" href="giaodien/css/main.css"> @endsection

<body style="background-color: #00BCD4;">

    <div class="container" style="margin-top: 18vh;" id="singup">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5 col-xs-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="" style="background-color: white; ">
                            <span class="login100-form-title">Đăng ký</span>
                            <label for="">Họ và tên</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="hoten" placeholder="Họ và tên">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                                </span>
                            </div>

                            <label for="">Tên đăng nhập</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="hoten" placeholder="Tên đăng nhập">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </div>

                            <label for="">Email</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="email" placeholder="Email">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>

                            <label for="">Mật khẩu</label>
                            <div class="wrap-input100">
                                <input class="input100" type="password" name="pass" placeholder="Mật khẩu">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>

                            <label for="">Nhập lại mật khẩu</label>
                            <div class="wrap-input100">
                                <input class="input100" type="password" name="passAgain" placeholder="Nhập lại mật khẩu">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-retweet" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div style="padding: 7px 0 7px 0;">
                                <label for="">Giới tính </label>
                                <div style="float: right; padding-right: 10%;">
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" checked>Nam</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">Nữ</label>
                                </div>

                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn"> ĐĂNG KÝ</button>
                                </div>
                                <div class="text-center p-t-30">
                                    <a class="txt2" href="#">
                                        <b> Giúp đỡ
                                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                            Huỳnh Văn Thùy
                                        </b>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- Xong nội dung -->
@endsection