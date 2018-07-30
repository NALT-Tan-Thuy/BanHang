@extends('giaodien/master') @section('noidung') @section('title') Quên mật khẩu @endsection
<!-- nội dung -->
@section('css')

@endsection

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
                            <p><b>Tên hiển thị</b></p>
                        </center>
                        <p style="font-size: 14px;"><i class="fa fa-envelope" aria-hidden="true"></i>
                            </i> tranquangtan@gmail.com
                        </p>
                        <p style="font-size: 14px;"><i class="fa fa-phone-square" aria-hidden="true"></i>
                            </i> 01234565789
                        </p>
                        <p style="font-size: 14px;"><i class="fa fa-birthday-cake" aria-hidden="true"></i>
                            </i> 01/01/2001
                        </p>
                        <p style="font-size: 14px;"><i class="fa fa-address-book" aria-hidden="true"></i>
                            </i> Huế
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <b>THÔNG TIN CÁ NHÂN</b>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <dl class="dl-horizontal">
                                <dt>Tên</dt>
                                <dd>Nguyễn A</dd>
                                <dt>Ngày sinh</dt>
                                <dd>01/01/2001</dd>
                                <dt>Nghề nghiệp: </dt>
                                <dd>ABCDEF</dd>
                                <dt>Giới tính </dt>
                                <dd>Nam</dd>
                                <dt>Email</dt>
                                <dd>email@gmail.com</dd>
                                <dt>Điện thoại</dt>
                                <dd>0123456789</dd>
                                <dt>Giới thiệu bản thân</dt>
                                <dd>Công cụ Internet Công cụ Internet Công cụ Internet Công cụ Internet Công cụ Internet </dd>
                                <dt>Sở thích</dt>
                                <dd>abc abc</dd>
                                <dt>Ngày tham gia</dt>
                                <dd>Created_at</dd>
                                <dt>Trang cá nhân</dt>
                                <dd>
                                    <a href="#linktrangdangdung">Link trang đang dùng</a>
                                </dd>
                            </dl>
                            <a href="sua_trangcanhan.html"><button class="btn btn-info">Chỉnh sửa thông tin cá nhân</button> </a>
                        </div>
                        <div class="col-md-4">
                            <a href="QuảngCáo" class="thumbnail"><img src="http://placehold.it/300x500" alt=""></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('giaodien/cuoitrang')

<!-- Xong nội dung -->
@endsection