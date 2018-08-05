<?php

namespace App\Http\Controllers;

use App\ChiTietHoaDon;
use App\HoaDon;
use App\KhachHang;
use Illuminate\Support\Facades\DB;

class HoaDonController extends Controller
{
    public function index()
    {
        $hoadon = DB::table('hoadon')->join('khachhang', 'hoadon.id_khachhang', '=', 'khachhang.id')
            ->select('hoadon.id', 'hoadon.thanhtoanhoadon', 'hoten', 'tinh', 'huyen', 'xa', 'diachi', 'hoadon.created_at')
            ->get();
        return view('admin.hoadon.danhsach', ['hoadon' => $hoadon]);
    }

    public function getXoa($id)
    {
        try {

            $chitiethoadon = ChiTietHoaDon::where('id_hoadon', '=', $id)->get();
            foreach ($chitiethoadon as $cthd) {
                $cthd->delete();
            }
            $hoadon = HoaDon::find($id);
            $hoadon->delete();
            $khachhang = KhachHang::where('id', $hoadon->id_khachhang);
            $khachhang->delete();
            return redirect('admin/hoadon/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
        } catch (\Exception $e) {
            // return redirect('admin/hoadon/danhsach')->with('thongbaoxoakhongthanhcong', "Xóa không thành công");
            echo "e";
        }
    }
}
