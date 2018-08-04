<?php

namespace App\Http\Controllers;

use App\LoaiSanPham;
use DB;
use Illuminate\Http\Request;

class TimKiemController extends Controller
{
    public function getTimKiem(Request $request)
    {
        if ($request->search_param === 'all') {
            //Tìm tất cả các sản phẩm
            $chitietsanpham = DB::table('chitietsanpham')->where('ten', 'like', '%' . $request->keyword . '%')->get();
            // $chitietsanpham->dd();
            $tatcasanpham = DB::table('loaisanpham')
                ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                ->orderBy('khuyenmai', 'DESC')
                ->take(24)
            // ->where('id_loaisanpham', '<>', $idloai)
                ->get();
            // $tatcasanpham->dd();
        } else {
            // Tìm sản phẩm theo từ khóa $request->keyword
            $chitietsanpham = DB::table('loaisanpham')
                ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                ->where('loaisanpham.id', '=', $request->search_param)
                ->where('chitietsanpham.ten', 'like', '%' . $request->keyword . '%')
                ->get();
            // echo $request->keyword . "<br>" . $request->search_param;
            // $chitietsanpham->dd();
            $tatcasanpham = DB::table('loaisanpham')
                ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                ->orderBy('khuyenmai', 'DESC')
                ->take(24)
                ->where('id_loaisanpham', '<>', $request->search_param)
                ->get();
        }
        $loaisanpham = LoaiSanPham::all();
        $tinhthanh = DB::table('tinh_thanhpho')->where('id', '<>', 0)->orderBy('tendaydu', 'ASC')->get()->random(20);
        return view('giaodien.trangcon.timkiemsanphamtrangchu', compact('loaisanpham', 'tinhthanh', 'tatcaloaisp', 'tatcasanpham', 'chitietsanpham'));
    }
}
