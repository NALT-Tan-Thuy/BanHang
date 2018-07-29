<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietSanPham extends Model
{
    protected $table = 'chitietsanpham';

    public function sanpham(){
        return $this->belongsTo('App\SanPham', 'id_sanpham', 'id');
    }

    public function thongtinchitietsanpham(){
        return $this->hasMany('App\ThongTinChiTietSanPham', 'id_chitietsanpham', 'id');
    }

    public function kickco(){
        return $this->hasMany('App\KichCo', 'id_chitietsanpham', 'id');
    }

    public function binhluan(){
        return $this->hasMany('App\BinhLuan', 'id_chitietsanpham', 'id');
    }

    public function chitiethoadon(){
        return $this->hasMany('App\ChiTietHoaDon', 'id_chitietsanpham', 'id');
    }
}
