<?php

namespace App\Http\Controllers;

use App\KichCoMau;
use Illuminate\Http\Request;

class KichCoMauController extends Controller
{
    public function index()
    {
        $kichcomau = KichCoMau::all();
        return view('admin.kichcomau.danhsach', ['kichcomau' => $kichcomau]);
    }

    public function getSua($id)
    {
        $kichcomau = KichCoMau::find($id);
        return view('admin.kichcomau.sua', ['kichcomau' => $kichcomau]);
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request,
            [
                'Ten' => 'unique:kichcomau,ten',
            ],
            [
                'Ten.unique' => 'Tên kích cỡ đã có. Vui lòng nhập lại tên khác',
            ]);

        $kichcomau = KichCoMau::find($id);
        $kichcomau->ten = $request->Ten;

        $kichcomau->save();
        return redirect('admin/kichcomau/danhsach')->with('thongbaosua', "Bạn đã sửa dữ liệu thành công");
    }

    public function getThem()
    {
        return view('admin.kichcomau.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'Ten' => 'unique:kichcomau,ten',
            ],
            [
                'Ten.unique' => 'Tên kích cỡ đã có. Vui lòng nhập lại tên khác',
            ]);

        $kichcomau = new KichCoMau();
        $kichcomau->ten = $request->Ten;

        $kichcomau->save();
        return redirect('admin/kichcomau/danhsach')->with('thongbaothem', "Bạn đã thêm dữ liệu thành công");
    }

    public function getXoa($id)
    {
        $kichcomau = KichCoMau::find($id);

        $kichcomau->delete();
        return redirect('admin/kichcomau/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
    }
}
