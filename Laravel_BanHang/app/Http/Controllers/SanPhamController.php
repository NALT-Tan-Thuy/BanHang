<?php

namespace App\Http\Controllers;

use App\LoaiSanPham;
use App\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function index()
    {
        $loaisanpham = LoaiSanPham::all();
        $sanpham = SanPham::all();
        return view('admin.sanpham.danhsach', ['sanpham' => $sanpham, 'loaisanpham' => $loaisanpham]);
    }

    public function getSua($id)
    {
        $loaisanpham = LoaiSanPham::all();
        $sanpham = SanPham::find($id);
        return view('admin.sanpham.sua', ['sanpham' => $sanpham, 'loaisanpham' => $loaisanpham]);
    }

    public function postSua(Request $request, $id)
    {
        $sanpham = SanPham::find($id);
        $sanpham->ten = $request->TenSanPham;
        $sanpham->id_loaisanpham = $request->id_LoaiSanPham;
        $sanpham->save();
        return redirect('admin/sanpham/danhsach')->with('thongbaosua', "Bạn đã sửa dữ liệu thành công");
    }

    public function getThem()
    {
        $loaisanpham = LoaiSanPham::all();
        return view('admin.sanpham.them', ['loaisanpham' => $loaisanpham]);
    }

    public function postThem(Request $request)
    {
        $sanpham = new SanPham();
        $sanpham->Ten = $request->TenSanPham;
        $sanpham->id_loaisanpham = $request->id_LoaiSanPham;
        $sanpham->save();
        return redirect('admin/sanpham/danhsach')->with('thongbaothem', "Thêm dữ liệu thành công!");
    }

    public function getXoa($id)
    {
        $sanpham = SanPham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
    }
}
