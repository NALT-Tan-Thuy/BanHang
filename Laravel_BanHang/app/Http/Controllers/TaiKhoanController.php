<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TaiKhoanController extends Controller
{
    // trang ky tai khoan
    public function getDangKy(){
        return view('giaodien/trangcon/dangky');
    }
    public function postDangKyTaiKhoan(Request $request){
        $this->validate($request,
            [

                'fullname'=>'required|max:50',
                'name'=>'required|unique:users,tendangnhap',
                'email'=>'email|unique:users,email',
                'password'=>'required|min:3|max:20',
                'password_confirmation'=>'required|same:password'

            ],
            [
                'fullname.required'=>'Bạn cần nhập vào họ tên',
                'fullname.max'=>'Tên phải dưới :max ký tự',

                'name.required'=>'Bạn cần nhập vào tên đăng nhập',
                'name.unique'=>'Tài khoản đã được sử dụng',

                'email.email'=>'Bạn cần nhập đúng định dạng Email',
                'email.unique'=>'Email đã được sử dụng',

                'password.required'=>'Bạn cần nhập mật khẩu',
                'password.min'=>'Mật khẩu quá ngắn',
                'password.max'=>'Mật khẩu quá dài',

                'password_confirmation.required'=>'Bạn cần xác nhận lại mật khẩu',
                'password_confirmation.same'=>'Mật khẩu chưa khớp'
            ]
        );

        $user = new User();
        $user->hoten = $request->fullname;
        $user->tendangnhap = $request->name;
        $user->email = $request->email;
        $user->matkhau = bcrypt($request->password);
        $user->gioitinh = $request->optradio;
        $user->phanquyen = "user";
        $user->save();
        return redirect('dangnhap')->with('taoxongtaikhoan','Đã thêm thành công tài khoản "'.$request->name.'"');

    }


    // trang ky nhập
    public function getDangNhap(){
        return view('giaodien/trangcon/dangnhap');
    }
    // trang quên mật khẩu
    public function getQuenMatKhau(){
        return view('giaodien/trangcon/quenmatkhau');
    }
    // trang thông tin cá nhân
    public function getThongTin(){
        return view('giaodien/trangcon/thongtin');
    }
    // trang sửa thông tin cá nhân
    public function getSuaThongTin(){
        return view('giaodien/trangcon/suathongtin');
    }
    public function getThu(){
        return view('giaodien/master');
    }
    
}