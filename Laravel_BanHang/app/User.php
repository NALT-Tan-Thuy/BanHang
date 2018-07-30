<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tendangnhap', 'email', 'matkhau', 'gioitinh', 'hoten', 'img', 'ngaysinh', 'sodienthoai', 'id_tinh_thanhpho', 'id_quan_huyen', 'id_xa_phuong', 'nghenghiep', 'sothich', 'gioithieubanthan',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'matkhau', 'remember_token',
    ];

    public function binhluan()
    {
        return $this->hasMany('App\BinhLuan', 'id_users', 'id');
    }
}
