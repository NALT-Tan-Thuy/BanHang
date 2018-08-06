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
                    CÀI ĐẶT TRANG CHỦ
                </h1>
            </center>
        </div>
        <!-- FORM -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <form action="admin/trangchu/sua" method="POST" enctype="multipart/form-data">
                                @csrf()
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Tên shop</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    <i class="material-icons">format_color_text</i>
                                                </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập tên shop" type="text" value="{{ $trangchu->tenshop }}" name="TenShop" required
                                                    disabled="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">email</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                            <i class="material-icons">format_color_text</i>
                                                        </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập email" type="email" value="{{ $trangchu->email }}" name="Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Tiêu đề trái</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                            <i class="material-icons">format_color_text</i>
                                                        </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập tiêu đề trái" type="text" value="{{ $trangchu->tieudetrai }}" name="TieuDeTrai"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Tiêu đề phải</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                            <i class="material-icons">format_color_text</i>
                                                        </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập tiêu đề  dưới" type="text" value="{{ $trangchu->tieudeduoi }}" name="TieuDeDuoi"
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
                                                            <i class="material-icons">format_color_text</i>
                                                        </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập số điện thoại" type="text" value="{{ $trangchu->sodienthoai }}" name="SoDienThoai"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Địa chỉ</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                            <i class="material-icons">format_color_text</i>
                                                        </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập địa chỉ" type="text" value="{{ $trangchu->diachi }}" name="DiaChi" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Giờ mở cửa</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                            <i class="material-icons">format_color_text</i>
                                                        </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập giờ mở cửa" type="text" value="{{ $trangchu->giomodongcua }}" name="GioMoCua"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="card-inside-title">Tiêu đề cảm ơn</h2>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                            <i class="material-icons">format_color_text</i>
                                                        </span>
                                            <div class="form-line">
                                                <input class="form-control" placeholder="Nhập tiêu đề cảm ơn" type="text" value="{{ $trangchu->tieudecamon }}" name="TieuDeCamOn"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h2 class="card-inside-title">Nội dung cảm ơn</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize auto-growth" placeholder="Điền nội dung ENTER để xuống dòng" style="overflow: hidden; overflow-wrap: break-word; height: 32px;"
                                                value="" name="NoiDungCamOn" required>{{ $trangchu->noidungcamon }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <button id="luu" class="btn btn-primary btn-lg waves-effect an" type="submit">LƯU</button>
                                </div>
                                <div class="col-md-2">
                                    <button id="chinhsua" class="btn bg-brown btn-lg waves-effect" type="button" onclick="HiddenButton();">CHỈNH SỬA</button>
                                </div>
                                <div class="col-md-2">
                                    <button id="huy" class="btn btn-danger btn-lg waves-effect an" type="button" onclick="window.location.href='admin/trangchu/sua'">HỦY</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# FORM -->
    </div>
    <style>
        .an {
            opacity: 0;
            visibility: hidden;
        }

        .hien {
            opacity: 1;
            visibility: visible;
        }

        #chinhsua {
            position: absolute;
        }
    </style>
    <script>
        var inp = document.getElementsByTagName('input');
        for(var i = 0; i < inp.length; i++){
            inp[i].setAttribute('disabled',"");
        }
        var textarea = document.getElementsByTagName('textarea');
        textarea[0].setAttribute('disabled',"");
        function HiddenButton(){
            var luu = document.getElementById('luu');
            var huy = document.getElementById('huy');
            var chinhsua = document.getElementById('chinhsua');
            luu.classList.add('hien');
            huy.classList.add('hien');
            chinhsua.classList.add('an');
            for(var i = 0; i < inp.length; i++){
                inp[i].removeAttribute('disabled');
            }
            textarea[0].removeAttribute('disabled');
        }
    </script>
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
@endsection