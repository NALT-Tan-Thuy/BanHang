<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="http://myphamfokin.com/thumbs/cart-mb.png">
    <title>@yield('title')</title>
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
            <a id="hienThiTenShop" class="navbar-brand" href="trangchu">Hoàng tử</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="sanpham">Áo
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="sanpham">Áo kiểu</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Áo thun</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Áo sơ mi</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Áo khoác</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="sanpham">Quần
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="sanpham">Quần Kaki</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Quần Jean</a>
                        </li>
                        <li>
                            <a href="sanpham">Quần Short</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Quần Jogger</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Đầm nữ</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="sanpham">Giày
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="sanpham">Giày nam</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Giày nữ</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="sanpham">Nón
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="sanpham">Nón Snapback</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Nón Bucket</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Nón Phớt</a>
                        </li>
                    </ul>
                </li>
                <!-- Nếu chỉ có loại hàng => bỏ khác -->
                <!-- <li><a href="sanpham">Khác</a></li> -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="sanpham">Khác
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="sanpham">Không có sub_menu</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Ba lô & túi xách</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sanpham">Loại hàng</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="dathang">
                        <span class="fa fa-shopping-basket"></span> 10</a>
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


<!-- Script trang chủ -->
<script src="{{ asset('giaodien/js/trangchu.js') }}"></script>
<!-- jQuery library -->
<script src="{{ asset('giaodien/js/jquery-v3.3.1.js') }}"></script>
<!-- Latest compiled JavaScript -->
<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>

<!-- Slide -->
<script src="{{ asset('giaodien/js/slide/jR3DCarousel.min.js') }}"></script>
<!-- Trở về đầu trang -->
<script src="{{ asset('giaodien/js/backgotop/jquery-backToTop.js') }}"></script>

<script src="{{ asset('giaodien/js/_jquery.js') }}"></script>

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

<script type="text/javascript">
    $(document).ready(function () {
        var slideImages = [
        {
            src:'giaodien/images/slidetop/1'
        }, 
        {
            src:'giaodien/images/slidetop/2'
        }, 
        {
            src:'giaodien/images/slidetop/3'
        }, 
        {
            src:'giaodien/images/slidetop/4'
        }, 
        {
            src:'giaodien/images/slidetop/5'
        }, 
        {
            src:'giaodien/images/slidetop/slide6'
        }
        ]
        jR3DCarousel = $('.jR3DCarouselGallery').jR3DCarousel({
            width: 1140,
            height: 418,
            slides: slideImages
        });

        function slideShownCallback($slide) {
            console.log("Slide shown: ", $slide.find('img').attr('src'))
        }
    })
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