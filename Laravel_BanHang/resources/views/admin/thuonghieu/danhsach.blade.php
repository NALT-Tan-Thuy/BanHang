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
                        THUONG HIỆU
                    </h1>
                </center>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="col-md-7">
                                <p style="font-size: 2em;">DANH SÁCH</p>
                            </div>
                            <div class="icon-and-text-button-demo">
                                <button class="btn btn-primary btn-lg waves-effect" type="button" onclick="window.location.href = 'admin/thuonghieu/them'"><i class="material-icons">add_box</i>
                                        <span>THÊM</span>
                                    </button>
                                <button class="btn bg-brown btn-lg waves-effect" type="button" onclick="window.location.href = '#XoaNhieu'"><i class="material-icons">delete</i>
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
                                            <th>Tên thương hiệu</th>
                                            <th>Sửa - Xóa</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên thương hiệu</th>
                                            <th>Sửa - Xóa</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($thuonghieu as $th)
                                        <tr>
                                            <td>{{ $th->id }}</td>
                                            <td>{{ $th->ten }}</td>
                                            <td>
                                                <a href="admin/thuonghieu/sua/{{ $th->id }}">
                                                    <button type="button" class="btn btn-success waves-effect mr"><i class="material-icons">edit</i>
                                                    </button>
                                                </a>
                                                <button type="button" class="btn bg-brown waves-effect" onclick="Delete({{ $th->id }});"><i class="material-icons">delete</i>
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
                        window.location.href = "admin/thuonghieu/xoa/" + id;
                    } else {
                        swal("Dữ liệu của bạn không thay đổi!");
                    }
                });
        }
    </script>
@endsection