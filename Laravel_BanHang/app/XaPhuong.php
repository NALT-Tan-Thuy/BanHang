<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XaPhuong extends Model
{
    protected $table = 'xa_phuong';

    public function quan_huyen()
    {
        return $this->belongsTo('App\QuanHuyen', 'id_quan_huyen', 'id');
    }

    public function user()
    {
        return $this->hasMany('App\User', 'id_xaphuong', 'id');
    }

    public function khachhang()
    {
        return $this->hasMany('App\KhachHang', 'id_xaphuong', 'id');
    }
}
