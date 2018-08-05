<?php

namespace App\Http\Controllers;

use App\ThuongHieu;
use Illuminate\Http\Request;

class ThuongHieuController extends Controller
{
    public function index()
    {
        $thuonghieu = ThuongHieu::all();
        return view('admin.thuonghieu.danhsach', ['thuonghieu' => $thuonghieu]);
    }

    public function getSua($id)
    {
        $thuonghieu = ThuongHieu::find($id);
        return view('admin.thuonghieu.sua', ['thuonghieu' => $thuonghieu]);
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request,
            [
                'Ten' => 'unique:thuonghieu,ten',
            ],
            [
                'Ten.unique' => 'Tên thương hiệu đã có. Vui lòng nhập lại tên khác',
            ]);

        $thuonghieu = ThuongHieu::find($id);
        $thuonghieu->ten = $request->Ten;

        $thuonghieu->save();
        return redirect('admin/thuonghieu/danhsach')->with('thongbaosua', "Bạn đã sửa dữ liệu thành công");
    }

    public function getThem()
    {
        return view('admin.thuonghieu.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'Ten' => 'unique:thuonghieu,ten',
            ],
            [
                'Ten.unique' => 'Tên thương hiệu đã có. Vui lòng nhập lại tên khác',
            ]);

        $thuonghieu = new ThuongHieu();
        $thuonghieu->ten = $request->Ten;

        $thuonghieu->save();
        return redirect('admin/thuonghieu/danhsach')->with('thongbaothem', "Bạn đã thêm dữ liệu thành công");
    }

    public function getXoa($id)
    {
        $thuonghieu = ThuongHieu::find($id);
        $thuonghieu->delete();
        return redirect('admin/thuonghieu/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
    }
}
