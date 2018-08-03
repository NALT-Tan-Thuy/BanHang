<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ChiTietSanPham;

class GiaoDienController extends Controller
{
    public function getTrangChu(){
        $sanphammoi = DB::table('chitietsanpham')->orderBy('id','desc')->paginate(4, ['*'], 'np');
        $sanphamkhuyenmai = DB::table('chitietsanpham')->where('khuyenmai','>',0)->paginate(8, ['*'], 'pp');

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
    
    public function getAjaxSP(){
        $products  = DB::table('chitietsanpham')->orderBy('id','desc')->paginate(4); 
        return View::make('giaodien/trangchu')->with('products',$products)->render();
    }
}
