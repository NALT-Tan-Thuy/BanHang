<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaoDienController extends Controller
{
    public function getTrangChu(){
        return view('giaodien/trangchu');

    }
    // trang con sản phẩm
    public function getSanPham(){
        return view('giaodien/trangcon/sanpham');
    }
    // trang con chi tiết sản phẩm
    public function getChiTietSP(){
        return view('giaodien/trangcon/chitietsp');
    }
    // trang con đặt hàng
    public function getDatHang(){
        return view('giaodien/trangcon/dathang');
    }
}
