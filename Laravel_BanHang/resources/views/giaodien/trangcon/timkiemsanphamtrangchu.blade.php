@extends('giaodien/master') 
@section('noidung') 
@section('title') Tìm kiếm
@endsection
 
@section('css')
<link rel="stylesheet" href="{{ asset('giaodien/css/sanphamkhac.css')}}">
@endsection






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
                <span>
                    <i class="fa fa-home"></i>
                </span>Trang chủ
            </a>
            <a href="javascript:void(0);" class="btn btn-default">
                Tìm kiếm
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
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <span class="glyphicon glyphicon-th"> </span> SẢN PHẨM KHÁC</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tbody>
                                    @foreach($loaisanpham as $lsp)
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);" class="fa fa-share-square-o"> {{$lsp->ten}}</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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
                                <input id="idcheck2{{$t_tp->id}}" type="checkbox">
                                <label for="checkbox1">
                                    {{$t_tp->tendaydu}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="space60">&nbsp;</div>

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
                                    @foreach($tatcasanpham as $tcsp)
                                    <tr>
                                        <td>
                                            <a class="fa fa-tag" href="javascript:void(0);" style="margin-left: 10%; color: #076474;"> {{$tcsp->ten}} </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">

                <div class="well">
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
                    </div>
                    <div class="space60">&nbsp;</div>
                    <div class="row">
                        <?php $i =0;?> @foreach($chitietsanpham as $ctsp)
                        <?php $i++;?>
                        <div class="col-sm-3">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="javascript:void(0)">
                                        <img height="200px;" src="uploads/sanpham/{{$ctsp->img}}" alt="">
                                    </a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$ctsp->ten}}</p>
                                    <p class="single-item-price" style=" font-size: 16px;">
                                        @if ($ctsp->khuyenmai == 0)
                                        <span class="flash-sale" style="color:black">{{ number_format(round($ctsp->giagoc, -3), '0', '', '.') }}đ</span>
                                           @else
                                        <span class="flash-del">{{ number_format(round($ctsp->giagoc, -3), '0', '', '.') }}đ</span>
                                        <div class="ribbon-wrapper">
                                                <div class="ribbon sale">Giảm giá</div>
                                           </div>
                                        <span class="flash-sale">{{ number_format(round($ctsp->giagoc - $ctsp->giagoc * $ctsp->khuyenmai / 100, -3),
                                            '0', '', '.') }}đ</span> @endif
                                    </p>
                                </div>

                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="javascript:void(0)">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a class="beta-btn primary" href="javascript:void(0)">Chi tiết
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <?php if($i % 4 == 0){
                            echo '<div class="space60">&nbsp;</div>';
                        }
                        ?> @endforeach
                    </div>
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
    @include('giaodien/quytrinh')
    @include('giaodien/loicamon')
    @include('giaodien/cuoitrang')

    <!-- Xong nội dung -->
@endsection