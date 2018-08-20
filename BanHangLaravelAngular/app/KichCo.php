<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KichCo extends Model
{
    protected $table = "kichco";

    public function chitietsanpham(){
        return $this->belongsTo('App\ChiTietSanPham', 'id_chitietsanpham', 'id');
    }
}
