<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tendangnhap', 'email', 'matkhau', 'gioitinh', 'hoten', 'img', 'ngaysinh', 'sodienthoai', 'tinh', 'huyen', 'diachi', 'nghenghiep', 'sothich', 'gioithieubanthan',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'matkhau', 'remember_token',
    ];

    public function binhluan(){
        return $this->hasMany('App\BinhLuan', 'id_users', 'id');
    }
}
