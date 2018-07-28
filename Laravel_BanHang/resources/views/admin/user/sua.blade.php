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
                    THÀNH VIÊN
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
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf()
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Tên đăng nhập</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập tên đăng nhập" type="text" value="{{ $user->id }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Họ và tên</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập họ và tên" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Email</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập email" type="email" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Mật khẩu</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">format_color_text</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập Mật khẩu" type="password">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Giới tính</h2>
                                    <div class="demo-radio-button ">
                                        <input name="group1" class="with-gap" id="radio_1" type="radio" checked>
                                        <label for="radio_1">Nam</label>
                                        <input name="group1" class="with-gap" id="radio_2" type="radio">
                                        <label for="radio_2">Nữ</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Ngày sinh</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Số điện thoại</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập số điện thoại" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Nghề nghiệp</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">format_color_text</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập email" type="text" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h2 class="card-inside-title">Tỉnh/thành phố</h2>
                                    <select class="form-control show-tick" name="tinhtp" onchange="hienThiQuanHuyen(this.value)">
                                        <option value=" ">Chọn tỉnh/thành phố</option>
                                        @foreach ($tinhtp as $tinhtp)
                                        <option value="{{ $tinhtp->code }}">{{ $tinhtp->name_with_type }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 " id="quanhuyen">
                                    <h2 class="card-inside-title ">Quận/huyện/thị xã</h2>
                                    <select class="form-control show-tick" name="QuanHuyen" onchange="hienThiXaPhuong(this.value)">
                                        <option>Chọn quận/huyện/thị xã</option>
                                        <!-- <option>Lựa chọn 2</option>
                                            <option>Lựa chọn 3</option> -->
                                    </select>
                                </div>
                                <div class="col-md-4" id="xaphuong">
                                    <h2 class="card-inside-title ">Xã/phường/thị trấn</h2>
                                    <select class="form-control show-tick ">
                                        <option>Chọn xã/phường/thị trấn</option>
                                        <!-- <option>Lựa chọn 2</option>
                                            <option>Lựa chọn 3</option> -->
                                    </select>
                                </div>
                                <div class="col-md-6 ">
                                    <h2 class="card-inside-title ">Nghề nghiệp</h2>
                                    <div class="input-group ">
                                        <span class="input-group-addon ">
                                            <i class="material-icons ">format_color_text</i>
                                        </span>
                                        <div class="form-line ">
                                            <input class="form-control " placeholder="Nhập email " type="text " value=" ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <h2 class="card-inside-title ">Textarea</h2>
                                    <div class="form-group ">
                                        <div class="form-line ">
                                            <textarea rows="3 " class="form-control no-resize auto-growth
                                    " placeholder="Điền nội dung ENTER để xuống dòng " style="overflow: hidden; overflow-wrap: break-word;
                                    height: 32px; "></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <h2 class="card-inside-title ">Chọn ảnh</h2>
                                    <div class="form-group ">
                                        <input type="file " name="file " id="profile-img ">
                                        <img src=" " id="profile-img-tag " width="500px " style="display: block; margin-left:
                                    auto; margin-right: auto; " />
                                    </div>
                                </div>
                                <div class="col-md-3 "></div>
                                <div class="col-md-2 ">
                                    <button class="btn btn-primary btn-lg waves-effect " type="submit ">LƯU</button>
                                </div>
                                <div class="col-md-2 ">
                                    <button class="btn btn-danger btn-lg waves-effect " type="submit ">HỦY</button>
                                </div>
                                <div class="col-md-2 ">
                                    <button class="btn bg-brown btn-lg waves-effect " type="reset ">XÓA TEXT</button>
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
@endsection @section('script')

<script>
    function hienThiQuanHuyen(str) {
        if (str == "") {
            document.getElementById("quanhuyen").innerHTML = "";
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
                document.getElementById("quanhuyen").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "admin/ajax/getQuanHuyen/" + str, true);
        xmlhttp.send();
    }
</script>

<script>
    function hienThiXaPhuong(str) {
        // console.log(str);
        if (str == "") {
            document.getElementById("xaphuong").innerHTML = "";
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
                document.getElementById("xaphuong").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "admin/ajax/getXaPhuong/" + str, true);
        xmlhttp.send();
    }
</script>
<!-- Custom Js -->
<script src="admin/js/basic-form-elements.js "></script>

<!-- Autosize Plugin Js -->
<script src="admin/plugins/autosize/autosize.js "></script>

<!-- Moment Plugin Js -->
<script src="admin/plugins/momentjs/moment.js "></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js "></script>

<script type="text/javascript ">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#profile-img ").change(function () {
        readURL(this);
    });
</script>
@endsection