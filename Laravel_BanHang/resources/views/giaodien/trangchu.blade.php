@extends('giaodien/main') @section('noidung')
<!-- Nội dung chính của trang-->
@section('title') Trang Chủ @endsection @include('giaodien/tieudetren') @include('giaodien/tieudeduoi')
<!-- phần đầu nội dung 1 -->
<!-- Kiểm soát đường dẫn -->
<div class="container">
    <div class="row">
        <div id="bc1" class="btn-group btn-breadcrumb">
            <a href="javascript:void(0)" class="btn btn-default">
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
                            @foreach($actionspnb as $act)
                            <div class="col-xs-4 left">
                                <div class="flex-item">
                                    <img class="img-responsive" src="uploads/sanpham/{{$act->img}}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="row">
                                @foreach($item1 as $act)
                                <div class="col-xs-4 left">
                                    <div class="flex-item">
                                        <img class="img-responsive" src="uploads/sanpham/{{$act->img}}" alt="">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            @foreach($item2 as $act)
                            <div class="col-xs-4 left">
                                <div class="flex-item">
                                    <img class="img-responsive" src="uploads/sanpham/{{$act->img}}" alt="">
                                </div>
                            </div>
                            @endforeach
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
                    <a href="javascript:void(0)" title="THƯƠNG HIỆU KINH DOANH">THƯƠNG HIỆU KINH DOANH</a>
                </h3>
                <ul class="list-group">
                    @foreach($thuonghieushare as $ths)
                    <li class="list-group-item">{{$ths->ten}}</li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon">
                    <i class="fa fa-mobile"></i>
                </div>
                <h3>
                    <a href="javascript:void(0)" title="LIÊN HỆ CHÚNG TÔI">LIÊN HỆ CHÚNG TÔI</a>
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
                    <a href="javascript:void(0)" title="ĐỊA CHỈ VÀ TRỢ GIÚP">THÔNG TIN TRỢ GIÚP</a>

                </h3>
                <p>Địa chỉ: {{$trangchushare->diachi}}</p>
                <p>Điện thoại: {{$trangchushare->sodienthoai}}</p>
                <p>Email: {{$trangchushare->email}}</p>
                <p>Mở cửa: {{$trangchushare->giomodongcua}}.</p>

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
                            <p>Tìm thấy {{count($sanphammoi)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row nhankq">
                            @foreach($sanphammoi as $spm)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if($spm->khuyenmai > 0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    <div class="single-item-header">
                                        <a href="chitietsp/{{$spm->id}}">
                                            <img height="250px;" src="uploads/sanpham/{{$spm->img}}" alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$spm->ten}}</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">{{number_format($spm->giagoc)}}đ</span>
                                            <span class="flash-sale">{{number_format(($spm->giagoc)-(($spm->giagoc)*($spm->khuyenmai))/100)}}đ</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="themgiohang/{{$spm->id}}">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitietsp/{{$spm->id}}">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                    @else
                                    <div class="ribbon-wrapper">
                                    </div>
                                    <div class="single-item-header">
                                        <a href="chitietsp/{{$spm->id}}">
                                            <img height="250px;" src="uploads/sanpham/{{$spm->img}}" alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$spm->ten}}</p>
                                        <p class="single-item-price">
                                            <span>{{number_format($spm->giagoc)}}đ</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="themgiohang/{{$spm->id}}">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitietsp/{{$spm->id}}">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                        <!-- <div class="clearfix"></div> -->
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div style="text-align: center;" class="row">{{$sanphammoi->appends(Request::all())->links() }}</div>
                    </div>
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
                        <div class="space40">&nbsp;</div>
                        <div class="row">
                            @foreach($sanphamkhuyenmai as $spkm)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    <div class="single-item-header">
                                        <a href="chitietsp/{{$spkm->id}}">
                                            <img height="250px;" src="uploads/sanpham/{{$spkm->img}}" alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$spkm->ten}}</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">{{number_format($spkm->giagoc)}}đ</span>
                                            <span class="flash-sale">{{number_format(($spkm->giagoc)-(($spkm->giagoc)*($spkm->khuyenmai))/100)}}đ</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="themgiohang/{{$spkm->id}}">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="beta-btn primary" href="chitietsp/{{$spkm->id}}">Chi tiết
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div style="text-align: center;" class="row">{{$sanphamkhuyenmai->appends(Request::all())->links() }}</div>
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
                            <select onchange="AjaxSpTuongUng(this.value);" id="pref-perpage" class="form-control">
                                @foreach($loaisanphamshare as $lsps)
                                <option value="{{$lsps->id}}">{{$lsps->ten}}</option>
                                @endforeach @foreach($loaispkhacshare as $lspks)
                                <option value="{{$lspks->id}}">{{$lspks->ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- form group [rows] -->
                        <div id="nhansanphamtuongung" class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-orderby">Sản phẩm tương ứng:</label>
                            <select onchange="TimSPTuongUng(this.value);" id="pref-orderby" class="form-control">
                                @foreach($sanphamshare as $sps) @if($sps->id_loaisanpham == 1)
                                <option value="{{$sps->id}}">{{$sps->ten}}</option>
                                @endif @endforeach
                            </select>
                        </div>
                        <!-- form group [order by] -->
                    </form>
                </div>
            </div>
        </div>
        <button id="timtatcasanpham" type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="glyphicon glyphicon-hand-right"></span> TÌM KIẾM MỌI THỨ TẠI ĐÂY
        </button>
    </div>
</div>
<!-- Xong nội dung 4 tìm kiếm sản phẩm tương ứng -->
<div class="space60">&nbsp;</div>
<!-- Nội dung 5 chứa sảm phẩm tìm phù hợp -->
<div id="nhansanphamtim" class="container">
    @foreach($sanphamngaunhien as $spnn)
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="my-list">
            <img src="uploads/sanpham/{{$spnn->img}}" alt="dsadas" />
            <h3>{{$spnn->ten}}</h3>
            <span>Giá gốc: {{number_format($spnn->giagoc)}} đ</span>
            <div class="offer">Giá khuyến mãi: {{number_format(($spnn->giagoc)-(($spnn->giagoc)*($spnn->khuyenmai))/100)}} đ</div>
            <div class="detail">
                <img src="uploads/sanpham/{{$spnn->img}}" alt="dsadas" />
                <a href="themgiohang/{{$spnn->id}}" class="btn btn-info">Mua ngay</a>
                <a href="chitietsp/{{$spnn->id}}" class="btn btn-info">Chi tiết</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<script>
    // Lấy sản phẩm tương ứng
    function AjaxSpTuongUng(id) {
        if (window.XMLHttpRequest) {
            var xhttp = new XMLHttpRequest();
        } else {
            var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('nhansanphamtim').innerHTML =
                    '<p class="alert alert-success" style="text-align: center">Vui lòng chọn sản phẩm tương ứng</p>';
                document.getElementById('nhansanphamtuongung').innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "sanphamtuongunghome/" + id, true);
        xhttp.send();
    }
    // tìm các sản phẩm tương ứng show ra
    function TimSPTuongUng(id) {
        if (window.XMLHttpRequest) {
            var xhttp = new XMLHttpRequest();
        } else {
            var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('nhansanphamtim').innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "timsptuongunghome/" + id, true);
        xhttp.send();
    }
</script>
<!-- Xong nội dung 5 chứa sản phẩm phù hợp -->
@include('giaodien/quytrinh') @include('giaodien/loicamon') @include('giaodien/cuoitrang')

<!-- Xong nội dung -->
@endsection