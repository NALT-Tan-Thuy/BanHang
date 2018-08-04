<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
