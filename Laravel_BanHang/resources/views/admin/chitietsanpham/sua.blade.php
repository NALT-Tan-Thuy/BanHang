@extends('admin.layout.index') @section('linkcssTren')
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
<link href="admin/plugins/nouislider/nouislider.min.css" rel="stylesheet" /> @endsection @section('linkcssDuoi')
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
@endsection @section('content')
<section class="content" id="content">
    <div class="container-fluid">
        <div class="block-header">
            <center>
                <h1>
                    CHI TIẾT SẢN PHẨM
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
                            <form action="">
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Nhập tên chi tiết sản phẩm</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">format_color_text</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập tên chi tiết sản phẩm" type="text" name="Ten" value="{{ $chitietsanpham->ten}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Nhập tên chi tiết sản phẩm</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">format_color_text</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập tên chi tiết sản phẩm" type="text" name="Ten" value="{{ $chitietsanpham->ten}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Sản phẩm</h2>
                                    <select class="form-control show-tick" name="TinhTP">
                                        <option value="">Chọn sản phẩm</option>
                                        @foreach ($sanpham as $sp) @if ($chitietsanpham->id == $sp->id_sanpham)
                                        <option value="{{ $sp->id }}" selected>{{ $sp->ten }}</option>
                                        @else
                                        <option value="{{ $sp->id }}">{{ $sp->ten }}</option>
                                        @endif @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <h2 class="card-inside-title">Nhập số</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">format_list_numbered</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập..." type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h2 class="card-inside-title">Nhập số</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">format_list_numbered</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập..." type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h2 class="card-inside-title">Nhập số</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">format_list_numbered</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập..." type="number">
                                        </div>
                                    </div>
                                </div>
                                {{--
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Nổi bật</h2>
                                    <div class="demo-radio-button">
                                        <input class="with-gap" id="radio_1" type="radio" value="0" name="NoiBat" @if ( $chitietsanpham->noibat == "0") {{ "checked" }} @endif>
                                        <label for="radio_1">Không</label>
                                        <input class="with-gap" id="radio_2" type="radio" value="1" name="NoiBat" @if ( $chitietsanpham->noibat == "1") {{ "checked" }} @endif>
                                        <label for="radio_2">Có</label>
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Nhập text</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">format_color_text</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập..." type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Nhập số</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">format_list_numbered</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập..." type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Chọn ngày</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Username" type="date">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h2 class="card-inside-title">Textarea</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize auto-growth" placeholder="Điền nội dung ENTER để xuống dòng" style="overflow: hidden; overflow-wrap: break-word; height: 32px;"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h2 class="card-inside-title">Chọn ảnh</h2>
                                    <div class="form-group">
                                        <input type="file" name="file" id="profile-img">
                                        <img src="" id="profile-img-tag" width="500px" style="display: block; margin-left: auto; margin-right: auto;" />
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary btn-lg waves-effect" type="submit">LƯU</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-danger btn-lg waves-effect" type="submit">HỦY</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn bg-brown btn-lg waves-effect" type="reset">XÓA TEXT</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# FORM -->
    </div>
</section>
@endsection @section('script')
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
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#profile-img").change(function () {
        readURL(this);
    });
</script>
@endsection