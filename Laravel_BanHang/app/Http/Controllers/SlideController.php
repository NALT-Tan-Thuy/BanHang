<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slide = Slide::all();
        return view('admin.slide.danhsach', ['slide' => $slide]);
    }
    public function getSua($id)
    {
        $slide = Slide::find($id);
        return view('admin.slide.sua', ['slide' => $slide]);
    }

    public function postSua(Request $request, $id)
    {
        $slide = Slide::find($id);
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
                return redirect('admin/slide/sua/' . $id)->with('loi', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }

            $name = time() . $file->getClientOriginalName();
            unlink('uploads/slide/' . $slide->img);
            $file->move('uploads/slide', $name);
            $slide->img = $name;
        }

        $slide->save();
        return redirect('admin/slide/danhsach')->with('thongbaosua', "Bạn đã sửa dữ liệu thành công");
    }

    public function getThem()
    {
        return view('admin.slide.them');
    }

    public function postThem(Request $request)
    {
        $slide = new Slide();
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
                return redirect('admin/slide/them')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }

            $name = time() . $file->getClientOriginalName();
            $file->move('uploads/slide', $name);
            $slide->img = $name;
        }

        $slide->save();
        return redirect('admin/slide/danhsach')->with('thongbaothem', "Bạn đã thêm dữ liệu thành công");
    }

    public function getXoa($id)
    {
        try {
            $slide = Slide::find($id);
            if (file_exists('uploads/slide/' . $slide->img)) {
                unlink('uploads/slide/' . $slide->img);
            }
            $slide->delete();
            return redirect('admin/slide/danhsach')->with('thongbaoxoa', 'Xóa dữ liệu thành công!');
        } catch (\Exception $ex) {
            return redirect('admin/slide/danhsach')->with('thongbaoxoakhongthanhcong', "Xóa không thành công");
        }
    }
}
