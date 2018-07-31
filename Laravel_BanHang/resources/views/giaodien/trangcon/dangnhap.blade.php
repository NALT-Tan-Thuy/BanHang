@extends('giaodien/master') @section('noidung') @section('title') Đăng nhập @endsection
<!-- nội dung -->
@section('css')
<link rel="stylesheet" type="text/css" href="giaodien/css/util.css">
<link rel="stylesheet" type="text/css" href="giaodien/css/main.css"> @endsection

<body style="background-color: #00BCD4;">
    <!-- <div class="limiter"> -->
    <div class="container" style="margin-top: 18vh;" id="login">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5 col-xs-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                            @if(Session::has('taoxongtaikhoan'))
                            <div id="thongbaodangky" class="alert alert-success">
                                <p>{{Session::get('taoxongtaikhoan')}}</p>
                                <p>Đăng nhập để sử dụng</p>
                            </div>
                            @endif
                        <form class="" style="background-color: white; ">
                            <span class="login100-form-title">Đăng nhập</span>

                            <div class="wrap-input100">
                                <input class="input100" type="text" name="email" placeholder="Email">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="wrap-input100">
                                <input class="input100" type="password" name="pass" placeholder="Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">
                                    ĐĂNG NHẬP
                                </button>
                            </div>
                            <div class="text-center p-t-20">
                                <a class="txt2" href="quenmatkhau">Quên mật khẩu</a>
                            </div>
                            <div class="text-center p-t-100">
                                <a class="txt2" href="#">
                                    <b> Giúp đỡ
                                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                        Trần Quang Tân
                                    </b>
                                </a>
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