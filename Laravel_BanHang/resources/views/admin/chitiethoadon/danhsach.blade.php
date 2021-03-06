@extends('admin.layout.index') 
@section('linkcssTren')
<!-- JQuery DataTable Css -->
<link href="admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
@endsection
 
@section('linkcssDuoi')
<style>
    .sidebar {
        width: 220px;
    }

    section.content {
        margin: 100px 0px 0 220px
    }

    .navbar-nav .dropdown-menu {
        margin-top: 0px !important;
    }

    .mr {
        margin-right: 10px !important;
    }

    .icon-and-text-button-demo span {
        font-weight: bold;
    }

    .row .card .header {
        min-height: 60px;
    }
</style>
@endsection
 
@section('content')
<!-- Content -->
<section class="content" id="content">
    <div class="container-fluid">
        <div class="block-header">
            <center>
                <h1>
                    CHI TIẾT HÓA ĐƠN
                </h1>
            </center>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <!-- <center> -->
                        <h4>
                            THÔNG TIN KHÁCH HÀNG
                        </h4>
                        <!-- </center> -->
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Giới tính</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Loại hình thanh toán</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chitiethoadon as $cthd)
                                <tr>
                                    <td>{{ $cthd->hoten}}</td>
                                    <td>{{ $cthd->gioitinh }}</td>
                                    <td>{{ $cthd->email}}</td>
                                    <td>{{ $cthd->sodienthoai}}</td>
                                    <td>
                                        {{ $cthd->diachi }} - {{ $cthd->xa }} - {{ $cthd->huyen }} - {{ $cthd->tinh }}
                                    </td>
                                    <td>{{ $cthd->loaithanhtoan}}</td>
                                </tr>
                                @break @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="body">
                        <h4>
                            THÔNG TIN SẢN PHẨM
                        </h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Đơn giá</th>
                                        <th>Khuyến mãi</th>
                                        <th>Giá bán</th>
                                        <th>Số lượng</th>
                                        <th>Kích thước</th>
                                        <th>Thanh toán</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Đơn giá</th>
                                        <th>Khuyến mãi</th>
                                        <th>Giá bán</th>
                                        <th>Số lượng</th>
                                        <th>Kích thước</th>
                                        <th>Thanh toán</th>
                                        <th>Xóa</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($chitiethoadon as $cthd)
                                    <tr>
                                        <td>
                                            <img src="uploads/sanpham/{{ $cthd->img }}" alt="" width="170" height="100">
                                        </td>
                                        <td>{{ $cthd->ten }}</td>
                                        <td>{{ $cthd->giagoc }}</td>
                                        <td>{{ $cthd->khuyenmai }}</td>
                                        <td>{{ $cthd->khuyenmai }}</td>
                                        <td>{{ $cthd->soluong }}</td>
                                        <td>{{ $cthd->kichco }}</td>
                                        <td>
                                            <div id="cttt-{{ $cthd->id }}">
                                                @if ($cthd->thanhtoanhoadonchitiet == 0)
                                                <button type="button" class="btn btn-danger waves-effect" onclick="thayDoiThanhToan({{ $cthd->id }},{{ $cthd->id_hoadon }}, 0);">
                                                    Thanh toán
                                                </button> @else
                                                <button type="button" class="btn btn-default waves-effect" onclick="thayDoiThanhToan({{ $cthd->id }},{{ $cthd->id_hoadon }}, 1);">
                                                    Đã thanh toán
                                                </button> @endif
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn bg-brown waves-effect" onclick="Delete({{ $cthd->id }}, {{ $cthd->id_hoadon }});">
                                                <i class="material-icons">delete</i>
                                            </button>
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
    </div>
</section>
<!-- End Content -->
@endsection
 
@section('script')
<!-- Jquery DataTable Plugin Js -->
<script src="admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script src="admin/js/jquery-datatable.js"></script>
<script>
    // console.log(document.getElementById('cttt-7'));
    function Delete(idct, idhoadon) {
        swal({
                title: "Bạn có chắc chắn muốn xóa dữ liệu?",
                text: "Sau khi xóa, bạn sẽ không thể phục hồi dữ liệu này!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((isConfirm) => {
                if (isConfirm) {
                    window.location.href = "admin/chitiethoadon/xoa/" + idct + "/" + idhoadon;
                } else {
                    swal("Dữ liệu của bạn không thay đổi!");
                }
            });
    }

</script>
<script>
    function thayDoiThanhToan(idct, idhoadon, trangthai){
        //console.log("cttt-" + idct);
        var s;
        s = trangthai == 0 ? "Sau khi thay đổi: \"Thanh toán\" chuyển thành \"Đã thanh toán\"!" : "Sau khi thay đổi: \"Đã Thanh toán\" chuyển thành \"Thanh toán\"!";
        swal({
            title: "Bạn có chắc chắn muốn đổi thanh toán hóa đơn?",
            text: s,
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((isConfirm) => {
            if (isConfirm) {
                if (idct == "") {
                    document.getElementById("cttt-" + idct).innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) {
                    // Cho IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // Cho IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("cttt-" + idct).innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "admin/ajax/getThayDoiThanhToanChiTiet/" + idct + "/" + trangthai + "/" + idhoadon, true);
                xmlhttp.send();
            }
        });        
    }
</script>
@endsection