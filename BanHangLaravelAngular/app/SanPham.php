<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'sanpham';

    public function chitietsanpham(){
        return $this->hasMany('App\ChiTietSanPham', 'id_sanpham', 'id');
    }

    public function loaisanpham(){
        return $this->belongsTo('App\LoaiSanPham', 'id_loaisanpham', 'id');
    }
}
