<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GiaoDienController extends Controller
{
    public function getTrangChu(){
        $sanphammoi = DB::table('chitietsanpham')->orderBy('id','desc')->paginate(4);
        $sanphamkhuyenmai = DB::table('chitietsanpham')->where('khuyenmai','>',0)->paginate(8);

        return view('giaodien/trangchu',compact('sanphammoi','sanphamkhuyenmai'));
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
