@extends('giaodien/master') @section('noidung') @section('title') Sửa thông tin @endsection
<!-- nội dung -->
@section('css') @endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<!-- Kiểm soát đường dẫn -->
<div class="container">
    <div class="row" style="margin: 5% 0% 2% 0%;">
        <div id="bc1" class="btn-group btn-breadcrumb">
            <a href="trangchu" class="btn btn-default">
                <i class="fa fa-home"></i>
            </a>
            <a href="trangchu" class="btn btn-default">
                <div>Home</div>
            </a>
            <a href="suathongtin" class="btn btn-default">
                <div>Sửa cá nhân</div>
            </a>
        </div>
    </div>
    <hr>
</div>
<!-- Kiểm soát trang -->


<!-- /////////////////////// -->
<!--    Nội dung trang con   -->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Thông tin hiển thị
                </div>
                <div class="panel-body">
                    @if($user->img != "")
                    <a class="thumbnail">
                        <img src="uploads/users/{{$user->img}}" style="display: block; max-width: 100%;height: auto;">
                    </a>
                    @else
                    <a class="thumbnail">
                        <img src="http://placehold.it/500x300" style="display: block; max-width: 100%;height: auto;">
                    </a>
                    @endif
                    <center>
                        <p>
                            <b>{{$user->hoten}}</b>
                        </p>
                    </center>
                    <p style="font-size: 14px;">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        </i> {{$user->email}}
                    </p>
                    <p style="font-size: 14px;">
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                        </i> {{$user->sodienthoai}}
                    </p>
                    <p style="font-size: 14px;">
                        <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                        </i> {{$user->ngaysinh}}
                    </p>
                    <p style="font-size: 14px;">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        </i> {{$xaPhuong->tendaydu}} - {{$quanHuyen->tendaydu}} - {{$tinhTP->tendaydu}}
                    </p>
                </div>

            </div>
        </div>
        <div class="col-md-9 col-sm-9">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <b>CHỈNH SỬA THÔNG TIN CÁ NHÂN</b>
                </div>
                <div class="panel-body">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div id="ketquamk" class="alert alert-success" hidden></div>
                        <div id="ketquamksai" class="alert alert-danger" hidden></div>
                        <!-- <form> -->
                        <center>
                            <h3>ĐỔI MẬT KHẨU</h3>
                        </center>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Mật khẩu cũ</label>
                                    <input onkeydown="nhanNhapMK();" id="mkcu" type="text" class="form-control" placeholder="Nhập mật khẩu cũ" required>
                                </div>
                                <div class=" form-group">
                                    <label class="control-label ">Mật khẩu mới</label>
                                    <input id="mkmoi" type="text" class="form-control" placeholder="Nhập mật khẩu mới">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Nhập lại mật khẩu mới</label>
                                    <input id="nhaplaimk" type="text" class="form-control " placeholder="Nhập lại mật khẩu mới">
                                    <span id="loikhongtrung" style="color: brown"></span>
                                </div>

                                <div class="form-group">
                                    <button onclick="LuuMatKhau();" class="btn btn-success" type="button">Lưu lại</button>
                                    <button onclick="XoaNhapMK();" class="btn btn-default" type="button">Xóa nhập</button>
                                    <!-- <button class="btn btn-danger" type="button">Hủy bỏ</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                    <div class="col-md-3 "></div>
                    <div class="col-md-12">
                        @if(Session::has('loianh'))
                        <div class="alert alert-danger">{{Session::get('loianh')}}</div>
                        @endif 
                        <hr style="width: 100%; color: black; height: 4px; background-color:#d9edf7;">
                        <center>
                            <h3>THAY ĐỔI THÔNG TIN</h3>
                        </center>
                    </div>
                    <form action="suathongtin" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6 ">
                            <div class="form-group ">
                                <label class="control-label ">Họ và tên</label>
                                <input type="text " class="form-control" name="hoten" id="hoten" placeholder="Nhập tên hiển thị" value="{{$user->hoten}}">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Tên đăng nhập</label>
                                <input type="text " class="form-control" name="tendangnhap" id="tendangnhap" placeholder="Nhập tên đăng nhập" value="{{$user->tendangnhap}}">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Email</label>
                                <input type="text " class="form-control" name="email" id="email" placeholder="Nhập địa chỉ email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label>Tỉnh - Thành Phố </label>
                                <select name="tinh" id="tinh" onchange="ChonQuanHuyen(this.value);" class="form-control">
                                    <option value="{{$tinhTP->id}}">{{$tinhTP->tendaydu}}</option>
                                    @foreach($tinhTPAll as $tpAll)
                                    <option value="{{$tpAll->id}}">{{$tpAll->tendaydu}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="luuquanhuyen" class="form-group">
                                <label>Quận - Huyện </label>
                                <select name="huyen" id="huyen" onchange="ChonXaPhuong(this.value);" class="form-control">
                                    <option value="{{$quanHuyen->id}}">{{$quanHuyen->tendaydu}}</option>
                                    @foreach($quanAll as $quan)
                                    <option value="{{$quan->id}}">{{$quan->tendaydu}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="luuxaphuong" class="form-group">
                                <label>Xã - Phường</label>
                                <select name="xa" id="xa" class="form-control">
                                    <option value="{{$xaPhuong->id}}">{{$xaPhuong->tendaydu}}</option>
                                    @foreach($xaAll as $xa)
                                    <option value="{{$xa->id}}">{{$xa->tendaydu}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Ngày sinh</label>
                                <input type="date" class="form-control" name="ngaysinh" id="ngaysinh" data-date-format="DD MMMM YYYY" placeholder="Nhập ngày sinh" value="{{$user->ngaysinh}}">
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select class="form-control" name="gt" id="gt">
                                    @if($user->gioitinh != "Nam")
                                    <option>Nữ</option>
                                    <option>Nam</option>
                                    @else
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Số điện thoại</label>
                                <input type="text " class="form-control" name="sdt" id="sdt" placeholder="Nhập số điện thoại" value="{{$user->sodienthoai}}">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Nghề nghiệp</label>
                                <input type="text " class="form-control" name="nghenghiep" id="nghenghiep" placeholder="Nhập công việc hiện tại" value="{{$user->nghenghiep}}">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Sở thích</label>
                                <input type="text " class="form-control" name="sothich" id="sothich" placeholder="Nhập sở thích" value="{{$user->sothich}}">
                            </div>
                            <div class="form-group ">
                                <label class="control-label">Giới thiệu bản thân</label>
                                <textarea class="form-control rounded-0" name="exampleFormControlTextarea2" id="exampleFormControlTextarea2" rows="3">{{$user->gioithieubanthan}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label class="control-label ">Chọn ảnh đại diện</label>
                                @if($user->img != "")
                                <img src="uploads/users/{{$user->img}}" id="profile-img-tag" width="500px" style="margin-bottom: 10%;" /> @else
                                <img src="http://via.placeholder.com/280x500" id="profile-img-tag" width="500px" style="margin-bottom: 10%;" /> @endif
                                <input type="file" name="file" id="profile-img">
                                @if($errors->has('file'))
                                <p>{{$errors->first('file')}}</p>
                                @endif
                            </div>
                            <div style="text-align: center; margin-top: 10%;" class="form-group ">
                                <button class="btn btn-success" type="submit">Lưu lại</button>
                                <button class="btn btn-default" type="reset">Xóa nhập</button>
                                <!-- <button class="btn btn-danger" type="button">Hủy bỏ</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
</script> @section('script')
<script src="giaodien/js/suathongtin.js"></script> @endsection
<!-- Xong nội dung trang con -->
<!-- /////////////////////// -->

@include('giaodien/cuoitrang')

<!-- Xong nội dung -->
@endsection