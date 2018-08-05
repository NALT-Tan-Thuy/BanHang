<?php

namespace App\Http\Controllers;

use App\BinhLuan;
use App\QuanHuyen;
use App\TinhThanhPho;
use App\User;
use App\XaPhuong;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user.danhsach', ['user' => $user]);
    }

    public function getSua($id)
    {
        $user = User::find($id);
        $tinhtp = TinhThanhPho::where('id', '<>', 0)->orderBy('tendaydu')->get();
        $quanhuyen = QuanHuyen::where('id_tinh_thanhpho', $user->id_tinh_thanhpho)->get();
        $xaphuong = XaPhuong::where('id_quan_huyen', $user->id_quan_huyen)->get();
        $phanquyen = User::select('phanquyen')->distinct()->get();
        return view('admin.user.sua', ['tinhtp' => $tinhtp, 'quanhuyen' => $quanhuyen, 'xaphuong' => $xaphuong, 'phanquyen' => $phanquyen, 'user' => $user]);
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request,
            [
                'HoTen' => 'min:3|max:50|',
            ],
            [
                'HoTen.min' => 'Họ tên có ít nhất 3 ký tự',
                'HoTen.max' => 'Họ tên có nhiều nhất 50 ký tự',
            ]);

        $user = User::find($id);
        $user->hoten = $request->HoTen;
        $user->phanquyen = $request->PhanQuyen;
        $user->ngaysinh = $request->NgaySinh;
        $user->sodienthoai = $request->SoDienThoai;
        $user->nghenghiep = $request->NgheNghiep;
        $user->gioitinh = $request->GioiTinh;
        if ($request->TinhTP == "") {
            $user->id_tinh_thanhpho = 0;
        } else {
            $user->id_tinh_thanhpho = $request->TinhTP;
        }

        if ($request->QuanHuyen == "") {
            $user->id_quan_huyen = 0;
        } else {
            $user->id_quan_huyen = $request->QuanHuyen;
        }

        $user->gioithieubanthan = $request->GioiThieuBanThan;
        $user->sothich = $request->SoThich;

        if ($request->hasFile('file')) {
            $file = $request->file('file');

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
                return redirect('admin/user/sua/' . $id)->with('loi', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }

            $name = time() . $file->getClientOriginalName();
            unlink('uploads/users/' . $user->img);
            $file->move('uploads/users', $name);
            $user->img = $name;
        }

        $user->save();
        return redirect('admin/user/danhsach')->with('thongbaosua', "Bạn đã sửa dữ liệu thành công");
    }

    public function getThem()
    {
        $tinhtp = TinhThanhPho::where('id', '<>', 0)->orderBy('tendaydu')->get();
        $phanquyen = User::select('phanquyen')->distinct()->get();
        return view('admin.user.them', ['tinhtp' => $tinhtp, 'phanquyen' => $phanquyen]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'TenDangNhap' => 'unique:users,tendangnhap',
                'HoTen' => 'min:3|max:50|',
                'MatKhau' => 'min:3|max:32',
                'NhapLaiMatKhau' => 'same:MatKhau',
                'Email' => 'unique:users,email',
            ],
            [
                'TenDangNhap.unique' => 'Tên người dùng đã tồn tại',
                'HoTen.min' => 'Họ tên có ít nhất 3 ký tự',
                'HoTen.max' => 'Họ tên có nhiều nhất 50 ký tự',
                'MatKhau.min' => 'Mật khẩu không được nhỏ hơn 3 ký tự',
                'MatKhau.max' => 'Mật khẩu không được lớn hơn 32 ký tự',
                'NhapLaiMatKhau.same' => 'Mật khẩu nhập lại chưa khớp',
                'Email.unique' => 'Email đã tồn tại',
            ]);

        $user = new User();
        $user->tendangnhap = $request->TenDangNhap;
        $user->hoten = $request->HoTen;
        $user->password = bcrypt($request->MatKhau);
        $user->email = $request->Email;
        $user->phanquyen = $request->PhanQuyen;
        $user->ngaysinh = $request->NgaySinh;
        $user->sodienthoai = $request->SoDienThoai;
        $user->nghenghiep = $request->NgheNghiep;
        $user->gioitinh = $request->GioiTinh;
        if ($request->TinhTP == "") {
            $user->id_tinh_thanhpho = 0;
        } else {
            $user->id_tinh_thanhpho = $request->TinhTP;
        }

        if ($request->QuanHuyen == "") {
            $user->id_quan_huyen = 0;
        } else {
            $user->id_quan_huyen = $request->QuanHuyen;
        }

        if ($request->XaPhuong == "") {
            $user->id_xa_phuong = 0;
        } else {
            $user->id_xa_phuong = $request->XaPhuong;
        }

        $user->gioithieubanthan = $request->GioiThieuBanThan;
        $user->sothich = $request->SoThich;
        $name = "";
        if ($request->hasFile('file')) {
            $file = $request->file('file');

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
                return redirect('admin/user/them')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }

            $name = time() . $file->getClientOriginalName();
            $file->move('uploads/users', $name);

        }

        $user->img = $name;
        $user->save();
        return redirect('admin/user/danhsach')->with('thongbaothem', "Bạn đã thêm dữ liệu thành công");
    }

    public function getXoa($id)
    {
        $user = User::find($id);
        try {
            $binhluan = BinhLuan::where('id_users', '=', $id)->get();
            foreach ($binhluan as $bl) {
                $bl->delete();
            }
            if (file_exists('uploads/users/' . $user->img)) {
                unlink('uploads/users/' . $user->img);
            }

            $user->delete();
            return redirect('admin/user/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
        } catch (\Exception $e) {
            return redirect('admin/user/danhsach')->with('thongbaoxoakhongthanhcong', "Bạn phải xóa tất cả các bình luận của \"" . $user->tendangnhap . "\" trước");
        }

    }
}
