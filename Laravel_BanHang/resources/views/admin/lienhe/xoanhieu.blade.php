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

        .icon-and-text-button-demo span {
            font-weight: bold;
        }
        
        .mr {
            margin-right: 10px !important;
        }
        
        .row .card .header {
            min-height: 60px;
        }
    </style>
@endsection

@section('content')
<section class="content" id="content">
    <div class="container-fluid">
        <div class="block-header">
            <center>
                <h1>
                    TÊN BẢNG
                </h1>
            </center>
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="col-md-5">
                            <p style="font-size: 2em;">DANH SÁCH</p>
                        </div>
                        <div class="icon-and-text-button-demo">
                            <button class="btn btn-success btn-lg waves-effect" type="button" onclick="window.location.href = '#Lưu'"><i class="material-icons">save</i>
                                <span>LƯU LẠI</span>
                            </button>
                            <button class="btn bg-brown btn-lg waves-effect" type="button" onclick="window.location.href = '#ScriptChonTatCa'"><i class="material-icons">save</i>
                                <span>CHỌN TẤT CẢ</span>
                            </button>
                            <button class="btn btn-danger btn-lg waves-effect" type="button" onclick="window.location.href = '#Hủy'"><i class="material-icons">cancel</i>
                                <span>HỦY BỎ</span>
                            </button>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>TenCot1</th>
                                        <th>TenCot2</th>
                                        <th>TenCot3</th>
                                        <th>TenCot4</th>
                                        <th>TenCot5</th>
                                        <th>Chọn xóa</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>TenCot1</th>
                                        <th>TenCot2</th>
                                        <th>TenCot3</th>
                                        <th>TenCot4</th>
                                        <th>TenCot5</th>
                                        <th>Chọn xóa</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>12 </td>
                                        <td>
                                            <center>
                                                <input id="md_checkbox_22" class="filled-in chk-col-pink" type="checkbox">
                                                <label for="md_checkbox_22"></label>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
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
                        alert('Thay câu alert này bằng câu dưới để đi đến route xóa. Sau khi xử lý xong trả về thẻ script delete cuối trang');
                        // window.location.href = "/" + id;
                    } else {
                        swal("Dữ liệu của bạn không thay đổi!");
                    }
                });
        }
    </script>

    <!-- script trả về khi xóa thành công -->
    <!-- <script>
        swal({
            title: "Xóa dữ liệu thành công!",
            timer: 3000,
            showConfirmButton: false,
            icon: "success",
        })
    </script> -->
@endsection