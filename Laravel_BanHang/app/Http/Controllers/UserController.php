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
        // $this->validate($request,
        // [
        //     'HoTen' => 'min:3|max:50|',
        //     'Email'=>'email|unique:users,email',
        //     'MatKhau'=>'min:3|max:32'
        // ],
        // [
        //     'HoTen.min' => 'Họ tên có ít nhất 3 ký tự',
        //     'HoTen.max' => 'Họ tên có nhiều nhất 50 ký tự',
        //     'Email' => 'Bạn chưa nhập đúng định dạng email',
        //     'Email.unique' => 'Email đã tồn tại'
        // ]);
        
        $user = User::find($id);
        $user->hoten = $request->HoTen;
        $user->email = $request->Email;
        $user->ngaysinh = $request->NgaySinh;
        $user->sodienthoai = $request->SoDienThoai;
        $user->nghenghiep = $request->NgheNghiep;
        $user->gioitinh = $request->GioiTinh;
        $user->tinh = explode('-', $request->TinhTP)[1];
        $user->huyen = explode('-',$request->QuanHuyen)[1];
        $user->diachi = explode('-', $request->XaPhuong)[1];
        $user->gioithieubanthan = $request->GioiThieuBanThan;
        $user->sothich = $request->SoThich;

        if($request->hasFile('file')){
            $file = $request->file('file');

    		$duoiAnh = $file->getClientOriginalExtension();
    		$arrImg = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];
    		$check = false;
    		for ($i=0; $i < count($arrImg); $i++) {
    			if($duoiAnh == $arrImg[$i]){
    				$check = true; break;
    			}
    		}
    		if(!$check){
    			return redirect('admin/user/sua/'.$id)->with('loi', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            
            $name = time().$file->getClientOriginalName();
    		unlink('uploads/users/'.$user->img);
    		$file->move('uploads/users', $name);
    		$user->img = $name;
        }

        $user->save();
        return redirect('admin/user/danhsach')->with('thongbaosua', "Bạn đã sửa dữ liệu thành công");
    }
}
