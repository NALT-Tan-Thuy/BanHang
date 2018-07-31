<?php

namespace App\Http\Controllers;

use App\ChiTietSanPham;
use App\SanPham;
use Illuminate\Support\Facades\DB;

class ChiTietSanPhamController extends Controller
{
    public function index()
    {
        $chitietsanpham = DB::table('chitietsanpham')->select('id', 'ten', 'img', 'noibat', 'giagoc', 'khuyenmai', DB::raw('ROUND(giagoc * khuyenmai/100) as giaban'), 'mota', 'tieudethongtin', 'luotthich')->get();
        return view('admin.chitietsanpham.danhsach', ['chitietsanpham' => $chitietsanpham]);
    }

    public function getSua($id)
    {
        $chitietsanpham = ChiTietSanPham::find($id);
        $sanpham = SanPham::all();
        return view('admin.chitietsanpham.sua', ['chitietsanpham' => $chitietsanpham, 'sanpham' => $sanpham]);

    }

}
