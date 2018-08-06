@extends('giaodien/master') @section('noidung') @section('title') Xác nhận admin @endsection
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
                        <form method="POST" action="xulyxacnhanmatkhau" class="" style="background-color: white; ">
                            @csrf
                            <span class="login100-form-title">Xác nhận mật khẩu admin</span>

                            <label for="">Xác nhận mật khẩu admin</label>
                            <div class="wrap-input100">
                                <input class="input100" type="password" name="matkhau" id="matkhau" placeholder="Nhập vào mật khẩu cấp 2">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                </span>
                            </div>
                            @if(Session::has('xacnhanmksai'))
                            <div style="color: red">
                                <center>{{Session::get('xacnhanmksai')}}</center>
                            </div>
                            @endif

                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">Xác nhận</button>
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