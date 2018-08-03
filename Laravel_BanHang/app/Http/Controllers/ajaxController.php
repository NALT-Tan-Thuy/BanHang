<?php

namespace App\Http\Controllers;

use App\ChiTietHoaDon;
use App\HoaDon;
use App\QuanHuyen;
use App\XaPhuong;
use Illuminate\Support\Facades\DB;

class ajaxController extends Controller
{
    public function getQuanHuyenUser($str)
    {
        $quanhuyen = QuanHuyen::where('id_tinh_thanhpho', $str)->get();
        $s = "\n <h2 class=\"card-inside-title\">Quận/huyện/thị xã</h2>\n <select class=\"form-control show-tick\" name=\"QuanHuyen\" onchange=\"hienThiXaPhuong(this.value)\"> \n <option value=\"\">Chọn quận/huyện/thị xã</option> \n";
        foreach ($quanhuyen as $qh) {
            $s = $s . "<option value=\"" . $qh->id . "\">";
            $s = $s . $qh->tendaydu . "</option>\n";
        }
        echo "$s.</select>";
    }

    public function getXaPhuongUser($str)
    {
        $xaphuong = XaPhuong::where('id_quan_huyen', $str)->get();

        $s = "\n <h2 class=\"card-inside-title\">Xã/Phường/Thị trấn</h2>\n <select class=\"form-control show-tick\" name=\"XaPhuong\"> <option>Chọn Xã/Phường/Thị trấn</option>";
        foreach ($xaphuong as $xp) {
            $s = $s . "<option value=\"" . $xp->id . "\">";
            $s = $s . $xp->tendaydu . "</option>\n";
        }
        echo "$s.</select>";
    }

    //Thay đổi thanh toán ở trang chi tiết hóa đơn
    public function getThayDoiThanhToanChiTiet($idct, $trangthai, $idhoadon)
    {
        $chitiethoadon = ChiTietHoaDon::find($idct);
        $chitiethoadon->thanhtoanhoadonchitiet = 1 - $trangthai;

        $chitiethoadon->save();

        //Đếm tổng số chi tiết hóa đơn của hóa đơn $idhoadon
        $countid = DB::table('chitiethoadon')->where('id_hoadon', '=', $idhoadon)->count();

        //Đếm tổng só chi tiết hóa đơn đã thanh toán của hóa đơn $idhoadon
        $countDaThanhToan = DB::table('chitiethoadon')
            ->where([['id_hoadon', '=', $idhoadon], ['thanhtoanhoadonchitiet', '=', '1']])
            ->count();

        // Nếu tổng sô chi tiết hóa đơn đã thanh toán của hóa đơn $idhoadon bằng tổng số chi tiết hóa đơn của hóa đơn $idhoadon thì cập nhật lại trạng thái thanh toán cho hóa đơn $idhoadon từ chưa thanh toán thành đã thanh toán.
        //Ngược lại chỉ cần thay đổi 1 trang thái của hóa đơn chi tiết từ đã thanh toán thành chưa thanh toán thì đổi trạng thái hóa đơn từ đã thanh toán thành chưa thành toán.
        $hoadon = HoaDon::find($idhoadon);
        if ($countid == $countDaThanhToan) {
            // Cập nhật lại trạng thái của bảng hóa đơn thành đã thanh toán
            $hoadon->thanhtoanhoadon = 1;
            $hoadon->save();
        } else {
            if ($hoadon->thanhtoanhoadon == 1) {
                $hoadon->thanhtoanhoadon = 0;
                $hoadon->save();
            }
        }

        //Nếu trangthai == 0 =>chưa thanh toán nên đổi sang thanh toán rồi
        if ($trangthai == 0) {
            echo "\n<button type=\"button\" class=\"btn btn-default waves-effect\" onclick=\"thayDoiThanhToan(" . $idct . "," . $idhoadon . ", 1);\">\nĐã thanh toán\n</button>";
        } else {
            echo "\n <button type=\"button\" class=\"btn btn-danger waves-effect\" onclick=\"thayDoiThanhToan(" . $idct . "," . $idhoadon . ", 0);\">\nThanh toán\n</button>";
        }
    }

    public function getThayDoiThanhToanHoaDon($id, $trangthai)
    {
        $hoadon = HoaDon::find($id);
        $hoadon->thanhtoanhoadon = 1 - $trangthai;
        $hoadon->save();
        $chitiethoadon = ChiTietHoaDon::where('id_hoadon', '=', $id)->get();
        foreach ($chitiethoadon as $cthd) {
            $cthd->thanhtoanhoadonchitiet = 1 - $trangthai;
            $cthd->save();
        }
        if ($trangthai == 0) {
            echo "\n<button type=\"button\" class=\"btn btn-default waves-effect\" onclick=\"thayDoiThanhToanHoaDon(" . $id . ", 1);\">\n Đã thanh toán\n </button>\n";
        } else {
            echo "\n <button type=\"button\" class=\"btn btn-danger waves-effect\" onclick=\"thayDoiThanhToanHoaDon(" . $id . ", 0);\">\nThanh toán\n</button> \n";
        }
    }
}
