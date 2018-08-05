<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
use App\HoaDon;
use App\ChiTietHoaDon;
use Session;
use DB;
use App\Cart;


class DatHangController extends Controller
{


    // ajax lấy tên huyện
    public function getChonQuanHuyen($idTinh)
    {
        $quan_huyen = DB::table('quan_huyen')->where([['id', '<>', 0], ['id_tinh_thanhpho', $idTinh]])->get();
        $hienthi = '
                    <label>Quận - Huyện </label>
                    <select name="huyen" id="huyen" onchange="ChonXaPhuong(this.value);" class="form-control">
                    ';
        foreach ($quan_huyen as $quan) {
            $hienthi = $hienthi . '<option value="' . $quan->id . '">' . $quan->tendaydu . '</option>';
        }
        echo $hienthi . '</select>';
    }
    // Ajax lấy tên xã
    public function getChonXaPhuong($idHuyen)
    {
        $xa_phuong = DB::table('xa_phuong')->where([['id', '<>', 0], ['id_quan_huyen', $idHuyen]])->get();
        $hienthi = '
                    <label>Xã - Phường</label>
                    <select name="xa" id="xa" class="form-control">
                    ';
        foreach ($xa_phuong as $xa) {
            $hienthi = $hienthi . '<option value="' . $xa->id . '">' . $xa->tendaydu . '</option>';
        }
        echo $hienthi . '</select>';
    }
    public function postThanhToanDatHang(Request $req){
        $this->validate($req,
            [
                'xa' => 'required'
            ],[
                'xa.required'=>'Bạn cần cần lựa chọn xã - phường đang sinh sống'
            ]
        );
        $tentinh = DB::table('tinh_thanhpho')->where('id',$req->tinh)->first();
        $tenhuyen = DB::table('quan_huyen')->where('id',$req->huyen)->first();
        $tenxa = DB::table('xa_phuong')->where('id',$req->xa)->first();
        $khachhang = new KhachHang;
        $khachhang->hoten = $req->tenkhachhang;
        $khachhang->gioitinh = $req->gender;
        $khachhang->email = $req->inputEmail3;
        $khachhang->sodienthoai = $req->sdt;
        $khachhang->tinh = $tentinh->tendaydu;
        $khachhang->huyen = $tenhuyen->tendaydu;
        $khachhang->xa = $tenxa->tendaydu;
        $khachhang->diachi = $req->diachi;
        $khachhang->ghichu = $req->ghichu;
        $khachhang->loaithanhtoan = $req->payment_method;
        $khachhang->save();
        
        $hoadon = new HoaDon;
        $hoadon->thanhtoanhoadon = 0;
        $hoadon->id_khachhang = $khachhang->id;
        $hoadon->save();

        $sanphammua = Session::get('cart');
        foreach($sanphammua->items as $id => $value){
            $chitiethoadon = new ChiTietHoaDon();
            $chitiethoadon->thanhtoanhoadonchitiet = 0;
            $chitiethoadon->id_hoadon = $hoadon->id;
            $chitiethoadon->id_chitietsanpham = $id;
            $chitiethoadon->soluong = $value['soluong'];
            $chitiethoadon->kichco = "L";
            $chitiethoadon->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('dathangthanhcong','ĐÃ NHẬN ĐƠN HÀNG BẠN YÊU CẦU, CHÚNG TÔI SẼ LIÊN HỆ LẠI BẠN SỚM NHẤT, CẢM ƠN!!!');
    }
}
