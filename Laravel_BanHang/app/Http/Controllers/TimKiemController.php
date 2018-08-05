<?php

namespace App\Http\Controllers;

use App\LoaiSanPham;
use DB;
use Illuminate\Http\Request;

class TimKiemController extends Controller
{
    public function getTimKiem(Request $request)
    {
        $tukhoa = $request->keyword;
        $idsanpham = $request->search_param;
        if ($idsanpham === 'all') {
            //Tìm tất cả các sản phẩm
            $chitietsanpham = DB::table('chitietsanpham')->where('ten', 'like', '%' . $tukhoa . '%')->get();
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
            // Tìm sản phẩm theo từ khóa $tukhoa
            $chitietsanpham = DB::table('loaisanpham')
                ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                ->where('loaisanpham.id', '=', $idsanpham)
                ->where('chitietsanpham.ten', 'like', '%' . $tukhoa . '%')
                ->get();
            // echo $tukhoa . "<br>" . $idsanpham;
            // $chitietsanpham->dd();
            $tatcasanpham = DB::table('loaisanpham')
                ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                ->orderBy('khuyenmai', 'DESC')
                ->take(24)
                ->where('id_loaisanpham', '<>', $idsanpham)
                ->get();
        }
        $loaisanpham = LoaiSanPham::all();
        $tinhthanh = DB::table('tinh_thanhpho')->where('id', '<>', 0)->orderBy('tendaydu', 'ASC')->get()->random(20);

        return view('giaodien.trangcon.timkiemsanphamtrangchu', ['loaisanpham' => $loaisanpham, 'tinhthanh' => $tinhthanh, 'tatcasanpham' => $tatcasanpham, 'chitietsanpham' => $chitietsanpham, 'tukhoa' => $tukhoa, 'idsanpham' => $idsanpham]);
    }

    public function getajaxSanPhamTimKiem($arr)
    {
        $str = explode(',', $arr);
        $idsanpham = $str[0];
        $tukhoa = $str[1];
        $giaduoi = explode('-', $str[2])[0];
        $giatren = explode('-', $str[2])[1];
        $sapxep = $str[3];

        if ($idsanpham === 'all') {
            if ($sapxep !== '0-0') {
                if ($str[2] !== '0-0') {
                    //Tìm tất cả các sản phẩm
                    $chitietsanpham = DB::table('chitietsanpham')
                        ->where('ten', 'like', '%' . $tukhoa . '%')
                        ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                        ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                        ->orderBy('ten', $sapxep)
                        ->get();
                } else {
                    //Tìm tất cả các sản phẩm
                    $chitietsanpham = DB::table('chitietsanpham')
                        ->where('ten', 'like', '%' . $tukhoa . '%')
                    //  ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                    //  ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                        ->orderBy('ten', $sapxep)
                        ->get();
                }

            } else {
                if ($str[2] !== '0-0') {
                    $chitietsanpham = DB::table('chitietsanpham')
                        ->where('ten', 'like', '%' . $tukhoa . '%')
                        ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                        ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                    // ->orderBy('ten', $sapxep)
                        ->get();
                } else {
                    $chitietsanpham = DB::table('chitietsanpham')
                        ->where('ten', 'like', '%' . $tukhoa . '%')
                    // ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                    // ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                    // ->orderBy('ten', $sapxep)
                        ->get();
                }
            }
        } else {
            if ($sapxep !== '0-0') {
                if ($str[2] !== '0-0') {
                    // Tìm sản phẩm theo từ khóa $tukhoa
                    $chitietsanpham = DB::table('loaisanpham')
                        ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                        ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                        ->where('loaisanpham.id', '=', $idsanpham)
                        ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                        ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                        ->where('chitietsanpham.ten', 'like', '%' . $tukhoa . '%')
                        ->orderBy('chitietsanpham.ten', $sapxep)
                        ->get();
                } else {
                    $chitietsanpham = DB::table('loaisanpham')
                        ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                        ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                        ->where('loaisanpham.id', '=', $idsanpham)
                    // ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                    // ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                        ->where('chitietsanpham.ten', 'like', '%' . $tukhoa . '%')
                        ->orderBy('chitietsanpham.ten', $sapxep)
                        ->get();
                }
            } else {
                if ($str[2] !== '0-0') {
                    $chitietsanpham = DB::table('loaisanpham')
                        ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                        ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                        ->where('loaisanpham.id', '=', $idsanpham)
                        ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                        ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                        ->where('chitietsanpham.ten', 'like', '%' . $tukhoa . '%')
                    // ->orderBy('chitietsanpham.ten', $sapxep)
                        ->get();
                } else {
                    $chitietsanpham = DB::table('loaisanpham')
                        ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                        ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                        ->where('loaisanpham.id', '=', $idsanpham)
                    // ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                    // ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                        ->where('chitietsanpham.ten', 'like', '%' . $tukhoa . '%')
                    // ->orderBy('chitietsanpham.ten', $sapxep)
                        ->get();
                }
            }
        }

        $s = "";
        $i = 0;
        foreach ($chitietsanpham as $ctsp) {
            $i++;
            $s = $s . '<div class="col-sm-3">
            <div class="single-item">
                <div class="single-item-header">
                    <a href="chitietsp/' . $ctsp->id . '">
                    <img height="200px;" src="uploads/sanpham/' . $ctsp->img . '" alt="">
                    </a>
                </div>
                <div class="single-item-body">
                    <p class="single-item-title">' . $ctsp->ten . '</p>
                    <p class="single-item-price">';
            if ($ctsp->khuyenmai == 0) {
                $s = $s . '<span class="flash-sale" style="color:black">' . number_format(round($ctsp->giagoc, -3), '0', '', '.') . 'đ</span>';
            } else {
                $s = $s . '<span class="flash-sale">' . number_format(round($ctsp->giagoc - $ctsp->giagoc * $ctsp->khuyenmai / 100, -3), '0', '', '.') . 'đ</span>' . '<div class="ribbon-wrapper">
                <div class="ribbon sale">Giảm giá</div>
            </div>';
            }
            $s = $s . '</p>
            </div>

            <div class="single-item-caption">
                <a class="add-to-cart pull-left" href="javascript:void(0)">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                <a class="beta-btn primary" href="chitietsp/' . $ctsp->id . '">Chi tiết
                        <i class="fa fa-chevron-right"></i>
                    </a>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>';
            if ($i % 4 == 0) {
                $s = $s . '<div class="space60">&nbsp;</div>';
            }
        }
        $s = $s . "<!-- " . $chitietsanpham->count() . " -->";
        // echo $s;

    }

    public function getajaxLocSanPhamTheoLoai($arr)
    {
        $str = explode(',', $arr);
        $giaduoi = explode('-', $str[0])[0];
        $giatren = explode('-', $str[0])[1];
        $sapxep = $str[1];
        $idloai = $str[2];

        if ($sapxep !== '0-0') {
            // Tìm tất cả các sản phẩm theo loại
            if ($str[0] == '0-0') {
                $sanphamtheoloai = DB::table('loaisanpham')
                    ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                    ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                    ->where('id_loaisanpham', $idloai)
                // ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                // ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                    ->orderBy('chitietsanpham.ten', $sapxep)
                    ->get();
                // $sanphamtheoloai->dd();
                // echo "a";
            } else {
                $sanphamtheoloai = DB::table('loaisanpham')
                    ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                    ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                    ->where('id_loaisanpham', $idloai)
                    ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                    ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                    ->orderBy('chitietsanpham.ten', $sapxep)
                    ->get();
                // $sanphamtheoloai->dd();
                // echo "b";
            }
        } else {
            if ($str[0] == '0-0') {
                $sanphamtheoloai = DB::table('loaisanpham')
                    ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                    ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                    ->where('id_loaisanpham', $idloai)
                // ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                // ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                    ->get();
                // $sanphamtheoloai->dd();
                // echo "c";
            } else {
                $sanphamtheoloai = DB::table('loaisanpham')
                    ->join('sanpham', 'loaisanpham.id', 'sanpham.id_loaisanpham')
                    ->join('chitietsanpham', 'sanpham.id', 'chitietsanpham.id_sanpham')
                    ->where('id_loaisanpham', $idloai)
                    ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '>=', $giaduoi)
                    ->where(DB::raw('ROUND(giagoc - giagoc * khuyenmai/100, -3)'), '<=', $giatren)
                    ->get();
            }
            // $sanphamtheoloai->dd();
            // echo "d";
        }

        $s = "";
        $i = 0;
        foreach ($sanphamtheoloai as $sptl) {
            $i++;
            $s = $s . '<div class="col-sm-3">
            <div class="single-item">
                <div class="single-item-header">
                    <a href="chitietsp/' . $sptl->id . '">
                    <img height="200px;" src="uploads/sanpham/' . $sptl->img . '" alt="">
                    </a>
                </div>
                <div class="single-item-body">
                    <p class="single-item-title">' . $sptl->ten . '</p>
                    <p class="single-item-price">';
            if ($sptl->khuyenmai == 0) {
                $s = $s . '<span class="flash-sale" style="color:black">' . number_format(round($sptl->giagoc, -3), '0', '', '.') . 'đ</span>';
            } else {
                $s = $s . '<span class="flash-sale">' . number_format(round($sptl->giagoc - $sptl->giagoc * $sptl->khuyenmai / 100, -3), '0', '', '.') . 'đ</span>' . '<div class="ribbon-wrapper">
                <div class="ribbon sale">Giảm giá</div>
            </div>';
            }
            $s = $s . '</p>
            </div>

            <div class="single-item-caption">
                <a class="add-to-cart pull-left" href="javascript:void(0)">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                <a class="beta-btn primary" href="chitietsp/' . $sptl->id . '">Chi tiết
                        <i class="fa fa-chevron-right"></i>
                    </a>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>';
            if ($i % 4 == 0) {
                $s = $s . '<div class="space60">&nbsp;</div>';
            }
        }
        $s = $s . "<!-- " . $sanphamtheoloai->count() . " -->";
        echo $s;
    }
}
