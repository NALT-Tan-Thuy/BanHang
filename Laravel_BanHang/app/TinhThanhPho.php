<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinhThanhPho extends Model
{
    protected $table = 'tinh_thanhpho';

    public function quan_huyen()
    {
        return $this->hasMany('App\QuanHuyen', 'id_tinh_thanhpho', 'id');
    }

    public function user()
    {
        return $this->hasMany('App\User', 'id_tinh_thanhpho', 'id');
    }

    // public function khachhang()
    // {
    //     return $this->hasMany('App\KhachHang', 'id_tinh_thanhpho', 'id');
    // }
}
