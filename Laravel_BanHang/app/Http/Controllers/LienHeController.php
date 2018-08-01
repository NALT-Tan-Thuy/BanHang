<?php

namespace App\Http\Controllers;

use App\LienHe;
use Illuminate\Http\Request;

class LienHeController extends Controller
{
    public function index()
    {
        $lienhe = LienHe::all();
        return view('admin.lienhe.danhsach', ['lienhe' => $lienhe]);
    }

    public function getSua($id)
    {
        $lienhe = LienHe::find($id);
        return view('admin.lienhe.sua', ['lienhe' => $lienhe]);
    }

    public function postSua(Request $request, $id)
    {
        $lienhe = LienHe::find($id);
        $lienhe->tencoso = $request->TenCoSo;
        $lienhe->nguoiquanly = $request->NguoiQuanLy;
        $lienhe->sodienthoai = $request->SoDienThoai;

        $lienhe->save();
        return redirect('admin/lienhe/danhsach')->with('thongbaosua', "Bạn đã sửa dữ liệu thành công");
    }

    public function getThem()
    {
        return view('admin.lienhe.them');
    }

    public function postThem(Request $request)
    {
        $lienhe = new LienHe();
        $lienhe->tencoso = $request->TenCoSo;
        $lienhe->nguoiquanly = $request->NguoiQuanLy;
        $lienhe->sodienthoai = $request->SoDienThoai;

        $lienhe->save();
        return redirect('admin/lienhe/danhsach')->with('thongbaothem', "Bạn đã thêm dữ liệu thành công");
    }

    public function getXoa($id)
    {
        $lienhe = LienHe::find($id);

        $lienhe->delete();
        return redirect('admin/lienhe/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
    }
}
