<?php

namespace App\Http\Controllers;

use App\ChiTietSanPham;
use App\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChiTietSanPhamController extends Controller
{
    public function index()
    {
        $chitietsanpham = DB::table('chitietsanpham')->select('id', 'ten', 'img', 'noibat', 'giagoc', 'khuyenmai', DB::raw('ROUND(giagoc * khuyenmai/100 + giagoc) as giaban'), 'mota', 'tieudethongtin', 'luotthich')->get();
        return view('admin.chitietsanpham.danhsach', ['chitietsanpham' => $chitietsanpham]);
    }

    public function getSua($id)
    {
        $chitietsanpham = ChiTietSanPham::find($id);
        $sanpham = SanPham::all();
        return view('admin.chitietsanpham.sua', ['chitietsanpham' => $chitietsanpham, 'sanpham' => $sanpham]);
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
        $sanpham = SanPham::all();
        return view('admin.chitietsanpham.them', ['sanpham' => $sanpham]);
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
        return redirect('admin/chitietsanpham/danhsach')->with('thongbaothem', "Bạn đã thêm dữ liệu thành công");
    }

    public function getXoa($id)
    {
        $chitietsanpham = chitietsanpham::find($id);
        if ($chitietsanpham->img != "") {
            unlink('uploads/sanpham/' . $chitietsanpham->img);
        }
        $chitietsanpham->delete();
        return redirect('admin/chitietsanpham/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
    }
}
