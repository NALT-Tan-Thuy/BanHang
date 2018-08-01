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
                        TIÊU ĐỀ 1
                    </h1>
            </center>
        </div>
        <!-- FORM -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            THÊM
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <form action="admin/chitietsanpham/them" method="POST" enctype="multipart/form-data">
                                @csrf()
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Tên chi tiết sản phẩm</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                        <i class="material-icons">format_color_text</i>
                                                    </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập tên chi tiết sản phẩm" type="text" name="Ten" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <h2 class="card-inside-title">Sản phẩm</h2>
                                    <select class="form-control show-tick" name="id_SanPham" required>
                                        <option value="">Chọn sản phẩm</option>
                                        @foreach ($sanpham as $sp) 
                                        <option value="{{ $sp->id }}">{{$sp->ten }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Tiêu đề thông tin chi tiết</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">format_color_text</i>
                                            </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập tiêu đề thông tin chi tiết" type="text" name="TieuDeThongTin" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Nổi bật</h2>
                                        <div class="demo-radio-button">
                                            <input class="with-gap" id="radio_1" type="radio" value="1" name="NoiBat" checked>
                                            <label for="radio_1">Có</label>
                                            <input class="with-gap" id="radio_2" type="radio" value="0" name="NoiBat">
                                            <label for="radio_2">Không</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <h2 class="card-inside-title">Giá gốc</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                        <i class="material-icons">format_list_numbered</i>
                                                    </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập giá" type="number" name="GiaGoc" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h2 class="card-inside-title">Khuyến mãi (%)</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                        <i class="material-icons">format_list_numbered</i>
                                                    </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập khuyến mãi" type="number" name="KhuyenMai" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h2 class="card-inside-title">Giá bán</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                        <i class="material-icons">format_list_numbered</i>
                                                    </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="" type="number" disabled value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h2 class="card-inside-title">Mô tả</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize auto-growth" placeholder="Điền nội dung ENTER để xuống dòng" style="overflow: hidden; overflow-wrap: break-word; height: 32px;" value="" name="MoTa"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h2 class="card-inside-title">Chọn ảnh</h2>
                                    <div class="form-group">
                                        <input type="file" name="file" id="profile-img" required>
                                       <img src="" id="profile-img-tag" width="500px" style="display: block; margin-left: auto; margin-right: auto;" />
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary btn-lg waves-effect" type="submit">LƯU LẠI</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-danger btn-lg waves-effect" type="button" onclick="window.location.href = 'admin/chitietsanpham/danhsach'">HỦY BỎ</button>
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