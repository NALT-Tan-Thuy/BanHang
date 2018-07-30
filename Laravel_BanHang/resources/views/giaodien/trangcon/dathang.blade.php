@extends('giaodien/main') @section('noidung') @section('title') Đặt hàng @endsection @section('css')
<link rel="stylesheet" href="{{ asset('giaodien/css/dathang.css')}}"> 
<!-- Font chư đặt hàng -->
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<!-- Chữ mua hàng ngay -->
<link href="https://fonts.googleapis.com/css?family=Bangers|Mitr" rel="stylesheet"> 
@endsection

<!-- Nội dung chính của trang-->
@include('giaodien/tieudetren') @include('giaodien/tieudeduoi')
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
                <div>Đặt hàng</div>
            </a>
        </div>
    </div>
</div>
<!-- Kiểm soát trang -->



<!-- /////////////////////// -->
<!--    Nội dung trang con   -->

<!-- Phần đặt hàng -->
<div class="container">
    <div id="contentDatHang">

        <form action="#" method="post" class="beta-form-checkout">
            <div class="row">
                <div class="col-sm-6 thongTinHang">
                    <h4>Đặt hàng</h4>
                    <div class="space20">&nbsp;</div>

                    <div class="form-group row">
                        <!-- Default input -->
                        <label class="col-sm-3 col-form-label">Họ và tên*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Nhập họ và tên">
                        </div>
                    </div>

                    <div class="form-block">
                        <label>Giới tính </label>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%">
                        <span style="margin-right: 10%">Nam</span>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%">
                        <span>Nữ</span>

                    </div>

                    <div class="form-group row">
                        <!-- Default input -->
                        <label class="col-sm-3 col-form-label">Email*</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Nhập vào email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- Default input -->
                        <label class="col-sm-3 col-form-label">Số điện thoại*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Nhập vào số điện thoại">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Tỉnh - thành phố </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Quận - huyện tương ứng </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group row">
                        <!-- Default input -->
                        <label class="col-sm-3 col-form-label">Địa chỉ*</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="Nhập vào chính sát địa chỉ nhà">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Ghi chú</label>
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>

                    <div class="your-order-head">
                        <h5>Chọn thanh toán</h5>
                    </div>

                    <div class="your-order-body">
                        <ul class="payment_methods methods">
                            <li class="payment_method_bacs">
                                <input onchange="ChuyenTagThanhToan();" id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD"
                                    checked="checked" data-order_button_text="">
                                <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                                <div class="payment_box payment_method_bacs" style="display: block;">
                                    Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
                                </div>
                            </li>

                            <li class="payment_method_cheque">
                                <input onchange="ChuyenTagThanhToan();" id="payment_method_cheque" type="radio" class="input-radio" name="payment_method"
                                    value="ATM" data-order_button_text="">
                                <label for="payment_method_cheque">Chuyển khoản </label>
                                <div class="payment_box payment_method_cheque" style="display: none;">
                                    Chuyển tiền đến tài khoản sau:
                                    <br>- Số tài khoản: 11909938649
                                    <br>- Chủ TK: Huỳnh Văn Thùy
                                    <br>- Ngân hàng Đông Á, chi nhánh Quảng Nam
                                    <br>
                                    <br>Hoặc
                                    <br>- Số tài khoản: 123 456 789
                                    <br>- Chủ TK: Trần Quang Tân
                                    <br>- Ngân hàng Agribank, chi nhánh Quảng Trị
                                </div>
                            </li>

                        </ul>
                    </div>
                    <script>
                        function ChuyenTagThanhToan() {
                            var check = document.getElementById('payment_method_cheque');
                            var hienthiATM = document.getElementsByClassName('payment_box payment_method_cheque');
                            var hienthiThanhToan = document.getElementsByClassName('payment_box payment_method_bacs');
                            if (check.checked == true) {
                                hienthiATM[0].style.display = "block";
                                hienthiThanhToan[0].style.display = "none";
                            }
                            else {
                                hienthiATM[0].style.display = "none";
                                hienthiThanhToan[0].style.display = "block";
                            }
                        }

                    </script>

                    <div id="btnDatHang" class="text-center">
                        <button type="submit" class="beta-btn primary">ĐẶT HÀNG
                            <span class="glyphicon glyphicon-check"></span>
                        </button>
                    </div>

                </div>



                <div id="dathangform" class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head">
                            <h5>Đơn hàng của bạn</h5>
                        </div>
                        <div class="your-order-body">
                            <div class="your-order-item">
                                <div>
                                    <!--  one item	 -->
                                    <div id="sanphamdatmua" class="media">
                                        <div class="col-xs-12 col-md-3">
                                            <img src="http://makeitlast.se/wp-content/uploads/2015/05/208336716_1fcd5810-ca05-47e1-b137-752da3da58ec.jpg" alt="" class="pull-left">
                                        </div>
                                        <div class="media-body">
                                            <p class="font-large">Giày Adidas Supperstar</p>
                                            <p class="color-gray your-order-info">Giá:
                                                <span id="giasptren">200.000 đồng</span>
                                            </p>
                                            <span class="color-gray your-order-info">Số lượng: 2</span>
                                            <span id="size" class="color-gray your-order-info">Size: 41</span>
                                        </div>
                                    </div>
                                    <!-- end one item -->
                                    <!--  one item	 -->
                                    <div id="sanphamdatmua" class="media">
                                        <div class="col-xs-12 col-md-3">
                                            <img src="https://giayxuatkhauhn.com/wp-content/uploads/2017/09/Gi%C3%A0y-Sneakers-PUMA-Suede-da-l%E1%BB%99n-VNXK-11.jpg"
                                                alt="" class="pull-left">
                                        </div>
                                        <div class="media-body">
                                            <p class="font-large">Giày nam Sneakers Puma da lộn</p>
                                            <p class="color-gray your-order-info">Giá:
                                                <span id="giasptren">200.000 đồng</span>
                                            </p>
                                            <span class="color-gray your-order-info">Số lượng: 1</span>
                                            <span id="size" class="color-gray your-order-info">Size: 41</span>
                                        </div>
                                    </div>
                                    <!-- end one item -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="your-order-item">
                                <div class="pull-left">
                                    <p class="your-order-f18">Tổng tiền:</p>
                                </div>
                                <div class="pull-right">
                                    <h5 class="color-black">400.000 đồng</h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                    <!-- .your-order -->
                </div>
            </div>
        </form>
    </div>
    <!-- #content -->
</div>
<!-- .container -->
<!-- Xong phần đặt hàng -->
<!-- Xong nội dung trang con -->
<!-- /////////////////////// -->


<!-- Xong nội dung 5 chứa sản phẩm phù hợp -->
@include('giaodien/quytrinh') @include('giaodien/loicamon')
@include('giaodien/cuoitrang')

<!-- Xong nội dung -->
@endsection