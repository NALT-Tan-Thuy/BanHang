@extends('giaodien/main') @section('noidung') @section('title') Đăng ký @endsection
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
                                    <i class="fa fa-user" aria-hidden="true"></i>
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

                            <div style="padding: 7px 0 7px 0;">
                                <label for="">Giới tính</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" checked>Nam</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">Nữ</label>
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
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn"> ĐĂNG KÝ</button>
                            </div>
                            <!-- <div class="text-center p-t-20">
                                <a class="txt2" href="#">Quên mật khẩu</a>
                            </div> -->
                            <div class="text-center p-t-30">
                                <a class="txt2" href="#">
                                    <b> Đăng nhập
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