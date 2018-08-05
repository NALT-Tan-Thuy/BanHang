@extends('giaodien/master') @section('noidung') @section('title') Chi tiết sản phẩm @endsection
<style>
    .btn3d {
        position: relative;
        top: -6px;
        border: 0;
        transition: all 40ms linear;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 2px;
        margin-right: 2px;
        color: white;
        font-size: 2.5em;
        font-family: 'Playfair Display', serif;
        font-family: 'Baloo Chettan', cursive;
    }

    .btn3d:hover {
        border: 3px double;
    }

    .btn3d:active:focus,
    .btn3d:focus:hover,
    .btn3d:focus {
        outline-style: none;
        outline: medium none;
    }

    .btn3d:active,
    .btn3d.active {
        top: 2px;
    }

    .btn3d.btn-primary {
        box-shadow: 0 0 0 1px #417fbd inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 8px 0 0 #4D5BBE, 0 8px 8px 1px rgba(0, 0, 0, 0.5);
        background-color: #4274D7;
    }

    .btn3d.btn-primary:active,
    .btn3d.btn-primary.active {
        box-shadow: 0 0 0 1px #417fbd inset, 0 0 0 1px rgba(255, 255, 255, 0.15) inset, 0 1px 3px 1px rgba(0, 0, 0, 0.3);
        background-color: #4274D7;
    }

    .btn3d.btn-success {
        box-shadow: 0 0 0 1px #31c300 inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 8px 0 0 #5eb924, 0 8px 8px 1px rgba(0, 0, 0, 0.5);
        background-color: #78d739;
    }

    .btn3d.btn-success:active,
    .btn3d.btn-success.active {
        box-shadow: 0 0 0 1px #30cd00 inset, 0 0 0 1px rgba(255, 255, 255, 0.15) inset, 0 1px 3px 1px rgba(0, 0, 0, 0.3);
        background-color: #78d739;
    }

    /* số lượng */

    #soLuong {
        font-size: 1.6em;

    }

    /* nút mua hàng */

    #muaHangChiTiet {
        text-align: center;
        margin-top: 30%;
    }

    #btnChonSize {

        width: 100%
    }

    #giaBan {
        color: rgb(255, 0, 0);
    }

    #giaGoc {
        text-decoration: line-through;
    }

    #thongTinChitiet {
        font-family: 'Playfair Display', serif;
        font-family: 'Baloo Chettan', cursive;
        font-family: 'Itim', cursive;
        font-family: 'Arima Madurai', cursive;
        font-family: 'Patrick Hand SC', cursive;
        font-family: 'Cormorant Infant', serif;
        font-family: 'Cormorant Upright', serif;
        font-family: 'Pridi', serif;
    }

    #thongTinChitiet h3 {
        color: rgb(8, 97, 109);
    }

    #tieuDeMoTa {
        color: rgb(41, 150, 105);
    }

    #luotThich {
        color: #001FFEE6;
        font-size: 1.3em;
    }

    /* Phần bình luận */

    .noiDungBinhLuan img {
        width: 64px;
        height: 64px;
    }

    .noiDungBinhLuan a {
        margin-right: 10px;
    }

    #ngayBinhLuan {
        font-style: italic;
    }

    .tenbinhluan {
        font-weight: bolder;
        color: #0d1f84;
    }

    /* Xong phần bình luận */
</style>
<!-- Nội dung chính của trang-->
<!-- Kiểm soát đường dẫn -->
<div class="container">
    <div class="row" style="margin: 5% 0% 2% 0%;">
        <div id="bc1" class="btn-group btn-breadcrumb">
            <a href="trangchu" class="btn btn-default">
                <i class="fa fa-home"></i>
            </a>
            <a href="sanpham/1" class="btn btn-default">
                <div>Danh mục sản phẩm</div>
            </a>
            </a>
            <a href="chitietsp/{{$chitietsp->id}}" class="btn btn-default">
                <div>Chi tiết sản phẩm</div>
            </a>
            <a class="btn btn-default">
                <div>{{$chitietsp->ten}}</div>
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
                                <a href="chitietsp/{{$chitietsp->id}}">
                                    <img src="uploads/sanpham/{{$chitietsp->img}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Xong hình sản phẩm -->
                    <!-- thông tin chi tiết -->
                    <form method="GET" action="themgiohangsl">
                        @csrf
                        <div id="thongTinChitiet" class="col-xs-12 col-md-7">
                            <h3 class="product-title">{{$chitietsp->ten}}</h3>
                            <input type="hidden" name="idSP" value="{{$chitietsp->id}}">
                            <div id="luotThich">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                <span>{{$chitietsp->luotthich}} lượt thích sản phẩm này.</span>
                            </div>
                            <p id="tieuDeMoTa">Mô tả</p>
                            <span>{{$chitietsp->mota}}</span>
                            <h2>GIÁ BÁN:
                                <span id="giaBan">{{number_format($chitietsp->giagoc-($chitietsp->giagoc*$chitietsp->khuyenmai)/100)}} đồng</span>
                            </h2>
                            <p id="giaGoc">Giá gốc: {{number_format($chitietsp->giagoc)}} đồng</p>

                            <div style="text-align: center" class="col-xs-12 col-md-6">
                                <div class="space60">&nbsp;</div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button id="giamSL" onclick="tinhsoluonggiam();" type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus"
                                            data-field="">
                                            <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    <input name="soluong" onKeyPress="return isNumberKey(event);" type="text" id="quantity" class="form-control input-number"
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

                                <select name="" id="inpu" class="form-control">
                                    <option value="">L</option>
                                    <option value="">M</option>
                                    <option value="">S</option>
                                    <option value="">XL</option>
                                </select>
                            </div>
                            <div class="space60">&nbsp;</div>
                            <div class="space60">&nbsp;</div>
                            <div id="muaHangChiTiet">
                                <button type="submit" class="btn btn-success btn-lg btn3d">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>Thêm hàng
                                </button>
                                <button type="button" class="btn btn-primary btn-lg btn3d">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Xong thông tin chi tiết -->
                </div>
                <!-- Xong xử lý chi tiết sản phẩm -->

                <!-- <div role="tabpanel" class="tab-pane fade" id="thongsokythuat" aria-labelledby="thongsokythuat-tab">
                            <p> Các thông số kỹ thuật của sản phẩm </p>
                        </div> -->
                <!-- Nội dung thêm chi tiết -->
                <div style="text-align: center" role="tabpanel" class="tab-pane fade" id="huongdanthanhtoan" aria-labelledby="huongdanthanhtoan-tab">
                    <h2>Những mẫu bạn có thể phối cùng cực xinh, cực chất</h2>
                    @if(count($ttchitiet) != 0) @foreach($ttchitiet as $ttct)

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="uploads/sanpham/{{$ttct->img}}" alt="">
                    </div>
                    <div class="space10">&nbsp;</div>
                    @endforeach @endif
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
                                @if(Auth::check())
                                <div class="form-group">
                                    <textarea id="noidungbl" class="form-control" rows="3"></textarea>
                                </div>
                                <button onclick="GoiBinhLuan( {{$chitietsp->id}} );" type="button" class="btn btn-primary">Gửi</button>
                                @else
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" disabled>Vui lòng đăng nhập tài khoản để được thực hiện tính năng này!</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" disabled>Gửi</button>
                                @endif
                            </form>
                        </div>
                        <!-- Xong text nhập bình luận -->
                        <div id="travebinhluan">
                            @if($tatcabinhluan != null) @foreach($tatcabinhluan as $bl)
                            <!-- Comment -->
                            <div class="col-xs-12 col-md-12">
                                <div class="noiDungBinhLuan" class="media">
                                    <a class="pull-left">
                                        <img class="media-object" src="uploads/users/{{$bl->img}}" alt=""> 
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading tenbinhluan">{{$bl->tendangnhap}}
                                            <small id="ngayBinhLuan">{{$bl->created_at}}</small>
                                        </h4>
                                    </div>
                                    <span>{{$bl->noidung}}</span>
                                </div>
                            </div>
                            <!-- Xong comment -->
                            <div class="space10">&nbsp;</div>
                            @endforeach @endif
                        </div>

                    </div>
                </div>

            </div>
            <!-- Xong nội dung bình luận -->
        </div>
    </div>
</div>
</div>
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
    function GoiBinhLuan(idsp) {
        @if(Auth::check())
        var binhluan = document.getElementById('noidungbl');
        if (binhluan.value == "" || binhluan.value == 'Bạn chưa đặt bình luận.') {
            binhluan.value = "Bạn chưa đặt bình luận.";
        }
        else {
            if (window.XMLHttpRequest) {
                var xhttp = new XMLHttpRequest();
            } else {
                var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('travebinhluan').innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "thembinhluansanpham/" + idsp + '/' + binhluan.value + '/' + {{ Auth:: user()-> id}}, true);
            xhttp.send();
            binhluan.value= "";
        }
        @endif
    }
</script> @include('giaodien/quytrinh') @include('giaodien/loicamon') @include('giaodien/cuoitrang')


<!-- Xong nội dung trang con -->
<!-- /////////////////////// -->
@endsection

<!-- Xong nội dung -->