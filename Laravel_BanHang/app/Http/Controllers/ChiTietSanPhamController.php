<?php

namespace App\Http\Controllers;

use App\ChiTietSanPham;
use App\KichCo;
use App\KichCoMau;
use App\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChiTietSanPhamController extends Controller
{
    public function index()
    {
        $chitietsanpham = DB::table('chitietsanpham')->select('id', 'ten', 'img', 'noibat', 'giagoc', 'khuyenmai', DB::raw('ROUND(giagoc - giagoc * khuyenmai/100) as giaban'), 'mota', 'tieudethongtin', 'luotthich')->get();
        return view('admin.chitietsanpham.danhsach', ['chitietsanpham' => $chitietsanpham]);
    }

    public function getSua($id)
    {
        $chitietsanpham = ChiTietSanPham::find($id);
        $sanpham = SanPham::all();
        $kichcomau = KichCoMau::all();
        $kichco = KichCo::select('ten')->where('id_chitietsanpham', '=', $id)->get();
        return view('admin.chitietsanpham.sua', ['chitietsanpham' => $chitietsanpham, 'sanpham' => $sanpham, 'kichcomau' => $kichcomau, 'kichco' => $kichco]);
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request,
            [
                'GiaGoc' => 'numeric',
                'KhuyenMai' => 'numeric',
            ],
            [
                'GiaGoc.numeric' => 'Giá gốc phải là một số nguyên',
                'KhuyenMai.numeric' => 'Khuyến mãi phải là một số nguyên',
            ]);

        //Nếu dữ liệu gửi lên rỗng thì xóa hết kích cở với id_sanphamchitiet == $id
        if (empty($request->NameKichCo)) {
            $kichco = KichCo::where('id_chitietsanpham', '=', $id)->get();
            if ($kichco->count() > 0) {
                foreach ($kichco as $kc) {
                    KichCo::find($kc->id)->delete();
                }
            }
        } else {
            //So sánh từng kích cỡ có sẵn (trong bảng kichco) với dữ liệu gửi lên: Nếu kích cỡ có sẵn có mà gửi lên không có => Xóa
            $kichco = KichCo::where('id_chitietsanpham', '=', $id)->get();
            foreach ($kichco as $kc) {
                $check = false;
                foreach ($request->NameKichCo as $chiso => $ten) {
                    if ($kc->ten === $ten) {
                        $check = true;
                        break;
                    }
                }
                if (!$check) {
                    //Xóa
                    KichCo::find($kc->id)->delete();
                }
            }

            //So sánh tưng giá trị gửi lên với bảng kichco có sẵn, nếu chưa có thì thêm vào bảng kích cỡ
            foreach ($request->NameKichCo as $key => $value) {
                $countKichCoDaCo = KichCo::where('id_chitietsanpham', '=', $id)->where('ten', $value)->count();
                if ($countKichCoDaCo == 0) {
                    $kichco = new KichCo();
                    $kichco->ten = $value;
                    $kichco->id_chitietsanpham = $id;
                    $kichco->save();
                }
            }
        }

        $chitietsanpham = ChiTietSanPham::find($id);
        $chitietsanpham->ten = $request->Ten;
        $chitietsanpham->noibat = $request->NoiBat;
        $chitietsanpham->giagoc = $request->GiaGoc;
        $chitietsanpham->khuyenmai = $request->KhuyenMai;
        $chitietsanpham->mota = $request->MoTa;
        $chitietsanpham->tieudethongtin = $request->TieuDeThongTin;
        $chitietsanpham->id_sanpham = $request->id_SanPham;

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $duoiAnh = $file->getClientOriginalExtension();
            $arrImg = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];
            $check = false;
            for ($i = 0; $i < count($arrImg); $i++) {
                if ($duoiAnh == $arrImg[$i]) {
                    $check = true;
                    break;
                }
            }
            if (!$check) {
                return redirect('admin/chitietsanpham/sua/' . $id)->with('loi', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }

            $name = time() . $file->getClientOriginalName();
            $file->move('uploads/sanpham', $name);
            $chitietsanpham->img = $name;
        }

        $chitietsanpham->save();
        return redirect('admin/chitietsanpham/danhsach')->with('thongbaosua', "Bạn đã sửa dữ liệu thành công");
    }

    public function getThem()
    {
        $kichcomau = KichCoMau::all();
        $sanpham = SanPham::all();
        return view('admin.chitietsanpham.them', ['sanpham' => $sanpham, 'kichcomau' => $kichcomau]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'GiaGoc' => 'numeric',
                'KhuyenMai' => 'numeric|min:0',
            ],
            [
                'GiaGoc.numeric' => 'Giá gốc phải là một số nguyên',
                'KhuyenMai.numeric' => 'Khuyến mãi phải là một số nguyên',
                'KhuyenMai.min' => 'Khuyến mãi không được nhỏ hơn :min',
            ]);

        $chitietsanpham = new ChiTietSanPham();
        $chitietsanpham->ten = $request->Ten;
        $chitietsanpham->noibat = $request->NoiBat;
        $chitietsanpham->giagoc = $request->GiaGoc;
        $chitietsanpham->khuyenmai = $request->KhuyenMai;
        $chitietsanpham->mota = $request->MoTa;
        $chitietsanpham->tieudethongtin = $request->TieuDeThongTin;
        $chitietsanpham->id_sanpham = $request->id_SanPham;

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $duoiAnh = $file->getClientOriginalExtension();
            $arrImg = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];
            $check = false;
            for ($i = 0; $i < count($arrImg); $i++) {
                if ($duoiAnh == $arrImg[$i]) {
                    $check = true;
                    break;
                }
            }
            if (!$check) {
                return redirect('admin/chitietsanpham/them')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }

            $name = time() . $file->getClientOriginalName();
            $file->move('uploads/sanpham', $name);
            $chitietsanpham->img = $name;
        }

        $chitietsanpham->save();

        $id = ChiTietSanPham::select('id')->orderBy('id', 'ASC')->get()->last();
        foreach ($request->NameKichCo as $key => $value) {
            $kichco = new KichCo();
            $kichco->ten = $value;
            $kichco->id_chitietsanpham = $id->id;
            $kichco->save();
        }

        return redirect('admin/chitietsanpham/danhsach')->with('thongbaothem', "Bạn đã thêm dữ liệu thành công");
    }

    public function getXoa($id)
    {
        $kichco = KichCo::where('id_chitietsanpham', '=', $id)->get();
        foreach ($kichco as $kc) {
            $kc->delete();
        }
        $chitietsanpham = chitietsanpham::find($id);
        if (file_exists('uploads/sanpham/' . $chitietsanpham->img)) {
            unlink('uploads/sanpham/' . $chitietsanpham->img);
        }
        $chitietsanpham->delete();
        return redirect('admin/chitietsanpham/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
    }
}
