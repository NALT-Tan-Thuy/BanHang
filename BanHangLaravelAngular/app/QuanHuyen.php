<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuanHuyen extends Model
{
    protected $table = 'quan_huyen';

    public function tinh_thanhpho()
    {
        return $this->belongsTo('App\TinhThanhPho', 'id_tinh_thanhpho', 'id');
    }

    public function xa_phuong()
    {
        return $this->hasMany('App\XaPhuong', 'id_quan_huyen', 'id');
    }

    public function user()
    {
        return $this->hasMany('App\User', 'id_quan_huyen', 'id');
    }

    // public function khachhang()
    // {
    //     return $this->hasMany('App\KhachHang', 'id_quan_huyen', 'id');
    // }
}
