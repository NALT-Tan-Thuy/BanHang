<?php

namespace App\Http\Controllers;
use App\LoaiSanPham;

use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{
    
    function index(){
        $loaisanpham = LoaiSanPham::all();
        return view('admin.loaisanpham.danhsach', ['loaisanpham' => $loaisanpham]);
    }

    function getSua($id){
        $loaisanpham = LoaiSanPham::find($id);
        return view('admin.loaisanpham.sua', ['loaisanpham' => $loaisanpham]);
    }

    function postSua(Request $request, $id){
        // $this->validate($request,
        // [
        //     'Ten' => 'required'
        // ],
        // [
        //     'Ten.required' => 'Bạn chưa nhập Tên loại sản phẩm'
        // ]);

        $loaisanpham = LoaiSanPham::find($id);
        $loaisanpham->ten = $request->Ten;
        $loaisanpham->save();
        return redirect('admin/loaisanpham/danhsach')->with('thongbaosua', 'Sửa dữ liệu thành công!');
    }

    function getXoa($id){
        $loaisanpham = LoaiSanPham::find($id);
        $loaisanpham->delete();
        return redirect('admin/loaisanpham/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
    }

    function getThem(){
        return view('admin.loaisanpham.them');
    }

    function postThem(Request $request){
        $loaisanpham = new LoaiSanPham();
        $loaisanpham->Ten = $request->Ten;
        $loaisanpham->save();
        return redirect('admin/loaisanpham/danhsach')->with('thongbaothem', "Thêm dữ liệu thành công!");
    }
}
