<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongTinChiTietSanPham extends Model
{
    protected $table = "thongtinchitietsanpham";

    public function chitietsanpham(){
        return $this->belongsTo('App\ChiTietSanPham', 'id_chitietsanpham', 'id');
    }
}
