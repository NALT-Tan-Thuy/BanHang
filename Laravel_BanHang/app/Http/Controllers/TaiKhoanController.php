<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaiKhoanController extends Controller
{
    // trang ky tai khoan
    public function getDangKy(){
        return view('giaodien/trangcon/dangky');
    }
    // trang ky nhập
    public function getDangNhap(){
        return view('giaodien/trangcon/dangnhap');
    }
    // trang quên mật khẩu
    public function getQuenMatKhau(){
        return view('giaodien/trangcon/quenmatkhau');
    }
    // trang thông tin cá nhân
    public function getThongTin(){
        return view('giaodien/trangcon/thongtin');
    }
    // trang sửa thông tin cá nhân
    public function getSuaThongTin(){
        return view('giaodien/trangcon/suathongtin');
    }
    public function getThu(){
        return view('giaodien/master');
    }
    
}
