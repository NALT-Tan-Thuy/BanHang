@extends('giaodien/master') @section('noidung') @section('title') Trang sản phẩm @endsection @section('css')
<link rel="stylesheet" href="{{ asset('giaodien/css/sanphamkhac.css')}}"> @endsection
<style>
    #danhmuctieude {
        text-transform: uppercase;
        text-align: center;
        font-weight: bolder;
        color: #076474;
    }
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
            <a href="sanpham/{{ $idloaisp->id }}" class="btn btn-default">
                <div>{{$idloaisp->ten}}</div>
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
                            <a id="danhmuctieude" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Danh mục {{$idloaisp->ten}}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tbody>
                                    @foreach($tensanpham as $tsp)
                                    <tr>
                                        <td>
                                            <a href="sanpham/{{ $idloaisp->id }}/{{ $tsp->id }}">
                                                <span class="glyphicon glyphicon-pencil text-primary"></span>
                                                {{$tsp->ten}}
                                            </a>
                                            <!-- <span class="badge">10</span> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <span class="glyphicon glyphicon-th"> </span> SẢN PHẨM KHÁC</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tbody>
                                    @foreach($tatcaloaisp as $tclsp)
                                    <tr>
                                        <td>
                                            <a class="fa fa-share-square-o" href="sanpham/{{$tclsp->id}}"> {{$tclsp->ten}} </a>
                                            <!-- <span class="label label-success">NEW</span> -->
                                        </td>
                                    </tr>
                                    @endforeach
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
                            <b>Những tỉnh thành cung cấp sỉ</b>
                        </button>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">

                            @foreach($tinhthanh as $t_tp)
                            <div class="checkbox checkbox-success">
                                <input type="checkbox">
                                <label for="checkbox1">
                                    {{$t_tp->tendaydu}}
                                </label>
                            </div>
                            @endforeach

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
                            <b>Loại hàng đang giảm giá</b>
                        </button>
                    </div>

                    <div id="collapseFour" class="collapse in" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <?php $dem=0 ?> @foreach($tatcasanpham as $tcsp)
                                    <?php if($dem >=24) break;?>
                                    <tr>
                                        <td>
                                            <a class="fa fa-tag" href="chitietsp/{{$tcsp->id}}" style="margin-left: 10%; color: #076474;"> {{$tcsp->ten}} </a>
                                            <!-- <span class="label label-success">NEW</span> -->
                                        </td>
                                    </tr>
                                    <?php $dem++ ?> @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- xong hàng tương tự -->

            </div>
        </div>
        <!-- hiển thị sản phẩm -->
        <div class="col-sm-9 col-md-9">
            @if(Session::has('tbthemhangthanhcong'))
            <div class="alert alert-success"><center>{{Session::get('tbthemhangthanhcong')}}</center></div>
            @endif
            <div class="well">
<!-- 
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <select name="" id="input" class="form-control">
                        <option value=""> Lọc theo giá </option>
                        <option value=""> 100 - 200 </option>
                        <option value=""> 300 - 500</option>
                        <option value=""> >500</option>
                    </select>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <select name="" id="input" class="form-control">
                        <option value="">Theo cở</option>
                        <option value=""> L </option>
                        <option value=""> M </option>
                        <option value=""> S </option>
                    </select>
                </div> -->
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <h4>Tìm thấy <span id="soluongchitiet">{{ $sanphamtheoloai->count() }}</span> sản phẩm</h4>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <select name="" id="loctheogia" class="form-control">
                        <option value="0-0"> Lọc theo giá </option>
                        <option value="0-100000"> Dưới 100.000 </option>
                        <option value="100000-200000"> 100.000 - 200.000 </option>
                        <option value="300000-500000"> 300.000 - 500.000</option>
                        <option value="500000-2147483547"> Trên 500.000</option>
                    </select>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <select name="" id="loctheoten" class="form-control">
                        <option value="0-0">Sắp xếp</option>
                        <option value="ASC"> Tên từ A - Z </option>
                        <option value="DESC"> Tên từ Z - A </option>
                    </select>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <input type="hidden" id="idloai" value="{{ $idloai }}">
                    <button type="button" class="btn btn-primary" onclick="locSP();">Lọc sản phẩm</button>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin:0">
                    <hr style="margin-bottom: 10px;;">
                </div>
                <div class="space60">&nbsp;</div>

                <!-- Nội dung sản phẩn -->
                <div class="row" id="ajaxSanPham">
                    <?php $i =0;?> @foreach($sanphamtheoloai as $sptl)
                    <?php $i++;?> @if($sptl->khuyenmai == 0)
                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="chitietsp/{{$sptl->id}}">
                                    <img height="200px;" src="uploads/sanpham/{{$sptl->img}}" alt="">
                                </a>
                            </div>
                            <div class="single-item-body">
                                <p class="single-item-title">{{$sptl->ten}}</p>
                                <p class="single-item-price">
                                    <span>{{number_format($sptl->giagoc)}} đ</span>
                                </p>
                            </div>
                            <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="javascript:void(0)">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="beta-btn primary" href="chitietsp/{{$sptl->id}}">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    @else
                    <div class="col-sm-3">
                        <div class="single-item">
                            <div class="ribbon-wrapper">
                                <div class="ribbon sale">Giảm giá</div>
                            </div>
                            <div class="single-item-header">
                                <a href="chitietsp/{{$sptl->id}}">
                                    <img height="200px;" src="uploads/sanpham/{{$sptl->img}}" alt="">
                                </a>
                            </div>
                            <div class="single-item-body">
                                <p class="single-item-title">{{$sptl->ten}}</p>
                                <p class="single-item-price">
                                    <span class="flash-sale">{{number_format($sptl->giagoc-($sptl->giagoc*$sptl->khuyenmai)/100)}} đ</span>
                                </p>
                            </div>
                            <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="javascript:void(0)">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="beta-btn primary" href="chitietsp/{{$sptl->id}}">Chi tiết
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <?php if($i == 4){
                        echo '<div class="space60">&nbsp;</div>';
                        $i=0;
                    }
                    ?> @endforeach

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
@include('giaodien/quytrinh') @include('giaodien/loicamon') @include('giaodien/cuoitrang')

<!-- Xong nội dung -->
<script>
    console.log(document.getElementById('idloai').value);
    function locSP(){
        console.log(document.getElementById('loctheogia').value);
        var arr = [
            document.getElementById('loctheogia').value, 
            document.getElementById('loctheoten').value,
            document.getElementById('idloai').value
            ];
        if ((document.getElementById('loctheogia').value == "0-0") && (document.getElementById('loctheoten').value == "0-0")) {
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('soluongchitiet').innerHTML = this.responseText.split("<!--")[1].split("-->")[0];;
                    document.getElementById("ajaxSanPham").innerHTML = this.responseText;
                }
            };
            
            xmlhttp.open("GET","trangchu/ajaxLocSanPhamTheoLoai/" + arr, true);
            xmlhttp.send();
        }
    }
</script>
@endsection