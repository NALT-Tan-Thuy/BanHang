@extends('giaodien/master') 
 @section('noidung') @section('title') Chi tiết sản phẩm @endsection @section('css')
<link rel="stylesheet" href="{{ asset('giaodien/css/chitietsp.css')}}"> @endsection

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
                <div>Sản phẩm tương ứng</div>
            </a>
            <a href="trangcon_Ao.html" class="btn btn-default">
                <div>Chi tiết sản phẩm</div>
            </a>
        </div>
    </div>
</div>
<!-- Kiểm soát trang -->

<!-- /////////////////////// -->
<!--    Nội dung trang con   -->
<div class="wrapper">
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                <li role="presentation" class="active">
                    <a href="#chitietsanpham" id="chitietsanpham-tab" role="tab" data-toggle="tab" aria-controls="chitietsanpham" aria-expanded="true">
                        <span class="text">Chi tiết sản phẩm</span>
                    </a>
                </li>
                <!-- <li role="presentation" class="next">
                            <a href="#thongsokythuat" role="tab" id="thongsokythuat-tab" data-toggle="tab" aria-controls="thongsokythuat">
                                <span class="text">Thông số kỹ thuật</span>
                            </a>
                        </li> -->
                <li role="presentation">
                    <a href="#huongdanthanhtoan" role="tab" id="huongdanthanhtoan-tab" data-toggle="tab" aria-controls="huongdanthanhtoan">
                        <span class="text">Thông tin sản phẩm</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#binhluan" role="tab" id="binhluan-tab" data-toggle="tab" aria-controls="binhluan">
                        <span class="text">Bình luận</span>
                    </a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="chitietsanpham" aria-labelledby="chitietsanpham-tab">
                    <!-- xử lý chi tiết sản phẩm -->
                    <div class="space60">&nbsp;</div>
                    <!-- hình sản phẩm -->
                    <div class="col-sm-5">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html">
                                    <img src="https://fandy.vn/wp-content/uploads/2016/12/giay-nam-the-thao-cho-nam-dep.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Xong hình sản phẩm -->
                    <!-- thông tin chi tiết -->
                    <div id="thongTinChitiet" class="col-xs-12 col-md-7">
                        <h3 class="product-title">Giày adidas trắng sọc thời trang năng động</h3>
                        <div id="luotThich">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <span> 123 lượt thích sản phẩm này.</span>
                        </div>
                        <p id="tieuDeMoTa">Mô tả</p>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo reiciendis esse fugiat corrupti molestias
                            soluta facere iste nihil aliquam vel? Quisquam unde vel rem. Veritatis impedit autem minus sint
                            voluptas!
                        </span>
                        <h2>GIÁ BÁN:
                            <span id="giaBan">200.000 đồng</span>
                        </h2>
                        <p id="giaGoc">Giá gốc: 500.00 đồng</p>

                        <div style="text-align: center" class="col-xs-12 col-md-6">
                            <div class="space60">&nbsp;</div>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button id="giamSL" onclick="tinhsoluonggiam();" type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus"
                                        data-field="">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </span>
                                <input onKeyPress="return isNumberKey(event);" type="text" id="quantity" name="quantity" class="form-control input-number"
                                    value="1" min="1" max="100">
                                <span class="input-group-btn">
                                    <button id="tangSL" onclick="tinhsoluongtang();" type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                        data-field="">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default">
                                        Nhập số lượng
                                    </button>
                                </span>
                            </div>
                            <div class="space60">&nbsp;</div>
                            <button id="btnChonSize" type="button" class="btn btn-default">
                                Chọn size cho sản phẩm
                            </button>

                            <select name="" id="inpu" class="form-control" required="required">
                                <option value="">L</option>
                                <option value="">M</option>
                                <option value="">S</option>
                                <option value="">XL</option>
                            </select>

                            <script>
                                function isNumberKey(evt) {
                                    var charCode = (evt.which) ? evt.which : event.keyCode
                                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                                        return false;
                                    return true;
                                }
                                // click số lượng tăng
                                function tinhsoluongtang() {
                                    var dem = document.getElementById('quantity').value;
                                    a = parseInt(dem);
                                    a += 1;
                                    document.getElementById('quantity').value = a;
                                }
                                // click số lượng giảm
                                function tinhsoluonggiam() {

                                    var dem = document.getElementById('quantity').value;
                                    a = parseInt(dem);
                                    if (a != 0) {
                                        a -= 1;
                                        document.getElementById('quantity').value = a;
                                    }
                                    else
                                        dem = 0;
                                }
                            </script>
                        </div>
                        <div class="space60">&nbsp;</div>
                        <div class="space60">&nbsp;</div>
                        <div id="muaHangChiTiet">
                            <button type="button" class="btn btn-success btn-lg btn3d">
                                <span class="glyphicon glyphicon-shopping-cart"></span>Mua hàng
                            </button>
                            <button type="button" class="btn btn-primary btn-lg btn3d">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                            </button>
                        </div>

                    </div>
                    <!-- Xong thông tin chi tiết -->
                </div>
                <!-- Xong xử lý chi tiết sản phẩm -->

                <!-- <div role="tabpanel" class="tab-pane fade" id="thongsokythuat" aria-labelledby="thongsokythuat-tab">
                            <p> Các thông số kỹ thuật của sản phẩm </p>
                        </div> -->
                <!-- Nội dung thêm chi tiết -->
                <div style="text-align: center" role="tabpanel" class="tab-pane fade" id="huongdanthanhtoan" aria-labelledby="huongdanthanhtoan-tab">
                    <h2>Những mẫu bạn có thể phối cùng cực xinh, cực chất</h2>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="http://www.nawo.com/wp-content/uploads/2015/02/Sports-Hit-Superstar-80s-Vintage-Deluxe-Shoes_1.jpg" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="http://picture-cdn.wheretoget.it/x6t2hq-l-610x610-shoes-sneaker-adidas-sneakers+white-sweater-casual+winter-casual-winter+sweater-winter+outfits-sporty-sporty+chic-adidas+shoes-black+ripped+jeans-grey+sweater-adidas+superstars.jpg"
                            alt="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="http://media.gocom.vn/Systems/2015/06/15/mixdovoigiaythethaotheophongcachthoithuong11.jpg" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="http://shopquangkhanh.com/wp-content/uploads/2017/12/Ph%E1%BB%91i-%C4%91%E1%BB%93-ch%E1%BA%A5t-nh%C6%B0-sao-v%E1%BB%9Bi-gi%C3%A0y-adidas-1.jpg"
                            alt="">
                    </div>
                </div>
                <!-- xong nội dung thêm chi tiết -->
                <!-- Nội dung bình luận -->
                <div role="tabpanel" class="tab-pane fade" id="binhluan" aria-labelledby="binhluan-tab">


                    <div class="col-xs-12 col-md-12">
                        <!-- text nhập bình luận -->
                        <div class="well">
                            <h4>Viết bình luận ...
                                <span class="glyphicon glyphicon-pencil"></span>
                            </h4>
                            <form role="form">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Gửi</button>
                            </form>
                        </div>
                        <!-- Xong text nhập bình luận -->
                        <!-- Comment -->
                        <div class="col-xs-12 col-md-12">
                            <div class="noiDungBinhLuan" class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://sohanews.sohacdn.com/thumb_w/660/2017/photo1486969199024-1486969199175-0-32-308-529-crop-1486969281069.jpg"
                                        alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading tenbinhluan">Huỳnh Văn Thùy
                                        <small id="ngayBinhLuan">August 25, 2014 at 9:30 PM</small>
                                    </h4>
                                </div>
                                <span>Thằng mô làm ra trang web ni ngon quá</span>
                            </div>
                        </div>
                        <!-- Xong comment -->
                        <div class="space10">&nbsp;</div>
                        <!-- Comment -->
                        <div class="col-xs-12 col-md-12">

                            <div class="noiDungBinhLuan" class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://dapxexuyenviet.com/files/tin/686/jpg/65-dieu-con-trai-mong-muon-o-con-gai.jpg" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading tenbinhluan">Trần Quang Tân
                                        <small id="ngayBinhLuan">August 25, 2014 at 9:30 PM</small>
                                    </h4>
                                </div>
                                <span>Anh Tân làm đó, có vấn đề chi k?</span>
                            </div>

                        </div>
                        <!-- Xong comment -->

                    </div>
                </div>

            </div>
            <!-- Xong nội dung bình luận -->
        </div>
    </div>
</div>
</div>

@include('giaodien/quytrinh') 
@include('giaodien/loicamon')
@include('giaodien/cuoitrang')


<!-- Xong nội dung trang con -->
<!-- /////////////////////// -->
@endsection

<!-- Xong nội dung -->
