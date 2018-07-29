<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    protected $table = 'chitiethoadon';

    public function chitietsanpham(){
        return $this->belongsTo('App\ChiTietSanPham', 'id_chitietsanpham', 'id');
    }

    public function hoadon(){
        return $this->belongsTo('App\HoaDon', 'id_hoadon', 'id');
    }
}
