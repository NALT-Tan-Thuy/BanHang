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
}
