@extends('admin.layout.index')

@section('linkcssTren')
    <!-- Colorpicker Css -->
    <link href="admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />
    
    <!-- Dropzone Css -->
    <link href="admin/plugins/dropzone/dropzone.css" rel="stylesheet">
    
    <!-- Bootstrap Spinner Css -->
    <link href="admin/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
    
    <!-- Bootstrap Tagsinput Css -->
    <link href="admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    
    <!-- Bootstrap Select Css -->
    <link href="admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    
    <!-- noUISlider Css -->
    <link href="admin/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
@endsection
 
@section('linkcssDuoi')
    <style>
        .sidebar {
            width: 220px;
        }

        section.content {
            margin: 100px 15px 0 235px;
        }

        .navbar-nav .dropdown-menu {
            margin-top: 0px !important;
        }

        .navbar-header {
            width: 220px;
        }
    </style>
@endsection
 
@section('content')
<section class="content" id="content">
    <div class="container-fluid">
        <div class="block-header">
            <center>
                    <h1>
                        LIÊN HỆ
                    </h1>
            </center>
        </div>
        <!-- FORM -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                            <p style="font-size: 1.8em; font-weight: bold;">CHỈNH SỬA</p>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <form action="admin/lienhe/sua/{{ $lienhe->id }}" method="POST" enctype="multipart/form-data">
                                @csrf()
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Tên cơ sở</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    <i class="material-icons">format_color_text</i>
                                                </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập tên co sở" type="text" value="{{ $lienhe->tencoso }}" name="TenCoSo" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Người quản lý</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập tên người quản lý" type="text" value="{{ $lienhe->nguoiquanly }}" name="NguoiQuanLy"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Số điện thoại</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                            <i class="material-icons">phone</i>
                                                        </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập số điện thoại" type="text" value="{{ $lienhe->sodienthoai }}" name="SoDienThoai"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4"></div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary btn-lg waves-effect" type="submit">LƯU</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-danger btn-lg waves-effect" type="button" onclick="window.location.href = 'admin/lienhe/danhsach'">HỦY</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# FORM -->
    </div>
</section>
@endsection
 
@section('script')
    <!-- Custom Js -->
    <script src="admin/js/basic-form-elements.js "></script>

    <!-- Autosize Plugin Js -->
    <script src="admin/plugins/autosize/autosize.js "></script>

    <!-- Moment Plugin Js -->
    <script src="admin/plugins/momentjs/moment.js "></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js "></script>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#profile-img").change(function() {
            readURL(this);
        });
    </script>
    @if(count($errors) > 0)
    <script>
        var s = "";
            @foreach($errors->all() as $err)
                s += "{{ $err }}\n";
            @endforeach
            swal({
                title: "Lỗi",
                text: s,
                timer: 10000,
                icon: "error",
            });
    
    </script>
    @endif
@endsection