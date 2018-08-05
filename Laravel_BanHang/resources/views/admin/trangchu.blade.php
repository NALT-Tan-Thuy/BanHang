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
            margin: 74px 0px 0 220px
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
            <!-- <div class="block-header">
                <center>
                    <h1>
                        Trang chủ
                    </h1>
                </center>
            </div> -->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <!-- <div class="header">
                            <div class="col-md-7">
                                <p style="font-size: 2em;">Giao diện trang chủ</p>
                            </div>
                        </div> -->
                        <div class="body">
                                <img src="uploads/admin/admin.jpg" alt="" width="100%" height="525px">
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
                        alert(
                            'Thay câu alert này bằng câu dưới để đi đến route xóa. Sau khi xử lý xong trả về thẻ script delete cuối trang'
                        );
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