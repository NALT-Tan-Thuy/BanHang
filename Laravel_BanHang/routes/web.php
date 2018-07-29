<?php

Route::get('/', function () {
    return view('admin.trangchu');
});

Route::get('demodanhsach', function(){
    return view('admin.loaisanpham.danhsach');
});

Route::get('demoThem', function(){
    return view('admin.loaisanpham.them');
});

Route::get('demoSua', function(){
    return view('admin.loaisanpham.sua');
});

Route::get('demoXoaNhieu', function(){
    return view('admin.loaisanpham.xoanhieu');
});

Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'loaisanpham'], function(){
        Route::get('danhsach', 'LoaiSanPhamController@index');
        Route::get('them', 'LoaiSanPhamController@getThem');
        Route::post('them', 'LoaiSanPhamController@postThem');
        Route::get('sua/{id}', 'LoaiSanPhamController@getSua');
        Route::post('sua/{id}', 'LoaiSanPhamController@postSua');
        Route::get('xoa/{id}', 'LoaiSanPhamController@getXoa');
    });

    Route::group(['prefix' => 'user'], function(){
        Route::get('danhsach', 'UserController@index');
        Route::get('sua/{id}', function($id){
            $jsontinhtp = File::get("hanhchinhVietNam/tinh_tp.json");
            $tinhtp = json_decode($jsontinhtp);
            $jsonquanhuyen = File::get("hanhchinhVietNam/quan_huyen.json");
            $quanhuyen = json_decode($jsonquanhuyen);
            $jsonxaphuong = File::get("hanhchinhVietNam/xa_phuong.json");
            $xaphuong = json_decode($jsonxaphuong);
            $user = App\User::find($id);
            return view('admin.user.sua', ['tinhtp'=> $tinhtp, 'quanhuyen' => $quanhuyen, 'xaphuong'=>$xaphuong, 'user'=>$user]);
        });
        
        Route::post('sua/{id}', 'UserController@postSua');
        // Route::get('them', 'UserController@getThem');
        // Route::post('them', 'UserController@postThem');
        
        // Route::get('xoa/{id}', 'UserController@getXoa');
    });

    Route::group(['prefix' => 'ajax'], function(){
        Route::get('getQuanHuyen/{str}', function($str){
            $json = File::get("hanhchinhVietNam/quan_huyen.json");
            $quanhuyen = json_decode($json);
            $s = "\n <h2 class=\"card-inside-title\">Quận/huyện/thị xã</h2>\n <select class=\"form-control show-tick\" name=\"QuanHuyen\" onchange=\"hienThiXaPhuong(this.value)\"> \n <option value=\"\">Chọn quận/huyện/thị xã</option> \n";
            foreach($quanhuyen as $qh){
                if($qh->parent_code == $str) {
                    $s = $s."<option value=\"".$qh->code."\">".$qh->name_with_type."</option>\n";
                }
            }
            echo "$s.</select>";
        });
        Route::get('getXaPhuong/{str}', function($str){
            $json = File::get("hanhchinhVietNam/xa_phuong.json");
            $xaphuong = json_decode($json);
            $s = "<h2 class=\"card-inside-title\">Quận/huyện/thị xã</h2><select class=\"form-control show-tick\"> <option>Chọn quận/huyện/thị xã</option>";
            foreach($xaphuong as $xp){
                if($xp->parent_code == $str) {
                    $s = $s."<option>".$xp->name_with_type."</option>";
                }
            }
            echo "$s.</select>";
        });
    });
});



















Route::get('demojson', function(){
    $str = 1;
    $json = File::get("hanhchinhVietNam/xa_phuong.json");
<<<<<<< HEAD
    $xaphuong = json_decode($json);
    $s = "<h2 class=\"card-inside-title\">Quận/huyện/thị xã</h2><select class=\"form-control show-tick\"> <option>Chọn quận/huyện/thị xã</option>";
    foreach($xaphuong as $xp){
        if($xp->parent_code == $str) {
            $s = $s."<option>".$xp->name_with_type."</option>";
        }
    }
    echo "$s.</select>";
});
=======
            $xaphuong = json_decode($json);
            $s = "<h2 class=\"card-inside-title\">Quận/huyện/thị xã</h2><select class=\"form-control show-tick\"> <option>Chọn quận/huyện/thị xã</option>";
            foreach($xaphuong as $xp){
                if($xp->parent_code == $str) {
                    $s = $s."<option>".$xp->name_with_type."</option>";
                }
            }
            echo "$s.</select>";
    // $json = File::get("hanhchinhVietNam/tinh_tp.json");
    // $data = json_decode($json);
    //                                                                                                                          echo "<pre>";
    // var_dump($data);
    // foreach($data as $key => $value){
    //     echo $key.": ".$value->name."<br>";
    // }
    // echo "<pre>";
    // // print_r($data);
    // "89": {
    //     "name": "An Giang",
    //     "slug": "an-giang",
    //     "type": "tinh",
    //     "name_with_type": "Tỉnh An Giang",
    //     "code": "89",
    //     "quan-huyen": {
    //         "883": {
    //             "name": "Long Xuyên",
    //             "type": "thanh-pho",
    //             "slug": "long-xuyen",
    //             "name_with_type": "Thành phố Long Xuyên",
    //             "path": "Long Xuyên, An Giang",
    //             "path_with_type": "Thành phố Long Xuyên, Tỉnh An Giang",
    //             "code": "883",
    //             "parent_code": "89",
    //             "xa-phuong": {
    //                 "30280": {
    //                     "name": "Mỹ Bình",
    //                     "type": "phuong",
    //                     "slug": "my-binh",
    //                     "name_with_type": "Phường Mỹ Bình",
    //                     "path": "Mỹ Bình, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Mỹ Bình, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30280",
    //                     "parent_code": "883"
    //                 },
    //                 "30283": {
    //                     "name": "Mỹ Long",
    //                     "type": "phuong",
    //                     "slug": "my-long",
    //                     "name_with_type": "Phường Mỹ Long",
    //                     "path": "Mỹ Long, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Mỹ Long, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30283",
    //                     "parent_code": "883"
    //                 },
    //                 "30285": {
    //                     "name": "Đông Xuyên",
    //                     "type": "phuong",
    //                     "slug": "dong-xuyen",
    //                     "name_with_type": "Phường Đông Xuyên",
    //                     "path": "Đông Xuyên, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Đông Xuyên, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30285",
    //                     "parent_code": "883"
    //                 },
    //                 "30286": {
    //                     "name": "Mỹ Xuyên",
    //                     "type": "phuong",
    //                     "slug": "my-xuyen",
    //                     "name_with_type": "Phường Mỹ Xuyên",
    //                     "path": "Mỹ Xuyên, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Mỹ Xuyên, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30286",
    //                     "parent_code": "883"
    //                 },
    //                 "30289": {
    //                     "name": "Bình Đức",
    //                     "type": "phuong",
    //                     "slug": "binh-duc",
    //                     "name_with_type": "Phường Bình Đức",
    //                     "path": "Bình Đức, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Bình Đức, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30289",
    //                     "parent_code": "883"
    //                 },
    //                 "30292": {
    //                     "name": "Bình Khánh",
    //                     "type": "phuong",
    //                     "slug": "binh-khanh",
    //                     "name_with_type": "Phường Bình Khánh",
    //                     "path": "Bình Khánh, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Bình Khánh, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30292",
    //                     "parent_code": "883"
    //                 },
    //                 "30295": {
    //                     "name": "Mỹ Phước",
    //                     "type": "phuong",
    //                     "slug": "my-phuoc",
    //                     "name_with_type": "Phường Mỹ Phước",
    //                     "path": "Mỹ Phước, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Mỹ Phước, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30295",
    //                     "parent_code": "883"
    //                 },
    //                 "30298": {
    //                     "name": "Mỹ Quý",
    //                     "type": "phuong",
    //                     "slug": "my-quy",
    //                     "name_with_type": "Phường Mỹ Quý",
    //                     "path": "Mỹ Quý, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Mỹ Quý, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30298",
    //                     "parent_code": "883"
    //                 },
    //                 "30301": {
    //                     "name": "Mỹ Thới",
    //                     "type": "phuong",
    //                     "slug": "my-thoi",
    //                     "name_with_type": "Phường Mỹ Thới",
    //                     "path": "Mỹ Thới, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Mỹ Thới, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30301",
    //                     "parent_code": "883"
    //                 },
    //                 "30304": {
    //                     "name": "Mỹ Thạnh",
    //                     "type": "phuong",
    //                     "slug": "my-thanh",
    //                     "name_with_type": "Phường Mỹ Thạnh",
    //                     "path": "Mỹ Thạnh, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Mỹ Thạnh, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30304",
    //                     "parent_code": "883"
    //                 },
    //                 "30307": {
    //                     "name": "Mỹ Hòa",
    //                     "type": "phuong",
    //                     "slug": "my-hoa",
    //                     "name_with_type": "Phường Mỹ Hòa",
    //                     "path": "Mỹ Hòa, Long Xuyên, An Giang",
    //                     "path_with_type": "Phường Mỹ Hòa, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30307",
    //                     "parent_code": "883"
    //                 },
    //                 "30310": {
    //                     "name": "Mỹ Khánh",
    //                     "type": "xa",
    //                     "slug": "my-khanh",
    //                     "name_with_type": "Xã Mỹ Khánh",
    //                     "path": "Mỹ Khánh, Long Xuyên, An Giang",
    //                     "path_with_type": "Xã Mỹ Khánh, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30310",
    //                     "parent_code": "883"
    //                 },
    //                 "30313": {
    //                     "name": "Mỹ Hoà Hưng",
    //                     "type": "xa",
    //                     "slug": "my-hoa-hung",
    //                     "name_with_type": "Xã Mỹ Hoà Hưng",
    //                     "path": "Mỹ Hoà Hưng, Long Xuyên, An Giang",
    //                     "path_with_type": "Xã Mỹ Hoà Hưng, Thành phố Long Xuyên, Tỉnh An Giang",
    //                     "code": "30313",
    //                     "parent_code": "883"
    //                 }
    //             }
    //         },
    //         "884": {
    //             "name": "Châu Đốc",
    //             "type": "thanh-pho",
    //             "slug": "chau-doc",
    //             "name_with_type": "Thành phố Châu Đốc",
    //             "path": "Châu Đốc, An Giang",
    //             "path_with_type": "Thành phố Châu Đốc, Tỉnh An Giang",
    //             "code": "884",
    //             "parent_code": "89",
    //             "xa-phuong": {
    //                 "30316": {
    //                     "name": "Châu Phú B",
    //                     "type": "phuong",
    //                     "slug": "chau-phu-b",
    //                     "name_with_type": "Phường Châu Phú B",
    //                     "path": "Châu Phú B, Châu Đốc, An Giang",
    //                     "path_with_type": "Phường Châu Phú B, Thành phố Châu Đốc, Tỉnh An Giang",
    //                     "code": "30316",
    //                     "parent_code": "884"
    //                 },
    //                 "30319": {
    //                     "name": "Châu Phú A",
    //                     "type": "phuong",
    //                     "slug": "chau-phu-a",
    //                     "name_with_type": "Phường Châu Phú A",
    //                     "path": "Châu Phú A, Châu Đốc, An Giang",
    //                     "path_with_type": "Phường Châu Phú A, Thành phố Châu Đốc, Tỉnh An Giang",
    //                     "code": "30319",
    //                     "parent_code": "884"
    //                 },
    //                 "30322": {
    //                     "name": "Vĩnh Mỹ",
    //                     "type": "phuong",
    //                     "slug": "vinh-my",
    //                     "name_with_type": "Phường Vĩnh Mỹ",
    //                     "path": "Vĩnh Mỹ, Châu Đốc, An Giang",
    //                     "path_with_type": "Phường Vĩnh Mỹ, Thành phố Châu Đốc, Tỉnh An Giang",
    //                     "code": "30322",
    //                     "parent_code": "884"
    //                 },
    //                 "30325": {
    //                     "name": "Núi Sam",
    //                     "type": "phuong",
    //                     "slug": "nui-sam",
    //                     "name_with_type": "Phường Núi Sam",
    //                     "path": "Núi Sam, Châu Đốc, An Giang",
    //                     "path_with_type": "Phường Núi Sam, Thành phố Châu Đốc, Tỉnh An Giang",
    //                     "code": "30325",
    //                     "parent_code": "884"
    //                 },
    //                 "30328": {
    //                     "name": "Vĩnh Ngươn",
    //                     "type": "phuong",
    //                     "slug": "vinh-nguon",
    //                     "name_with_type": "Phường Vĩnh Ngươn",
    //                     "path": "Vĩnh Ngươn, Châu Đốc, An Giang",
    //                     "path_with_type": "Phường Vĩnh Ngươn, Thành phố Châu Đốc, Tỉnh An Giang",
    //                     "code": "30328",
    //                     "parent_code": "884"
    //                 },
    //                 "30331": {
    //                     "name": "Vĩnh Tế",
    //                     "type": "xa",
    //                     "slug": "vinh-te",
    //                     "name_with_type": "Xã Vĩnh Tế",
    //                     "path": "Vĩnh Tế, Châu Đốc, An Giang",
    //                     "path_with_type": "Xã Vĩnh Tế, Thành phố Châu Đốc, Tỉnh An Giang",
    //                     "code": "30331",
    //                     "parent_code": "884"
    //                 },
    //                 "30334": {
    //                     "name": "Vĩnh Châu",
    //                     "type": "xa",
    //                     "slug": "vinh-chau",
    //                     "name_with_type": "Xã Vĩnh Châu",
    //                     "path": "Vĩnh Châu, Châu Đốc, An Giang",
    //                     "path_with_type": "Xã Vĩnh Châu, Thành phố Châu Đốc, Tỉnh An Giang",
    //                     "code": "30334",
    //                     "parent_code": "884"
    //                 }
    //             }
    //         }
           
          
                     

    //     }
    // },

 
});
   // Phần Route cho giao diện người dùng
   Route::get('trangchu','GiaoDienController@getTrangChu');
>>>>>>> c271e339c0c89cbc65f9708ae96e73c04a4c7976
