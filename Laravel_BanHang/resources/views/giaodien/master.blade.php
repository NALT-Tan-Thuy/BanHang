<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="http://myphamfokin.com/thumbs/cart-mb.png">
    <title>@yield('title')</title>
    <base href="{{asset('')}}">
    <!-- Chữ cho "Thế giới mua sắm" -->
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <!-- Font hiển thị "Tên của shop trên Menu chính" -->
    <link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet">
    <!-- font khẩu hiệu " mua sắm thả ga" -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- font cho thẻ a Menu chính -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright|Dancing+Script" rel="stylesheet">
    <!-- font cho chữ trong thanh tìm kiếm hàng hóa tương ứng -->
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
    <!-- font cho lời cảm ơn -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|VT323" rel="stylesheet">
    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">
    <!-- font awesome cho các nút footer -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <!-- animation -->
    <link rel="stylesheet" href="{{ asset('giaodien/css/animate.css')}}">
    <!-- Trở về đầu trang -->
    <link rel="stylesheet" href="{{ asset('giaodien/css/backToTop.min.css') }}">

    <!-- chèn link css trang chủ -->
    <link rel="stylesheet" href="{{ asset('giaodien/css/trangchu.css')}}">

    <!-- Chèn css cho nội dung show sản phẩm -->
    <!-- CSS Sản phẩm -->
    <link rel="stylesheet" href="{{ asset('giaodien/css/sanpham.css')}}"> @yield('css')
</head>
<!-- phần menu chính -->
<nav id="annavbar" class="navbar navbar-inverse navbar-md navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="hienThiTenShop" class="navbar-brand" href="trangchu">{{$trangchushare->tenshop}}</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                @foreach($loaisanphamshare as $lsps)
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="sanpham/{{$lsps->id}}">{{$lsps->ten}}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($sanphamshare as $sps) @if($sps->id_loaisanpham === $lsps->id)
                        <li>
                            <a href="sanpham/{{$lsps->id}}/{{$sps->id}}">{{$sps->ten}}</a>
                        </li>
                        <li class="divider"></li>
                        @endif @endforeach
                    </ul>
                </li>
                @endforeach

                <!-- Nếu chỉ có loại hàng => bỏ khác -->
                <!-- <li><a href="sanpham">Khác</a></li> -->
                @if(count($loaispkhacshare) != 0)
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="sanpham/1">Sản phẩm khác
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($loaispkhacshare as $lspks)
                        <li>
                            <a href="sanpham/{{$lspks->id}}">{{$lspks->ten}}</a>
                        </li>
                        <li class="divider"></li>
                        @endforeach
                    </ul>
                </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="dathang">
                        <span class="fa fa-shopping-basket"></span> @if(Session::has('cart')){{Session('cart')->totalQty}} @else 0 @endif</a>
                </li>
                @if(Auth::check())

                <li>
                    <a href="thongtin">
                        <span class="glyphicon glyphicon-user"></span> {{Auth::User()->hoten}}</a>
                </li>
                <li>
                    <a href="dangxuat">
                        <span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a>
                </li>
                @else
                <li>
                    <a href="dangnhap">
                        <span class="fa fa-expeditedssl"></span> Đăng nhập</a>
                </li>
                <li>
                    <a href="dangky">
                        <span class="fa fa-calendar-plus-o"></span> Đăng ký</a>
                </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
<!-- Xong phần menu -->


@yield('noidung')


<!-- jQuery library -->
<script src="giaodien/js/jquery-v3.3.1.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Trở về đầu trang -->
<script src="giaodien/js/backgotop/jquery-backToTop.js"></script>

<script src="giaodien/js/_jquery.js"></script>

<script>
    $(document).ready(function (e) {
        $('.search-panel .dropdown-menu').find('a').click(function (e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
        });
    });
</script>

<script>
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(0);
    });

    $('ul.nav li.dropdown').on('click', function (event) {
        event.stopPropagation();
    });
</script> @yield('script')
</body>

</html>