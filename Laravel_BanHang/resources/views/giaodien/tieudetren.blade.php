<div id="kiemtraxoagiohang" class="modal in" style="display: none; margin-top: 10%;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center><h2>Xóa toàn bộ giỏ hàng?</h2></center>
                    <div class="row">
                        <div class="col-12-xs text-center">
                            <a class="btn btn-success btn-md" style="color: white" href="xoatoanbogiohang">Xác nhận</a>
                            <button onclick="HuyXoaGioHang();" class="btn btn-danger btn-md">Hủy bỏ</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<header id="header">
    <!-- Phần Slide -->
    <div class="container" id="Slide">
        <div class="row">
            <div class="col-md-12">
                <div class="jR3DCarouselGallery"></div>
            </div>
        </div>
    </div>
    <!-- xong phần Slide-->
    <!-- Nút tìm kiếm -->
    <div id="nhomTimKiemHang" class="row">
        <div class="container">
            <div class="col-xs-12 col-md-3">
                <p class="textLogo" id="thegioimuasam">{{$trangchushare->tieudetrai}}</p>
            </div>
            <div id="searchForm">
                <form method="POST" action="trangchu/timkiem" name="timkiem" enctype="multipart/form-data">
                    @csrf()
                    <div id="searchbox" class="col-xs-12 col-md-5">
                        <div class="input-group">
                            <div class="input-group-btn search-panel">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span id="search_concept">Danh mục</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    @foreach($loaispallshare as $lspas)
                                    <li>
                                        <a href="{{$lspas->id}}">{{$lspas->ten}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <input type="hidden" name="search_param" value="all" id="search_param">
                            <input type="text" class="form-control" name="keyword" placeholder="Nhập vào sản phẩm bạn muốn tìm kiếm">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Giỏ hàng -->
            <div class="col-xs-12 col-md-4" id="hieuunggiohang">
                <div id="hieuungchogio" class="nhomGiohang">
                    <span id="iconLienHe" class="glyphicon glyphicon-phone-alt"> {{$trangchushare->sodienthoai}}</span>
                    <p></p>
                    <span id="iconLienHe" class="glyphicon glyphicon-envelope"> {{$trangchushare->email}}</span>

                </div>
                <div id="gio">
                    <span id="gioHang" class="glyphicon glyphicon-shopping-cart beta-select">
                        <span id="count">@if(Session::has('cart')){{Session('cart')->totalQty}} @else 0 @endif
                        </span>
                    </span>
                    <div class="beta-dropdown cart-body">

                        @if(Session::has('cart')) @foreach($product_cart as $product)
                        <div class="cart-item">
                            <!-- Nút sửa -->
                            <!-- <a class="cart-item-edit" href="xoamotgiohang/{{$product['item']['id']}}">
                                <i class="fa fa-edit" style="font-size:20px"></i>
                            </a> -->
                            <!-- Xong nút sửa -->
                            <!-- Nút xóa giỏ hàng -->
                            <a class="cart-item-delete" href="xoagiohang/{{$product['item']['id']}}">
                                <i class="fa fa-trash-o" style="font-size:20px"></i>
                            </a>
                            <!-- Xong nút xóa -->
                            <div class="media">
                                <a class="pull-left" href="trangcon_spkhac.html">
                                    <img style="width: 50px; height: 50px;" src="uploads/sanpham/{{ $product['item']['img'] }}" alt="">
                                </a>
                                <div class="media-body">
                                    <span class="cart-item-title">{{ $product['item']['ten'] }}</span>

                                    <span class="cart-item-amount">
                                        <span>@if($product['item']['khuyenmai'] > 0) {{number_format($product['item']['giagoc']-($product['item']['giagoc']*$product['item']['khuyenmai'])/100)}}
                                            ({{$product['soluong']}}) @else {{number_format($product['item']['giagoc'])}}
                                            ({{$product['soluong']}}) @endif </span>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="cart-caption">
                            <div style="padding: 2% 0 0 2%; font-size: 1.4em;" class="cart-total text-right">
                                <a style="float: right;" onclick="ChonXoaGioHang();">
                                    <span class="fa fa-bitbucket"></span>
                                </a>
                                <span style="float: left;" class="cart-total-value">
                                    <b>Tổng tiền: {{ number_format(Session('cart')->totalPrice)}} vnđ</b>
                                </span>
                            </div>
                            <div class="clearfix"></div>

                            <div class="center">
                                <div class="space10">&nbsp;</div>
                                <a href="dathang" class="btn btn-default">Đặt hàng
                                    <i class="fa fa-hand-o-left"></i>
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Xong giỏ hàng -->
        </div>
    </div>
    <!-- Xong nút tìm kiếm -->
</header>
<script>
function ChonXoaGioHang() {
    document.getElementById('kiemtraxoagiohang').style.display = 'inline'; 
}

function HuyXoaGioHang() {
    document.getElementById('kiemtraxoagiohang').style.display = 'none';     
}
</script>