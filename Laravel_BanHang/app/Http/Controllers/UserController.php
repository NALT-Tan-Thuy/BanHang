<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function index(){
        $user = User::all();
        return view('admin.user.danhsach', ['user' => $user]);
    }

    function postSua(Request $request, $id){
        $this->validate($request,
        [
            'HoTen' => 'min:3|max:50|',
            'Email'=>'email|unique:users,email',
            'MatKhau'=>'min:3|max:32',
        ],
        [
            'HoTen.min' => 'Bạn chưa nhập Tên loại sản phẩm'
        ]);
        // return ;
        // 'email'=>'required|email|unique:users,email',
    	// 		'password'=>'required|min:3|max:32',
    	// 		'passwordAgain'=>'required|same:password'
    	// 	],
    	// 	[
    	// 		'name.required'=>'Bạn chưa nhập name',
    	// 		'name.min'=>'name phải có ít nhất 3 ký tự',
    	// 		'email.required'=>'Bạn chưa nhập email',
    	// 		'email.email'=>'Bạn chưa nhập đúng định dạng email',
    	// 		'email.unique'=>'Email đã tồn tại',
    	// 		'password.required'=>'Bạn chưa nhập password',
    	// 		'password.min'=>'password phải có ít nhất 3 ký tự',
    	// 		'password.max'=>'password phải chỉ được phép tối đa 100 ký tự',
    	// 		'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
    	// 		'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp'
    	// 	]);
    }
}
