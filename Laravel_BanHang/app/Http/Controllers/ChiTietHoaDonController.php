<?php

namespace App\Http\Controllers;

use App\ChiTietHoaDon;
use App\HoaDon;
use Illuminate\Support\Facades\DB;

class ChiTietHoaDonController extends Controller
{
    public function index($id)
    {
        $chitiethoadon = DB::table('hoadon')->join('khachhang', 'hoadon.id_khachhang', '=', 'khachhang.id')
            ->join('chitiethoadon', 'chitiethoadon.id_hoadon', '=', 'hoadon.id')
            ->join('chitietsanpham', 'chitietsanpham.id', '=', 'chitiethoadon.id_chitietsanpham')
            ->select('hoadon.thanhtoanhoadon', 'hoadon.created_at', 'hoten', 'gioitinh', 'email', 'sodienthoai', 'chitiethoadon.id', 'thanhtoanhoadonchitiet', 'tinh', 'huyen', 'xa', 'diachi', 'loaithanhtoan', 'chitietsanpham.ten', 'chitiethoadon.id_hoadon', 'giagoc', 'khuyenmai', 'soluong', 'kichco', 'chitietsanpham.img')
            ->where('hoadon.id', '=', $id)
            ->get();
        return view('admin.chitiethoadon.danhsach', ['chitiethoadon' => $chitiethoadon]);
    }

    public function getXoa($id, $idhoadon)
    {
        ChiTietHoaDon::find($id)->delete();
        //Sau khi xóa, nếu tổng chi tiết hóa đơn của hóa đơn $idhoadhon bằng 0 => xóa luôn hóa đơn $idhoadon
        $countchitiethoadon = ChiTietHoaDon::where('id_hoadon', '=', $idhoadon)->count();
        if ($countchitiethoadon == 0) {
            HoaDon::find($idhoadon)->delete();
            return redirect('admin/hoadon/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
        }
        $countChuaThanhToan = ChiTietHoaDon::where([['id_hoadon', '=', $idhoadon], ['thanhtoanhoadonchitiet', '=', 0]])->count();
        if ($countChuaThanhToan == 0) {
            $hoadon = HoaDon::find($idhoadon);
            $hoadon->thanhtoanhoadon = 1;
            $hoadon->save();
        }
        return redirect('admin/chitiethoadon/danhsach/' . $idhoadon)->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
    }
}
