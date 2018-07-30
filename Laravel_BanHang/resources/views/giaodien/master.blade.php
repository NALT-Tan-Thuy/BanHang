<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="http://myphamfokin.com/thumbs/cart-mb.png">
    <title>@yield('title')</title>
    <!-- Font hiển thị "Tên của shop trên Menu chính" -->
    <link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet">
    <!-- font cho thẻ a Menu chính -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright|Dancing+Script" rel="stylesheet">
    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- font awesome cho các nút footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- animation -->
    <link rel="stylesheet" href="giaodien/css/animate.css">
    <!-- Trở về đầu trang -->
    <link rel="stylesheet" href="giaodien/css/backToTop.min.css">
    <!-- chèn link css trang chủ -->
    <link rel="stylesheet" href="giaodien/css/trangchu.css">
    <!-- Chèn css cho nội dung show sản phẩm -->
    <!-- CSS Sản phẩm -->
    <link rel="stylesheet" href="giaodien/css/sanpham.css"> @yield('css')
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
            <a id="hienThiTenShop" class="navbar-brand" href="trangchu">Fuca Shop</a>
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
                <li>
                    <a href="dangnhap">
                        <span class="fa fa-expeditedssl"></span> Đăng nhập</a>
                </li>
                <li>
                    <a href="dangky">
                        <span class="fa fa-calendar-plus-o"></span> Đăng ký</a>
                </li>
                <!-- <li>
                        <a href="thongtin">
                            <span class="glyphicon glyphicon-user"></span> Huỳnh Văn Thùy</a>
                    </li> 
                    <li>
                        <a href="sanpham">
                            <span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a>
                    </li>  -->
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