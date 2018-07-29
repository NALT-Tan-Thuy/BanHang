@extends('giaodien/main') @section('noidung') @section('title') Sửa thông tin @endsection
<!-- nội dung -->
@section('css') @endsection

<!-- Kiểm soát đường dẫn -->
<div class="container">
    <div class="row" style="margin: 5% 0% 2% 0%;">
        <div id="bc1" class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-default">
                <i class="fa fa-home"></i>
            </a>
            <a href="#" class="btn btn-default">
                <div>Home</div>
            </a>
            <a href="#" class="btn btn-default">
                <div>Trang cá nhân</div>
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
                    Tên đăng nhập
                </div>
                <div class="panel-body">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/500x300" style="display: block; max-width: 100%;height: auto;">
                    </a>
                    <center>
                        <p>
                            <b>Tên hiển thị</b>
                        </p>
                    </center>
                    <p style="font-size: 14px;">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        </i> tranquangtan@gmail.com
                    </p>
                    <p style="font-size: 14px;">
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                        </i> 01234565789
                    </p>
                    <p style="font-size: 14px;">
                        <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                        </i> 01/01/2001
                    </p>
                    <p style="font-size: 14px;">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        </i> Huế
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
                        <form action="#đổi mật khẩu">
                            <center>
                                <h3>ĐỔI MẬT KHẨU</h3>
                            </center>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Mật khẩu cũ</label>
                                        <input type="text" class="form-control" placeholder="Nhập mật khẩu cũ">
                                    </div>
                                    <div class=" form-group">
                                        <label class="control-label ">Mật khẩu mới</label>
                                        <input type="text " class="form-control " placeholder="Nhập mật khẩu mới ">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label ">Nhập lại mật khẩu mới</label>
                                        <input type="text " class="form-control " placeholder="Nhập lại mật khẩu mới ">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit">Lưu lại</button>
                                        <button class="btn btn-default" type="reset">Xóa nhập</button>
                                        <button class="btn btn-danger" type="button">Hủy bỏ</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 "></div>
                    <div class="col-md-12">
                        <hr style="width: 100%; color: black; height: 4px; background-color:#d9edf7;">
                        <center>
                            <h3>THAY ĐỔI THÔNG TIN</h3>
                        </center>
                    </div>
                    <form action="#Chinhsuakhac" method=" ">
                        <div class="col-md-6 ">
                            <div class="form-group ">
                                <label class="control-label ">Tên hiển thị</label>
                                <input type="text " class="form-control " placeholder="Nhập tên hiển thị ">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Nghề nghiệp</label>
                                <input type="text " class="form-control " placeholder="Nhập nghề nghiệp ">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Nghề nghiệp</label>
                                <input type="text " class="form-control " placeholder="Nhập nghề nghiệp ">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Nghề nghiệp</label>
                                <input type="text " class="form-control " placeholder="Nhập nghề nghiệp ">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Nghề nghiệp</label>
                                <input type="text " class="form-control " placeholder="Nhập nghề nghiệp ">
                            </div>

                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group ">
                                <label class="control-label ">Ngày sinh</label>
                                <input type="date " class="form-control " placeholder="Nhập ngày sinh ">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Ngày sinh</label>
                                <input type="date " class="form-control " placeholder="Nhập tên hiển thị ">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Nghề nghiệp</label>
                                <input type="text " class="form-control " placeholder="Nhập nghề nghiệp ">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Nghề nghiệp</label>
                                <input type="text " class="form-control " placeholder="Nhập nghề nghiệp ">
                            </div>
                            <div class="form-group ">
                                <label class="control-label ">Nghề nghiệp</label>
                                <input type="text " class="form-control " placeholder="Nhập nghề nghiệp ">
                            </div>
                            <div class="form-group ">
                                <button class="btn btn-success" type="submit">Lưu lại</button>
                                <button class="btn btn-default" type="reset">Xóa nhập</button>
                                <button class="btn btn-danger" type="button">Hủy bỏ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Xong nội dung trang con -->
<!-- /////////////////////// -->

@include('giaodien/cuoitrang')

<!-- Xong nội dung -->
@endsection