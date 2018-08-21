<?php

namespace App\Http\Controllers;

use DB;

class GiaoDienController extends Controller
{
    public function getAllData()
    {
        $count = DB::table('loaisanpham')->count();
        $loaisanpham = DB::table('loaisanpham')->orderBy('id', 'asc')->limit(4)->get();
        $loaisanphamall = DB::table('loaisanpham')->orderBy('id', 'asc')->get();
        $loaisanphamkhac = DB::table('loaisanpham')->skip(4)->limit($count - 4)->get();
        $trangchu = DB::table('trangchu')->get();
        $sanpham = DB::table('sanpham')->get();
        $slide = DB::table('slide')->get();
        return ['trangchu' => $trangchu, 'loaisanphamall' => $loaisanphamall, 'loaisanpham' => $loaisanpham, 'loaisanphamkhac' => $loaisanphamkhac, 'sanpham' => $sanpham, 'slide' => $slide];
    }
}
