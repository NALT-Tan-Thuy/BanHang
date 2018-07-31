@extends('giaodien/master') @section('noidung') @section('title') Trang cá nhân @endsection
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
                    <b>THÔNG TIN CÁ NHÂN</b>
                </div>
                <div class="panel-body">
                    <div class="col-md-8">
                        <dl class="dl-horizontal">
                            <dt>Tên</dt>
                            <dd>{{$user->hoten}}</dd>
                            <dt>Ngày sinh</dt>
                            <dd>{{$user->ngaysinh}}</dd>
                            <dt>Nghề nghiệp: </dt>
                            <dd>{{$user->nghenghiep}}</dd>
                            <dt>Giới tính </dt>
                            <dd>{{$user->gioitinh}}</dd>
                            <dt>Email</dt>
                            <dd>{{$user->email}}</dd>
                            <dt>Điện thoại</dt>
                            <dd>{{$user->sodienthoai}}</dd>
                            <dt>Giới thiệu bản thân</dt>
                            <dd>{{$user->gioithieubanthan}}</dd>
                            <dt>Sở thích</dt>
                            <dd>{{$user->sothich}}</dd>
                            <dt>Ngày tham gia</dt>
                            <dd>{{$user->created_at}}</dd>
                            <dt>Trang cá nhân</dt>
                            <dd>
                                <a href="#linktrangdangdung">Link trang đang dùng</a>
                            </dd>
                        </dl>
                        <a href="suathongtin">
                            <button class="btn btn-info">Chỉnh sửa thông tin cá nhân</button>
                        </a>
                    </div>
                    @if($user->img != "")
                    <div class="col-md-4">
                        <a class="thumbnail">
                            <img src="uploads/users/{{$user->img}}" alt="">
                        </a>
                    </div>
                    @else
                    <div class="col-md-4">
                        <a class="thumbnail">
                            <img src="http://placehold.it/300x500" alt="">
                        </a>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@include('giaodien/cuoitrang')

<!-- Xong nội dung -->
@endsection