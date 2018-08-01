<?php

namespace App\Http\Controllers;

use App\TrangChu;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function index()
    {
        $trangchu = TrangChu::find(1);
        return view('admin.trangchu.sua', ['trangchu' => $trangchu]);
    }

    public function postSua(Request $request)
    {
        $trangchu = TrangChu::find(1);
        $trangchu->tenshop = $request->TenShop;
        $trangchu->tieudetrai = $request->TieuDeTrai;
        $trangchu->tieudeduoi = $request->TieuDeDuoi;
        $trangchu->email = $request->Email;
        $trangchu->sodienthoai = $request->SoDienThoai;
        $trangchu->diachi = $request->DiaChi;
        $trangchu->giomodongcua = $request->GioMoCua;
        $trangchu->tieudecamon = $request->TieuDeCamOn;
        $trangchu->noidungcamon = $request->NoiDungCamOn;
        $trangchu->save();
        return redirect('admin/trangchu/sua')->with('thongbaosua', "Bạn đã sửa dữ liệu thành công");
    }
}
