<?php

Route::get('/', function () {
    return view('admin.trangchu');
});

Route::get('demodanhsach', function () {
    return view('admin.loaisanpham.danhsach');
});

Route::get('demoThem', function () {
    return view('admin.loaisanpham.them');
});

Route::get('demoSua', function () {
    return view('admin.loaisanpham.sua');
});

Route::get('demoXoaNhieu', function () {
    return view('admin.loaisanpham.xoanhieu');
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'loaisanpham'], function () {
        Route::get('danhsach', 'LoaiSanPhamController@index');
        Route::get('them', 'LoaiSanPhamController@getThem');
        Route::post('them', 'LoaiSanPhamController@postThem');
        Route::get('sua/{id}', 'LoaiSanPhamController@getSua');
        Route::post('sua/{id}', 'LoaiSanPhamController@postSua');
        Route::get('xoa/{id}', 'LoaiSanPhamController@getXoa');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('danhsach', 'UserController@index');
        Route::get('sua/{id}', function ($id) {
            $jsontinhtp = File::get("hanhchinhVietNam/tinh_tp.json");
            $tinhtp = json_decode($jsontinhtp);
            $jsonquanhuyen = File::get("hanhchinhVietNam/quan_huyen.json");
            $quanhuyen = json_decode($jsonquanhuyen);
            $jsonxaphuong = File::get("hanhchinhVietNam/xa_phuong.json");
            $xaphuong = json_decode($jsonxaphuong);
            $user = App\User::find($id);
            return view('admin.user.sua', ['tinhtp' => $tinhtp, 'quanhuyen' => $quanhuyen, 'xaphuong' => $xaphuong, 'user' => $user]);
        });

        Route::post('sua/{id}', 'UserController@postSua');
        // Route::get('them', 'UserController@getThem');
        // Route::post('them', 'UserController@postThem');

        // Route::get('xoa/{id}', 'UserController@getXoa');
    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('getQuanHuyen/{str}', function ($str) {
            $json = File::get("hanhchinhVietNam/quan_huyen.json");
            $quanhuyen = json_decode($json);
            $s = "\n <h2 class=\"card-inside-title\">Quận/huyện/thị xã</h2>\n <select class=\"form-control show-tick\" name=\"QuanHuyen\" onchange=\"hienThiXaPhuong(this.value)\"> \n <option value=\"\">Chọn quận/huyện/thị xã</option> \n";
            foreach ($quanhuyen as $qh) {
                if ($qh->parent_code == $str) {
                    $s = $s . "<option value=\"" . $qh->code . "-" . $qh->name_with_type . "\">";
                    $s = $s . $qh->name_with_type . "</option>\n";
                }
            }
            echo "$s.</select>";
        });
        Route::get('getXaPhuong/{str}', function ($str) {
            $json = File::get("hanhchinhVietNam/xa_phuong.json");
            $xaphuong = json_decode($json);

            $s = "\n <h2 class=\"card-inside-title\">Xã/Phường/Thị trấn</h2>\n <select class=\"form-control show-tick\" name=\"XaPhuong\"> <option>Chọn Xã/Phường/Thị trấn</option>";
            foreach ($xaphuong as $xp) {
                if ($xp->parent_code == $str) {
                    $s = $s . "<option value=\"" . $xp->code . "-" . $xp->name_with_type . "\">";
                    $s = $s . $xp->name_with_type . "</option>\n";
                }
            }
            echo "$s.</select>";
        });
    });
});

// Phần Route cho giao diện người dùng
Route::get('trangchu', 'GiaoDienController@getTrangChu');

Route::get('demojson', function () {
    $str = 1;
    $json = File::get("hanhchinhVietNam/xa_phuong.json");
    $xaphuong = json_decode($json);
    $s = "<h2 class=\"card-inside-title\">Quận/huyện/thị xã</h2><select class=\"form-control show-tick\"> <option>Chọn quận/huyện/thị xã</option>";
    foreach ($xaphuong as $xp) {
        if ($xp->parent_code == $str) {
            $s = $s . "<option>" . $xp->name_with_type . "</option>";
        }
    }
    // echo "$s.</select>";
    // echo Illuminate\Support\Facades\Crypt::decryptString('$2y$10$BFeLIn3UDumU9XCR4UMaA.MAnKH5OFkw7NRT8KgVPuN3tEfrfEwfa');

//     if (Hash::check('123', '$2y$10$/WVU1KlugBomhkjjqcM3lebEG19BeLPAG6cLjsd2NB4YdatHJr7TG'))
    // {
    //     echo "2";
    // }
    // else echo 3;
});
// Phần Route cho giao diện người dùng
Route::get('trangchu','GiaoDienController@getTrangChu');
Route::get('sanpham','GiaoDienController@getSanPham');
Route::get('chitietsp','GiaoDienController@getChiTietsp');
Route::get('dathang','GiaoDienController@getDatHang');

// Quản lý tài khoản, đăng kým, đăng  nhập
Route::get('dangky','TaiKhoanController@getDangKy');
Route::get('dangnhap','TaiKhoanController@getDangNhap');
Route::get('quenmatkhau','TaiKhoanController@getQuenMatKhau');

Route::get('thongtin','TaiKhoanController@getThongTin');
Route::get('suathongtin','TaiKhoanController@getSuaThongTin');



