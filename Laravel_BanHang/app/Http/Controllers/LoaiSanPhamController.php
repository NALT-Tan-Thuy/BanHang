<?php

namespace App\Http\Controllers;

use App\LoaiSanPham;
use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{

    public function index()
    {
        $loaisanpham = LoaiSanPham::all();
        return view('admin.loaisanpham.danhsach', ['loaisanpham' => $loaisanpham]);
    }

    public function getSua($id)
    {
        $loaisanpham = LoaiSanPham::find($id);
        return view('admin.loaisanpham.sua', ['loaisanpham' => $loaisanpham]);
    }

    public function postSua(Request $request, $id)
    {
        $loaisanpham = LoaiSanPham::find($id);
        $loaisanpham->ten = $request->Ten;
        $loaisanpham->save();
        return redirect('admin/loaisanpham/danhsach')->with('thongbaosua', 'Sửa dữ liệu thành công!');
    }

    public function getXoa($id)
    {
        $loaisanpham = LoaiSanPham::find($id);
        try {
            $loaisanpham->delete();
            return redirect('admin/loaisanpham/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
        } catch (\Exception $e) {
            return redirect('admin/loaisanpham/danhsach')->with('thongbaoxoakhongthanhcong', "Bạn phải xóa tất cả sản phẩm của \"" . $loaisanpham->ten . "\" trước");
        }

    }

    public function getThem()
    {
        return view('admin.loaisanpham.them');
    }

    public function postThem(Request $request)
    {
        $loaisanpham = new LoaiSanPham();
        $loaisanpham->Ten = $request->Ten;
        $loaisanpham->save();
        return redirect('admin/loaisanpham/danhsach')->with('thongbaothem', "Thêm dữ liệu thành công!");
    }
}
