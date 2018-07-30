@extends('giaodien/master') @section('noidung') @section('title') Quên mật khẩu @endsection
<!-- nội dung -->
@section('css')
<link rel="stylesheet" type="text/css" href="giaodien/css/util.css">
<link rel="stylesheet" type="text/css" href="giaodien/css/main.css"> @endsection


<body style="background-color: #00BCD4;">
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
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">GỬI</button>
                            </div>

                            <div class="text-center p-t-120">
                                <a class="txt2" href="#">
                                    <b> Giúp đỡ
                                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                        Huỳnh Văn Thùy - Trần Quang Tân
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