@extends('giaodien/main') @section('noidung')
<!-- Nội dung chính của trang-->
@section('title')
Trang Chủ
@endsection

@include('giaodien/tieudetren') @include('giaodien/tieudeduoi')
<!-- phần đầu nội dung 1 -->
<!-- Kiểm soát đường dẫn -->

<div class="container">
    <div class="row">
        <div id="bc1" class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-default">
                <i class="fa fa-home"></i>
            </a>
            <!-- <a href="#" class="btn btn-default">
                <div>Đường dẫn 1</div>
            </a>
            <a href="#" class="btn btn-default">
                <div>Đường dẫn 2</div>
            </a> -->
        </div>
    </div>
</div>

<!-- Kiểm soát trang -->
<section class="examples">
    <div class="container">
        <div class="carousel-example" id="spNoiBat">
            <h2>Sản phẩm nổi bật</h2>
            <div id="simple-content-carousel" class="carousel flexible default slide" data-ride="carousel" data-interval="2000" data-wrap="true">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-xs-4 left">
                                <div class="flex-item">
                                    <img class="img-responsive" src="https://i.pinimg.com/736x/6b/9e/0b/6b9e0bf7b58b3990851fbd5fb2655d53.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xs-4 center">
                                <div class="flex-item">
                                    <img class="img-responsive" src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/flexible_bootstrap_carousel/images/item2.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-xs-4 right">
                                <div class="flex-item">
                                    <img class="img-responsive" src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/flexible_bootstrap_carousel/images/item3.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-4 left">
                                <div class="flex-item">
                                    <img class="img-responsive" src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/flexible_bootstrap_carousel/images/item4.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-xs-4 center">
                                <div class="flex-item">
                                    <img class="img-responsive" src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/flexible_bootstrap_carousel/images/item5.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-xs-4 right">
                                <div class="flex-item">
                                    <img class="img-responsive" src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/flexible_bootstrap_carousel/images/item6.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-4 left">
                                <div class="flex-item">
                                    <img class="img-responsive" src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/flexible_bootstrap_carousel/images/item4.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-xs-4 center">
                                <div class="flex-item">
                                    <img class="img-responsive" src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/flexible_bootstrap_carousel/images/item5.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-xs-4 right">
                                <div class="flex-item">
                                    <img class="img-responsive" src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/flexible_bootstrap_carousel/images/item6.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="##simple-content-carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="##simple-content-carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Xong phần đầu nội dung 1  slide-->

<!-- Phần nội dung 2 thông tin thương hiệu-->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon">
                    <i class="glyphicon glyphicon-globe"></i>
                </div>
                <h3>
                    <a href="" title="THƯƠNG HIỆU KINH DOANH">THƯƠNG HIỆU KINH DOANH</a>
                </h3>
                <ul class="list-group">
                    <li class="list-group-item">NIKE</li>
                    <li class="list-group-item">RALPH LAUREN</li>
                    <li class="list-group-item">COLUMBIA</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon">
                    <i class="fa fa-mobile"></i>
                </div>
                <h3>
                    <a href="" title="LIÊN HỆ CHÚNG TÔI">LIÊN HỆ CHÚNG TÔI</a>
                </h3>
                <p>Cơ sở 1: 019287378687 (gặp Ân)</p>
                <p>Cơ sở 2: 019287378687 (gặp Hoàng)</p>
                <p>Cơ sở 3: 019287378687 (gặp Hải)</p>
                <p></p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon">
                    <i class="glyphicon glyphicon-exclamation-sign"></i>
                </div>
                <h3>
                    <a href="" title="ĐỊA CHỈ VÀ TRỢ GIÚP">THÔNG TIN TRỢ GIÚP</a>

                </h3>
                <p>Địa chỉ: 124 Bà Triệu, thành phố Huế</p>
                <p>Điện thoại: 018368476656</p>
                <p>Email: shopbanhang@gmail.com</p>
                <p>Mở cửa: 7h -> 22h hằng ngày.</p>

            </div>
        </div>

    </div>
</div>
<!-- Xong phần nội dung 2 -->

<!-- Nội dung 3 sản phẩm giảm giá -->
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <!-- Kiểm soát đường dẫn -->
                        <div class="row">
                            <div id="bc1" class="btn-group btn-breadcrumb">
                                <!-- <a href="#" class="btn btn-default">
                                    <i class="fa fa-home"></i>
                                </a>
                                <a href="#" class="btn btn-default">
                                    <div>Đường dẫn 1</div>
                                </a>
                                <a href="#" class="btn btn-default">
                                    <div>Đường dẫn 2</div>
                                </a> -->
                            </div>
                        </div>
                        <!-- Kiểm soát trang -->
                        <h2>Sản phẩm mới</h2>
                        <div class="beta-products-Chi tiết">
                            <p>Tìm thấy 123 sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="chitiet_sp.html">
                                            <img height="250px;" src="https://fandy.vn/wp-content/uploads/2016/12/giay-nam-the-thao-cho-nam-dep.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span>$34.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <!-- <div class="clearfix"></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>

                                    <div class="single-item-header">
                                        <a href="chitiet_sp.html">
                                            <img height="250px;" src="https://s3-ap-southeast-1.amazonaws.com/misskick/wp-content/uploads/2017/12/05185930/cach-mac-quan-ao-dep-danh-cho-nang-co-huong.jpg"
                                                alt="">

                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">$34.55</span>
                                            <span class="flash-sale">$33.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <!-- <div class="clearfix"></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="chitiet_sp.html">
                                            <img height="250px;" src="http://thesogood.com/wp-content/uploads/2017/09/333.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span>$34.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <!-- <div class="clearfix"></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="chitiet_sp.html">
                                            <img height="250px" ; src="http://thoitrangxitin.com/Upload/2017-11/0916301536QE38C834V330R41.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span>$34.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <!-- <div class="clearfix"></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>
                    <hr>
                    <div class="beta-products-list">
                        <div class="col-xs-12">
                            <div class="title-block">
                                <div id="tieuDeHangKhuyenMai" class="wrap-content">
                                    <h2 class="title-group">Hàng Khuyến mãi</h2>
                                </div>
                            </div>
                        </div>
                        <div class="space50">&nbsp;</div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>

                                    <div class="single-item-header thumbnail">
                                        <a href="chitiet_sp.html">
                                            <img height="250px" src="https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/1/_/non_snapback_nam_nu_mister_rgm_238d.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">$34.55</span>
                                            <span class="flash-sale">$33.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>

                                    <div class="single-item-header thumbnail">
                                        <a href="chitiet_sp.html">
                                            <img height="250px" src="https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/1/_/non_snapback_nam_nu_mister_rgm_238d.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">$34.55</span>
                                            <span class="flash-sale">$33.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>

                                    <div class="single-item-header thumbnail">
                                        <a href="chitiet_sp.html">
                                            <img height="250px" src="https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/1/_/non_snapback_nam_nu_mister_rgm_238d.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">$34.55</span>
                                            <span class="flash-sale">$33.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>

                                    <div class="single-item-header thumbnail">
                                        <a href="chitiet_sp.html">
                                            <img height="250px" src="https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/1/_/non_snapback_nam_nu_mister_rgm_238d.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">$34.55</span>
                                            <span class="flash-sale">$33.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space40">&nbsp;</div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>

                                    <div class="single-item-header thumbnail">
                                        <a href="chitiet_sp.html">
                                            <img height="250px" src="https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/1/_/non_snapback_nam_nu_mister_rgm_238d.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">$34.55</span>
                                            <span class="flash-sale">$33.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>

                                    <div class="single-item-header thumbnail">
                                        <a href="chitiet_sp.html">
                                            <img height="250px" src="https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/1/_/non_snapback_nam_nu_mister_rgm_238d.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">$34.55</span>
                                            <span class="flash-sale">$33.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>

                                    <div class="single-item-header thumbnail">
                                        <a href="chitiet_sp.html">
                                            <img height="250px" src="https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/1/_/non_snapback_nam_nu_mister_rgm_238d.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">$34.55</span>
                                            <span class="flash-sale">$33.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>

                                    <div class="single-item-header thumbnail">
                                        <a href="chitiet_sp.html">
                                            <img height="250px" src="https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/1/_/non_snapback_nam_nu_mister_rgm_238d.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">$34.55</span>
                                            <span class="flash-sale">$33.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitiet_sp.html">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .beta-products-list -->

                </div>

            </div>
            <!-- end section with sidebar and main content -->
        </div>
        <!-- .main-content -->
    </div>
    <!-- #content -->
</div>
<!-- .container -->
<!-- Xong nội dung 3 sản phẩm giảm giá -->
<div class="space40">&nbsp;</div>
<div class="container">
    <hr>
</div>
<div class="space40">&nbsp;</div>
<!-- Nội dung 4 tìm kiếm sản phẩm tương ứng -->
<div id="timKiemHangTheoTen" class="container">
    <div class="row">
        <div id="filter-panel" class="collapse filter-panel">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-perpage">Những mặt hàng kinh doanh:</label>
                            <select id="pref-perpage" class="form-control">
                                <option selected="selected" value="10">Phụ kiện thời trang cao cấp</option>
                                <option value="15">Giày - mũ</option>
                                <option value="15">Đai nịt cao cấp</option>
                                <option value="15">Một số sản phẩm khác</option>
                                <option value="15">Quần - áo</option>

                            </select>
                        </div>
                        <!-- form group [rows] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-orderby">Sản phẩm tương ứng:</label>
                            <select id="pref-orderby" class="form-control">
                                <option>Vòng cổ ngọc bích</option>
                                <option>Đồng hồ casio sang trọng</option>
                                <option>Nhẫn trang sức thời thượng</option>

                            </select>
                        </div>
                        <!-- form group [order by] -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">
                                <span class="glyphicon glyphicon-share-alt"></span> Tìm kiếm sản phẩm
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="glyphicon glyphicon-hand-right"></span> TẠI ĐÂY CÓ MỌI THỨ BẠN CẦN
        </button>
    </div>
</div>
<!-- Xong nội dung 4 tìm kiếm sản phẩm tương ứng -->
<div class="space60">&nbsp;</div>
<!-- Nội dung 5 chứa sảm phẩm tìm phù hợp -->
<div class="container">

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="my-list">
            <img src="http://www.giayxinh.com/Upload/CKFinder/images/GIAY-DAT/sneaker/TD1a.jpg" alt="dsadas" />
            <h3>Thể loại hàng</h3>
            <span>Giá gốc: 100,000 đ</span>
            <div class="offer">Giá khuyến mãi: 90,000 đ</div>
            <div class="detail">
                <img src="http://www.giayxinh.com/Upload/CKFinder/images/GIAY-DAT/sneaker/TD1a.jpg" alt="dsadas" />
                <a href="" class="btn btn-info">Mua ngay</a>
                <a href="chitiet_sp.html" class="btn btn-info">Chi tiết</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="my-list">
            <img src="https://tuixachf1.com.vn/wp-content/uploads/2016/12/421882_CVLEG_8604_002_075_0000_Light-Sylvie-leather-shoulder-bag.jpg"
                alt="dsadas" />
            <h3>Thể loại hàng</h3>
            <span>Giá gốc: 100,000 đ</span>
            <div class="offer">Giá khuyến mãi: 90,000 đ</div>
            <div class="detail">
                <img src="https://tuixachf1.com.vn/wp-content/uploads/2016/12/421882_CVLEG_8604_002_075_0000_Light-Sylvie-leather-shoulder-bag.jpg"
                    alt="dsadas" />
                <a href="#" class="btn btn-info">Mua ngay</a>
                <a href="chitiet_sp.html" class="btn btn-info">Chi tiết</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="my-list">
            <img src="http://3.bp.blogspot.com/-wxCg6yhEJBo/VVNMlxW93xI/AAAAAAAAAJA/yJdarUnbZBk/s1600/giay-vans-den.jpg" alt="dsadas"
            />
            <h3>Thể loại hàng</h3>
            <span>Giá gốc: 100,000 đ</span>
            <div class="offer">Giá khuyến mãi: 90,000 đ</div>
            <div class="detail">
                <img src="http://3.bp.blogspot.com/-wxCg6yhEJBo/VVNMlxW93xI/AAAAAAAAAJA/yJdarUnbZBk/s1600/giay-vans-den.jpg" alt="dsadas"
                />
                <a href="#" class="btn btn-info">Mua ngay</a>
                <a href="chitiet_sp.html" class="btn btn-info">Chi tiết</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="my-list">
            <img src="http://img.baza.vn/upload/products-var-WiYUG9lr/57TGxclO.jpg?v=636112596682777476" alt="dsadas" />
            <h3>Thể loại hàng</h3>
            <span>Giá gốc: 100,000 đ</span>
            <div class="offer">Giá khuyến mãi: 90,000 đ</div>
            <div class="detail">
                <img src="http://img.baza.vn/upload/products-var-WiYUG9lr/57TGxclO.jpg?v=636112596682777476" alt="dsadas" />
                <a href="#" class="btn btn-info">Mua ngay</a>
                <a href="chitiet_sp.html" class="btn btn-info">Chi tiết</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="my-list">
            <img src="http://www.giayxinh.com/Upload/CKFinder/images/GIAY-DAT/sneaker/TD1a.jpg" alt="dsadas" />
            <h3>Thể loại hàng</h3>
            <span>Giá gốc: 100,000 đ</span>
            <div class="offer">Giá khuyến mãi: 90,000 đ</div>
            <div class="detail">
                <img src="http://www.giayxinh.com/Upload/CKFinder/images/GIAY-DAT/sneaker/TD1a.jpg" alt="dsadas" />
                <a href="#" class="btn btn-info">Mua ngay</a>
                <a href="chitiet_sp.html" class="btn btn-info">Chi tiết</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="my-list">
            <img src="https://tuixachf1.com.vn/wp-content/uploads/2016/12/421882_CVLEG_8604_002_075_0000_Light-Sylvie-leather-shoulder-bag.jpg"
                alt="dsadas" />
            <h3>Thể loại hàng</h3>
            <span>Giá gốc: 100,000 đ</span>
            <div class="offer">Giá khuyến mãi: 90,000 đ</div>
            <div class="detail">
                <img src="https://tuixachf1.com.vn/wp-content/uploads/2016/12/421882_CVLEG_8604_002_075_0000_Light-Sylvie-leather-shoulder-bag.jpg"
                    alt="dsadas" />
                <a href="#" class="btn btn-info">Mua ngay</a>
                <a href="chitiet_sp.html" class="btn btn-info">Chi tiết</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="my-list">
            <img src="http://3.bp.blogspot.com/-wxCg6yhEJBo/VVNMlxW93xI/AAAAAAAAAJA/yJdarUnbZBk/s1600/giay-vans-den.jpg" alt="dsadas"
            />
            <h3>Thể loại hàng</h3>
            <span>Giá gốc: 100,000 đ</span>
            <div class="offer">Giá khuyến mãi: 90,000 đ</div>
            <div class="detail">
                <img src="http://3.bp.blogspot.com/-wxCg6yhEJBo/VVNMlxW93xI/AAAAAAAAAJA/yJdarUnbZBk/s1600/giay-vans-den.jpg" alt="dsadas"
                />
                <a href="#" class="btn btn-info">Mua ngay</a>
                <a href="chitiet_sp.html" class="btn btn-info">Chi tiết</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="my-list">
            <img src="http://img.baza.vn/upload/products-var-WiYUG9lr/57TGxclO.jpg?v=636112596682777476" alt="dsadas" />
            <h3>Thể loại hàng</h3>
            <span>Giá gốc: 100,000 đ</span>
            <div class="offer">Giá khuyến mãi: 90,000 đ</div>
            <div class="detail">
                <img src="http://img.baza.vn/upload/products-var-WiYUG9lr/57TGxclO.jpg?v=636112596682777476" alt="dsadas" />
                <a href="#" class="btn btn-info">Mua ngay</a>
                <a href="chitiet_sp.html" class="btn btn-info">Chi tiết</a>
            </div>
        </div>
    </div>

</div>
<!-- Xong nội dung 5 chứa sản phẩm phù hợp -->
@include('giaodien/quytrinh') @include('giaodien/loicamon')
@include('giaodien/cuoitrang')

<!-- Xong nội dung -->
@endsection