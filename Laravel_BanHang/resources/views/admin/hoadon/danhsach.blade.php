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
                    HÓA ĐƠN
                </h1>
            </center>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="col-md-7">
                            <h2>DANH SÁCH</h2>
                        </div>
                        <div class="icon-and-text-button-demo">
                            <button class="btn bg-deep-purple btn-lg waves-effect" type="button" onclick="window.location.href = '#ChưaThanhToan'">
                                <i class="material-icons">list</i>
                                <span>CHƯA THANH TOÁN</span>
                            </button>
                            <button class="btn bg-brown btn-lg waves-effect" type="button" onclick="window.location.href = '#XoaNhieu'">
                                <i class="material-icons">delete</i>
                                <span>XÓA NHIỀU</span>
                            </button>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ngày lập</th>
                                        <th>Tên khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>Thanh toán</th>
                                        <th>Chi tiết</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ngày lập</th>
                                        <th>Tên khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>Thanh toán</th>
                                        <th>Chi tiết</th>
                                        <th>Xóa</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($hoadon as $hd)
                                    <tr>
                                        <td>{{ $hd->id }}</td>
                                        <td>{{ $hd->created_at }}</td>
                                        <td>{{ $hd->hoten }}</td>
                                        
                                        <td>{{ $hd->diachi }} - {{ $hd->xa }} - {{ $hd->huyen }} - {{ $hd->tinh }}</td>
                                        <td>
                                            <div id="thanhtoan-{{ $hd->id }}">
                                                @if ($hd->thanhtoanhoadon == 0)
                                                <button type="button" class="btn btn-danger waves-effect" onclick="thayDoiThanhToanHoaDon({{ $hd->id }}, 0);">
                                                Thanh toán
                                                </button> 
                                            @else
                                                <button type="button" class="btn btn-default waves-effect" onclick="thayDoiThanhToanHoaDon({{ $hd->id }}, 1);">
                                                    Đã thanh toán
                                                </button>
                                            @endif
                                            </div>
                                        </td>
                                        <td>
                                            <a href="admin/chitiethoadon/danhsach/{{ $hd->id }}"><button type="button" class="btn btn-success waves-effect">
                                            Chi tiết
                                        </button></a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn bg-brown waves-effect" onclick="Delete({{ $hd->id }});">
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
    function Delete(id) {
        swal({
                title: "Bạn có chắc chắn muốn xóa dữ liệu?",
                text: "Sau khi xóa, bạn sẽ không thể phục hồi dữ liệu này!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((isConfirm) => {
                if (isConfirm) {
                    window.location.href = "admin/hoadon/xoa/" + id;
                } else {
                    swal("Dữ liệu của bạn không thay đổi!");
                }
            });
    }

</script>

<script>
    function thayDoiThanhToanHoaDon(id, trangthai){
        console.log(document.getElementById('thanhtoan-' + 1));
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
                if (id == "") {
                    document.getElementById("thanhtoan-" + id).innerHTML = "";
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
                        document.getElementById("thanhtoan-" + id).innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "admin/ajax/getThayDoiThanhToanHoaDon/" + id  + "/" + trangthai, true);
                xmlhttp.send();
            }
        });        
    }
</script>




<!-- script trả về khi xóa thành công -->
@if (session('thongbaoxoa'))
<script>
    swal({
        title: "Xóa dữ liệu thành công!",
        timer: 3000,
        icon: "success",
    })
</script>
@endif

<!-- script trả về khi sửa thành công -->
@if (session('thongbaosua')))
<script>
    swal({
        title: "{{ session('thongbaosua') }}!",
        timer: 3000,
        icon: "success",
        button: "OK",
    })
</script>
@endif
<!-- script trả về khi sửa thành công -->
@if (session('thongbaothem')))
<script>
    swal({
        title: "{{ session('thongbaothem') }}!",
        timer: 3000,
        icon: "success",
        button: "OK",
    })
</script>
@endif
@endsection