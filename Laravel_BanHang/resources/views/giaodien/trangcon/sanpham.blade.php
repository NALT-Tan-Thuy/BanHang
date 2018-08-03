@extends('giaodien/master') 
@section('noidung') 
@section('title') 
    Trang sản phẩm
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('giaodien/css/sanphamkhac.css')}}">
@endsection

<!-- Nội dung chính của trang-->
<!-- Kiểm soát đường dẫn -->
<div class="container">
    <div class="row" style="margin: 5% 0% 2% 0%;">
        <div id="bc1" class="btn-group btn-breadcrumb">
            <a href="trangchu.html" class="btn btn-default">
                <i class="fa fa-home"></i>
            </a>
            <a href="#" class="btn btn-default">
                <div>Danh mục sản phẩm</div>
            </a>
            <a href="trangcon_Ao.html" class="btn btn-default">
                <div>Sản phẩm khác</div>
            </a>
        </div>
    </div>
</div>
<!-- Kiểm soát trang -->

<!-- /////////////////////// -->
<!--    Nội dung trang con   -->
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <span class="glyphicon glyphicon-folder-close"> </span> Danh mục áo</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-pencil text-primary"></span>
                                            <a href="">Sản phẩm 1</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-pencil text-primary"></span>
                                            <a href="">Sản phẩm 2</a>
                                            <span class="badge">10</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <span class="glyphicon glyphicon-th"> </span> Sản phẩm khác</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="">Sản phẩm mới </a>
                                            <span class="label label-success">NEW</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Sản phẩn 1</a>
                                            <span class="badge">10</span>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class="glyphicon glyphicon-user"> </span>Thành viên</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="">Đổi mật khẩu</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="">Thông báo</a>
                                                <span class="label label-info">10</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="">Thông tin cá nhân</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-log-out text-danger"></span>
                                                <a href="" class="text-danger"> Thoát ra</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="">
                                    <span class="glyphicon glyphicon-file"> </span>Thống kê</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-usd"></span>
                                                <a href="">Đơn hàng</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-user"></span>
                                                <a href="">Khách hàng</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-tasks"></span>
                                                <a href="">Sản phẩm</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                                <a href="">Lượt truy cập</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->
                <div class="space60">&nbsp;</div>
                <div class="space60">&nbsp;</div>
                <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
                <!-- LƯU Ý: CHECK BOX PHẢI CÓ (ID,FOR) KHÁC NHAU -->
                <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
                <!-- Hàng đang giảm giá-->
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <button class="btn btn-large btn-block btn-warning" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            <b>Những loại hàng này đang giảm giá</b>
                        </button>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Áo sơ mi cổ lọ
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Áo sơ mi dài tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Áo sơ mi ngắn tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Áo sơ mi giả rin loại lớn
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Áo sơ mi cổ lọ
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Áo sơ mi dài tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Áo sơ mi ngắn tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Áo sơ mi giả rin loại lớn
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Áo sơ mi cổ lọ
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Áo sơ mi dài tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Áo sơ mi ngắn tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Áo sơ mi giả rin loại lớn
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- xong hàng đang giảm giá -->
                <div class="space60">&nbsp;</div>
                <!-- hàng tương tự -->
                <div class="card" style="border-bottom: 1px solid; border-bottom-color: #f0ad4e;">
                    <div class="card-header" id="headingFour">
                        <button class="btn btn-large btn-block btn-warning" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            <b>Những loại hàng tương tự</b>
                        </button>
                    </div>

                    <div id="collapseFour" class="collapse in" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">

                            <div class="checkbox checkbox-success">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Áo sơ mi cổ lọ
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Áo sơ mi dài tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Áo sơ mi ngắn tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Áo sơ mi giả rin loại lớn
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Áo sơ mi cổ lọ
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Áo sơ mi dài tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Áo sơ mi ngắn tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Áo sơ mi giả rin loại lớn
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Áo sơ mi cổ lọ
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Áo sơ mi dài tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Áo sơ mi ngắn tay
                                </label>
                            </div>

                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Áo sơ mi giả rin loại lớn
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- xong hàng tương tự -->

            </div>
        </div>
        <!-- hiển thị sản phẩm -->
        <div class="col-sm-9 col-md-9">
            <div class="well">

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <select name="" id="input" class="form-control">
                        <option value=""> Mới nhất </option>
                        <option value=""> Mua nhiều nhất </option>
                        <option value=""> Giá rẻ </option>
                        <option value=""> Nhập khẩu</option>
                    </select>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <select name="" id="input" class="form-control">
                        <option value="">Theo giá</option>
                        <option value=""> 100 - 200 </option>
                        <option value=""> 300 - 500</option>
                        <option value=""> >500</option>
                    </select>
                </div>
                <div class="space60">&nbsp;</div>

                <!-- Nội dung sản phẩn -->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="https://fandy.vn/wp-content/uploads/2016/12/giay-nam-the-thao-cho-nam-dep.jpg" alt="">
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
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="ribbon-wrapper">
                                <div class="ribbon sale">Giảm giá</div>
                            </div>

                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="https://s3-ap-southeast-1.amazonaws.com/misskick/wp-content/uploads/2017/12/05185930/cach-mac-quan-ao-dep-danh-cho-nang-co-huong.jpg"
                                        alt="">

                                </a>
                            </div>
                            <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                    <span class="flash-sale">$33.55</span>
                                </p>
                            </div>
                            <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="http://thesogood.com/wp-content/uploads/2017/09/333.jpg" alt="">
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
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="http://thesogood.com/wp-content/uploads/2017/09/333.jpg" alt="">
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
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Xong 4 sản phẩm cách ra -->
                    <div class="space60">&nbsp;</div>
                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="https://fandy.vn/wp-content/uploads/2016/12/giay-nam-the-thao-cho-nam-dep.jpg" alt="">
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
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="ribbon-wrapper">
                                <div class="ribbon sale">Giảm giá</div>
                            </div>

                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="https://s3-ap-southeast-1.amazonaws.com/misskick/wp-content/uploads/2017/12/05185930/cach-mac-quan-ao-dep-danh-cho-nang-co-huong.jpg"
                                        alt="">

                                </a>
                            </div>
                            <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                    <span class="flash-sale">$33.55</span>
                                </p>
                            </div>
                            <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="http://thesogood.com/wp-content/uploads/2017/09/333.jpg" alt="">
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
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="http://thesogood.com/wp-content/uploads/2017/09/333.jpg" alt="">
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
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Xong 4 sản phẩm cách ra -->
                    <div class="space60">&nbsp;</div>
                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="https://fandy.vn/wp-content/uploads/2016/12/giay-nam-the-thao-cho-nam-dep.jpg" alt="">
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
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="ribbon-wrapper">
                                <div class="ribbon sale">Giảm giá</div>
                            </div>

                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="https://s3-ap-southeast-1.amazonaws.com/misskick/wp-content/uploads/2017/12/05185930/cach-mac-quan-ao-dep-danh-cho-nang-co-huong.jpg"
                                        alt="">

                                </a>
                            </div>
                            <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                    <span class="flash-sale">$33.55</span>
                                </p>
                            </div>
                            <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="http://thesogood.com/wp-content/uploads/2017/09/333.jpg" alt="">
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
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html">
                                    <img height="200px;" src="http://thesogood.com/wp-content/uploads/2017/09/333.jpg" alt="">
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
                                <a class="beta-btn primary" href="product.html">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Xong 4 sản phẩm cách ra -->
                    <div class="space60">&nbsp;</div>

                </div>
                <!-- Xong nội dung sản phẩm -->
            </div>
        </div>
    </div>
</div>

<div class="space60">&nbsp;</div>
<div class="space60">&nbsp;</div>
<!-- Phần nội dung thương hiệu -->

<!-- Xong nội dung trang con -->
<!-- /////////////////////// -->

<!-- Xong nội dung 5 chứa sản phẩm phù hợp -->
@include('giaodien/quytrinh') @include('giaodien/loicamon')
@include('giaodien/cuoitrang')

<!-- Xong nội dung -->
@endsection