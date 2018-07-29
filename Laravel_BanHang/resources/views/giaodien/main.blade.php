<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
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
    <!-- CSS sản phẩm khác -->
    <link rel="stylesheet" href="giaodien/css/sanphamkhac.css">
    <!-- CSS Sản phẩm -->
    <link rel="stylesheet" href="giaodien/css/sanpham.css">
    @yield('css')
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
            <a id="hienThiTenShop" class="navbar-brand" href="#">Fuca Shop</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="trangcon_Ao.html">Áo
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="trangcon_Ao.html">Quần
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="trangcon_Ao.html">Quần Kaki</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="trangcon_Ao.html">Quần Jean</a>
                        </li>
                        <li>
                            <a href="trangcon_Ao.html">Quần Short</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="trangcon_spkhac.html">Quần Jogger</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="trangcon_spkhac.html">Đầm nữ</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="trangcon_spkhac.html">Giày
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="trangcon_spkhac.html">Giày nam</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="trangcon_spkhac.html">Giày nữ</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="trangcon_spkhac.html">Nón
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="trangcon_spkhac.html">Nón Snapback</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="trangcon_spkhac.html">Nón Bucket</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="trangcon_spkhac.html">Nón Phớt</a>
                        </li>
                    </ul>
                </li>
                <!-- Nếu chỉ có loại hàng => bỏ khác -->
                <!-- <li><a href="trangcon_spkhac.html">Khác</a></li> -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="trangcon_spkhac.html">Khác
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="trangcon_spkhac.html">Không có sub_menu</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="trangcon_spkhac.html">Ba lô & túi xách</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="trangcon_spkhac.html">Loại hàng</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="trangcon_spkhac.html">
                        <span class="glyphicon glyphicon-shopping-cart"></span>10</a>
                </li>
                <li>
                    <a href="trangcon_spkhac.html">
                        <span class="glyphicon glyphicon-user"></span> Tài khoản</a>
                </li>
                <!-- <li>
                    <a href="trangcon_spkhac.html">
                        <span class="fa fa-expeditedssl"></span> Đăng nhập</a>
                </li> -->
                <li>
                    <a href="trangcon_spkhac.html">
                        <span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Xong phần menu -->


@yield('noidung')

<!-- phần cuối trang -->
<footer>
    <div id="phanCuoi" class="row">
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Danh mục áo quần </h3>
                        <ul>
                            <li>
                                <a href="#"> Sản phẩm 1 </a>
                            </li>
                            <li>
                                <a href="#"> Sản phẩm 2 </a>
                            </li>
                            <li>
                                <a href="#"> Sản phẩm 3</a>
                            </li>
                            <li>
                                <a href="#"> Sản phẩm 4 </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Danh mục sản phẩm khác </h3>
                        <ul>
                            <li>
                                <a href="#"> Sản phẩm 1 </a>
                            </li>
                            <li>
                                <a href="#"> Sản phẩm 2 </a>
                            </li>
                            <li>
                                <a href="#"> Sản phẩm 3 </a>
                            </li>
                            <li>
                                <a href="#"> Sản phẩm 4 </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Danh mục giày dép </h3>
                        <ul>
                            <li>
                                <a href="#"> Sản phẩm 1 </a>
                            </li>
                            <li>
                                <a href="#"> Sản phẩm 2 </a>
                            </li>
                            <li>
                                <a href="#"> Sản phẩm 3 </a>
                            </li>
                            <li>
                                <a href="#"> Sản phẩm 4 </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Danh mục phụ kiện </h3>
                        <ul>
                            <li>
                                <a href="#"> Phụ kiện 1 </a>
                            </li>
                            <li>
                                <a href="#"> Phụ kiện 2</a>
                            </li>
                            <li>
                                <a href="#"> Phụ kiện 3</a>
                            </li>
                            <li>
                                <a href="#"> Phụ kiện 4</a>
                            </li>
                        </ul>
                    </div>
                    <div style="text-align: center;" class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3> Liên hệ với chúng tôi </h3>
                        <ul>
                            <li>
                                <div class="input-append newsletter-box text-center">
                                    <input type="text" class="full text-center" placeholder="Email ">
                                    <button class="btn  bg-gray" type="button"> Đi tới
                                            <i class="fa fa-long-arrow-right"> </i>
                                        </button>
                                </div>
                            </li>
                        </ul>
                        <ul class="social">
                            <li>
                                <a href="#">
                                    <i class=" fa fa-facebook">   </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter">   </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus">   </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-pinterest">   </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-youtube">   </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.footer-->

        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> Thiết kế bởi © Trần Quang Tân - Huỳnh Văn Thùy. </p>
                <div class="pull-right">
                    <ul class="nav nav-pills payments">
                        <li>
                            <i class="fa fa-cc-visa"></i>
                        </li>
                        <li>
                            <i class="fa fa-cc-mastercard"></i>
                        </li>
                        <li>
                            <i class="fa fa-cc-amex"></i>
                        </li>
                        <li>
                            <i class="fa fa-cc-paypal"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Xong phần cuối -->

<!-- Script trang chủ -->
<script src="giaodien/js/trangchu.js"></script>
<!-- jQuery library -->
<script src="giaodien/js/jquery-v3.3.1.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Slide -->
<script src="giaodien/js/slide/jR3DCarousel.min.js"></script>
<!-- Trở về đầu trang -->
<script src="giaodien/js/backgotop/jquery-backToTop.js"></script>

<script src="giaodien/js/_jquery.js"></script>

<script>
    $(document).ready(function(e) {
        $('.search-panel .dropdown-menu').find('a').click(function(e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        var slideImages = [{
            src: 'giaodien/images/slidetop/slide1.jpg'
        }, {
            src: 'giaodien/images/slidetop/slide2.jpg'
        }, {
            src: 'giaodien/images/slidetop/slide3.jpg'
        }, {
            src: 'giaodien/images/slidetop/slide4.jpg'
        }, {
            src: 'giaodien/images/slidetop/slide5.jpg'
        }, {
            src: 'giaodien/images/slidetop/slide6.jpg'
        }]

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
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(0);
    });

    $('ul.nav li.dropdown').on('click', function(event) {
        event.stopPropagation();
    });
</script>
@yield('script')
</body>

</html>