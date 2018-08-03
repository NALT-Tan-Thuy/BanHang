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
        $sanphamnoibat = DB::table('chitietsanpham')->where('noibat',1)->get();
        $actionspnb = $sanphamnoibat->random(3);
        $item1 = $sanphamnoibat->random(3);
        $item2 = $sanphamnoibat->random(3);
        return view('giaodien/trangchu',compact('sanphammoi','sanphamkhuyenmai','sanphamngaunhien','sanphamnoibat','actionspnb','item1','item2'));
    }
    public function getSanPhamTuongUngHome($idloai){
        $sptu = DB::table('sanpham')->where('id_loaisanpham',$idloai)->get(); 
        $hienthi = '
                    <label class="filter-col" style="margin-right:0;" for="pref-orderby">Sản phẩm tương ứng:</label>
                    <select onchange="TimSPTuongUng(this.value);" id="pref-orderby" class="form-control">
                    ';   
        if(count($sptu) != 0){
            foreach($sptu as $sp){
                $hienthi = $hienthi.'<option value='.$sp->id.'>'.$sp->ten.'</option>';
            }
        }
        else{
            $hienthi = $hienthi.'<option>Hết hàng</option>';
        }
        echo $hienthi.'
        </select>';
    }
    public function getTimSPTuongUngHome($idsp){
        $sanpham = DB::table('chitietsanpham')->where('id_sanpham',$idsp)->get();
        $spTuongUng = $sanpham->take(32);
        if(count($sanpham) != 0 && count($sanpham)<32){
            $hienthi = '
                <div id="nhansanphamtim" class="container">
            ';
            foreach($spTuongUng as $sp){
                $hienthi = $hienthi.'
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="my-list">
                            <img src="uploads/sanpham/'.$sp->img.'" alt="dsadas" />
                            <h3>'.$sp->ten.'</h3>
                            <span>Giá gốc: '.number_format($sp->giagoc).' đ</span>
                            <div class="offer">Giá khuyến mãi: '.number_format(($sp->giagoc)-(($sp->giagoc)*($sp->khuyenmai))/100).' đ</div>
                            <div class="detail">
                            <img src="uploads/sanpham/'.$sp->img.'" alt="dsadas" />
                            <a href="" class="btn btn-info">Mua ngay</a>
                            <a href="chitietsp/'.$sp->id.'" class="btn btn-info">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                ';
            }
            echo $hienthi.'
                </div>
            ';
        }
        else{
            if(count($sanpham) != 0){
                $hienthi = '
                <div id="nhansanphamtim" class="container">
                ';
                foreach($spTuongUng as $sp){
                    $hienthi = $hienthi.'
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="my-list">
                                <img src="uploads/sanpham/'.$sp->img.'" alt="dsadas" />
                                <h3>'.$sp->ten.'</h3>
                                <span>Giá gốc: '.number_format($sp->giagoc).' đ</span>
                                <div class="offer">Giá khuyến mãi: '.number_format(($sp->giagoc)-(($sp->giagoc)*($sp->khuyenmai))/100).' đ</div>
                                <div class="detail">
                                <img src="uploads/sanpham/'.$sp->img.'" alt="dsadas" />
                                <a href="" class="btn btn-info">Mua ngay</a>
                                <a href="chitietsp/'.$sp->id.'" class="btn btn-info">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    ';
                }
                echo $hienthi.'
                    </div>
                    <div style="text-align: center">
                        <a href="">
                        <span class="fa fa-arrow-circle-o-right"> Vẫn còn '.(count($sanpham)-32).' sản phẩm khác tại đây</span>
                        </a>
                    </div>
                ';
            }
            else{
                echo '<p class="alert alert-danger" style="text-align: center">Rất xin lỗi, chúng tôi đã hết sản phẩm này.</p>';
            }
        }

    }

    // trang con sản phẩm
    public function getSanPhamTheoSanPham($idloai, $idspn){
        $allsp = DB::table('loaisanpham')
                        ->join('sanpham','loaisanpham.id','sanpham.id_loaisanpham')
                        ->join('chitietsanpham','sanpham.id','chitietsanpham.id_sanpham')
                        ->where('id_loaisanpham','<>',$idloai)->get();
        $tatcasanpham = $allsp->take(15);
        $idloaisp = DB::table('loaisanpham')->where('id',$idloai)->first();
        $idsp = DB::table('sanpham')->where('id',$idspn)->first();
        $tatcaloaisp = DB::table('loaisanpham')->where('id','<>',$idloai)->get();
        $tensanpham = DB::table('sanpham')->where('id_loaisanpham',$idloaisp->id)->get(); 
        $sanphamtheoloai = DB::table('chitietsanpham')->where('id_sanpham',$idspn)->get();
        $tinhthanh = DB::table('tinh_thanhpho')->where('id','<>',0)->get()->random(20);
        // $tensanpham->dd();
        return view('giaodien/trangcon/sanpham',compact('idsp','idloaisp','tensanpham','sanphamtheoloai','tatcasanpham','tinhthanh','tatcaloaisp'));
    }
    public function getSanPhamTheoLoai($idloai){
        $tatcasanpham = DB::table('loaisanpham')
                        ->join('sanpham','loaisanpham.id','sanpham.id_loaisanpham')
                        ->join('chitietsanpham','sanpham.id','chitietsanpham.id_sanpham')
                        ->where('id_loaisanpham','<>',$idloai)->get();
        $idloaisp = DB::table('loaisanpham')->where('id',$idloai)->first();
        $tatcaloaisp = DB::table('loaisanpham')->where('id','<>',$idloai)->get();
        $tensanpham = DB::table('sanpham')->where('id_loaisanpham',$idloaisp->id)->get();        
        $sanphamtheoloai = DB::table('loaisanpham')
                        ->join('sanpham','loaisanpham.id','sanpham.id_loaisanpham')
                        ->join('chitietsanpham','sanpham.id','chitietsanpham.id_sanpham')
                        ->where('id_loaisanpham',$idloai)->get();
        $tinhthanh = DB::table('tinh_thanhpho')->where('id','<>',0)->get()->random(20);

        // $tensanpham->dd();
        return view('giaodien/trangcon/sanphamtheoloai',compact('idloaisp','tensanpham','sanphamtheoloai','tatcasanpham','tinhthanh','tatcaloaisp'));
    }
    
    // trang con chi tiết sản phẩm
    public function getChiTietSP($idsp){
        $chitietsp = DB::table('chitietsanpham')->where('id',$idsp)->first();
        $ttchitiet = DB::table('thongtinchitietsanpham')->where('id_chitietsanpham',$idsp)->get();
        $binhluan = DB::table('binhluan')->where('id_chitietsanpham',$idsp)->get();
        $tatcabinhluan = DB::table('binhluan')
                        ->join('users','binhluan.id_users','users.id')->where('id_chitietsanpham',$idsp)->get();
        // $tatcabinhluan->dd();
        if($chitietsp != null){
            return view('giaodien/trangcon/chitietsp',compact('chitietsp','ttchitiet','binhluan','tatcabinhluan'));
        }
        else
            return redirect()->back();
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
