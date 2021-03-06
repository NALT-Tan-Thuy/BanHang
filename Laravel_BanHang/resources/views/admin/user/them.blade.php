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
                    THÀNH VIÊN
                </h1>
            </center>
        </div>
        <!-- FORM -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <p style="font-size: 1.8em; font-weight: bold;">THÊM NGƯỜI DÙNG</p>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <form action="admin/user/them" method="POST" enctype="multipart/form-data">
                                @csrf()
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Tên đăng nhập</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập tên đăng nhập" type="text" name="TenDangNhap" required>
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
                                            <input class="form-control" placeholder="Nhập họ và tên" type="text" value="" name="HoTen" required>
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
                                            <input class="form-control" placeholder="Nhập Mật khẩu" type="password" value="" name="MatKhau" id="matkhau" required>
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
                                            <input class="form-control" placeholder="Nhập lại mật khẩu" type="password" value="" name="NhapLaiMatKhau" id="matkhau" required>
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
                                            <input class="form-control" placeholder="Nhập email" type="email" value="" name="Email" required>
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
                                            <input class="form-control" placeholder="Nhập số điện thoại" type="text" value="" name="SoDienThoai" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Giới tính</h2>
                                    <div class="demo-radio-button ">
                                        <input class="with-gap" id="radio_1" type="radio" value="Nam" name="GioiTinh" checked>
                                        <label for="radio_1">Nam</label>
                                        <input class="with-gap" id="radio_2" type="radio" value="Nữ" name="GioiTinh">
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
                                            <input class="form-control" placeholder="" type="date" value="" name="NgaySinh" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Phân quyền</h2>
                                    <select class="form-control show-tick" name="PhanQuyen" required>
                                        <option value="">Chọn phân quyền</option>
                                        @foreach ($phanquyen as $key=>$value)
                                        <option value="{{ $value['phanquyen'] }}">{{ $value['phanquyen'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Nghề nghiệp</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">format_color_text</i>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Nhập nghề nghiệp" type="text" value="" name="NgheNghiep">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h2 class="card-inside-title">Tỉnh/thành phố</h2>
                                    <select class="form-control show-tick" name="TinhTP" onchange="hienThiQuanHuyen(this.value)">
                                        <option value="">Chọn tỉnh/thành phố</option>
                                        @foreach ($tinhtp as $tinhtp)
                                        <option value="{{ $tinhtp->id }}">{{ $tinhtp->tendaydu }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4" id="quanhuyen">
                                    <h2 class="card-inside-title ">Quận/huyện/thị xã</h2>
                                    <select class="form-control show-tick" name="QuanHuyen" onchange="hienThiXaPhuong(this.value)">
                                        <option value="">Chọn quận/huyện/thị xã</option>
                                    </select>
                                </div>
                                <div class="col-md-4" id="xaphuong">
                                    <h2 class="card-inside-title ">Xã/phường/thị trấn</h2>
                                    <select class="form-control show-tick" name="XaPhuong">
                                        <option value="">Chọn xã/phường/thị trấn</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <h2 class="card-inside-title">Sở thích</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize auto-growth
                                                    " placeholder="Điền nội dung ENTER để xuống dòng" style="overflow: hidden; overflow-wrap: break-word; height: 32px;"
                                                name="SoThich"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h2 class="card-inside-title">Giới thiệu bản</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize auto-growth
                                                        " placeholder="Điền nội dung ENTER để xuống dòng" style="overflow: hidden; overflow-wrap: break-word; height: 32px;"
                                                name="GioiThieuBanThan"></textarea>
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
                                    <button class="btn bg-brown btn-lg waves-effect" type="reset" onclick="xoaText();">XÓA TEXT</button>
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


<script>
    function hienThiQuanHuyen(str) {

        var xaphuong = document.getElementById("xaphuong");
        xaphuong.innerHTML =
            "\n <h2 class=\"card-inside-title \">Xã/phường/thị trấn</h2>\n <div class=\"btn-group bootstrap-select form-control show-tick\"><button type=\"button\" class=\"btn dropdown-toggle btn-default\" data-toggle=\"dropdown\" title=\"Chọn xã/phường/thị trấn\"><span class=\"filter-option pull-left\">Chọn xã/phường/thị trấn</span>&nbsp;<span class=\"bs-caret\"><span class=\"caret\"></span></span></button><div class=\"dropdown-menu open\"><ul class=\"dropdown-menu inner\" role=\"menu\"><li data-original-index=\"0\" class=\"selected\"><a tabindex=\"0\" class=\"\" style=\"\" data-tokens=\"null\"><span class=\"text\">Chọn xã/phường/thị trấn</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li></ul></div><select class=\"form-control show-tick\" tabindex=\"-98\">\n <option>Chọn xã/phường/thị trấn</option>\n </select></div>\n ";
        if (str == "") {
            document.getElementById("quanhuyen").innerHTML =
                "\n <h2 class=\"card-inside-title \">Quận/huyện/thị xã</h2>\n <div class=\"btn-group bootstrap-select form-control show-tick\"><button type=\"button\" class=\"btn dropdown-toggle btn-default\" data-toggle=\"dropdown\" title=\"Chọn quận/huyện/thị xã\"><span class=\"filter-option pull-left\">Chọn quận/huyện/thị xã</span>&nbsp;<span class=\"bs-caret\"><span class=\"caret\"></span></span></button><div class=\"dropdown-menu open\"><ul class=\"dropdown-menu inner\" role=\"menu\"><li data-original-index=\"0\" class=\"selected\"><a tabindex=\"0\" class=\"\" style=\"\" data-tokens=\"null\"><span class=\"text\">Chọn quận/huyện/thị xã</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li></ul></div><select class=\"form-control show-tick\" tabindex=\"-98\">\n <option>Chọn quận/huyện/thị xã</option>\n </select></div>\n ";
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
        
        if (str == "") {
            document.getElementById("xaphuong").innerHTML =
                "\n <h2 class=\"card-inside-title \">Xã/phường/thị trấn</h2>\n <div class=\"btn-group bootstrap-select form-control show-tick\"><button type=\"button\" class=\"btn dropdown-toggle btn-default\" data-toggle=\"dropdown\" title=\"Chọn xã/phường/thị trấn\"><span class=\"filter-option pull-left\">Chọn xã/phường/thị trấn</span>&nbsp;<span class=\"bs-caret\"><span class=\"caret\"></span></span></button><div class=\"dropdown-menu open\"><ul class=\"dropdown-menu inner\" role=\"menu\"><li data-original-index=\"0\" class=\"selected\"><a tabindex=\"0\" class=\"\" style=\"\" data-tokens=\"null\"><span class=\"text\">Chọn xã/phường/thị trấn</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li></ul></div><select class=\"form-control show-tick\" tabindex=\"-98\">\n <option>Chọn xã/phường/thị trấn</option>\n </select></div>\n ";
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
@endsection