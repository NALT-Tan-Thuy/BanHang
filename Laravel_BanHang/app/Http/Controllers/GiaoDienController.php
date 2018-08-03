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
        $sanphamngaunhien = DB::table('chitietsanpham')->get()->random(12);
        return view('giaodien/trangchu',compact('sanphammoi','sanphamkhuyenmai','sanphamngaunhien'));
    }
    public function getSanPhamTuongUngHome($tensp){
        $idsp = DB::table('loaisanpham')->where('ten',$tensp)->first();
        $sptu = DB::table('sanpham')->where('id_loaisanpham',$idsp->id)->get(); 
        $hienthi = '
                    <label class="filter-col" style="margin-right:0;" for="pref-orderby">Sản phẩm tương ứng:</label>
                    <select id="pref-orderby" class="form-control">
                    ';   
        if(count($sptu) != 0){
            foreach($sptu as $sp){
                $hienthi = $hienthi.'<option>'.$sp->ten.'</option>';
            }
        }
        else{
            $hienthi = $hienthi.'<option>Hết hàng</option>';
        }
        echo $hienthi.'
        </select>';
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
