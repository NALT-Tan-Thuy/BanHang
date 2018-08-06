@extends('giaodien/master') @section('noidung') @section('title') Đặt hàng @endsection @section('css')
<link rel="stylesheet" href="{{ asset('giaodien/css/dathang.css')}}">
<!-- Font chư đặt hàng -->
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<!-- Chữ mua hàng ngay -->
<link href="https://fonts.googleapis.com/css?family=Bangers|Mitr" rel="stylesheet"> @endsection

<!-- Nội dung chính của trang-->
<!-- Kiểm soát đường dẫn -->
<div class="container">
    <div class="row" style="margin: 5% 0% 2% 0%;">
        <div id="bc1" class="btn-group btn-breadcrumb">
            <a href="trangchu.html" class="btn btn-default">
                <i class="fa fa-home"></i>
            </a>
            <a href="javascript:void(0)" class="btn btn-default">
                <div>Danh mục sản phẩm</div>
            </a>
            <a href="javascript:void(0)" class="btn btn-default">
                <div>Đặt hàng</div>
            </a>
        </div>
    </div>
</div>
<!-- Kiểm soát trang -->



<!-- /////////////////////// -->
<!--    Nội dung trang con   -->

<!-- Phần đặt hàng -->
@if(Session::has('dathangthanhcong'))
<div style="font-size: 1.8em; font-weight: bolder; text-align: center;" class="alert alert-danger" class="alert alert-info">{{Session::get('dathangthanhcong')}}</div>
@endif
<div class="container">
    <div id="contentDatHang">
        <form action="thanhtoandathang" method="POST" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-6 thongTinHang">
                    <h4 style="text-align: center">
                        <b>Đặt hàng</b>
                    </h4>
                    <div class="space20">&nbsp;</div>

                    <div class="form-group row">
                        <!-- Default input -->
                        <label class="col-sm-3 col-form-label">Họ và tên*</label>
                        <div class="col-sm-9">
                            <input name="tenkhachhang" id="tenkhachhang" type="text" class="form-control" placeholder="Nhập họ và tên" required="required">
                        </div>
                    </div>

                    <div class="form-block">
                        <label>Giới tính </label>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="Nam" checked="checked" style="width: 10%">
                        <span style="margin-right: 10%">Nam</span>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="Nữ" style="width: 10%">
                        <span>Nữ</span>

                    </div>

                    <div class="form-group row">
                        <!-- Default input -->
                        <label class="col-sm-3 col-form-label">Email*</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="inputEmail3" id="inputEmail3" placeholder="Nhập vào email" required="required">
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- Default input -->
                        <label class="col-sm-3 col-form-label">Số điện thoại*</label>
                        <div class="col-sm-9">
                            <input name="sdt" id="sdt" type="text" class="form-control" placeholder="Nhập vào số điện thoại" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Tỉnh - Thành Phố *</label>
                        <select name="tinh" id="tinh" onchange="ChonQuanHuyen(this.value);" class="form-control" required="required">
                            <option value="0">Lựa chọn Tỉnh - Thành Phố</option>
                            @foreach($tinh_thanhpho as $tp)
                            <option value="{{$tp->id}}">{{$tp->tendaydu}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="luuquanhuyen" class="form-group">
                        <label>Quận - Huyện* </label>
                        <select name="huyen" id="huyen" onchange="ChonXaPhuong(this.value);" class="form-control" required="required">
                        </select>
                    </div>
                    <div id="luuxaphuong" class="form-group">
                        <label>Xã - Phường*</label>
                        <select name="xa" id="xa" class="form-control" required="required">
                        </select>
                        @if($errors->has('xa'))
                        <p style="color: red;">{{$errors->first('xa')}}</p>
                        @endif
                    </div>

                    <div class="form-group row">
                        <!-- Default input -->
                        <label class="col-sm-3 col-form-label">Địa chỉ*</label>
                        <div class="col-sm-12">
                            <input name="diachi" id="diachi" type="text" class="form-control" placeholder="Nhập vào chính xác địa chỉ nhà" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Ghi chú</label>
                        <textarea name="ghichu" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
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
                                    Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng. Vui lòng nhập địa chỉ
                                    chính sát.
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
                    <div id="btnDatHang" class="text-center">
                        @if(Session::has('cart'))
                        <button type="submit" class="beta-btn primary">ĐẶT HÀNG
                            <span class="fa fa-truck"></span>
                        </button>
                        @else
                        <button type="" class="beta-btn primary" disabled>TIẾP TỤC MUA SẮM
                            <span href="trangchu" class="fa fa-cart-plus"></span>
                        </button>
                        @endif
                    </div>

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

                <div id="dathangform" class="col-sm-6">
                    <div class="your-order">
                        <div style="text-align: center" class="your-order-head">
                            <h5>
                                <b>Đơn hàng của bạn</b>
                            </h5>
                        </div>
                        @if(Session::has('cart'))
                        <div class="your-order-body">
                            <div class="your-order-item">
                                <div>
                                    <!--  one item	 -->
                                    @foreach($product_cart as $product)
                                    <div id="sanphamdatmua" class="media">
                                        <input type="hidden" name="masp" value="{{ $product['item']['id'] }}">
                                        <div class="col-xs-12 col-md-3">
                                            <img src="uploads/sanpham/{{ $product['item']['img'] }}" alt="" class="pull-left">
                                        </div>
                                        <div class="media-body">
                                            <p class="font-large">{{ $product['item']['ten'] }}</p>
                                            <p class="color-gray your-order-info">Giá:
                                                <span id="giasptren">@if($product['item']['khuyenmai'] > 0) {{number_format($product['item']['giagoc']-($product['item']['giagoc']*$product['item']['khuyenmai'])/100)}}
                                                    @else {{number_format($product['item']['giagoc'])}} @endif
                                                </span>
                                            </p>
                                            <span class="color-gray your-order-info">Số lượng: {{$product['soluong']}}</span>
                                            <a href="xoagiohang/{{$product['item']['id']}}" id="size" class="fa fa-trash-o"></a>
                                        </div>
                                    </div>
                                    <!-- end one item -->
                                    @endforeach
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="your-order-item">

                                <div class="pull-left">
                                    <p class="your-order-f18">Tổng tiền:</p>
                                </div>
                                <div class="pull-right">
                                    <h5 class="color-black">{{ number_format(Session('cart')->totalPrice)}} vnđ</h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        @else
                        <div class="alert alert-info">
                            <b>GIỎ HÀNG CHƯA CÓ SẢN PHẨM NÀO!</b>
                        </div>
                        @endif
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

<script>

    // Ajax cho nút huyện - xã
    function ChonQuanHuyen(id) {
        var tenTinh = document.getElementById('tinh');
        var xa = document.getElementById('xa');
        var huyen = document.getElementById('huyen');
        if (tenTinh.value == "") {
            huyen.value = "";
            huyen.disabled = true;
        }
        xa.value = "";
        xa.disabled = true;
        if (window.XMLHttpRequest) {
            var xhttp = new XMLHttpRequest();
        }
        else {
            var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('luuquanhuyen').innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "chonquanhuyen/" + id, true);
        xhttp.send();
    }
    // chọn xã phường
    function ChonXaPhuong(id) {
        var xa = document.getElementById('xa');
        xa.disabled = false;
        document.getElementById('luuxaphuong');
        if (window.XMLHttpRequest) {
            var xhttp = new XMLHttpRequest();
        }
        else {
            var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('luuxaphuong').innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "chonxaphuong/" + id, true);
        xhttp.send();
    }

</script>

<!-- Xong nội dung 5 chứa sản phẩm phù hợp -->
@include('giaodien/quytrinh') @include('giaodien/loicamon') @include('giaodien/cuoitrang')

<!-- Xong nội dung -->
@endsection