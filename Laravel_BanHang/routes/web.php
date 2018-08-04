<?php

Route::get('/', function () {
    return view('admin.trangchu');
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
        Route::get('them', 'UserController@getThem');
        Route::post('them', 'UserController@postThem');
        Route::get('xoa/{id}', 'UserController@getXoa');
    });

    Route::group(['prefix' => 'sanpham'], function () {
        Route::get('danhsach', 'SanPhamController@index');
        Route::get('sua/{id}', 'SanPhamController@getSua');
        Route::post('sua/{id}', 'SanPhamController@postSua');
        Route::get('them', 'SanPhamController@getThem');
        Route::post('them', 'SanPhamController@postThem');
        Route::get('xoa/{id}', 'SanPhamController@getXoa');
    });

    Route::group(['prefix' => 'chitietsanpham'], function () {
        Route::get('danhsach', 'ChiTietSanPhamController@index');
        Route::get('sua/{id}', 'ChiTietSanPhamController@getSua');
        Route::post('sua/{id}', 'ChiTietSanPhamController@postSua');
        Route::get('them', 'ChiTietSanPhamController@getThem');
        Route::post('them', 'ChiTietSanPhamController@postThem');
        Route::get('xoa/{id}', 'ChiTietSanPhamController@getXoa');
    });

    Route::group(['prefix' => 'slide'], function () {
        Route::get('danhsach', 'SlideController@index');
        Route::get('sua/{id}', 'SlideController@getSua');
        Route::post('sua/{id}', 'SlideController@postSua');
        Route::get('them', 'SlideController@getThem');
        Route::post('them', 'SlideController@postThem');
        Route::get('xoa/{id}', 'SlideController@getXoa');
    });

    Route::group(['prefix' => 'thuonghieu'], function () {
        Route::get('danhsach', 'ThuongHieuController@index');
        Route::get('sua/{id}', 'ThuongHieuController@getSua');
        Route::post('sua/{id}', 'ThuongHieuController@postSua');
        Route::get('them', 'ThuongHieuController@getThem');
        Route::post('them', 'ThuongHieuController@postThem');
        Route::get('xoa/{id}', 'ThuongHieuController@getXoa');
    });

    Route::group(['prefix' => 'trangchu'], function () {
        Route::get('sua', 'TrangChuController@index');
        Route::post('sua', 'TrangChuController@postSua');
    });

    Route::group(['prefix' => 'lienhe'], function () {
        Route::get('danhsach', 'LienHeController@index');
        Route::get('sua/{id}', 'LienHeController@getSua');
        Route::post('sua/{id}', 'LienHeController@postSua');
        Route::get('them', 'LienHeController@getThem');
        Route::post('them', 'LienHeController@postThem');
        Route::get('xoa/{id}', 'LienHeController@getXoa');
    });

    Route::group(['prefix' => 'kichcomau'], function () {
        Route::get('danhsach', 'KichCoMauController@index');
        Route::get('sua/{id}', 'KichCoMauController@getSua');
        Route::post('sua/{id}', 'KichCoMauController@postSua');
        Route::get('them', 'KichCoMauController@getThem');
        Route::post('them', 'KichCoMauController@postThem');
        Route::get('xoa/{id}', 'KichCoMauController@getXoa');
    });

    Route::group(['prefix' => 'hoadon'], function () {
        Route::get('danhsach', 'HoaDonController@index');
        Route::get('xoa/{id}', 'HoaDonController@getXoa');
    });

    Route::group(['prefix' => 'chitiethoadon'], function () {
        Route::get('danhsach/{id}', 'ChiTietHoaDonController@index');
        Route::get('xoa/{idct}/{idhoadon}', 'ChiTietHoaDonController@getXoa');
    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('getQuanHuyen/{str}', 'ajaxController@getQuanHuyenUser');
        Route::get('getXaPhuong/{str}', 'ajaxController@getXaPhuongUser');
        //Ajax thay đổi thanh toán chi tiết hóa đơn
        Route::get('getThayDoiThanhToanChiTiet/{idct}/{trangthai}/{idhoadon}', 'ajaxController@getThayDoiThanhToanChiTiet');
        //Ajax thay đổi thanh toán hóa đơn
        Route::get('getThayDoiThanhToanHoaDon/{id}/{trangthai}', 'ajaxController@getThayDoiThanhToanHoaDon');

    });
});

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
Route::get('dathang', 'GiaoDienController@getDatHang');

// Quản lý tài khoản, đăng ký, đăng  nhập
Route::get('dangky', 'TaiKhoanController@getDangKy');
Route::post('dangky', 'TaiKhoanController@postDangKyTaiKhoan');

Route::get('dangnhap', 'TaiKhoanController@getDangNhap')->name('dangnhap');
Route::post('dangnhap', 'TaiKhoanController@postDangNhap');
Route::get('dangxuat', 'TaiKhoanController@getDangXuat')->middleware('TaiKhoanMiddleware');

Route::get('quenmatkhau', 'TaiKhoanController@getQuenMatKhau');

Route::get('thongtin', 'TaiKhoanController@getThongTin')->middleware('TaiKhoanMiddleware');
Route::get('suathongtin', 'TaiKhoanController@getSuaThongTin')->middleware('TaiKhoanMiddleware');
Route::post('suathongtin', 'TaiKhoanController@postSuaThongTinTK')->middleware('TaiKhoanMiddleware');

Route::get('suamatkhau/{matkhau}', 'TaiKhoanController@getSuaMatKhau')->middleware('TaiKhoanMiddleware');
Route::get('chonquanhuyen/{tenTinh}', 'TaiKhoanController@getChonQuanHuyen')->middleware('TaiKhoanMiddleware');
Route::get('chonxaphuong/{tenHuyen}', 'TaiKhoanController@getChonXaPhuong')->middleware('TaiKhoanMiddleware');

Route::get('sanphamtuongunghome/{idsp}', 'GiaoDienController@getSanPhamTuongUngHome');
Route::get('timsptuongunghome/{idsp}', 'GiaoDienController@getTimSPTuongUngHome');

// xử lý trang sản phẩm
Route::get('sanpham/{idloai}/{idsp}', 'GiaoDienController@getSanPhamTheoSanPham');
Route::get('sanpham/{id}', 'GiaoDienController@getSanPhamTheoLoai');

Route::group(['prefix' => 'trangchu'], function () {
    Route::post('timkiem', 'TimKiemController@getTimKiem');
});

Route::get('/demo', function () {
    $id = App\ChiTietSanPham::select('id')->orderBy('id', 'ASC')->get()->last();
    echo $id->id;
});
// Xử lý chi tiết sản phẩm
Route::get('chitietsp/{id}', 'GiaoDienController@getChiTietsp');

// Xử lý giỏ hàng
Route::get('themgiohang/{id}', 'GiaoDienController@getThemGioHang');
Route::get('xoagiohang/{id}', 'GiaoDienController@getXoaTatCaGioHang');
Route::get('xoamotgiohang/{id}', 'GiaoDienController@getMotGioHang');
