<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use App\TinhThanhPho;
use Hash;

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
        $user->password = bcrypt($request->password);
        $user->gioitinh = $request->optradio;
        $user->phanquyen = "user";
        $user->id_tinh_thanhpho = 0;
        $user->id_quan_huyen = 0;
        $user->id_xa_phuong = 0;

        $user->save();
        return redirect('dangnhap')->with('taoxongtaikhoan','Đã thêm thành công tài khoản "'.$request->name.'"');

    }

    
    // trang đăng nhập
    public function getDangNhap(){
        return view('giaodien/trangcon/dangnhap');
    }
    public function postDangNhap(Request $request){
        // dd($request);   
        $this->validate($request,
        [
            'password'=>'max:30|min:3'
        ],[
            'password.max'=>'Mật khẩu không được quá :max ký tự',
            'password.min'=>'Mật khẩu nhiều hơn :min ký tự'
        ]); 

        $login = filter_var($request->name, FILTER_VALIDATE_EMAIL) ? 'email' : 'tendangnhap';
        $payload[$login] = $request->name;
        $payload['password'] = $request->password;

    	if(Auth::attempt($payload)){
            return redirect('trangchu');
    	}else{
            return redirect()->back()->with('loidangnhap','Đăng nhập không thành công, tài khoản chưa tồn tại!');
    	}
    }

    // Đăng xuất
    public function getDangXuat(){
        Auth::logout();
        return redirect()->back();
    }

    // trang quên mật khẩu
    public function getQuenMatKhau(){
        return view('giaodien/trangcon/quenmatkhau');
    }
    // trang thông tin cá nhân
    public function getThongTin(){
        $id_user = Auth::User()->id; 
        $user = DB::table('users')->where('id',$id_user)->first();
        $tinhTP = DB::table('tinh_thanhpho')->where('id',$user->id_tinh_thanhpho)->first();
        $quanHuyen = DB::table('quan_huyen')->where('id',$user->id_quan_huyen)->first();
        $xaPhuong = DB::table('xa_phuong')->where('id',$user->id_xa_phuong)->first();

        // dd($tinhTP);
        return view('giaodien/trangcon/thongtin',compact('user','tinhTP','quanHuyen','xaPhuong'));

    }
    // trang sửa thông tin cá nhân
    public function getSuaThongTin(){
        $id_user = Auth::User()->id; 
        $user = DB::table('users')->where('id',$id_user)->first();
        $tinhTP = DB::table('tinh_thanhpho')->where('id',$user->id_tinh_thanhpho)->first();
        $quanHuyen = DB::table('quan_huyen')->where('id',$user->id_quan_huyen)->first();
        $xaPhuong = DB::table('xa_phuong')->where('id',$user->id_xa_phuong)->first();
        $tinhTPAll = DB::table('tinh_thanhpho')->where([['id','<>',$user->id_tinh_thanhpho],['id','<>',0]])->get();
        $quanAll = DB::table('quan_huyen')->where([['id','<>',$user->id_quan_huyen],['id','<>',0],['id_tinh_thanhpho',$user->id_tinh_thanhpho]])->get();
        $xaAll = DB::table('xa_phuong')->where([['id','<>',$user->id_xa_phuong],['id','<>',0],['id_quan_huyen',$user->id_quan_huyen]])->get();
        // dd($tinhTPAll);
        return view('giaodien/trangcon/suathongtin',compact('user','tinhTP','quanHuyen','xaPhuong','tinhTPAll','quanAll','xaAll'));
    }
    
    public function getSuaMatKhau($matkhau){
        $mangMK = explode(",", $matkhau);
        if(Hash::check($mangMK[0], Auth::user()->password)){
            DB::table('users')->where('id', Auth::user()->id)->update(['password'=> bcrypt($mangMK[1])]);
            echo $mangMK[1];
        }  
        else
            echo "false";
    }
// ajax lấy tên huyện
    public function getChonQuanHuyen($idTinh){
        $quan_huyen = DB::table('quan_huyen')->where([['id','<>',0],['id_tinh_thanhpho',$idTinh]])->get();
        $hienthi = '
                    <label>Quận - Huyện </label>
                    <select name="huyen" id="huyen" onchange="ChonXaPhuong(this.value);" class="form-control">
                    ';
        foreach ($quan_huyen as $quan) {
            $hienthi = $hienthi.'<option value="'.$quan->id.'">'.$quan->tendaydu.'</option>';
        }
        echo $hienthi.'</select>';
    }
    // Ajax lấy tên xã
    public function getChonXaPhuong($idHuyen){
        $xa_phuong = DB::table('xa_phuong')->where([['id','<>',0],['id_quan_huyen',$idHuyen]])->get();
        $hienthi = '
                    <label>Xã - Phường</label>
                    <select name="xa" id="xa" class="form-control">
                    ';
        foreach ($xa_phuong as $xa) {
            $hienthi = $hienthi.'<option value="'.$xa->id.'">'.$xa->tendaydu.'</option>';
        }
        echo $hienthi.'</select>';
    }
    //Sửa thông tin tài khoản 
    public function postSuaThongTinTK(Request $request){
        $user = User::find(Auth::User()->id);
        $user->hoten = $request->hoten;
        $user->tendangnhap = $request->tendangnhap;
        $user->email = $request->email;
        $user->id_tinh_thanhpho = $request->tinh;
        $user->id_quan_huyen = $request->huyen;
        $user->id_xa_phuong = $request->xa;
        $user->ngaysinh = $request->ngaysinh;
        $user->gioitinh = $request->gt;
        $user->sodienthoai = $request->sdt;
        $user->nghenghiep = $request->nghenghiep;
        $user->sothich = $request->sothich;
        $user->gioithieubanthan = $request->exampleFormControlTextarea2;
        if ($request->hasFile('file')) {
            $file = $request->file('title');
            $duoiAnh = $file->getClientOriginalExtension();
            $arrImg = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];
            $check = false;
            for ($i = 0; $i < count($arrImg); $i++) {
                if ($duoiAnh == $arrImg[$i]) {
                    $check = true;
                    break;
                }
            }
            if (!$check) {
                return redirect()->back()->with('loianh', 'Chỉ hổ trợ định dạng: jpg, png, jpeg');
            } 
            $name = time().$file->getClientOriginalName();
            unlink('uploads/users/'.$user->img);
            $file->move('uploads/users',$name);
            $user->img = $name;
        }
        $user->save();
        return redirect()->back()->with('suatkthanhcong', 'Thông tin đã được thay đổi');
    }
    
}