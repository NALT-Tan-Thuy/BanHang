<?php

namespace App\Http\Controllers;

use App\QuanHuyen;
use App\XaPhuong;

class ajaxController extends Controller
{
    public function getQuanHuyenUser($str)
    {
        $quanhuyen = QuanHuyen::where('id_tinh_thanhpho', $str)->get();
        $s = "\n <h2 class=\"card-inside-title\">Quận/huyện/thị xã</h2>\n <select class=\"form-control show-tick\" name=\"QuanHuyen\" onchange=\"hienThiXaPhuong(this.value)\"> \n <option value=\"\">Chọn quận/huyện/thị xã</option> \n";
        foreach ($quanhuyen as $qh) {
            $s = $s . "<option value=\"" . $qh->id . "-" . $qh->tendaydu . "\">";
            $s = $s . $qh->tendaydu . "</option>\n";
        }
        echo "$s.</select>";
    }

    public function getXaPhuongUser($str)
    {
        $xaphuong = XaPhuong::where('id_quan_huyen', $str)->get();

        $s = "\n <h2 class=\"card-inside-title\">Xã/Phường/Thị trấn</h2>\n <select class=\"form-control show-tick\" name=\"XaPhuong\"> <option>Chọn Xã/Phường/Thị trấn</option>";
        foreach ($xaphuong as $xp) {
            $s = $s . "<option value=\"" . $xp->id . "-" . $xp->tendaydu . "\">";
            $s = $s . $xp->tendaydu . "</option>\n";
        }
        echo "$s.</select>";
    }
}
