<?php

use Faker\Generator as Faker;


$factory->define(App\User::class, function (Faker $faker) {
    $arr = array("Nam", "Nữ");
    $json = File::get("database/data/dulieumau.json");
    $data = json_decode($json);
    return [
        'tendangnhap' => $faker->unique()->userName,
        'email' => $faker->unique()->safeEmail,
        'matkhau' => bcrypt('123'),
        'gioitinh' => $arr[array_rand($arr, 1)],
        'hoten' => $faker->name, 
        'img' => rand(1, 5).'.jpg',
        'ngaysinh'=> $faker->dateTimeThisCentury->format('Y-m-d'),
        'sodienthoai' => $faker->phoneNumber,
        'tinh' => "Tỉnh Thừa Thiên Huế", 
        'huyen' =>  "Thành phố Huế", 
        'diachi' => "Phường Phú Thuận",
        'nghenghiep' => $faker->company, 
        'sothich' => $faker->text(100), 
        'gioithieubanthan' =>$faker->text(50),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\LoaiSanPham::class, function (Faker $faker) {
    return [
        'ten' => $faker->text(12),
    ];
});

$factory->define(App\SanPham::class, function (Faker $faker) {
    return [
        'ten' => $faker->company,
        'id_loaisanpham' => App\LoaiSanPham::pluck('id')->random(),
    ];
});

$factory->define(App\ChiTietSanPham::class, function (Faker $faker) {
    return [
        'ten' =>$faker->company,
        'img' => rand(1,5).'.jpg',
        'noibat' => $faker->numberBetween(0, 1),
        'giagoc' => $faker->numberBetween(100000, 1000000),
        'khuyenmai' => $faker->numberBetween(0, 100), 
        'mota' => $faker->text(100), 
        'tieudethongtin' => $faker->text(40), 
        'luotthich' => $faker->numberBetween(0, 200), 
        'id_sanpham' => App\SanPham::pluck('id')->random(), 
    ];
});

$factory->define(App\ThongTinChiTietSanPham::class, function (Faker $faker) {
    return [
        'img' => rand(1, 5).'.jpg',
        'id_chitietsanpham' => App\ChiTietSanPham::pluck('id')->random(), 
    ];
});


$factory->define(App\KichCo::class, function (Faker $faker) {
    return [
        'ten' => substr($faker->text(10), 1, 1),
        'id_chitietsanpham' => App\ChiTietSanPham::pluck('id')->random(), 
    ];
});

$factory->define(App\BinhLuan::class, function (Faker $faker) {
    return [
        'noidung' => $faker->text(100),
        'id_chitietsanpham' => App\ChiTietSanPham::pluck('id')->random(), 
        'id_users' => App\User::pluck('id')->random(), 
    ];
});

$factory->define(App\KhachHang::class, function (Faker $faker) {
    return [
        'hoten' => $faker->name,
        'gioitinh' => 'Nữ',
        'email' => $faker->unique()->safeEmail,
        'sodienthoai' => $faker->phoneNumber,        
        'tinh' => "Tỉnh Thừa Thiên Huế", 
        'huyen' =>  "Thành phố Huế", 
        'diachi' => "Phường Phú Thuận",
        'ghichu' => $faker->text(100),
        'loaithanhtoan' => 'Thanh toán khi nhận hàng',
    ];
});

$factory->define(App\Slide::class, function (Faker $faker) {
    return [
        'img' => rand(1, 5).'.jpg',
    ];
});

$factory->define(App\LienHe::class, function (Faker $faker) {
    return [
        'sodienthoai' => $faker->phoneNumber,
        'nguoiquanly' => $faker->name,        
        'tencoso' => $faker->text(15), 
    ];
});

$factory->define(App\ThuongHieu::class, function (Faker $faker) {
    return [
        'ten' => $faker->name,      
        'img' => rand(1, 5).'.jpg',
        'tencongty' => $faker->company,  
        'loaithuonghieu' => $faker->text(20), 
    ];
});

$factory->define(App\KichCoMau::class, function (Faker $faker) {
    return [
        'ten' => substr($faker->text(10), 1, 1),
    ];
});

$factory->define(App\TrangChu::class, function (Faker $faker) {
    return [
        'tenshop' =>"Tên Shop",
        'tieudetrai' => 'Thế giới mua sắm',
        'tieudeduoi' => 'Mua sắm thả ga, rinh qùa về nhà',
        'email' => $faker->unique()->safeEmail,
        'sodienthoai' => $faker->phoneNumber,
        'diachi' => $faker->streetAddress,         
        'giomodongcua' => '7h - 22h hàng ngày', 
        'tieudecamon' =>  'CẢM ƠN BẠN ĐÃ GHÉ THĂM CẢM ƠN BẠN ĐÃ GHÉ THĂM', 
        'noidungcamon' => $faker->text(200),
    ];
});

$factory->define(App\HoaDon::class, function (Faker $faker) {
    return [
        'id_khachhang' => App\KhachHang::pluck('id')->random(),
    ];
});

$factory->define(App\ChiTietHoaDon::class, function (Faker $faker) {
    return [
        'id_hoadon' => App\HoaDon::pluck('id')->random(),
        'id_chitietsanpham' => App\ChiTietSanPham::pluck('id')->random(),
        'soluong' => rand(1, 10),
        'kichthuoc' =>  substr($faker->text(10), 1, 1),
    ];
});