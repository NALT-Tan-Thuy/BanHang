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
        Route::get('sua/{id}', 'UserController@getSua');

        Route::post('sua/{id}', 'UserController@postSua');
        // Route::get('them', 'UserController@getThem');
        // Route::post('them', 'UserController@postThem');

        // Route::get('xoa/{id}', 'UserController@getXoa');
    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('getQuanHuyen/{str}', 'ajaxController@getQuanHuyenUser');
        Route::get('getXaPhuong/{str}', 'ajaxController@getXaPhuongUser');
    });
});

// Phần Route cho giao diện người dùng
Route::get('trangchu', 'GiaoDienController@getTrangChu');
Route::get('sanpham', 'GiaoDienController@getSanPham');
Route::get('chitietsp', 'GiaoDienController@getChiTietsp');
Route::get('dathang', 'GiaoDienController@getDatHang');

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

});
// Phần Route cho giao diện người dùng
Route::get('trangchu', 'GiaoDienController@getTrangChu');
Route::get('sanpham', 'GiaoDienController@getSanPham');
Route::get('chitietsp', 'GiaoDienController@getChiTietsp');
Route::get('dathang', 'GiaoDienController@getDatHang');

// Quản lý tài khoản, đăng kým, đăng  nhập
Route::get('dangky', 'TaiKhoanController@getDangKy');
Route::post('dangky', 'TaiKhoanController@postDangKyTaiKhoan');

Route::get('dangnhap', 'TaiKhoanController@getDangNhap');
Route::get('quenmatkhau', 'TaiKhoanController@getQuenMatKhau');

Route::get('thongtin', 'TaiKhoanController@getThongTin');
Route::get('suathongtin', 'TaiKhoanController@getSuaThongTin');
