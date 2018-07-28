<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    protected $table = 'binhluan';

    public function chitietsanpham(){
        return $this->belongsTo('App\ChiTietSanPham', 'id_chitietsanpham', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_users', 'id');
    }
}
