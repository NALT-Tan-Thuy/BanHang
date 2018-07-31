<?php

use Illuminate\Database\Seeder;
use App\QuanHuyen;
class QuanHuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuanHuyen::create( [
            'id'=>0,
            'ten'=>'',
            'donvi'=>'',
            'tenkhongdau'=>'',
            'tendaydu'=>'',
            'tenthuong'=>'',
            'tenhanhchinh'=>'',
            'code'=>0,
            'id_tinh_thanhpho'=>0
            ] );

        QuanHuyen::create( [
            'id'=>883,
            'ten'=>'Long Xuyên',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'long-xuyen',
            'tendaydu'=>'Thành phố Long Xuyên',
            'tenthuong'=>'Long Xuyên, An Giang',
            'tenhanhchinh'=>'Thành phố Long Xuyên, Tỉnh An Giang',
            'code'=>883,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>884,
            'ten'=>'Châu Đốc',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'chau-doc',
            'tendaydu'=>'Thành phố Châu Đốc',
            'tenthuong'=>'Châu Đốc, An Giang',
            'tenhanhchinh'=>'Thành phố Châu Đốc, Tỉnh An Giang',
            'code'=>884,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>886,
            'ten'=>'An Phú',
            'donvi'=>'huyen',
            'tenkhongdau'=>'an-phu',
            'tendaydu'=>'Huyện An Phú',
            'tenthuong'=>'An Phú, An Giang',
            'tenhanhchinh'=>'Huyện An Phú, Tỉnh An Giang',
            'code'=>886,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>887,
            'ten'=>'Tân Châu',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'tan-chau',
            'tendaydu'=>'Thị xã Tân Châu',
            'tenthuong'=>'Tân Châu, An Giang',
            'tenhanhchinh'=>'Thị xã Tân Châu, Tỉnh An Giang',
            'code'=>887,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>888,
            'ten'=>'Phú Tân',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-tan',
            'tendaydu'=>'Huyện Phú Tân',
            'tenthuong'=>'Phú Tân, An Giang',
            'tenhanhchinh'=>'Huyện Phú Tân, Tỉnh An Giang',
            'code'=>888,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>889,
            'ten'=>'Châu Phú',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chau-phu',
            'tendaydu'=>'Huyện Châu Phú',
            'tenthuong'=>'Châu Phú, An Giang',
            'tenhanhchinh'=>'Huyện Châu Phú, Tỉnh An Giang',
            'code'=>889,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>890,
            'ten'=>'Tịnh Biên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tinh-bien',
            'tendaydu'=>'Huyện Tịnh Biên',
            'tenthuong'=>'Tịnh Biên, An Giang',
            'tenhanhchinh'=>'Huyện Tịnh Biên, Tỉnh An Giang',
            'code'=>890,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>891,
            'ten'=>'Tri Tôn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tri-ton',
            'tendaydu'=>'Huyện Tri Tôn',
            'tenthuong'=>'Tri Tôn, An Giang',
            'tenhanhchinh'=>'Huyện Tri Tôn, Tỉnh An Giang',
            'code'=>891,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>892,
            'ten'=>'Châu Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chau-thanh',
            'tendaydu'=>'Huyện Châu Thành',
            'tenthuong'=>'Châu Thành, An Giang',
            'tenhanhchinh'=>'Huyện Châu Thành, Tỉnh An Giang',
            'code'=>892,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>893,
            'ten'=>'Chợ Mới',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cho-moi',
            'tendaydu'=>'Huyện Chợ Mới',
            'tenthuong'=>'Chợ Mới, An Giang',
            'tenhanhchinh'=>'Huyện Chợ Mới, Tỉnh An Giang',
            'code'=>893,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>894,
            'ten'=>'Thoại Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thoai-son',
            'tendaydu'=>'Huyện Thoại Sơn',
            'tenthuong'=>'Thoại Sơn, An Giang',
            'tenhanhchinh'=>'Huyện Thoại Sơn, Tỉnh An Giang',
            'code'=>894,
            'id_tinh_thanhpho'=>89
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>608,
            'ten'=>'Kon Tum',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'kon-tum',
            'tendaydu'=>'Thành phố Kon Tum',
            'tenthuong'=>'Kon Tum, Kon Tum',
            'tenhanhchinh'=>'Thành phố Kon Tum, Tỉnh Kon Tum',
            'code'=>608,
            'id_tinh_thanhpho'=>62
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>610,
            'ten'=>'Đắk Glei',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dak-glei',
            'tendaydu'=>'Huyện Đắk Glei',
            'tenthuong'=>'Đắk Glei, Kon Tum',
            'tenhanhchinh'=>'Huyện Đắk Glei, Tỉnh Kon Tum',
            'code'=>610,
            'id_tinh_thanhpho'=>62
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>611,
            'ten'=>'Ngọc Hồi',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ngoc-hoi',
            'tendaydu'=>'Huyện Ngọc Hồi',
            'tenthuong'=>'Ngọc Hồi, Kon Tum',
            'tenhanhchinh'=>'Huyện Ngọc Hồi, Tỉnh Kon Tum',
            'code'=>611,
            'id_tinh_thanhpho'=>62
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>612,
            'ten'=>'Đắk Tô',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dak-to',
            'tendaydu'=>'Huyện Đắk Tô',
            'tenthuong'=>'Đắk Tô, Kon Tum',
            'tenhanhchinh'=>'Huyện Đắk Tô, Tỉnh Kon Tum',
            'code'=>612,
            'id_tinh_thanhpho'=>62
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>613,
            'ten'=>'Kon Plông',
            'donvi'=>'huyen',
            'tenkhongdau'=>'kon-plong',
            'tendaydu'=>'Huyện Kon Plông',
            'tenthuong'=>'Kon Plông, Kon Tum',
            'tenhanhchinh'=>'Huyện Kon Plông, Tỉnh Kon Tum',
            'code'=>613,
            'id_tinh_thanhpho'=>62
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>614,
            'ten'=>'Kon Rẫy',
            'donvi'=>'huyen',
            'tenkhongdau'=>'kon-ray',
            'tendaydu'=>'Huyện Kon Rẫy',
            'tenthuong'=>'Kon Rẫy, Kon Tum',
            'tenhanhchinh'=>'Huyện Kon Rẫy, Tỉnh Kon Tum',
            'code'=>614,
            'id_tinh_thanhpho'=>62
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>615,
            'ten'=>'Đắk Hà',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dak-ha',
            'tendaydu'=>'Huyện Đắk Hà',
            'tenthuong'=>'Đắk Hà, Kon Tum',
            'tenhanhchinh'=>'Huyện Đắk Hà, Tỉnh Kon Tum',
            'code'=>615,
            'id_tinh_thanhpho'=>62
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>616,
            'ten'=>'Sa Thầy',
            'donvi'=>'huyen',
            'tenkhongdau'=>'sa-thay',
            'tendaydu'=>'Huyện Sa Thầy',
            'tenthuong'=>'Sa Thầy, Kon Tum',
            'tenhanhchinh'=>'Huyện Sa Thầy, Tỉnh Kon Tum',
            'code'=>616,
            'id_tinh_thanhpho'=>62
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>617,
            'ten'=>'Tu Mơ Rông',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tu-mo-rong',
            'tendaydu'=>'Huyện Tu Mơ Rông',
            'tenthuong'=>'Tu Mơ Rông, Kon Tum',
            'tenhanhchinh'=>'Huyện Tu Mơ Rông, Tỉnh Kon Tum',
            'code'=>617,
            'id_tinh_thanhpho'=>62
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>618,
            'ten'=>'Ia H\' Drai',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ia-h-drai',
            'tendaydu'=>'Huyện Ia H\' Drai',
            'tenthuong'=>'Ia H\' Drai, Kon Tum',
            'tenhanhchinh'=>'Huyện Ia H\' Drai, Tỉnh Kon Tum',
            'code'=>618,
            'id_tinh_thanhpho'=>62
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>660,
            'ten'=>'Gia Nghĩa',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'gia-nghia',
            'tendaydu'=>'Thị xã Gia Nghĩa',
            'tenthuong'=>'Gia Nghĩa, Đắk Nông',
            'tenhanhchinh'=>'Thị xã Gia Nghĩa, Tỉnh Đắk Nông',
            'code'=>660,
            'id_tinh_thanhpho'=>67
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>661,
            'ten'=>'Đăk Glong',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dak-glong',
            'tendaydu'=>'Huyện Đăk Glong',
            'tenthuong'=>'Đăk Glong, Đắk Nông',
            'tenhanhchinh'=>'Huyện Đăk Glong, Tỉnh Đắk Nông',
            'code'=>661,
            'id_tinh_thanhpho'=>67
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>662,
            'ten'=>'Cư Jút',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cu-jut',
            'tendaydu'=>'Huyện Cư Jút',
            'tenthuong'=>'Cư Jút, Đắk Nông',
            'tenhanhchinh'=>'Huyện Cư Jút, Tỉnh Đắk Nông',
            'code'=>662,
            'id_tinh_thanhpho'=>67
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>663,
            'ten'=>'Đắk Mil',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dak-mil',
            'tendaydu'=>'Huyện Đắk Mil',
            'tenthuong'=>'Đắk Mil, Đắk Nông',
            'tenhanhchinh'=>'Huyện Đắk Mil, Tỉnh Đắk Nông',
            'code'=>663,
            'id_tinh_thanhpho'=>67
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>664,
            'ten'=>'Krông Nô',
            'donvi'=>'huyen',
            'tenkhongdau'=>'krong-no',
            'tendaydu'=>'Huyện Krông Nô',
            'tenthuong'=>'Krông Nô, Đắk Nông',
            'tenhanhchinh'=>'Huyện Krông Nô, Tỉnh Đắk Nông',
            'code'=>664,
            'id_tinh_thanhpho'=>67
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>665,
            'ten'=>'Đắk Song',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dak-song',
            'tendaydu'=>'Huyện Đắk Song',
            'tenthuong'=>'Đắk Song, Đắk Nông',
            'tenhanhchinh'=>'Huyện Đắk Song, Tỉnh Đắk Nông',
            'code'=>665,
            'id_tinh_thanhpho'=>67
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>666,
            'ten'=>'Đắk R\'Lấp',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dak-r-lap',
            'tendaydu'=>'Huyện Đắk R\'Lấp',
            'tenthuong'=>'Đắk R\'Lấp, Đắk Nông',
            'tenhanhchinh'=>'Huyện Đắk R\'Lấp, Tỉnh Đắk Nông',
            'code'=>666,
            'id_tinh_thanhpho'=>67
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>667,
            'ten'=>'Tuy Đức',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tuy-duc',
            'tendaydu'=>'Huyện Tuy Đức',
            'tenthuong'=>'Tuy Đức, Đắk Nông',
            'tenhanhchinh'=>'Huyện Tuy Đức, Tỉnh Đắk Nông',
            'code'=>667,
            'id_tinh_thanhpho'=>67
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>941,
            'ten'=>'Sóc Trăng',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'soc-trang',
            'tendaydu'=>'Thành phố Sóc Trăng',
            'tenthuong'=>'Sóc Trăng, Sóc Trăng',
            'tenhanhchinh'=>'Thành phố Sóc Trăng, Tỉnh Sóc Trăng',
            'code'=>941,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>942,
            'ten'=>'Châu Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chau-thanh',
            'tendaydu'=>'Huyện Châu Thành',
            'tenthuong'=>'Châu Thành, Sóc Trăng',
            'tenhanhchinh'=>'Huyện Châu Thành, Tỉnh Sóc Trăng',
            'code'=>942,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>943,
            'ten'=>'Kế Sách',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ke-sach',
            'tendaydu'=>'Huyện Kế Sách',
            'tenthuong'=>'Kế Sách, Sóc Trăng',
            'tenhanhchinh'=>'Huyện Kế Sách, Tỉnh Sóc Trăng',
            'code'=>943,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>944,
            'ten'=>'Mỹ Tú',
            'donvi'=>'huyen',
            'tenkhongdau'=>'my-tu',
            'tendaydu'=>'Huyện Mỹ Tú',
            'tenthuong'=>'Mỹ Tú, Sóc Trăng',
            'tenhanhchinh'=>'Huyện Mỹ Tú, Tỉnh Sóc Trăng',
            'code'=>944,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>945,
            'ten'=>'Cù Lao Dung',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cu-lao-dung',
            'tendaydu'=>'Huyện Cù Lao Dung',
            'tenthuong'=>'Cù Lao Dung, Sóc Trăng',
            'tenhanhchinh'=>'Huyện Cù Lao Dung, Tỉnh Sóc Trăng',
            'code'=>945,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>946,
            'ten'=>'Long Phú',
            'donvi'=>'huyen',
            'tenkhongdau'=>'long-phu',
            'tendaydu'=>'Huyện Long Phú',
            'tenthuong'=>'Long Phú, Sóc Trăng',
            'tenhanhchinh'=>'Huyện Long Phú, Tỉnh Sóc Trăng',
            'code'=>946,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>947,
            'ten'=>'Mỹ Xuyên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'my-xuyen',
            'tendaydu'=>'Huyện Mỹ Xuyên',
            'tenthuong'=>'Mỹ Xuyên, Sóc Trăng',
            'tenhanhchinh'=>'Huyện Mỹ Xuyên, Tỉnh Sóc Trăng',
            'code'=>947,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>948,
            'ten'=>'Ngã Năm',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'nga-nam',
            'tendaydu'=>'Thị xã Ngã Năm',
            'tenthuong'=>'Ngã Năm, Sóc Trăng',
            'tenhanhchinh'=>'Thị xã Ngã Năm, Tỉnh Sóc Trăng',
            'code'=>948,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>949,
            'ten'=>'Thạnh Trị',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thanh-tri',
            'tendaydu'=>'Huyện Thạnh Trị',
            'tenthuong'=>'Thạnh Trị, Sóc Trăng',
            'tenhanhchinh'=>'Huyện Thạnh Trị, Tỉnh Sóc Trăng',
            'code'=>949,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>950,
            'ten'=>'Vĩnh Châu',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'vinh-chau',
            'tendaydu'=>'Thị xã Vĩnh Châu',
            'tenthuong'=>'Vĩnh Châu, Sóc Trăng',
            'tenhanhchinh'=>'Thị xã Vĩnh Châu, Tỉnh Sóc Trăng',
            'code'=>950,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>951,
            'ten'=>'Trần Đề',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tran-de',
            'tendaydu'=>'Huyện Trần Đề',
            'tenthuong'=>'Trần Đề, Sóc Trăng',
            'tenhanhchinh'=>'Huyện Trần Đề, Tỉnh Sóc Trăng',
            'code'=>951,
            'id_tinh_thanhpho'=>94
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>688,
            'ten'=>'Phước Long',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'phuoc-long',
            'tendaydu'=>'Thị xã Phước Long',
            'tenthuong'=>'Phước Long, Bình Phước',
            'tenhanhchinh'=>'Thị xã Phước Long, Tỉnh Bình Phước',
            'code'=>688,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>689,
            'ten'=>'Đồng Xoài',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'dong-xoai',
            'tendaydu'=>'Thị xã Đồng Xoài',
            'tenthuong'=>'Đồng Xoài, Bình Phước',
            'tenhanhchinh'=>'Thị xã Đồng Xoài, Tỉnh Bình Phước',
            'code'=>689,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>690,
            'ten'=>'Bình Long',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'binh-long',
            'tendaydu'=>'Thị xã Bình Long',
            'tenthuong'=>'Bình Long, Bình Phước',
            'tenhanhchinh'=>'Thị xã Bình Long, Tỉnh Bình Phước',
            'code'=>690,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>691,
            'ten'=>'Bù Gia Mập',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bu-gia-map',
            'tendaydu'=>'Huyện Bù Gia Mập',
            'tenthuong'=>'Bù Gia Mập, Bình Phước',
            'tenhanhchinh'=>'Huyện Bù Gia Mập, Tỉnh Bình Phước',
            'code'=>691,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>692,
            'ten'=>'Lộc Ninh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'loc-ninh',
            'tendaydu'=>'Huyện Lộc Ninh',
            'tenthuong'=>'Lộc Ninh, Bình Phước',
            'tenhanhchinh'=>'Huyện Lộc Ninh, Tỉnh Bình Phước',
            'code'=>692,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>693,
            'ten'=>'Bù Đốp',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bu-dop',
            'tendaydu'=>'Huyện Bù Đốp',
            'tenthuong'=>'Bù Đốp, Bình Phước',
            'tenhanhchinh'=>'Huyện Bù Đốp, Tỉnh Bình Phước',
            'code'=>693,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>694,
            'ten'=>'Hớn Quản',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hon-quan',
            'tendaydu'=>'Huyện Hớn Quản',
            'tenthuong'=>'Hớn Quản, Bình Phước',
            'tenhanhchinh'=>'Huyện Hớn Quản, Tỉnh Bình Phước',
            'code'=>694,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>695,
            'ten'=>'Đồng Phú',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dong-phu',
            'tendaydu'=>'Huyện Đồng Phú',
            'tenthuong'=>'Đồng Phú, Bình Phước',
            'tenhanhchinh'=>'Huyện Đồng Phú, Tỉnh Bình Phước',
            'code'=>695,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>696,
            'ten'=>'Bù Đăng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bu-dang',
            'tendaydu'=>'Huyện Bù Đăng',
            'tenthuong'=>'Bù Đăng, Bình Phước',
            'tenhanhchinh'=>'Huyện Bù Đăng, Tỉnh Bình Phước',
            'code'=>696,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>697,
            'ten'=>'Chơn Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chon-thanh',
            'tendaydu'=>'Huyện Chơn Thành',
            'tenthuong'=>'Chơn Thành, Bình Phước',
            'tenhanhchinh'=>'Huyện Chơn Thành, Tỉnh Bình Phước',
            'code'=>697,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>698,
            'ten'=>'Phú Riềng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-rieng',
            'tendaydu'=>'Huyện Phú Riềng',
            'tenthuong'=>'Phú Riềng, Bình Phước',
            'tenhanhchinh'=>'Huyện Phú Riềng, Tỉnh Bình Phước',
            'code'=>698,
            'id_tinh_thanhpho'=>70
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>323,
            'ten'=>'Hưng Yên',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'hung-yen',
            'tendaydu'=>'Thành phố Hưng Yên',
            'tenthuong'=>'Hưng Yên, Hưng Yên',
            'tenhanhchinh'=>'Thành phố Hưng Yên, Tỉnh Hưng Yên',
            'code'=>323,
            'id_tinh_thanhpho'=>33
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>325,
            'ten'=>'Văn Lâm',
            'donvi'=>'huyen',
            'tenkhongdau'=>'van-lam',
            'tendaydu'=>'Huyện Văn Lâm',
            'tenthuong'=>'Văn Lâm, Hưng Yên',
            'tenhanhchinh'=>'Huyện Văn Lâm, Tỉnh Hưng Yên',
            'code'=>325,
            'id_tinh_thanhpho'=>33
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>326,
            'ten'=>'Văn Giang',
            'donvi'=>'huyen',
            'tenkhongdau'=>'van-giang',
            'tendaydu'=>'Huyện Văn Giang',
            'tenthuong'=>'Văn Giang, Hưng Yên',
            'tenhanhchinh'=>'Huyện Văn Giang, Tỉnh Hưng Yên',
            'code'=>326,
            'id_tinh_thanhpho'=>33
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>327,
            'ten'=>'Yên Mỹ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'yen-my',
            'tendaydu'=>'Huyện Yên Mỹ',
            'tenthuong'=>'Yên Mỹ, Hưng Yên',
            'tenhanhchinh'=>'Huyện Yên Mỹ, Tỉnh Hưng Yên',
            'code'=>327,
            'id_tinh_thanhpho'=>33
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>328,
            'ten'=>'Mỹ Hào',
            'donvi'=>'huyen',
            'tenkhongdau'=>'my-hao',
            'tendaydu'=>'Huyện Mỹ Hào',
            'tenthuong'=>'Mỹ Hào, Hưng Yên',
            'tenhanhchinh'=>'Huyện Mỹ Hào, Tỉnh Hưng Yên',
            'code'=>328,
            'id_tinh_thanhpho'=>33
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>329,
            'ten'=>'Ân Thi',
            'donvi'=>'huyen',
            'tenkhongdau'=>'an-thi',
            'tendaydu'=>'Huyện Ân Thi',
            'tenthuong'=>'Ân Thi, Hưng Yên',
            'tenhanhchinh'=>'Huyện Ân Thi, Tỉnh Hưng Yên',
            'code'=>329,
            'id_tinh_thanhpho'=>33
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>330,
            'ten'=>'Khoái Châu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'khoai-chau',
            'tendaydu'=>'Huyện Khoái Châu',
            'tenthuong'=>'Khoái Châu, Hưng Yên',
            'tenhanhchinh'=>'Huyện Khoái Châu, Tỉnh Hưng Yên',
            'code'=>330,
            'id_tinh_thanhpho'=>33
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>331,
            'ten'=>'Kim Động',
            'donvi'=>'huyen',
            'tenkhongdau'=>'kim-dong',
            'tendaydu'=>'Huyện Kim Động',
            'tenthuong'=>'Kim Động, Hưng Yên',
            'tenhanhchinh'=>'Huyện Kim Động, Tỉnh Hưng Yên',
            'code'=>331,
            'id_tinh_thanhpho'=>33
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>332,
            'ten'=>'Tiên Lữ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tien-lu',
            'tendaydu'=>'Huyện Tiên Lữ',
            'tenthuong'=>'Tiên Lữ, Hưng Yên',
            'tenhanhchinh'=>'Huyện Tiên Lữ, Tỉnh Hưng Yên',
            'code'=>332,
            'id_tinh_thanhpho'=>33
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>333,
            'ten'=>'Phù Cừ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-cu',
            'tendaydu'=>'Huyện Phù Cừ',
            'tenthuong'=>'Phù Cừ, Hưng Yên',
            'tenhanhchinh'=>'Huyện Phù Cừ, Tỉnh Hưng Yên',
            'code'=>333,
            'id_tinh_thanhpho'=>33
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>380,
            'ten'=>'Thanh Hóa',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'thanh-hoa',
            'tendaydu'=>'Thành phố Thanh Hóa',
            'tenthuong'=>'Thanh Hóa, Thanh Hóa',
            'tenhanhchinh'=>'Thành phố Thanh Hóa, Tỉnh Thanh Hóa',
            'code'=>380,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>381,
            'ten'=>'Bỉm Sơn',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'bim-son',
            'tendaydu'=>'Thị xã Bỉm Sơn',
            'tenthuong'=>'Bỉm Sơn, Thanh Hóa',
            'tenhanhchinh'=>'Thị xã Bỉm Sơn, Tỉnh Thanh Hóa',
            'code'=>381,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>382,
            'ten'=>'Sầm Sơn',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'sam-son',
            'tendaydu'=>'Thành phố Sầm Sơn',
            'tenthuong'=>'Sầm Sơn, Thanh Hóa',
            'tenhanhchinh'=>'Thành phố Sầm Sơn, Tỉnh Thanh Hóa',
            'code'=>382,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>384,
            'ten'=>'Mường Lát',
            'donvi'=>'huyen',
            'tenkhongdau'=>'muong-lat',
            'tendaydu'=>'Huyện Mường Lát',
            'tenthuong'=>'Mường Lát, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Mường Lát, Tỉnh Thanh Hóa',
            'code'=>384,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>385,
            'ten'=>'Quan Hóa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quan-hoa',
            'tendaydu'=>'Huyện Quan Hóa',
            'tenthuong'=>'Quan Hóa, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Quan Hóa, Tỉnh Thanh Hóa',
            'code'=>385,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>386,
            'ten'=>'Bá Thước',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ba-thuoc',
            'tendaydu'=>'Huyện Bá Thước',
            'tenthuong'=>'Bá Thước, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Bá Thước, Tỉnh Thanh Hóa',
            'code'=>386,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>387,
            'ten'=>'Quan Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quan-son',
            'tendaydu'=>'Huyện Quan Sơn',
            'tenthuong'=>'Quan Sơn, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Quan Sơn, Tỉnh Thanh Hóa',
            'code'=>387,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>388,
            'ten'=>'Lang Chánh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'lang-chanh',
            'tendaydu'=>'Huyện Lang Chánh',
            'tenthuong'=>'Lang Chánh, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Lang Chánh, Tỉnh Thanh Hóa',
            'code'=>388,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>389,
            'ten'=>'Ngọc Lặc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ngoc-lac',
            'tendaydu'=>'Huyện Ngọc Lặc',
            'tenthuong'=>'Ngọc Lặc, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Ngọc Lặc, Tỉnh Thanh Hóa',
            'code'=>389,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>390,
            'ten'=>'Cẩm Thủy',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cam-thuy',
            'tendaydu'=>'Huyện Cẩm Thủy',
            'tenthuong'=>'Cẩm Thủy, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Cẩm Thủy, Tỉnh Thanh Hóa',
            'code'=>390,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>391,
            'ten'=>'Thạch Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thach-thanh',
            'tendaydu'=>'Huyện Thạch Thành',
            'tenthuong'=>'Thạch Thành, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Thạch Thành, Tỉnh Thanh Hóa',
            'code'=>391,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>392,
            'ten'=>'Hà Trung',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ha-trung',
            'tendaydu'=>'Huyện Hà Trung',
            'tenthuong'=>'Hà Trung, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Hà Trung, Tỉnh Thanh Hóa',
            'code'=>392,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>393,
            'ten'=>'Vĩnh Lộc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'vinh-loc',
            'tendaydu'=>'Huyện Vĩnh Lộc',
            'tenthuong'=>'Vĩnh Lộc, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Vĩnh Lộc, Tỉnh Thanh Hóa',
            'code'=>393,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>394,
            'ten'=>'Yên Định',
            'donvi'=>'huyen',
            'tenkhongdau'=>'yen-dinh',
            'tendaydu'=>'Huyện Yên Định',
            'tenthuong'=>'Yên Định, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Yên Định, Tỉnh Thanh Hóa',
            'code'=>394,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>395,
            'ten'=>'Thọ Xuân',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tho-xuan',
            'tendaydu'=>'Huyện Thọ Xuân',
            'tenthuong'=>'Thọ Xuân, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Thọ Xuân, Tỉnh Thanh Hóa',
            'code'=>395,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>396,
            'ten'=>'Thường Xuân',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thuong-xuan',
            'tendaydu'=>'Huyện Thường Xuân',
            'tenthuong'=>'Thường Xuân, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Thường Xuân, Tỉnh Thanh Hóa',
            'code'=>396,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>397,
            'ten'=>'Triệu Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'trieu-son',
            'tendaydu'=>'Huyện Triệu Sơn',
            'tenthuong'=>'Triệu Sơn, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Triệu Sơn, Tỉnh Thanh Hóa',
            'code'=>397,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>398,
            'ten'=>'Thiệu Hóa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thieu-hoa',
            'tendaydu'=>'Huyện Thiệu Hóa',
            'tenthuong'=>'Thiệu Hóa, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Thiệu Hóa, Tỉnh Thanh Hóa',
            'code'=>398,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>399,
            'ten'=>'Hoằng Hóa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hoang-hoa',
            'tendaydu'=>'Huyện Hoằng Hóa',
            'tenthuong'=>'Hoằng Hóa, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Hoằng Hóa, Tỉnh Thanh Hóa',
            'code'=>399,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>400,
            'ten'=>'Hậu Lộc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hau-loc',
            'tendaydu'=>'Huyện Hậu Lộc',
            'tenthuong'=>'Hậu Lộc, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Hậu Lộc, Tỉnh Thanh Hóa',
            'code'=>400,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>401,
            'ten'=>'Nga Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nga-son',
            'tendaydu'=>'Huyện Nga Sơn',
            'tenthuong'=>'Nga Sơn, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Nga Sơn, Tỉnh Thanh Hóa',
            'code'=>401,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>402,
            'ten'=>'Như Xuân',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nhu-xuan',
            'tendaydu'=>'Huyện Như Xuân',
            'tenthuong'=>'Như Xuân, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Như Xuân, Tỉnh Thanh Hóa',
            'code'=>402,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>403,
            'ten'=>'Như Thanh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nhu-thanh',
            'tendaydu'=>'Huyện Như Thanh',
            'tenthuong'=>'Như Thanh, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Như Thanh, Tỉnh Thanh Hóa',
            'code'=>403,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>404,
            'ten'=>'Nông Cống',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nong-cong',
            'tendaydu'=>'Huyện Nông Cống',
            'tenthuong'=>'Nông Cống, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Nông Cống, Tỉnh Thanh Hóa',
            'code'=>404,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>405,
            'ten'=>'Đông Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dong-son',
            'tendaydu'=>'Huyện Đông Sơn',
            'tenthuong'=>'Đông Sơn, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Đông Sơn, Tỉnh Thanh Hóa',
            'code'=>405,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>406,
            'ten'=>'Quảng Xương',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quang-xuong',
            'tendaydu'=>'Huyện Quảng Xương',
            'tenthuong'=>'Quảng Xương, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Quảng Xương, Tỉnh Thanh Hóa',
            'code'=>406,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>407,
            'ten'=>'Tĩnh Gia',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tinh-gia',
            'tendaydu'=>'Huyện Tĩnh Gia',
            'tenthuong'=>'Tĩnh Gia, Thanh Hóa',
            'tenhanhchinh'=>'Huyện Tĩnh Gia, Tỉnh Thanh Hóa',
            'code'=>407,
            'id_tinh_thanhpho'=>38
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>461,
            'ten'=>'Đông Hà',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'dong-ha',
            'tendaydu'=>'Thành phố Đông Hà',
            'tenthuong'=>'Đông Hà, Quảng Trị',
            'tenhanhchinh'=>'Thành phố Đông Hà, Tỉnh Quảng Trị',
            'code'=>461,
            'id_tinh_thanhpho'=>45
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>462,
            'ten'=>'Quảng Trị',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'quang-tri',
            'tendaydu'=>'Thị xã Quảng Trị',
            'tenthuong'=>'Quảng Trị, Quảng Trị',
            'tenhanhchinh'=>'Thị xã Quảng Trị, Tỉnh Quảng Trị',
            'code'=>462,
            'id_tinh_thanhpho'=>45
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>464,
            'ten'=>'Vĩnh Linh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'vinh-linh',
            'tendaydu'=>'Huyện Vĩnh Linh',
            'tenthuong'=>'Vĩnh Linh, Quảng Trị',
            'tenhanhchinh'=>'Huyện Vĩnh Linh, Tỉnh Quảng Trị',
            'code'=>464,
            'id_tinh_thanhpho'=>45
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>465,
            'ten'=>'Hướng Hóa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'huong-hoa',
            'tendaydu'=>'Huyện Hướng Hóa',
            'tenthuong'=>'Hướng Hóa, Quảng Trị',
            'tenhanhchinh'=>'Huyện Hướng Hóa, Tỉnh Quảng Trị',
            'code'=>465,
            'id_tinh_thanhpho'=>45
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>466,
            'ten'=>'Gio Linh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'gio-linh',
            'tendaydu'=>'Huyện Gio Linh',
            'tenthuong'=>'Gio Linh, Quảng Trị',
            'tenhanhchinh'=>'Huyện Gio Linh, Tỉnh Quảng Trị',
            'code'=>466,
            'id_tinh_thanhpho'=>45
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>467,
            'ten'=>'Đa Krông',
            'donvi'=>'huyen',
            'tenkhongdau'=>'da-krong',
            'tendaydu'=>'Huyện Đa Krông',
            'tenthuong'=>'Đa Krông, Quảng Trị',
            'tenhanhchinh'=>'Huyện Đa Krông, Tỉnh Quảng Trị',
            'code'=>467,
            'id_tinh_thanhpho'=>45
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>468,
            'ten'=>'Cam Lộ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cam-lo',
            'tendaydu'=>'Huyện Cam Lộ',
            'tenthuong'=>'Cam Lộ, Quảng Trị',
            'tenhanhchinh'=>'Huyện Cam Lộ, Tỉnh Quảng Trị',
            'code'=>468,
            'id_tinh_thanhpho'=>45
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>469,
            'ten'=>'Triệu Phong',
            'donvi'=>'huyen',
            'tenkhongdau'=>'trieu-phong',
            'tendaydu'=>'Huyện Triệu Phong',
            'tenthuong'=>'Triệu Phong, Quảng Trị',
            'tenhanhchinh'=>'Huyện Triệu Phong, Tỉnh Quảng Trị',
            'code'=>469,
            'id_tinh_thanhpho'=>45
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>470,
            'ten'=>'Hải Lăng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hai-lang',
            'tendaydu'=>'Huyện Hải Lăng',
            'tenthuong'=>'Hải Lăng, Quảng Trị',
            'tenhanhchinh'=>'Huyện Hải Lăng, Tỉnh Quảng Trị',
            'code'=>470,
            'id_tinh_thanhpho'=>45
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>70,
            'ten'=>'Tuyên Quang',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'tuyen-quang',
            'tendaydu'=>'Thành phố Tuyên Quang',
            'tenthuong'=>'Tuyên Quang, Tuyên Quang',
            'tenhanhchinh'=>'Thành phố Tuyên Quang, Tỉnh Tuyên Quang',
            'code'=>70,
            'id_tinh_thanhpho'=>8
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>71,
            'ten'=>'Lâm Bình',
            'donvi'=>'huyen',
            'tenkhongdau'=>'lam-binh',
            'tendaydu'=>'Huyện Lâm Bình',
            'tenthuong'=>'Lâm Bình, Tuyên Quang',
            'tenhanhchinh'=>'Huyện Lâm Bình, Tỉnh Tuyên Quang',
            'code'=>71,
            'id_tinh_thanhpho'=>8
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>72,
            'ten'=>'Nà Hang',
            'donvi'=>'huyen',
            'tenkhongdau'=>'na-hang',
            'tendaydu'=>'Huyện Nà Hang',
            'tenthuong'=>'Nà Hang, Tuyên Quang',
            'tenhanhchinh'=>'Huyện Nà Hang, Tỉnh Tuyên Quang',
            'code'=>72,
            'id_tinh_thanhpho'=>8
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>73,
            'ten'=>'Chiêm Hóa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chiem-hoa',
            'tendaydu'=>'Huyện Chiêm Hóa',
            'tenthuong'=>'Chiêm Hóa, Tuyên Quang',
            'tenhanhchinh'=>'Huyện Chiêm Hóa, Tỉnh Tuyên Quang',
            'code'=>73,
            'id_tinh_thanhpho'=>8
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>74,
            'ten'=>'Hàm Yên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ham-yen',
            'tendaydu'=>'Huyện Hàm Yên',
            'tenthuong'=>'Hàm Yên, Tuyên Quang',
            'tenhanhchinh'=>'Huyện Hàm Yên, Tỉnh Tuyên Quang',
            'code'=>74,
            'id_tinh_thanhpho'=>8
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>75,
            'ten'=>'Yên Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'yen-son',
            'tendaydu'=>'Huyện Yên Sơn',
            'tenthuong'=>'Yên Sơn, Tuyên Quang',
            'tenhanhchinh'=>'Huyện Yên Sơn, Tỉnh Tuyên Quang',
            'code'=>75,
            'id_tinh_thanhpho'=>8
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>76,
            'ten'=>'Sơn Dương',
            'donvi'=>'huyen',
            'tenkhongdau'=>'son-duong',
            'tendaydu'=>'Huyện Sơn Dương',
            'tenthuong'=>'Sơn Dương, Tuyên Quang',
            'tenhanhchinh'=>'Huyện Sơn Dương, Tỉnh Tuyên Quang',
            'code'=>76,
            'id_tinh_thanhpho'=>8
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>522,
            'ten'=>'Quảng Ngãi',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'quang-ngai',
            'tendaydu'=>'Thành phố Quảng Ngãi',
            'tenthuong'=>'Quảng Ngãi, Quảng Ngãi',
            'tenhanhchinh'=>'Thành phố Quảng Ngãi, Tỉnh Quảng Ngãi',
            'code'=>522,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>524,
            'ten'=>'Bình Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'binh-son',
            'tendaydu'=>'Huyện Bình Sơn',
            'tenthuong'=>'Bình Sơn, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Bình Sơn, Tỉnh Quảng Ngãi',
            'code'=>524,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>525,
            'ten'=>'Trà Bồng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tra-bong',
            'tendaydu'=>'Huyện Trà Bồng',
            'tenthuong'=>'Trà Bồng, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Trà Bồng, Tỉnh Quảng Ngãi',
            'code'=>525,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>526,
            'ten'=>'Tây Trà',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tay-tra',
            'tendaydu'=>'Huyện Tây Trà',
            'tenthuong'=>'Tây Trà, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Tây Trà, Tỉnh Quảng Ngãi',
            'code'=>526,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>527,
            'ten'=>'Sơn Tịnh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'son-tinh',
            'tendaydu'=>'Huyện Sơn Tịnh',
            'tenthuong'=>'Sơn Tịnh, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Sơn Tịnh, Tỉnh Quảng Ngãi',
            'code'=>527,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>528,
            'ten'=>'Tư Nghĩa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tu-nghia',
            'tendaydu'=>'Huyện Tư Nghĩa',
            'tenthuong'=>'Tư Nghĩa, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Tư Nghĩa, Tỉnh Quảng Ngãi',
            'code'=>528,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>529,
            'ten'=>'Sơn Hà',
            'donvi'=>'huyen',
            'tenkhongdau'=>'son-ha',
            'tendaydu'=>'Huyện Sơn Hà',
            'tenthuong'=>'Sơn Hà, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Sơn Hà, Tỉnh Quảng Ngãi',
            'code'=>529,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>530,
            'ten'=>'Sơn Tây',
            'donvi'=>'huyen',
            'tenkhongdau'=>'son-tay',
            'tendaydu'=>'Huyện Sơn Tây',
            'tenthuong'=>'Sơn Tây, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Sơn Tây, Tỉnh Quảng Ngãi',
            'code'=>530,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>531,
            'ten'=>'Minh Long',
            'donvi'=>'huyen',
            'tenkhongdau'=>'minh-long',
            'tendaydu'=>'Huyện Minh Long',
            'tenthuong'=>'Minh Long, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Minh Long, Tỉnh Quảng Ngãi',
            'code'=>531,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>532,
            'ten'=>'Nghĩa Hành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nghia-hanh',
            'tendaydu'=>'Huyện Nghĩa Hành',
            'tenthuong'=>'Nghĩa Hành, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Nghĩa Hành, Tỉnh Quảng Ngãi',
            'code'=>532,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>533,
            'ten'=>'Mộ Đức',
            'donvi'=>'huyen',
            'tenkhongdau'=>'mo-duc',
            'tendaydu'=>'Huyện Mộ Đức',
            'tenthuong'=>'Mộ Đức, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Mộ Đức, Tỉnh Quảng Ngãi',
            'code'=>533,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>534,
            'ten'=>'Đức Phổ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'duc-pho',
            'tendaydu'=>'Huyện Đức Phổ',
            'tenthuong'=>'Đức Phổ, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Đức Phổ, Tỉnh Quảng Ngãi',
            'code'=>534,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>535,
            'ten'=>'Ba Tơ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ba-to',
            'tendaydu'=>'Huyện Ba Tơ',
            'tenthuong'=>'Ba Tơ, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Ba Tơ, Tỉnh Quảng Ngãi',
            'code'=>535,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>536,
            'ten'=>'Lý Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ly-son',
            'tendaydu'=>'Huyện Lý Sơn',
            'tenthuong'=>'Lý Sơn, Quảng Ngãi',
            'tenhanhchinh'=>'Huyện Lý Sơn, Tỉnh Quảng Ngãi',
            'code'=>536,
            'id_tinh_thanhpho'=>51
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>1,
            'ten'=>'Ba Đình',
            'donvi'=>'quan',
            'tenkhongdau'=>'ba-dinh',
            'tendaydu'=>'Quận Ba Đình',
            'tenthuong'=>'Ba Đình, Hà Nội',
            'tenhanhchinh'=>'Quận Ba Đình, Thành phố Hà Nội',
            'code'=>1,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>2,
            'ten'=>'Hoàn Kiếm',
            'donvi'=>'quan',
            'tenkhongdau'=>'hoan-kiem',
            'tendaydu'=>'Quận Hoàn Kiếm',
            'tenthuong'=>'Hoàn Kiếm, Hà Nội',
            'tenhanhchinh'=>'Quận Hoàn Kiếm, Thành phố Hà Nội',
            'code'=>2,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>3,
            'ten'=>'Tây Hồ',
            'donvi'=>'quan',
            'tenkhongdau'=>'tay-ho',
            'tendaydu'=>'Quận Tây Hồ',
            'tenthuong'=>'Tây Hồ, Hà Nội',
            'tenhanhchinh'=>'Quận Tây Hồ, Thành phố Hà Nội',
            'code'=>3,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>4,
            'ten'=>'Long Biên',
            'donvi'=>'quan',
            'tenkhongdau'=>'long-bien',
            'tendaydu'=>'Quận Long Biên',
            'tenthuong'=>'Long Biên, Hà Nội',
            'tenhanhchinh'=>'Quận Long Biên, Thành phố Hà Nội',
            'code'=>4,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>5,
            'ten'=>'Cầu Giấy',
            'donvi'=>'quan',
            'tenkhongdau'=>'cau-giay',
            'tendaydu'=>'Quận Cầu Giấy',
            'tenthuong'=>'Cầu Giấy, Hà Nội',
            'tenhanhchinh'=>'Quận Cầu Giấy, Thành phố Hà Nội',
            'code'=>5,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>6,
            'ten'=>'Đống Đa',
            'donvi'=>'quan',
            'tenkhongdau'=>'dong-da',
            'tendaydu'=>'Quận Đống Đa',
            'tenthuong'=>'Đống Đa, Hà Nội',
            'tenhanhchinh'=>'Quận Đống Đa, Thành phố Hà Nội',
            'code'=>6,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>7,
            'ten'=>'Hai Bà Trưng',
            'donvi'=>'quan',
            'tenkhongdau'=>'hai-ba-trung',
            'tendaydu'=>'Quận Hai Bà Trưng',
            'tenthuong'=>'Hai Bà Trưng, Hà Nội',
            'tenhanhchinh'=>'Quận Hai Bà Trưng, Thành phố Hà Nội',
            'code'=>7,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>8,
            'ten'=>'Hoàng Mai',
            'donvi'=>'quan',
            'tenkhongdau'=>'hoang-mai',
            'tendaydu'=>'Quận Hoàng Mai',
            'tenthuong'=>'Hoàng Mai, Hà Nội',
            'tenhanhchinh'=>'Quận Hoàng Mai, Thành phố Hà Nội',
            'code'=>8,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>9,
            'ten'=>'Thanh Xuân',
            'donvi'=>'quan',
            'tenkhongdau'=>'thanh-xuan',
            'tendaydu'=>'Quận Thanh Xuân',
            'tenthuong'=>'Thanh Xuân, Hà Nội',
            'tenhanhchinh'=>'Quận Thanh Xuân, Thành phố Hà Nội',
            'code'=>9,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>16,
            'ten'=>'Sóc Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'soc-son',
            'tendaydu'=>'Huyện Sóc Sơn',
            'tenthuong'=>'Sóc Sơn, Hà Nội',
            'tenhanhchinh'=>'Huyện Sóc Sơn, Thành phố Hà Nội',
            'code'=>16,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>17,
            'ten'=>'Đông Anh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dong-anh',
            'tendaydu'=>'Huyện Đông Anh',
            'tenthuong'=>'Đông Anh, Hà Nội',
            'tenhanhchinh'=>'Huyện Đông Anh, Thành phố Hà Nội',
            'code'=>17,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>18,
            'ten'=>'Gia Lâm',
            'donvi'=>'huyen',
            'tenkhongdau'=>'gia-lam',
            'tendaydu'=>'Huyện Gia Lâm',
            'tenthuong'=>'Gia Lâm, Hà Nội',
            'tenhanhchinh'=>'Huyện Gia Lâm, Thành phố Hà Nội',
            'code'=>18,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>19,
            'ten'=>'Nam Từ Liêm',
            'donvi'=>'quan',
            'tenkhongdau'=>'nam-tu-liem',
            'tendaydu'=>'Quận Nam Từ Liêm',
            'tenthuong'=>'Nam Từ Liêm, Hà Nội',
            'tenhanhchinh'=>'Quận Nam Từ Liêm, Thành phố Hà Nội',
            'code'=>19,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>20,
            'ten'=>'Thanh Trì',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thanh-tri',
            'tendaydu'=>'Huyện Thanh Trì',
            'tenthuong'=>'Thanh Trì, Hà Nội',
            'tenhanhchinh'=>'Huyện Thanh Trì, Thành phố Hà Nội',
            'code'=>20,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>21,
            'ten'=>'Bắc Từ Liêm',
            'donvi'=>'quan',
            'tenkhongdau'=>'bac-tu-liem',
            'tendaydu'=>'Quận Bắc Từ Liêm',
            'tenthuong'=>'Bắc Từ Liêm, Hà Nội',
            'tenhanhchinh'=>'Quận Bắc Từ Liêm, Thành phố Hà Nội',
            'code'=>21,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>250,
            'ten'=>'Mê Linh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'me-linh',
            'tendaydu'=>'Huyện Mê Linh',
            'tenthuong'=>'Mê Linh, Hà Nội',
            'tenhanhchinh'=>'Huyện Mê Linh, Thành phố Hà Nội',
            'code'=>250,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>268,
            'ten'=>'Hà Đông',
            'donvi'=>'quan',
            'tenkhongdau'=>'ha-dong',
            'tendaydu'=>'Quận Hà Đông',
            'tenthuong'=>'Hà Đông, Hà Nội',
            'tenhanhchinh'=>'Quận Hà Đông, Thành phố Hà Nội',
            'code'=>268,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>269,
            'ten'=>'Sơn Tây',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'son-tay',
            'tendaydu'=>'Thị xã Sơn Tây',
            'tenthuong'=>'Sơn Tây, Hà Nội',
            'tenhanhchinh'=>'Thị xã Sơn Tây, Thành phố Hà Nội',
            'code'=>269,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>271,
            'ten'=>'Ba Vì',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ba-vi',
            'tendaydu'=>'Huyện Ba Vì',
            'tenthuong'=>'Ba Vì, Hà Nội',
            'tenhanhchinh'=>'Huyện Ba Vì, Thành phố Hà Nội',
            'code'=>271,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>272,
            'ten'=>'Phúc Thọ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phuc-tho',
            'tendaydu'=>'Huyện Phúc Thọ',
            'tenthuong'=>'Phúc Thọ, Hà Nội',
            'tenhanhchinh'=>'Huyện Phúc Thọ, Thành phố Hà Nội',
            'code'=>272,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>273,
            'ten'=>'Đan Phượng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dan-phuong',
            'tendaydu'=>'Huyện Đan Phượng',
            'tenthuong'=>'Đan Phượng, Hà Nội',
            'tenhanhchinh'=>'Huyện Đan Phượng, Thành phố Hà Nội',
            'code'=>273,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>274,
            'ten'=>'Hoài Đức',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hoai-duc',
            'tendaydu'=>'Huyện Hoài Đức',
            'tenthuong'=>'Hoài Đức, Hà Nội',
            'tenhanhchinh'=>'Huyện Hoài Đức, Thành phố Hà Nội',
            'code'=>274,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>275,
            'ten'=>'Quốc Oai',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quoc-oai',
            'tendaydu'=>'Huyện Quốc Oai',
            'tenthuong'=>'Quốc Oai, Hà Nội',
            'tenhanhchinh'=>'Huyện Quốc Oai, Thành phố Hà Nội',
            'code'=>275,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>276,
            'ten'=>'Thạch Thất',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thach-that',
            'tendaydu'=>'Huyện Thạch Thất',
            'tenthuong'=>'Thạch Thất, Hà Nội',
            'tenhanhchinh'=>'Huyện Thạch Thất, Thành phố Hà Nội',
            'code'=>276,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>277,
            'ten'=>'Chương Mỹ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chuong-my',
            'tendaydu'=>'Huyện Chương Mỹ',
            'tenthuong'=>'Chương Mỹ, Hà Nội',
            'tenhanhchinh'=>'Huyện Chương Mỹ, Thành phố Hà Nội',
            'code'=>277,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>278,
            'ten'=>'Thanh Oai',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thanh-oai',
            'tendaydu'=>'Huyện Thanh Oai',
            'tenthuong'=>'Thanh Oai, Hà Nội',
            'tenhanhchinh'=>'Huyện Thanh Oai, Thành phố Hà Nội',
            'code'=>278,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>279,
            'ten'=>'Thường Tín',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thuong-tin',
            'tendaydu'=>'Huyện Thường Tín',
            'tenthuong'=>'Thường Tín, Hà Nội',
            'tenhanhchinh'=>'Huyện Thường Tín, Thành phố Hà Nội',
            'code'=>279,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>280,
            'ten'=>'Phú Xuyên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-xuyen',
            'tendaydu'=>'Huyện Phú Xuyên',
            'tenthuong'=>'Phú Xuyên, Hà Nội',
            'tenhanhchinh'=>'Huyện Phú Xuyên, Thành phố Hà Nội',
            'code'=>280,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>281,
            'ten'=>'Ứng Hòa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ung-hoa',
            'tendaydu'=>'Huyện Ứng Hòa',
            'tenthuong'=>'Ứng Hòa, Hà Nội',
            'tenhanhchinh'=>'Huyện Ứng Hòa, Thành phố Hà Nội',
            'code'=>281,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>282,
            'ten'=>'Mỹ Đức',
            'donvi'=>'huyen',
            'tenkhongdau'=>'my-duc',
            'tendaydu'=>'Huyện Mỹ Đức',
            'tenthuong'=>'Mỹ Đức, Hà Nội',
            'tenhanhchinh'=>'Huyện Mỹ Đức, Thành phố Hà Nội',
            'code'=>282,
            'id_tinh_thanhpho'=>1
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>80,
            'ten'=>'Lào Cai',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'lao-cai',
            'tendaydu'=>'Thành phố Lào Cai',
            'tenthuong'=>'Lào Cai, Lào Cai',
            'tenhanhchinh'=>'Thành phố Lào Cai, Tỉnh Lào Cai',
            'code'=>80,
            'id_tinh_thanhpho'=>10
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>82,
            'ten'=>'Bát Xát',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bat-xat',
            'tendaydu'=>'Huyện Bát Xát',
            'tenthuong'=>'Bát Xát, Lào Cai',
            'tenhanhchinh'=>'Huyện Bát Xát, Tỉnh Lào Cai',
            'code'=>82,
            'id_tinh_thanhpho'=>10
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>83,
            'ten'=>'Mường Khương',
            'donvi'=>'huyen',
            'tenkhongdau'=>'muong-khuong',
            'tendaydu'=>'Huyện Mường Khương',
            'tenthuong'=>'Mường Khương, Lào Cai',
            'tenhanhchinh'=>'Huyện Mường Khương, Tỉnh Lào Cai',
            'code'=>83,
            'id_tinh_thanhpho'=>10
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>84,
            'ten'=>'Si Ma Cai',
            'donvi'=>'huyen',
            'tenkhongdau'=>'si-ma-cai',
            'tendaydu'=>'Huyện Si Ma Cai',
            'tenthuong'=>'Si Ma Cai, Lào Cai',
            'tenhanhchinh'=>'Huyện Si Ma Cai, Tỉnh Lào Cai',
            'code'=>84,
            'id_tinh_thanhpho'=>10
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>85,
            'ten'=>'Bắc Hà',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bac-ha',
            'tendaydu'=>'Huyện Bắc Hà',
            'tenthuong'=>'Bắc Hà, Lào Cai',
            'tenhanhchinh'=>'Huyện Bắc Hà, Tỉnh Lào Cai',
            'code'=>85,
            'id_tinh_thanhpho'=>10
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>86,
            'ten'=>'Bảo Thắng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bao-thang',
            'tendaydu'=>'Huyện Bảo Thắng',
            'tenthuong'=>'Bảo Thắng, Lào Cai',
            'tenhanhchinh'=>'Huyện Bảo Thắng, Tỉnh Lào Cai',
            'code'=>86,
            'id_tinh_thanhpho'=>10
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>87,
            'ten'=>'Bảo Yên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bao-yen',
            'tendaydu'=>'Huyện Bảo Yên',
            'tenthuong'=>'Bảo Yên, Lào Cai',
            'tenhanhchinh'=>'Huyện Bảo Yên, Tỉnh Lào Cai',
            'code'=>87,
            'id_tinh_thanhpho'=>10
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>88,
            'ten'=>'Sa Pa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'sa-pa',
            'tendaydu'=>'Huyện Sa Pa',
            'tenthuong'=>'Sa Pa, Lào Cai',
            'tenhanhchinh'=>'Huyện Sa Pa, Tỉnh Lào Cai',
            'code'=>88,
            'id_tinh_thanhpho'=>10
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>89,
            'ten'=>'Văn Bàn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'van-ban',
            'tendaydu'=>'Huyện Văn Bàn',
            'tenthuong'=>'Văn Bàn, Lào Cai',
            'tenhanhchinh'=>'Huyện Văn Bàn, Tỉnh Lào Cai',
            'code'=>89,
            'id_tinh_thanhpho'=>10
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>855,
            'ten'=>'Vĩnh Long',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'vinh-long',
            'tendaydu'=>'Thành phố Vĩnh Long',
            'tenthuong'=>'Vĩnh Long, Vĩnh Long',
            'tenhanhchinh'=>'Thành phố Vĩnh Long, Tỉnh Vĩnh Long',
            'code'=>855,
            'id_tinh_thanhpho'=>86
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>857,
            'ten'=>'Long Hồ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'long-ho',
            'tendaydu'=>'Huyện Long Hồ',
            'tenthuong'=>'Long Hồ, Vĩnh Long',
            'tenhanhchinh'=>'Huyện Long Hồ, Tỉnh Vĩnh Long',
            'code'=>857,
            'id_tinh_thanhpho'=>86
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>858,
            'ten'=>'Mang Thít',
            'donvi'=>'huyen',
            'tenkhongdau'=>'mang-thit',
            'tendaydu'=>'Huyện Mang Thít',
            'tenthuong'=>'Mang Thít, Vĩnh Long',
            'tenhanhchinh'=>'Huyện Mang Thít, Tỉnh Vĩnh Long',
            'code'=>858,
            'id_tinh_thanhpho'=>86
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>859,
            'ten'=>'Vũng Liêm',
            'donvi'=>'huyen',
            'tenkhongdau'=>'vung-liem',
            'tendaydu'=>'Huyện  Vũng Liêm',
            'tenthuong'=>'Vũng Liêm, Vĩnh Long',
            'tenhanhchinh'=>'Huyện  Vũng Liêm, Tỉnh Vĩnh Long',
            'code'=>859,
            'id_tinh_thanhpho'=>86
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>860,
            'ten'=>'Tam Bình',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tam-binh',
            'tendaydu'=>'Huyện Tam Bình',
            'tenthuong'=>'Tam Bình, Vĩnh Long',
            'tenhanhchinh'=>'Huyện Tam Bình, Tỉnh Vĩnh Long',
            'code'=>860,
            'id_tinh_thanhpho'=>86
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>861,
            'ten'=>'Bình Minh',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'binh-minh',
            'tendaydu'=>'Thị xã Bình Minh',
            'tenthuong'=>'Bình Minh, Vĩnh Long',
            'tenhanhchinh'=>'Thị xã Bình Minh, Tỉnh Vĩnh Long',
            'code'=>861,
            'id_tinh_thanhpho'=>86
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>862,
            'ten'=>'Trà Ôn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tra-on',
            'tendaydu'=>'Huyện Trà Ôn',
            'tenthuong'=>'Trà Ôn, Vĩnh Long',
            'tenhanhchinh'=>'Huyện Trà Ôn, Tỉnh Vĩnh Long',
            'code'=>862,
            'id_tinh_thanhpho'=>86
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>863,
            'ten'=>'Bình Tân',
            'donvi'=>'huyen',
            'tenkhongdau'=>'binh-tan',
            'tendaydu'=>'Huyện Bình Tân',
            'tenthuong'=>'Bình Tân, Vĩnh Long',
            'tenhanhchinh'=>'Huyện Bình Tân, Tỉnh Vĩnh Long',
            'code'=>863,
            'id_tinh_thanhpho'=>86
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>672,
            'ten'=>'Đà Lạt',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'da-lat',
            'tendaydu'=>'Thành phố Đà Lạt',
            'tenthuong'=>'Đà Lạt, Lâm Đồng',
            'tenhanhchinh'=>'Thành phố Đà Lạt, Tỉnh Lâm Đồng',
            'code'=>672,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>673,
            'ten'=>'Bảo Lộc',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'bao-loc',
            'tendaydu'=>'Thành phố Bảo Lộc',
            'tenthuong'=>'Bảo Lộc, Lâm Đồng',
            'tenhanhchinh'=>'Thành phố Bảo Lộc, Tỉnh Lâm Đồng',
            'code'=>673,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>674,
            'ten'=>'Đam Rông',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dam-rong',
            'tendaydu'=>'Huyện Đam Rông',
            'tenthuong'=>'Đam Rông, Lâm Đồng',
            'tenhanhchinh'=>'Huyện Đam Rông, Tỉnh Lâm Đồng',
            'code'=>674,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>675,
            'ten'=>'Lạc Dương',
            'donvi'=>'huyen',
            'tenkhongdau'=>'lac-duong',
            'tendaydu'=>'Huyện Lạc Dương',
            'tenthuong'=>'Lạc Dương, Lâm Đồng',
            'tenhanhchinh'=>'Huyện Lạc Dương, Tỉnh Lâm Đồng',
            'code'=>675,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>676,
            'ten'=>'Lâm Hà',
            'donvi'=>'huyen',
            'tenkhongdau'=>'lam-ha',
            'tendaydu'=>'Huyện Lâm Hà',
            'tenthuong'=>'Lâm Hà, Lâm Đồng',
            'tenhanhchinh'=>'Huyện Lâm Hà, Tỉnh Lâm Đồng',
            'code'=>676,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>677,
            'ten'=>'Đơn Dương',
            'donvi'=>'huyen',
            'tenkhongdau'=>'don-duong',
            'tendaydu'=>'Huyện Đơn Dương',
            'tenthuong'=>'Đơn Dương, Lâm Đồng',
            'tenhanhchinh'=>'Huyện Đơn Dương, Tỉnh Lâm Đồng',
            'code'=>677,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>678,
            'ten'=>'Đức Trọng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'duc-trong',
            'tendaydu'=>'Huyện Đức Trọng',
            'tenthuong'=>'Đức Trọng, Lâm Đồng',
            'tenhanhchinh'=>'Huyện Đức Trọng, Tỉnh Lâm Đồng',
            'code'=>678,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>679,
            'ten'=>'Di Linh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'di-linh',
            'tendaydu'=>'Huyện Di Linh',
            'tenthuong'=>'Di Linh, Lâm Đồng',
            'tenhanhchinh'=>'Huyện Di Linh, Tỉnh Lâm Đồng',
            'code'=>679,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>680,
            'ten'=>'Bảo Lâm',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bao-lam',
            'tendaydu'=>'Huyện Bảo Lâm',
            'tenthuong'=>'Bảo Lâm, Lâm Đồng',
            'tenhanhchinh'=>'Huyện Bảo Lâm, Tỉnh Lâm Đồng',
            'code'=>680,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>681,
            'ten'=>'Đạ Huoai',
            'donvi'=>'huyen',
            'tenkhongdau'=>'da-huoai',
            'tendaydu'=>'Huyện Đạ Huoai',
            'tenthuong'=>'Đạ Huoai, Lâm Đồng',
            'tenhanhchinh'=>'Huyện Đạ Huoai, Tỉnh Lâm Đồng',
            'code'=>681,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>682,
            'ten'=>'Đạ Tẻh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'da-teh',
            'tendaydu'=>'Huyện Đạ Tẻh',
            'tenthuong'=>'Đạ Tẻh, Lâm Đồng',
            'tenhanhchinh'=>'Huyện Đạ Tẻh, Tỉnh Lâm Đồng',
            'code'=>682,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>683,
            'ten'=>'Cát Tiên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cat-tien',
            'tendaydu'=>'Huyện Cát Tiên',
            'tenthuong'=>'Cát Tiên, Lâm Đồng',
            'tenhanhchinh'=>'Huyện Cát Tiên, Tỉnh Lâm Đồng',
            'code'=>683,
            'id_tinh_thanhpho'=>68
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>540,
            'ten'=>'Qui Nhơn',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'qui-nhon',
            'tendaydu'=>'Thành phố Qui Nhơn',
            'tenthuong'=>'Qui Nhơn, Bình Định',
            'tenhanhchinh'=>'Thành phố Qui Nhơn, Tỉnh Bình Định',
            'code'=>540,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>542,
            'ten'=>'An Lão',
            'donvi'=>'huyen',
            'tenkhongdau'=>'an-lao',
            'tendaydu'=>'Huyện An Lão',
            'tenthuong'=>'An Lão, Bình Định',
            'tenhanhchinh'=>'Huyện An Lão, Tỉnh Bình Định',
            'code'=>542,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>543,
            'ten'=>'Hoài Nhơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hoai-nhon',
            'tendaydu'=>'Huyện Hoài Nhơn',
            'tenthuong'=>'Hoài Nhơn, Bình Định',
            'tenhanhchinh'=>'Huyện Hoài Nhơn, Tỉnh Bình Định',
            'code'=>543,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>544,
            'ten'=>'Hoài Ân',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hoai-an',
            'tendaydu'=>'Huyện Hoài Ân',
            'tenthuong'=>'Hoài Ân, Bình Định',
            'tenhanhchinh'=>'Huyện Hoài Ân, Tỉnh Bình Định',
            'code'=>544,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>545,
            'ten'=>'Phù Mỹ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-my',
            'tendaydu'=>'Huyện Phù Mỹ',
            'tenthuong'=>'Phù Mỹ, Bình Định',
            'tenhanhchinh'=>'Huyện Phù Mỹ, Tỉnh Bình Định',
            'code'=>545,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>546,
            'ten'=>'Vĩnh Thạnh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'vinh-thanh',
            'tendaydu'=>'Huyện Vĩnh Thạnh',
            'tenthuong'=>'Vĩnh Thạnh, Bình Định',
            'tenhanhchinh'=>'Huyện Vĩnh Thạnh, Tỉnh Bình Định',
            'code'=>546,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>547,
            'ten'=>'Tây Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tay-son',
            'tendaydu'=>'Huyện Tây Sơn',
            'tenthuong'=>'Tây Sơn, Bình Định',
            'tenhanhchinh'=>'Huyện Tây Sơn, Tỉnh Bình Định',
            'code'=>547,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>548,
            'ten'=>'Phù Cát',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-cat',
            'tendaydu'=>'Huyện Phù Cát',
            'tenthuong'=>'Phù Cát, Bình Định',
            'tenhanhchinh'=>'Huyện Phù Cát, Tỉnh Bình Định',
            'code'=>548,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>549,
            'ten'=>'An Nhơn',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'an-nhon',
            'tendaydu'=>'Thị xã An Nhơn',
            'tenthuong'=>'An Nhơn, Bình Định',
            'tenhanhchinh'=>'Thị xã An Nhơn, Tỉnh Bình Định',
            'code'=>549,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>550,
            'ten'=>'Tuy Phước',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tuy-phuoc',
            'tendaydu'=>'Huyện Tuy Phước',
            'tenthuong'=>'Tuy Phước, Bình Định',
            'tenhanhchinh'=>'Huyện Tuy Phước, Tỉnh Bình Định',
            'code'=>550,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>551,
            'ten'=>'Vân Canh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'van-canh',
            'tendaydu'=>'Huyện Vân Canh',
            'tenthuong'=>'Vân Canh, Bình Định',
            'tenhanhchinh'=>'Huyện Vân Canh, Tỉnh Bình Định',
            'code'=>551,
            'id_tinh_thanhpho'=>52
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>412,
            'ten'=>'Vinh',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'vinh',
            'tendaydu'=>'Thành phố Vinh',
            'tenthuong'=>'Vinh, Nghệ An',
            'tenhanhchinh'=>'Thành phố Vinh, Tỉnh Nghệ An',
            'code'=>412,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>413,
            'ten'=>'Cửa Lò',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'cua-lo',
            'tendaydu'=>'Thị xã Cửa Lò',
            'tenthuong'=>'Cửa Lò, Nghệ An',
            'tenhanhchinh'=>'Thị xã Cửa Lò, Tỉnh Nghệ An',
            'code'=>413,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>414,
            'ten'=>'Thái Hoà',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'thai-hoa',
            'tendaydu'=>'Thị xã Thái Hoà',
            'tenthuong'=>'Thái Hoà, Nghệ An',
            'tenhanhchinh'=>'Thị xã Thái Hoà, Tỉnh Nghệ An',
            'code'=>414,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>415,
            'ten'=>'Quế Phong',
            'donvi'=>'huyen',
            'tenkhongdau'=>'que-phong',
            'tendaydu'=>'Huyện Quế Phong',
            'tenthuong'=>'Quế Phong, Nghệ An',
            'tenhanhchinh'=>'Huyện Quế Phong, Tỉnh Nghệ An',
            'code'=>415,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>416,
            'ten'=>'Quỳ Châu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quy-chau',
            'tendaydu'=>'Huyện Quỳ Châu',
            'tenthuong'=>'Quỳ Châu, Nghệ An',
            'tenhanhchinh'=>'Huyện Quỳ Châu, Tỉnh Nghệ An',
            'code'=>416,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>417,
            'ten'=>'Kỳ Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ky-son',
            'tendaydu'=>'Huyện Kỳ Sơn',
            'tenthuong'=>'Kỳ Sơn, Nghệ An',
            'tenhanhchinh'=>'Huyện Kỳ Sơn, Tỉnh Nghệ An',
            'code'=>417,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>418,
            'ten'=>'Tương Dương',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tuong-duong',
            'tendaydu'=>'Huyện Tương Dương',
            'tenthuong'=>'Tương Dương, Nghệ An',
            'tenhanhchinh'=>'Huyện Tương Dương, Tỉnh Nghệ An',
            'code'=>418,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>419,
            'ten'=>'Nghĩa Đàn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nghia-dan',
            'tendaydu'=>'Huyện Nghĩa Đàn',
            'tenthuong'=>'Nghĩa Đàn, Nghệ An',
            'tenhanhchinh'=>'Huyện Nghĩa Đàn, Tỉnh Nghệ An',
            'code'=>419,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>420,
            'ten'=>'Quỳ Hợp',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quy-hop',
            'tendaydu'=>'Huyện Quỳ Hợp',
            'tenthuong'=>'Quỳ Hợp, Nghệ An',
            'tenhanhchinh'=>'Huyện Quỳ Hợp, Tỉnh Nghệ An',
            'code'=>420,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>421,
            'ten'=>'Quỳnh Lưu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quynh-luu',
            'tendaydu'=>'Huyện Quỳnh Lưu',
            'tenthuong'=>'Quỳnh Lưu, Nghệ An',
            'tenhanhchinh'=>'Huyện Quỳnh Lưu, Tỉnh Nghệ An',
            'code'=>421,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>422,
            'ten'=>'Con Cuông',
            'donvi'=>'huyen',
            'tenkhongdau'=>'con-cuong',
            'tendaydu'=>'Huyện Con Cuông',
            'tenthuong'=>'Con Cuông, Nghệ An',
            'tenhanhchinh'=>'Huyện Con Cuông, Tỉnh Nghệ An',
            'code'=>422,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>423,
            'ten'=>'Tân Kỳ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tan-ky',
            'tendaydu'=>'Huyện Tân Kỳ',
            'tenthuong'=>'Tân Kỳ, Nghệ An',
            'tenhanhchinh'=>'Huyện Tân Kỳ, Tỉnh Nghệ An',
            'code'=>423,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>424,
            'ten'=>'Anh Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'anh-son',
            'tendaydu'=>'Huyện Anh Sơn',
            'tenthuong'=>'Anh Sơn, Nghệ An',
            'tenhanhchinh'=>'Huyện Anh Sơn, Tỉnh Nghệ An',
            'code'=>424,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>425,
            'ten'=>'Diễn Châu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dien-chau',
            'tendaydu'=>'Huyện Diễn Châu',
            'tenthuong'=>'Diễn Châu, Nghệ An',
            'tenhanhchinh'=>'Huyện Diễn Châu, Tỉnh Nghệ An',
            'code'=>425,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>426,
            'ten'=>'Yên Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'yen-thanh',
            'tendaydu'=>'Huyện Yên Thành',
            'tenthuong'=>'Yên Thành, Nghệ An',
            'tenhanhchinh'=>'Huyện Yên Thành, Tỉnh Nghệ An',
            'code'=>426,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>427,
            'ten'=>'Đô Lương',
            'donvi'=>'huyen',
            'tenkhongdau'=>'do-luong',
            'tendaydu'=>'Huyện Đô Lương',
            'tenthuong'=>'Đô Lương, Nghệ An',
            'tenhanhchinh'=>'Huyện Đô Lương, Tỉnh Nghệ An',
            'code'=>427,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>428,
            'ten'=>'Thanh Chương',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thanh-chuong',
            'tendaydu'=>'Huyện Thanh Chương',
            'tenthuong'=>'Thanh Chương, Nghệ An',
            'tenhanhchinh'=>'Huyện Thanh Chương, Tỉnh Nghệ An',
            'code'=>428,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>429,
            'ten'=>'Nghi Lộc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nghi-loc',
            'tendaydu'=>'Huyện Nghi Lộc',
            'tenthuong'=>'Nghi Lộc, Nghệ An',
            'tenhanhchinh'=>'Huyện Nghi Lộc, Tỉnh Nghệ An',
            'code'=>429,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>430,
            'ten'=>'Nam Đàn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nam-dan',
            'tendaydu'=>'Huyện Nam Đàn',
            'tenthuong'=>'Nam Đàn, Nghệ An',
            'tenhanhchinh'=>'Huyện Nam Đàn, Tỉnh Nghệ An',
            'code'=>430,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>431,
            'ten'=>'Hưng Nguyên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hung-nguyen',
            'tendaydu'=>'Huyện Hưng Nguyên',
            'tenthuong'=>'Hưng Nguyên, Nghệ An',
            'tenhanhchinh'=>'Huyện Hưng Nguyên, Tỉnh Nghệ An',
            'code'=>431,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>432,
            'ten'=>'Hoàng Mai',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'hoang-mai',
            'tendaydu'=>'Thị xã Hoàng Mai',
            'tenthuong'=>'Hoàng Mai, Nghệ An',
            'tenhanhchinh'=>'Thị xã Hoàng Mai, Tỉnh Nghệ An',
            'code'=>432,
            'id_tinh_thanhpho'=>40
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>899,
            'ten'=>'Rạch Giá',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'rach-gia',
            'tendaydu'=>'Thành phố Rạch Giá',
            'tenthuong'=>'Rạch Giá, Kiên Giang',
            'tenhanhchinh'=>'Thành phố Rạch Giá, Tỉnh Kiên Giang',
            'code'=>899,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>900,
            'ten'=>'Hà Tiên',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'ha-tien',
            'tendaydu'=>'Thị xã Hà Tiên',
            'tenthuong'=>'Hà Tiên, Kiên Giang',
            'tenhanhchinh'=>'Thị xã Hà Tiên, Tỉnh Kiên Giang',
            'code'=>900,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>902,
            'ten'=>'Kiên Lương',
            'donvi'=>'huyen',
            'tenkhongdau'=>'kien-luong',
            'tendaydu'=>'Huyện Kiên Lương',
            'tenthuong'=>'Kiên Lương, Kiên Giang',
            'tenhanhchinh'=>'Huyện Kiên Lương, Tỉnh Kiên Giang',
            'code'=>902,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>903,
            'ten'=>'Hòn Đất',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hon-dat',
            'tendaydu'=>'Huyện Hòn Đất',
            'tenthuong'=>'Hòn Đất, Kiên Giang',
            'tenhanhchinh'=>'Huyện Hòn Đất, Tỉnh Kiên Giang',
            'code'=>903,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>904,
            'ten'=>'Tân Hiệp',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tan-hiep',
            'tendaydu'=>'Huyện Tân Hiệp',
            'tenthuong'=>'Tân Hiệp, Kiên Giang',
            'tenhanhchinh'=>'Huyện Tân Hiệp, Tỉnh Kiên Giang',
            'code'=>904,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>905,
            'ten'=>'Châu Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chau-thanh',
            'tendaydu'=>'Huyện Châu Thành',
            'tenthuong'=>'Châu Thành, Kiên Giang',
            'tenhanhchinh'=>'Huyện Châu Thành, Tỉnh Kiên Giang',
            'code'=>905,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>906,
            'ten'=>'Giồng Riềng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'giong-rieng',
            'tendaydu'=>'Huyện Giồng Riềng',
            'tenthuong'=>'Giồng Riềng, Kiên Giang',
            'tenhanhchinh'=>'Huyện Giồng Riềng, Tỉnh Kiên Giang',
            'code'=>906,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>907,
            'ten'=>'Gò Quao',
            'donvi'=>'huyen',
            'tenkhongdau'=>'go-quao',
            'tendaydu'=>'Huyện Gò Quao',
            'tenthuong'=>'Gò Quao, Kiên Giang',
            'tenhanhchinh'=>'Huyện Gò Quao, Tỉnh Kiên Giang',
            'code'=>907,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>908,
            'ten'=>'An Biên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'an-bien',
            'tendaydu'=>'Huyện An Biên',
            'tenthuong'=>'An Biên, Kiên Giang',
            'tenhanhchinh'=>'Huyện An Biên, Tỉnh Kiên Giang',
            'code'=>908,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>909,
            'ten'=>'An Minh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'an-minh',
            'tendaydu'=>'Huyện An Minh',
            'tenthuong'=>'An Minh, Kiên Giang',
            'tenhanhchinh'=>'Huyện An Minh, Tỉnh Kiên Giang',
            'code'=>909,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>910,
            'ten'=>'Vĩnh Thuận',
            'donvi'=>'huyen',
            'tenkhongdau'=>'vinh-thuan',
            'tendaydu'=>'Huyện Vĩnh Thuận',
            'tenthuong'=>'Vĩnh Thuận, Kiên Giang',
            'tenhanhchinh'=>'Huyện Vĩnh Thuận, Tỉnh Kiên Giang',
            'code'=>910,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>911,
            'ten'=>'Phú Quốc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-quoc',
            'tendaydu'=>'Huyện Phú Quốc',
            'tenthuong'=>'Phú Quốc, Kiên Giang',
            'tenhanhchinh'=>'Huyện Phú Quốc, Tỉnh Kiên Giang',
            'code'=>911,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>912,
            'ten'=>'Kiên Hải',
            'donvi'=>'huyen',
            'tenkhongdau'=>'kien-hai',
            'tendaydu'=>'Huyện Kiên Hải',
            'tenthuong'=>'Kiên Hải, Kiên Giang',
            'tenhanhchinh'=>'Huyện Kiên Hải, Tỉnh Kiên Giang',
            'code'=>912,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>913,
            'ten'=>'U Minh Thượng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'u-minh-thuong',
            'tendaydu'=>'Huyện U Minh Thượng',
            'tenthuong'=>'U Minh Thượng, Kiên Giang',
            'tenhanhchinh'=>'Huyện U Minh Thượng, Tỉnh Kiên Giang',
            'code'=>913,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>914,
            'ten'=>'Giang Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'giang-thanh',
            'tendaydu'=>'Huyện Giang Thành',
            'tenthuong'=>'Giang Thành, Kiên Giang',
            'tenhanhchinh'=>'Huyện Giang Thành, Tỉnh Kiên Giang',
            'code'=>914,
            'id_tinh_thanhpho'=>91
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>24,
            'ten'=>'Hà Giang',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'ha-giang',
            'tendaydu'=>'Thành phố Hà Giang',
            'tenthuong'=>'Hà Giang, Hà Giang',
            'tenhanhchinh'=>'Thành phố Hà Giang, Tỉnh Hà Giang',
            'code'=>24,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>26,
            'ten'=>'Đồng Văn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dong-van',
            'tendaydu'=>'Huyện Đồng Văn',
            'tenthuong'=>'Đồng Văn, Hà Giang',
            'tenhanhchinh'=>'Huyện Đồng Văn, Tỉnh Hà Giang',
            'code'=>26,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>27,
            'ten'=>'Mèo Vạc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'meo-vac',
            'tendaydu'=>'Huyện Mèo Vạc',
            'tenthuong'=>'Mèo Vạc, Hà Giang',
            'tenhanhchinh'=>'Huyện Mèo Vạc, Tỉnh Hà Giang',
            'code'=>27,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>28,
            'ten'=>'Yên Minh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'yen-minh',
            'tendaydu'=>'Huyện Yên Minh',
            'tenthuong'=>'Yên Minh, Hà Giang',
            'tenhanhchinh'=>'Huyện Yên Minh, Tỉnh Hà Giang',
            'code'=>28,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>29,
            'ten'=>'Quản Bạ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quan-ba',
            'tendaydu'=>'Huyện Quản Bạ',
            'tenthuong'=>'Quản Bạ, Hà Giang',
            'tenhanhchinh'=>'Huyện Quản Bạ, Tỉnh Hà Giang',
            'code'=>29,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>30,
            'ten'=>'Vị Xuyên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'vi-xuyen',
            'tendaydu'=>'Huyện Vị Xuyên',
            'tenthuong'=>'Vị Xuyên, Hà Giang',
            'tenhanhchinh'=>'Huyện Vị Xuyên, Tỉnh Hà Giang',
            'code'=>30,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>31,
            'ten'=>'Bắc Mê',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bac-me',
            'tendaydu'=>'Huyện Bắc Mê',
            'tenthuong'=>'Bắc Mê, Hà Giang',
            'tenhanhchinh'=>'Huyện Bắc Mê, Tỉnh Hà Giang',
            'code'=>31,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>32,
            'ten'=>'Hoàng Su Phì',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hoang-su-phi',
            'tendaydu'=>'Huyện Hoàng Su Phì',
            'tenthuong'=>'Hoàng Su Phì, Hà Giang',
            'tenhanhchinh'=>'Huyện Hoàng Su Phì, Tỉnh Hà Giang',
            'code'=>32,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>33,
            'ten'=>'Xín Mần',
            'donvi'=>'huyen',
            'tenkhongdau'=>'xin-man',
            'tendaydu'=>'Huyện Xín Mần',
            'tenthuong'=>'Xín Mần, Hà Giang',
            'tenhanhchinh'=>'Huyện Xín Mần, Tỉnh Hà Giang',
            'code'=>33,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>34,
            'ten'=>'Bắc Quang',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bac-quang',
            'tendaydu'=>'Huyện Bắc Quang',
            'tenthuong'=>'Bắc Quang, Hà Giang',
            'tenhanhchinh'=>'Huyện Bắc Quang, Tỉnh Hà Giang',
            'code'=>34,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>35,
            'ten'=>'Quang Bình',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quang-binh',
            'tendaydu'=>'Huyện Quang Bình',
            'tenthuong'=>'Quang Bình, Hà Giang',
            'tenhanhchinh'=>'Huyện Quang Bình, Tỉnh Hà Giang',
            'code'=>35,
            'id_tinh_thanhpho'=>2
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>555,
            'ten'=>'Tuy Hoà',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'tuy-hoa',
            'tendaydu'=>'Thành phố Tuy Hoà',
            'tenthuong'=>'Tuy Hoà, Phú Yên',
            'tenhanhchinh'=>'Thành phố Tuy Hoà, Tỉnh Phú Yên',
            'code'=>555,
            'id_tinh_thanhpho'=>54
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>557,
            'ten'=>'Sông Cầu',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'song-cau',
            'tendaydu'=>'Thị xã Sông Cầu',
            'tenthuong'=>'Sông Cầu, Phú Yên',
            'tenhanhchinh'=>'Thị xã Sông Cầu, Tỉnh Phú Yên',
            'code'=>557,
            'id_tinh_thanhpho'=>54
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>558,
            'ten'=>'Đồng Xuân',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dong-xuan',
            'tendaydu'=>'Huyện Đồng Xuân',
            'tenthuong'=>'Đồng Xuân, Phú Yên',
            'tenhanhchinh'=>'Huyện Đồng Xuân, Tỉnh Phú Yên',
            'code'=>558,
            'id_tinh_thanhpho'=>54
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>559,
            'ten'=>'Tuy An',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tuy-an',
            'tendaydu'=>'Huyện Tuy An',
            'tenthuong'=>'Tuy An, Phú Yên',
            'tenhanhchinh'=>'Huyện Tuy An, Tỉnh Phú Yên',
            'code'=>559,
            'id_tinh_thanhpho'=>54
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>560,
            'ten'=>'Sơn Hòa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'son-hoa',
            'tendaydu'=>'Huyện Sơn Hòa',
            'tenthuong'=>'Sơn Hòa, Phú Yên',
            'tenhanhchinh'=>'Huyện Sơn Hòa, Tỉnh Phú Yên',
            'code'=>560,
            'id_tinh_thanhpho'=>54
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>561,
            'ten'=>'Sông Hinh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'song-hinh',
            'tendaydu'=>'Huyện Sông Hinh',
            'tenthuong'=>'Sông Hinh, Phú Yên',
            'tenhanhchinh'=>'Huyện Sông Hinh, Tỉnh Phú Yên',
            'code'=>561,
            'id_tinh_thanhpho'=>54
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>562,
            'ten'=>'Tây Hoà',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tay-hoa',
            'tendaydu'=>'Huyện Tây Hoà',
            'tenthuong'=>'Tây Hoà, Phú Yên',
            'tenhanhchinh'=>'Huyện Tây Hoà, Tỉnh Phú Yên',
            'code'=>562,
            'id_tinh_thanhpho'=>54
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>563,
            'ten'=>'Phú Hoà',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-hoa',
            'tendaydu'=>'Huyện Phú Hoà',
            'tenthuong'=>'Phú Hoà, Phú Yên',
            'tenhanhchinh'=>'Huyện Phú Hoà, Tỉnh Phú Yên',
            'code'=>563,
            'id_tinh_thanhpho'=>54
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>564,
            'ten'=>'Đông Hòa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dong-hoa',
            'tendaydu'=>'Huyện Đông Hòa',
            'tenthuong'=>'Đông Hòa, Phú Yên',
            'tenhanhchinh'=>'Huyện Đông Hòa, Tỉnh Phú Yên',
            'code'=>564,
            'id_tinh_thanhpho'=>54
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>178,
            'ten'=>'Lạng Sơn',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'lang-son',
            'tendaydu'=>'Thành phố Lạng Sơn',
            'tenthuong'=>'Lạng Sơn, Lạng Sơn',
            'tenhanhchinh'=>'Thành phố Lạng Sơn, Tỉnh Lạng Sơn',
            'code'=>178,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>180,
            'ten'=>'Tràng Định',
            'donvi'=>'huyen',
            'tenkhongdau'=>'trang-dinh',
            'tendaydu'=>'Huyện Tràng Định',
            'tenthuong'=>'Tràng Định, Lạng Sơn',
            'tenhanhchinh'=>'Huyện Tràng Định, Tỉnh Lạng Sơn',
            'code'=>180,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>181,
            'ten'=>'Bình Gia',
            'donvi'=>'huyen',
            'tenkhongdau'=>'binh-gia',
            'tendaydu'=>'Huyện Bình Gia',
            'tenthuong'=>'Bình Gia, Lạng Sơn',
            'tenhanhchinh'=>'Huyện Bình Gia, Tỉnh Lạng Sơn',
            'code'=>181,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>182,
            'ten'=>'Văn Lãng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'van-lang',
            'tendaydu'=>'Huyện Văn Lãng',
            'tenthuong'=>'Văn Lãng, Lạng Sơn',
            'tenhanhchinh'=>'Huyện Văn Lãng, Tỉnh Lạng Sơn',
            'code'=>182,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>183,
            'ten'=>'Cao Lộc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cao-loc',
            'tendaydu'=>'Huyện Cao Lộc',
            'tenthuong'=>'Cao Lộc, Lạng Sơn',
            'tenhanhchinh'=>'Huyện Cao Lộc, Tỉnh Lạng Sơn',
            'code'=>183,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>184,
            'ten'=>'Văn Quan',
            'donvi'=>'huyen',
            'tenkhongdau'=>'van-quan',
            'tendaydu'=>'Huyện Văn Quan',
            'tenthuong'=>'Văn Quan, Lạng Sơn',
            'tenhanhchinh'=>'Huyện Văn Quan, Tỉnh Lạng Sơn',
            'code'=>184,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>185,
            'ten'=>'Bắc Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bac-son',
            'tendaydu'=>'Huyện Bắc Sơn',
            'tenthuong'=>'Bắc Sơn, Lạng Sơn',
            'tenhanhchinh'=>'Huyện Bắc Sơn, Tỉnh Lạng Sơn',
            'code'=>185,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>186,
            'ten'=>'Hữu Lũng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'huu-lung',
            'tendaydu'=>'Huyện Hữu Lũng',
            'tenthuong'=>'Hữu Lũng, Lạng Sơn',
            'tenhanhchinh'=>'Huyện Hữu Lũng, Tỉnh Lạng Sơn',
            'code'=>186,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>187,
            'ten'=>'Chi Lăng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chi-lang',
            'tendaydu'=>'Huyện Chi Lăng',
            'tenthuong'=>'Chi Lăng, Lạng Sơn',
            'tenhanhchinh'=>'Huyện Chi Lăng, Tỉnh Lạng Sơn',
            'code'=>187,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>188,
            'ten'=>'Lộc Bình',
            'donvi'=>'huyen',
            'tenkhongdau'=>'loc-binh',
            'tendaydu'=>'Huyện Lộc Bình',
            'tenthuong'=>'Lộc Bình, Lạng Sơn',
            'tenhanhchinh'=>'Huyện Lộc Bình, Tỉnh Lạng Sơn',
            'code'=>188,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>189,
            'ten'=>'Đình Lập',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dinh-lap',
            'tendaydu'=>'Huyện Đình Lập',
            'tenthuong'=>'Đình Lập, Lạng Sơn',
            'tenhanhchinh'=>'Huyện Đình Lập, Tỉnh Lạng Sơn',
            'code'=>189,
            'id_tinh_thanhpho'=>20
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>490,
            'ten'=>'Liên Chiểu',
            'donvi'=>'quan',
            'tenkhongdau'=>'lien-chieu',
            'tendaydu'=>'Quận Liên Chiểu',
            'tenthuong'=>'Liên Chiểu, Đà Nẵng',
            'tenhanhchinh'=>'Quận Liên Chiểu, Thành phố Đà Nẵng',
            'code'=>490,
            'id_tinh_thanhpho'=>48
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>491,
            'ten'=>'Thanh Khê',
            'donvi'=>'quan',
            'tenkhongdau'=>'thanh-khe',
            'tendaydu'=>'Quận Thanh Khê',
            'tenthuong'=>'Thanh Khê, Đà Nẵng',
            'tenhanhchinh'=>'Quận Thanh Khê, Thành phố Đà Nẵng',
            'code'=>491,
            'id_tinh_thanhpho'=>48
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>492,
            'ten'=>'Hải Châu',
            'donvi'=>'quan',
            'tenkhongdau'=>'hai-chau',
            'tendaydu'=>'Quận Hải Châu',
            'tenthuong'=>'Hải Châu, Đà Nẵng',
            'tenhanhchinh'=>'Quận Hải Châu, Thành phố Đà Nẵng',
            'code'=>492,
            'id_tinh_thanhpho'=>48
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>493,
            'ten'=>'Sơn Trà',
            'donvi'=>'quan',
            'tenkhongdau'=>'son-tra',
            'tendaydu'=>'Quận Sơn Trà',
            'tenthuong'=>'Sơn Trà, Đà Nẵng',
            'tenhanhchinh'=>'Quận Sơn Trà, Thành phố Đà Nẵng',
            'code'=>493,
            'id_tinh_thanhpho'=>48
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>494,
            'ten'=>'Ngũ Hành Sơn',
            'donvi'=>'quan',
            'tenkhongdau'=>'ngu-hanh-son',
            'tendaydu'=>'Quận Ngũ Hành Sơn',
            'tenthuong'=>'Ngũ Hành Sơn, Đà Nẵng',
            'tenhanhchinh'=>'Quận Ngũ Hành Sơn, Thành phố Đà Nẵng',
            'code'=>494,
            'id_tinh_thanhpho'=>48
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>495,
            'ten'=>'Cẩm Lệ',
            'donvi'=>'quan',
            'tenkhongdau'=>'cam-le',
            'tendaydu'=>'Quận Cẩm Lệ',
            'tenthuong'=>'Cẩm Lệ, Đà Nẵng',
            'tenhanhchinh'=>'Quận Cẩm Lệ, Thành phố Đà Nẵng',
            'code'=>495,
            'id_tinh_thanhpho'=>48
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>497,
            'ten'=>'Hòa Vang',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hoa-vang',
            'tendaydu'=>'Huyện Hòa Vang',
            'tenthuong'=>'Hòa Vang, Đà Nẵng',
            'tenhanhchinh'=>'Huyện Hòa Vang, Thành phố Đà Nẵng',
            'code'=>497,
            'id_tinh_thanhpho'=>48
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>116,
            'ten'=>'Sơn La',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'son-la',
            'tendaydu'=>'Thành phố Sơn La',
            'tenthuong'=>'Sơn La, Sơn La',
            'tenhanhchinh'=>'Thành phố Sơn La, Tỉnh Sơn La',
            'code'=>116,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>118,
            'ten'=>'Quỳnh Nhai',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quynh-nhai',
            'tendaydu'=>'Huyện Quỳnh Nhai',
            'tenthuong'=>'Quỳnh Nhai, Sơn La',
            'tenhanhchinh'=>'Huyện Quỳnh Nhai, Tỉnh Sơn La',
            'code'=>118,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>119,
            'ten'=>'Thuận Châu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thuan-chau',
            'tendaydu'=>'Huyện Thuận Châu',
            'tenthuong'=>'Thuận Châu, Sơn La',
            'tenhanhchinh'=>'Huyện Thuận Châu, Tỉnh Sơn La',
            'code'=>119,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>120,
            'ten'=>'Mường La',
            'donvi'=>'huyen',
            'tenkhongdau'=>'muong-la',
            'tendaydu'=>'Huyện Mường La',
            'tenthuong'=>'Mường La, Sơn La',
            'tenhanhchinh'=>'Huyện Mường La, Tỉnh Sơn La',
            'code'=>120,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>121,
            'ten'=>'Bắc Yên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bac-yen',
            'tendaydu'=>'Huyện Bắc Yên',
            'tenthuong'=>'Bắc Yên, Sơn La',
            'tenhanhchinh'=>'Huyện Bắc Yên, Tỉnh Sơn La',
            'code'=>121,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>122,
            'ten'=>'Phù Yên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-yen',
            'tendaydu'=>'Huyện Phù Yên',
            'tenthuong'=>'Phù Yên, Sơn La',
            'tenhanhchinh'=>'Huyện Phù Yên, Tỉnh Sơn La',
            'code'=>122,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>123,
            'ten'=>'Mộc Châu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'moc-chau',
            'tendaydu'=>'Huyện Mộc Châu',
            'tenthuong'=>'Mộc Châu, Sơn La',
            'tenhanhchinh'=>'Huyện Mộc Châu, Tỉnh Sơn La',
            'code'=>123,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>124,
            'ten'=>'Yên Châu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'yen-chau',
            'tendaydu'=>'Huyện Yên Châu',
            'tenthuong'=>'Yên Châu, Sơn La',
            'tenhanhchinh'=>'Huyện Yên Châu, Tỉnh Sơn La',
            'code'=>124,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>125,
            'ten'=>'Mai Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'mai-son',
            'tendaydu'=>'Huyện Mai Sơn',
            'tenthuong'=>'Mai Sơn, Sơn La',
            'tenhanhchinh'=>'Huyện Mai Sơn, Tỉnh Sơn La',
            'code'=>125,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>126,
            'ten'=>'Sông Mã',
            'donvi'=>'huyen',
            'tenkhongdau'=>'song-ma',
            'tendaydu'=>'Huyện Sông Mã',
            'tenthuong'=>'Sông Mã, Sơn La',
            'tenhanhchinh'=>'Huyện Sông Mã, Tỉnh Sơn La',
            'code'=>126,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>127,
            'ten'=>'Sốp Cộp',
            'donvi'=>'huyen',
            'tenkhongdau'=>'sop-cop',
            'tendaydu'=>'Huyện Sốp Cộp',
            'tenthuong'=>'Sốp Cộp, Sơn La',
            'tenhanhchinh'=>'Huyện Sốp Cộp, Tỉnh Sơn La',
            'code'=>127,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>128,
            'ten'=>'Vân Hồ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'van-ho',
            'tendaydu'=>'Huyện Vân Hồ',
            'tenthuong'=>'Vân Hồ, Sơn La',
            'tenhanhchinh'=>'Huyện Vân Hồ, Tỉnh Sơn La',
            'code'=>128,
            'id_tinh_thanhpho'=>14
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>703,
            'ten'=>'Tây Ninh',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'tay-ninh',
            'tendaydu'=>'Thành phố Tây Ninh',
            'tenthuong'=>'Tây Ninh, Tây Ninh',
            'tenhanhchinh'=>'Thành phố Tây Ninh, Tỉnh Tây Ninh',
            'code'=>703,
            'id_tinh_thanhpho'=>72
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>705,
            'ten'=>'Tân Biên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tan-bien',
            'tendaydu'=>'Huyện Tân Biên',
            'tenthuong'=>'Tân Biên, Tây Ninh',
            'tenhanhchinh'=>'Huyện Tân Biên, Tỉnh Tây Ninh',
            'code'=>705,
            'id_tinh_thanhpho'=>72
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>706,
            'ten'=>'Tân Châu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tan-chau',
            'tendaydu'=>'Huyện Tân Châu',
            'tenthuong'=>'Tân Châu, Tây Ninh',
            'tenhanhchinh'=>'Huyện Tân Châu, Tỉnh Tây Ninh',
            'code'=>706,
            'id_tinh_thanhpho'=>72
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>707,
            'ten'=>'Dương Minh Châu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'duong-minh-chau',
            'tendaydu'=>'Huyện Dương Minh Châu',
            'tenthuong'=>'Dương Minh Châu, Tây Ninh',
            'tenhanhchinh'=>'Huyện Dương Minh Châu, Tỉnh Tây Ninh',
            'code'=>707,
            'id_tinh_thanhpho'=>72
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>708,
            'ten'=>'Châu Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chau-thanh',
            'tendaydu'=>'Huyện Châu Thành',
            'tenthuong'=>'Châu Thành, Tây Ninh',
            'tenhanhchinh'=>'Huyện Châu Thành, Tỉnh Tây Ninh',
            'code'=>708,
            'id_tinh_thanhpho'=>72
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>709,
            'ten'=>'Hòa Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hoa-thanh',
            'tendaydu'=>'Huyện Hòa Thành',
            'tenthuong'=>'Hòa Thành, Tây Ninh',
            'tenhanhchinh'=>'Huyện Hòa Thành, Tỉnh Tây Ninh',
            'code'=>709,
            'id_tinh_thanhpho'=>72
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>710,
            'ten'=>'Gò Dầu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'go-dau',
            'tendaydu'=>'Huyện Gò Dầu',
            'tenthuong'=>'Gò Dầu, Tây Ninh',
            'tenhanhchinh'=>'Huyện Gò Dầu, Tỉnh Tây Ninh',
            'code'=>710,
            'id_tinh_thanhpho'=>72
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>711,
            'ten'=>'Bến Cầu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ben-cau',
            'tendaydu'=>'Huyện Bến Cầu',
            'tenthuong'=>'Bến Cầu, Tây Ninh',
            'tenhanhchinh'=>'Huyện Bến Cầu, Tỉnh Tây Ninh',
            'code'=>711,
            'id_tinh_thanhpho'=>72
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>712,
            'ten'=>'Trảng Bàng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'trang-bang',
            'tendaydu'=>'Huyện Trảng Bàng',
            'tenthuong'=>'Trảng Bàng, Tây Ninh',
            'tenhanhchinh'=>'Huyện Trảng Bàng, Tỉnh Tây Ninh',
            'code'=>712,
            'id_tinh_thanhpho'=>72
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>356,
            'ten'=>'Nam Định',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'nam-dinh',
            'tendaydu'=>'Thành phố Nam Định',
            'tenthuong'=>'Nam Định, Nam Định',
            'tenhanhchinh'=>'Thành phố Nam Định, Tỉnh Nam Định',
            'code'=>356,
            'id_tinh_thanhpho'=>36
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>358,
            'ten'=>'Mỹ Lộc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'my-loc',
            'tendaydu'=>'Huyện Mỹ Lộc',
            'tenthuong'=>'Mỹ Lộc, Nam Định',
            'tenhanhchinh'=>'Huyện Mỹ Lộc, Tỉnh Nam Định',
            'code'=>358,
            'id_tinh_thanhpho'=>36
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>359,
            'ten'=>'Vụ Bản',
            'donvi'=>'huyen',
            'tenkhongdau'=>'vu-ban',
            'tendaydu'=>'Huyện Vụ Bản',
            'tenthuong'=>'Vụ Bản, Nam Định',
            'tenhanhchinh'=>'Huyện Vụ Bản, Tỉnh Nam Định',
            'code'=>359,
            'id_tinh_thanhpho'=>36
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>360,
            'ten'=>'Ý Yên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'y-yen',
            'tendaydu'=>'Huyện Ý Yên',
            'tenthuong'=>'Ý Yên, Nam Định',
            'tenhanhchinh'=>'Huyện Ý Yên, Tỉnh Nam Định',
            'code'=>360,
            'id_tinh_thanhpho'=>36
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>361,
            'ten'=>'Nghĩa Hưng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nghia-hung',
            'tendaydu'=>'Huyện Nghĩa Hưng',
            'tenthuong'=>'Nghĩa Hưng, Nam Định',
            'tenhanhchinh'=>'Huyện Nghĩa Hưng, Tỉnh Nam Định',
            'code'=>361,
            'id_tinh_thanhpho'=>36
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>362,
            'ten'=>'Nam Trực',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nam-truc',
            'tendaydu'=>'Huyện Nam Trực',
            'tenthuong'=>'Nam Trực, Nam Định',
            'tenhanhchinh'=>'Huyện Nam Trực, Tỉnh Nam Định',
            'code'=>362,
            'id_tinh_thanhpho'=>36
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>363,
            'ten'=>'Trực Ninh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'truc-ninh',
            'tendaydu'=>'Huyện Trực Ninh',
            'tenthuong'=>'Trực Ninh, Nam Định',
            'tenhanhchinh'=>'Huyện Trực Ninh, Tỉnh Nam Định',
            'code'=>363,
            'id_tinh_thanhpho'=>36
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>364,
            'ten'=>'Xuân Trường',
            'donvi'=>'huyen',
            'tenkhongdau'=>'xuan-truong',
            'tendaydu'=>'Huyện Xuân Trường',
            'tenthuong'=>'Xuân Trường, Nam Định',
            'tenhanhchinh'=>'Huyện Xuân Trường, Tỉnh Nam Định',
            'code'=>364,
            'id_tinh_thanhpho'=>36
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>365,
            'ten'=>'Giao Thủy',
            'donvi'=>'huyen',
            'tenkhongdau'=>'giao-thuy',
            'tendaydu'=>'Huyện Giao Thủy',
            'tenthuong'=>'Giao Thủy, Nam Định',
            'tenhanhchinh'=>'Huyện Giao Thủy, Tỉnh Nam Định',
            'code'=>365,
            'id_tinh_thanhpho'=>36
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>366,
            'ten'=>'Hải Hậu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hai-hau',
            'tendaydu'=>'Huyện Hải Hậu',
            'tenthuong'=>'Hải Hậu, Nam Định',
            'tenhanhchinh'=>'Huyện Hải Hậu, Tỉnh Nam Định',
            'code'=>366,
            'id_tinh_thanhpho'=>36
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>105,
            'ten'=>'Lai Châu',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'lai-chau',
            'tendaydu'=>'Thành phố Lai Châu',
            'tenthuong'=>'Lai Châu, Lai Châu',
            'tenhanhchinh'=>'Thành phố Lai Châu, Tỉnh Lai Châu',
            'code'=>105,
            'id_tinh_thanhpho'=>12
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>106,
            'ten'=>'Tam Đường',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tam-duong',
            'tendaydu'=>'Huyện Tam Đường',
            'tenthuong'=>'Tam Đường, Lai Châu',
            'tenhanhchinh'=>'Huyện Tam Đường, Tỉnh Lai Châu',
            'code'=>106,
            'id_tinh_thanhpho'=>12
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>107,
            'ten'=>'Mường Tè',
            'donvi'=>'huyen',
            'tenkhongdau'=>'muong-te',
            'tendaydu'=>'Huyện Mường Tè',
            'tenthuong'=>'Mường Tè, Lai Châu',
            'tenhanhchinh'=>'Huyện Mường Tè, Tỉnh Lai Châu',
            'code'=>107,
            'id_tinh_thanhpho'=>12
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>108,
            'ten'=>'Sìn Hồ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'sin-ho',
            'tendaydu'=>'Huyện Sìn Hồ',
            'tenthuong'=>'Sìn Hồ, Lai Châu',
            'tenhanhchinh'=>'Huyện Sìn Hồ, Tỉnh Lai Châu',
            'code'=>108,
            'id_tinh_thanhpho'=>12
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>109,
            'ten'=>'Phong Thổ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phong-tho',
            'tendaydu'=>'Huyện Phong Thổ',
            'tenthuong'=>'Phong Thổ, Lai Châu',
            'tenhanhchinh'=>'Huyện Phong Thổ, Tỉnh Lai Châu',
            'code'=>109,
            'id_tinh_thanhpho'=>12
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>110,
            'ten'=>'Than Uyên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'than-uyen',
            'tendaydu'=>'Huyện Than Uyên',
            'tenthuong'=>'Than Uyên, Lai Châu',
            'tenhanhchinh'=>'Huyện Than Uyên, Tỉnh Lai Châu',
            'code'=>110,
            'id_tinh_thanhpho'=>12
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>111,
            'ten'=>'Tân Uyên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tan-uyen',
            'tendaydu'=>'Huyện Tân Uyên',
            'tenthuong'=>'Tân Uyên, Lai Châu',
            'tenhanhchinh'=>'Huyện Tân Uyên, Tỉnh Lai Châu',
            'code'=>111,
            'id_tinh_thanhpho'=>12
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>112,
            'ten'=>'Nậm Nhùn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nam-nhun',
            'tendaydu'=>'Huyện Nậm Nhùn',
            'tenthuong'=>'Nậm Nhùn, Lai Châu',
            'tenhanhchinh'=>'Huyện Nậm Nhùn, Tỉnh Lai Châu',
            'code'=>112,
            'id_tinh_thanhpho'=>12
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>829,
            'ten'=>'Bến Tre',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'ben-tre',
            'tendaydu'=>'Thành phố Bến Tre',
            'tenthuong'=>'Bến Tre, Bến Tre',
            'tenhanhchinh'=>'Thành phố Bến Tre, Tỉnh Bến Tre',
            'code'=>829,
            'id_tinh_thanhpho'=>83
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>831,
            'ten'=>'Châu Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chau-thanh',
            'tendaydu'=>'Huyện Châu Thành',
            'tenthuong'=>'Châu Thành, Bến Tre',
            'tenhanhchinh'=>'Huyện Châu Thành, Tỉnh Bến Tre',
            'code'=>831,
            'id_tinh_thanhpho'=>83
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>832,
            'ten'=>'Chợ Lách',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cho-lach',
            'tendaydu'=>'Huyện Chợ Lách',
            'tenthuong'=>'Chợ Lách, Bến Tre',
            'tenhanhchinh'=>'Huyện Chợ Lách, Tỉnh Bến Tre',
            'code'=>832,
            'id_tinh_thanhpho'=>83
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>833,
            'ten'=>'Mỏ Cày Nam',
            'donvi'=>'huyen',
            'tenkhongdau'=>'mo-cay-nam',
            'tendaydu'=>'Huyện Mỏ Cày Nam',
            'tenthuong'=>'Mỏ Cày Nam, Bến Tre',
            'tenhanhchinh'=>'Huyện Mỏ Cày Nam, Tỉnh Bến Tre',
            'code'=>833,
            'id_tinh_thanhpho'=>83
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>834,
            'ten'=>'Giồng Trôm',
            'donvi'=>'huyen',
            'tenkhongdau'=>'giong-trom',
            'tendaydu'=>'Huyện Giồng Trôm',
            'tenthuong'=>'Giồng Trôm, Bến Tre',
            'tenhanhchinh'=>'Huyện Giồng Trôm, Tỉnh Bến Tre',
            'code'=>834,
            'id_tinh_thanhpho'=>83
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>835,
            'ten'=>'Bình Đại',
            'donvi'=>'huyen',
            'tenkhongdau'=>'binh-dai',
            'tendaydu'=>'Huyện Bình Đại',
            'tenthuong'=>'Bình Đại, Bến Tre',
            'tenhanhchinh'=>'Huyện Bình Đại, Tỉnh Bến Tre',
            'code'=>835,
            'id_tinh_thanhpho'=>83
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>836,
            'ten'=>'Ba Tri',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ba-tri',
            'tendaydu'=>'Huyện Ba Tri',
            'tenthuong'=>'Ba Tri, Bến Tre',
            'tenhanhchinh'=>'Huyện Ba Tri, Tỉnh Bến Tre',
            'code'=>836,
            'id_tinh_thanhpho'=>83
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>837,
            'ten'=>'Thạnh Phú',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thanh-phu',
            'tendaydu'=>'Huyện Thạnh Phú',
            'tenthuong'=>'Thạnh Phú, Bến Tre',
            'tenhanhchinh'=>'Huyện Thạnh Phú, Tỉnh Bến Tre',
            'code'=>837,
            'id_tinh_thanhpho'=>83
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>838,
            'ten'=>'Mỏ Cày Bắc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'mo-cay-bac',
            'tendaydu'=>'Huyện Mỏ Cày Bắc',
            'tenthuong'=>'Mỏ Cày Bắc, Bến Tre',
            'tenhanhchinh'=>'Huyện Mỏ Cày Bắc, Tỉnh Bến Tre',
            'code'=>838,
            'id_tinh_thanhpho'=>83
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>568,
            'ten'=>'Nha Trang',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'nha-trang',
            'tendaydu'=>'Thành phố Nha Trang',
            'tenthuong'=>'Nha Trang, Khánh Hòa',
            'tenhanhchinh'=>'Thành phố Nha Trang, Tỉnh Khánh Hòa',
            'code'=>568,
            'id_tinh_thanhpho'=>56
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>569,
            'ten'=>'Cam Ranh',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'cam-ranh',
            'tendaydu'=>'Thành phố Cam Ranh',
            'tenthuong'=>'Cam Ranh, Khánh Hòa',
            'tenhanhchinh'=>'Thành phố Cam Ranh, Tỉnh Khánh Hòa',
            'code'=>569,
            'id_tinh_thanhpho'=>56
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>570,
            'ten'=>'Cam Lâm',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cam-lam',
            'tendaydu'=>'Huyện Cam Lâm',
            'tenthuong'=>'Cam Lâm, Khánh Hòa',
            'tenhanhchinh'=>'Huyện Cam Lâm, Tỉnh Khánh Hòa',
            'code'=>570,
            'id_tinh_thanhpho'=>56
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>571,
            'ten'=>'Vạn Ninh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'van-ninh',
            'tendaydu'=>'Huyện Vạn Ninh',
            'tenthuong'=>'Vạn Ninh, Khánh Hòa',
            'tenhanhchinh'=>'Huyện Vạn Ninh, Tỉnh Khánh Hòa',
            'code'=>571,
            'id_tinh_thanhpho'=>56
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>572,
            'ten'=>'Ninh Hòa',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'ninh-hoa',
            'tendaydu'=>'Thị xã Ninh Hòa',
            'tenthuong'=>'Ninh Hòa, Khánh Hòa',
            'tenhanhchinh'=>'Thị xã Ninh Hòa, Tỉnh Khánh Hòa',
            'code'=>572,
            'id_tinh_thanhpho'=>56
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>573,
            'ten'=>'Khánh Vĩnh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'khanh-vinh',
            'tendaydu'=>'Huyện Khánh Vĩnh',
            'tenthuong'=>'Khánh Vĩnh, Khánh Hòa',
            'tenhanhchinh'=>'Huyện Khánh Vĩnh, Tỉnh Khánh Hòa',
            'code'=>573,
            'id_tinh_thanhpho'=>56
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>574,
            'ten'=>'Diên Khánh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dien-khanh',
            'tendaydu'=>'Huyện Diên Khánh',
            'tenthuong'=>'Diên Khánh, Khánh Hòa',
            'tenhanhchinh'=>'Huyện Diên Khánh, Tỉnh Khánh Hòa',
            'code'=>574,
            'id_tinh_thanhpho'=>56
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>575,
            'ten'=>'Khánh Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'khanh-son',
            'tendaydu'=>'Huyện Khánh Sơn',
            'tenthuong'=>'Khánh Sơn, Khánh Hòa',
            'tenhanhchinh'=>'Huyện Khánh Sơn, Tỉnh Khánh Hòa',
            'code'=>575,
            'id_tinh_thanhpho'=>56
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>576,
            'ten'=>'Trường Sa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'truong-sa',
            'tendaydu'=>'Huyện Trường Sa',
            'tenthuong'=>'Trường Sa, Khánh Hòa',
            'tenhanhchinh'=>'Huyện Trường Sa, Tỉnh Khánh Hòa',
            'code'=>576,
            'id_tinh_thanhpho'=>56
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>593,
            'ten'=>'Phan Thiết',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'phan-thiet',
            'tendaydu'=>'Thành phố Phan Thiết',
            'tenthuong'=>'Phan Thiết, Bình Thuận',
            'tenhanhchinh'=>'Thành phố Phan Thiết, Tỉnh Bình Thuận',
            'code'=>593,
            'id_tinh_thanhpho'=>60
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>594,
            'ten'=>'La Gi',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'la-gi',
            'tendaydu'=>'Thị xã La Gi',
            'tenthuong'=>'La Gi, Bình Thuận',
            'tenhanhchinh'=>'Thị xã La Gi, Tỉnh Bình Thuận',
            'code'=>594,
            'id_tinh_thanhpho'=>60
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>595,
            'ten'=>'Tuy Phong',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tuy-phong',
            'tendaydu'=>'Huyện Tuy Phong',
            'tenthuong'=>'Tuy Phong, Bình Thuận',
            'tenhanhchinh'=>'Huyện Tuy Phong, Tỉnh Bình Thuận',
            'code'=>595,
            'id_tinh_thanhpho'=>60
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>596,
            'ten'=>'Bắc Bình',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bac-binh',
            'tendaydu'=>'Huyện Bắc Bình',
            'tenthuong'=>'Bắc Bình, Bình Thuận',
            'tenhanhchinh'=>'Huyện Bắc Bình, Tỉnh Bình Thuận',
            'code'=>596,
            'id_tinh_thanhpho'=>60
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>597,
            'ten'=>'Hàm Thuận Bắc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ham-thuan-bac',
            'tendaydu'=>'Huyện Hàm Thuận Bắc',
            'tenthuong'=>'Hàm Thuận Bắc, Bình Thuận',
            'tenhanhchinh'=>'Huyện Hàm Thuận Bắc, Tỉnh Bình Thuận',
            'code'=>597,
            'id_tinh_thanhpho'=>60
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>598,
            'ten'=>'Hàm Thuận Nam',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ham-thuan-nam',
            'tendaydu'=>'Huyện Hàm Thuận Nam',
            'tenthuong'=>'Hàm Thuận Nam, Bình Thuận',
            'tenhanhchinh'=>'Huyện Hàm Thuận Nam, Tỉnh Bình Thuận',
            'code'=>598,
            'id_tinh_thanhpho'=>60
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>599,
            'ten'=>'Tánh Linh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tanh-linh',
            'tendaydu'=>'Huyện Tánh Linh',
            'tenthuong'=>'Tánh Linh, Bình Thuận',
            'tenhanhchinh'=>'Huyện Tánh Linh, Tỉnh Bình Thuận',
            'code'=>599,
            'id_tinh_thanhpho'=>60
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>600,
            'ten'=>'Đức Linh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'duc-linh',
            'tendaydu'=>'Huyện Đức Linh',
            'tenthuong'=>'Đức Linh, Bình Thuận',
            'tenhanhchinh'=>'Huyện Đức Linh, Tỉnh Bình Thuận',
            'code'=>600,
            'id_tinh_thanhpho'=>60
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>601,
            'ten'=>'Hàm Tân',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ham-tan',
            'tendaydu'=>'Huyện Hàm Tân',
            'tenthuong'=>'Hàm Tân, Bình Thuận',
            'tenhanhchinh'=>'Huyện Hàm Tân, Tỉnh Bình Thuận',
            'code'=>601,
            'id_tinh_thanhpho'=>60
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>602,
            'ten'=>'Phú Quí',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-qui',
            'tendaydu'=>'Huyện Phú Quí',
            'tenthuong'=>'Phú Quí, Bình Thuận',
            'tenhanhchinh'=>'Huyện Phú Quí, Tỉnh Bình Thuận',
            'code'=>602,
            'id_tinh_thanhpho'=>60
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>40,
            'ten'=>'Cao Bằng',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'cao-bang',
            'tendaydu'=>'Thành phố Cao Bằng',
            'tenthuong'=>'Cao Bằng, Cao Bằng',
            'tenhanhchinh'=>'Thành phố Cao Bằng, Tỉnh Cao Bằng',
            'code'=>40,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>42,
            'ten'=>'Bảo Lâm',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bao-lam',
            'tendaydu'=>'Huyện Bảo Lâm',
            'tenthuong'=>'Bảo Lâm, Cao Bằng',
            'tenhanhchinh'=>'Huyện Bảo Lâm, Tỉnh Cao Bằng',
            'code'=>42,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>43,
            'ten'=>'Bảo Lạc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'bao-lac',
            'tendaydu'=>'Huyện Bảo Lạc',
            'tenthuong'=>'Bảo Lạc, Cao Bằng',
            'tenhanhchinh'=>'Huyện Bảo Lạc, Tỉnh Cao Bằng',
            'code'=>43,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>44,
            'ten'=>'Thông Nông',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thong-nong',
            'tendaydu'=>'Huyện Thông Nông',
            'tenthuong'=>'Thông Nông, Cao Bằng',
            'tenhanhchinh'=>'Huyện Thông Nông, Tỉnh Cao Bằng',
            'code'=>44,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>45,
            'ten'=>'Hà Quảng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ha-quang',
            'tendaydu'=>'Huyện Hà Quảng',
            'tenthuong'=>'Hà Quảng, Cao Bằng',
            'tenhanhchinh'=>'Huyện Hà Quảng, Tỉnh Cao Bằng',
            'code'=>45,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>46,
            'ten'=>'Trà Lĩnh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tra-linh',
            'tendaydu'=>'Huyện Trà Lĩnh',
            'tenthuong'=>'Trà Lĩnh, Cao Bằng',
            'tenhanhchinh'=>'Huyện Trà Lĩnh, Tỉnh Cao Bằng',
            'code'=>46,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>47,
            'ten'=>'Trùng Khánh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'trung-khanh',
            'tendaydu'=>'Huyện Trùng Khánh',
            'tenthuong'=>'Trùng Khánh, Cao Bằng',
            'tenhanhchinh'=>'Huyện Trùng Khánh, Tỉnh Cao Bằng',
            'code'=>47,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>48,
            'ten'=>'Hạ Lang',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ha-lang',
            'tendaydu'=>'Huyện Hạ Lang',
            'tenthuong'=>'Hạ Lang, Cao Bằng',
            'tenhanhchinh'=>'Huyện Hạ Lang, Tỉnh Cao Bằng',
            'code'=>48,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>49,
            'ten'=>'Quảng Uyên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'quang-uyen',
            'tendaydu'=>'Huyện Quảng Uyên',
            'tenthuong'=>'Quảng Uyên, Cao Bằng',
            'tenhanhchinh'=>'Huyện Quảng Uyên, Tỉnh Cao Bằng',
            'code'=>49,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>50,
            'ten'=>'Phục Hoà',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phuc-hoa',
            'tendaydu'=>'Huyện Phục Hoà',
            'tenthuong'=>'Phục Hoà, Cao Bằng',
            'tenhanhchinh'=>'Huyện Phục Hoà, Tỉnh Cao Bằng',
            'code'=>50,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>51,
            'ten'=>'Hoà An',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hoa-an',
            'tendaydu'=>'Huyện Hoà An',
            'tenthuong'=>'Hoà An, Cao Bằng',
            'tenhanhchinh'=>'Huyện Hoà An, Tỉnh Cao Bằng',
            'code'=>51,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>52,
            'ten'=>'Nguyên Bình',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nguyen-binh',
            'tendaydu'=>'Huyện Nguyên Bình',
            'tenthuong'=>'Nguyên Bình, Cao Bằng',
            'tenhanhchinh'=>'Huyện Nguyên Bình, Tỉnh Cao Bằng',
            'code'=>52,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>53,
            'ten'=>'Thạch An',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thach-an',
            'tendaydu'=>'Huyện Thạch An',
            'tenthuong'=>'Thạch An, Cao Bằng',
            'tenhanhchinh'=>'Huyện Thạch An, Tỉnh Cao Bằng',
            'code'=>53,
            'id_tinh_thanhpho'=>4
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>303,
            'ten'=>'Hồng Bàng',
            'donvi'=>'quan',
            'tenkhongdau'=>'hong-bang',
            'tendaydu'=>'Quận Hồng Bàng',
            'tenthuong'=>'Hồng Bàng, Hải Phòng',
            'tenhanhchinh'=>'Quận Hồng Bàng, Thành phố Hải Phòng',
            'code'=>303,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>304,
            'ten'=>'Ngô Quyền',
            'donvi'=>'quan',
            'tenkhongdau'=>'ngo-quyen',
            'tendaydu'=>'Quận Ngô Quyền',
            'tenthuong'=>'Ngô Quyền, Hải Phòng',
            'tenhanhchinh'=>'Quận Ngô Quyền, Thành phố Hải Phòng',
            'code'=>304,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>305,
            'ten'=>'Lê Chân',
            'donvi'=>'quan',
            'tenkhongdau'=>'le-chan',
            'tendaydu'=>'Quận Lê Chân',
            'tenthuong'=>'Lê Chân, Hải Phòng',
            'tenhanhchinh'=>'Quận Lê Chân, Thành phố Hải Phòng',
            'code'=>305,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>306,
            'ten'=>'Hải An',
            'donvi'=>'quan',
            'tenkhongdau'=>'hai-an',
            'tendaydu'=>'Quận Hải An',
            'tenthuong'=>'Hải An, Hải Phòng',
            'tenhanhchinh'=>'Quận Hải An, Thành phố Hải Phòng',
            'code'=>306,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>307,
            'ten'=>'Kiến An',
            'donvi'=>'quan',
            'tenkhongdau'=>'kien-an',
            'tendaydu'=>'Quận Kiến An',
            'tenthuong'=>'Kiến An, Hải Phòng',
            'tenhanhchinh'=>'Quận Kiến An, Thành phố Hải Phòng',
            'code'=>307,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>308,
            'ten'=>'Đồ Sơn',
            'donvi'=>'quan',
            'tenkhongdau'=>'do-son',
            'tendaydu'=>'Quận Đồ Sơn',
            'tenthuong'=>'Đồ Sơn, Hải Phòng',
            'tenhanhchinh'=>'Quận Đồ Sơn, Thành phố Hải Phòng',
            'code'=>308,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>309,
            'ten'=>'Dương Kinh',
            'donvi'=>'quan',
            'tenkhongdau'=>'duong-kinh',
            'tendaydu'=>'Quận Dương Kinh',
            'tenthuong'=>'Dương Kinh, Hải Phòng',
            'tenhanhchinh'=>'Quận Dương Kinh, Thành phố Hải Phòng',
            'code'=>309,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>311,
            'ten'=>'Thuỷ Nguyên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'thuy-nguyen',
            'tendaydu'=>'Huyện Thuỷ Nguyên',
            'tenthuong'=>'Thuỷ Nguyên, Hải Phòng',
            'tenhanhchinh'=>'Huyện Thuỷ Nguyên, Thành phố Hải Phòng',
            'code'=>311,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>312,
            'ten'=>'An Dương',
            'donvi'=>'huyen',
            'tenkhongdau'=>'an-duong',
            'tendaydu'=>'Huyện An Dương',
            'tenthuong'=>'An Dương, Hải Phòng',
            'tenhanhchinh'=>'Huyện An Dương, Thành phố Hải Phòng',
            'code'=>312,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>313,
            'ten'=>'An Lão',
            'donvi'=>'huyen',
            'tenkhongdau'=>'an-lao',
            'tendaydu'=>'Huyện An Lão',
            'tenthuong'=>'An Lão, Hải Phòng',
            'tenhanhchinh'=>'Huyện An Lão, Thành phố Hải Phòng',
            'code'=>313,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>314,
            'ten'=>'Kiến Thuỵ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'kien-thuy',
            'tendaydu'=>'Huyện Kiến Thuỵ',
            'tenthuong'=>'Kiến Thuỵ, Hải Phòng',
            'tenhanhchinh'=>'Huyện Kiến Thuỵ, Thành phố Hải Phòng',
            'code'=>314,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>315,
            'ten'=>'Tiên Lãng',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tien-lang',
            'tendaydu'=>'Huyện Tiên Lãng',
            'tenthuong'=>'Tiên Lãng, Hải Phòng',
            'tenhanhchinh'=>'Huyện Tiên Lãng, Thành phố Hải Phòng',
            'code'=>315,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>316,
            'ten'=>'Vĩnh Bảo',
            'donvi'=>'huyen',
            'tenkhongdau'=>'vinh-bao',
            'tendaydu'=>'Huyện Vĩnh Bảo',
            'tenthuong'=>'Vĩnh Bảo, Hải Phòng',
            'tenhanhchinh'=>'Huyện Vĩnh Bảo, Thành phố Hải Phòng',
            'code'=>316,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>317,
            'ten'=>'Cát Hải',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cat-hai',
            'tendaydu'=>'Huyện Cát Hải',
            'tenthuong'=>'Cát Hải, Hải Phòng',
            'tenhanhchinh'=>'Huyện Cát Hải, Thành phố Hải Phòng',
            'code'=>317,
            'id_tinh_thanhpho'=>31
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>369,
            'ten'=>'Ninh Bình',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'ninh-binh',
            'tendaydu'=>'Thành phố Ninh Bình',
            'tenthuong'=>'Ninh Bình, Ninh Bình',
            'tenhanhchinh'=>'Thành phố Ninh Bình, Tỉnh Ninh Bình',
            'code'=>369,
            'id_tinh_thanhpho'=>37
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>370,
            'ten'=>'Tam Điệp',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'tam-diep',
            'tendaydu'=>'Thành phố Tam Điệp',
            'tenthuong'=>'Tam Điệp, Ninh Bình',
            'tenhanhchinh'=>'Thành phố Tam Điệp, Tỉnh Ninh Bình',
            'code'=>370,
            'id_tinh_thanhpho'=>37
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>372,
            'ten'=>'Nho Quan',
            'donvi'=>'huyen',
            'tenkhongdau'=>'nho-quan',
            'tendaydu'=>'Huyện Nho Quan',
            'tenthuong'=>'Nho Quan, Ninh Bình',
            'tenhanhchinh'=>'Huyện Nho Quan, Tỉnh Ninh Bình',
            'code'=>372,
            'id_tinh_thanhpho'=>37
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>373,
            'ten'=>'Gia Viễn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'gia-vien',
            'tendaydu'=>'Huyện Gia Viễn',
            'tenthuong'=>'Gia Viễn, Ninh Bình',
            'tenhanhchinh'=>'Huyện Gia Viễn, Tỉnh Ninh Bình',
            'code'=>373,
            'id_tinh_thanhpho'=>37
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>374,
            'ten'=>'Hoa Lư',
            'donvi'=>'huyen',
            'tenkhongdau'=>'hoa-lu',
            'tendaydu'=>'Huyện Hoa Lư',
            'tenthuong'=>'Hoa Lư, Ninh Bình',
            'tenhanhchinh'=>'Huyện Hoa Lư, Tỉnh Ninh Bình',
            'code'=>374,
            'id_tinh_thanhpho'=>37
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>375,
            'ten'=>'Yên Khánh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'yen-khanh',
            'tendaydu'=>'Huyện Yên Khánh',
            'tenthuong'=>'Yên Khánh, Ninh Bình',
            'tenhanhchinh'=>'Huyện Yên Khánh, Tỉnh Ninh Bình',
            'code'=>375,
            'id_tinh_thanhpho'=>37
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>376,
            'ten'=>'Kim Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'kim-son',
            'tendaydu'=>'Huyện Kim Sơn',
            'tenthuong'=>'Kim Sơn, Ninh Bình',
            'tenhanhchinh'=>'Huyện Kim Sơn, Tỉnh Ninh Bình',
            'code'=>376,
            'id_tinh_thanhpho'=>37
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>377,
            'ten'=>'Yên Mô',
            'donvi'=>'huyen',
            'tenkhongdau'=>'yen-mo',
            'tendaydu'=>'Huyện Yên Mô',
            'tenthuong'=>'Yên Mô, Ninh Bình',
            'tenhanhchinh'=>'Huyện Yên Mô, Tỉnh Ninh Bình',
            'code'=>377,
            'id_tinh_thanhpho'=>37
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>132,
            'ten'=>'Yên Bái',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'yen-bai',
            'tendaydu'=>'Thành phố Yên Bái',
            'tenthuong'=>'Yên Bái, Yên Bái',
            'tenhanhchinh'=>'Thành phố Yên Bái, Tỉnh Yên Bái',
            'code'=>132,
            'id_tinh_thanhpho'=>15
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>133,
            'ten'=>'Nghĩa Lộ',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'nghia-lo',
            'tendaydu'=>'Thị xã Nghĩa Lộ',
            'tenthuong'=>'Nghĩa Lộ, Yên Bái',
            'tenhanhchinh'=>'Thị xã Nghĩa Lộ, Tỉnh Yên Bái',
            'code'=>133,
            'id_tinh_thanhpho'=>15
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>135,
            'ten'=>'Lục Yên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'luc-yen',
            'tendaydu'=>'Huyện Lục Yên',
            'tenthuong'=>'Lục Yên, Yên Bái',
            'tenhanhchinh'=>'Huyện Lục Yên, Tỉnh Yên Bái',
            'code'=>135,
            'id_tinh_thanhpho'=>15
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>136,
            'ten'=>'Văn Yên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'van-yen',
            'tendaydu'=>'Huyện Văn Yên',
            'tenthuong'=>'Văn Yên, Yên Bái',
            'tenhanhchinh'=>'Huyện Văn Yên, Tỉnh Yên Bái',
            'code'=>136,
            'id_tinh_thanhpho'=>15
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>137,
            'ten'=>'Mù Căng Chải',
            'donvi'=>'huyen',
            'tenkhongdau'=>'mu-cang-chai',
            'tendaydu'=>'Huyện Mù Căng Chải',
            'tenthuong'=>'Mù Căng Chải, Yên Bái',
            'tenhanhchinh'=>'Huyện Mù Căng Chải, Tỉnh Yên Bái',
            'code'=>137,
            'id_tinh_thanhpho'=>15
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>138,
            'ten'=>'Trấn Yên',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tran-yen',
            'tendaydu'=>'Huyện Trấn Yên',
            'tenthuong'=>'Trấn Yên, Yên Bái',
            'tenhanhchinh'=>'Huyện Trấn Yên, Tỉnh Yên Bái',
            'code'=>138,
            'id_tinh_thanhpho'=>15
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>139,
            'ten'=>'Trạm Tấu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tram-tau',
            'tendaydu'=>'Huyện Trạm Tấu',
            'tenthuong'=>'Trạm Tấu, Yên Bái',
            'tenhanhchinh'=>'Huyện Trạm Tấu, Tỉnh Yên Bái',
            'code'=>139,
            'id_tinh_thanhpho'=>15
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>140,
            'ten'=>'Văn Chấn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'van-chan',
            'tendaydu'=>'Huyện Văn Chấn',
            'tenthuong'=>'Văn Chấn, Yên Bái',
            'tenhanhchinh'=>'Huyện Văn Chấn, Tỉnh Yên Bái',
            'code'=>140,
            'id_tinh_thanhpho'=>15
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>141,
            'ten'=>'Yên Bình',
            'donvi'=>'huyen',
            'tenkhongdau'=>'yen-binh',
            'tendaydu'=>'Huyện Yên Bình',
            'tenthuong'=>'Yên Bình, Yên Bái',
            'tenhanhchinh'=>'Huyện Yên Bình, Tỉnh Yên Bái',
            'code'=>141,
            'id_tinh_thanhpho'=>15
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>622,
            'ten'=>'Pleiku',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'pleiku',
            'tendaydu'=>'Thành phố Pleiku',
            'tenthuong'=>'Pleiku, Gia Lai',
            'tenhanhchinh'=>'Thành phố Pleiku, Tỉnh Gia Lai',
            'code'=>622,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>623,
            'ten'=>'An Khê',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'an-khe',
            'tendaydu'=>'Thị xã An Khê',
            'tenthuong'=>'An Khê, Gia Lai',
            'tenhanhchinh'=>'Thị xã An Khê, Tỉnh Gia Lai',
            'code'=>623,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>624,
            'ten'=>'Ayun Pa',
            'donvi'=>'thi-xa',
            'tenkhongdau'=>'ayun-pa',
            'tendaydu'=>'Thị xã Ayun Pa',
            'tenthuong'=>'Ayun Pa, Gia Lai',
            'tenhanhchinh'=>'Thị xã Ayun Pa, Tỉnh Gia Lai',
            'code'=>624,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>625,
            'ten'=>'KBang',
            'donvi'=>'huyen',
            'tenkhongdau'=>'kbang',
            'tendaydu'=>'Huyện KBang',
            'tenthuong'=>'KBang, Gia Lai',
            'tenhanhchinh'=>'Huyện KBang, Tỉnh Gia Lai',
            'code'=>625,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>626,
            'ten'=>'Đăk Đoa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dak-doa',
            'tendaydu'=>'Huyện Đăk Đoa',
            'tenthuong'=>'Đăk Đoa, Gia Lai',
            'tenhanhchinh'=>'Huyện Đăk Đoa, Tỉnh Gia Lai',
            'code'=>626,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>627,
            'ten'=>'Chư Păh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chu-pah',
            'tendaydu'=>'Huyện Chư Păh',
            'tenthuong'=>'Chư Păh, Gia Lai',
            'tenhanhchinh'=>'Huyện Chư Păh, Tỉnh Gia Lai',
            'code'=>627,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>628,
            'ten'=>'Ia Grai',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ia-grai',
            'tendaydu'=>'Huyện Ia Grai',
            'tenthuong'=>'Ia Grai, Gia Lai',
            'tenhanhchinh'=>'Huyện Ia Grai, Tỉnh Gia Lai',
            'code'=>628,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>629,
            'ten'=>'Mang Yang',
            'donvi'=>'huyen',
            'tenkhongdau'=>'mang-yang',
            'tendaydu'=>'Huyện Mang Yang',
            'tenthuong'=>'Mang Yang, Gia Lai',
            'tenhanhchinh'=>'Huyện Mang Yang, Tỉnh Gia Lai',
            'code'=>629,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>630,
            'ten'=>'Kông Chro',
            'donvi'=>'huyen',
            'tenkhongdau'=>'kong-chro',
            'tendaydu'=>'Huyện Kông Chro',
            'tenthuong'=>'Kông Chro, Gia Lai',
            'tenhanhchinh'=>'Huyện Kông Chro, Tỉnh Gia Lai',
            'code'=>630,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>631,
            'ten'=>'Đức Cơ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'duc-co',
            'tendaydu'=>'Huyện Đức Cơ',
            'tenthuong'=>'Đức Cơ, Gia Lai',
            'tenhanhchinh'=>'Huyện Đức Cơ, Tỉnh Gia Lai',
            'code'=>631,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>632,
            'ten'=>'Chư Prông',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chu-prong',
            'tendaydu'=>'Huyện Chư Prông',
            'tenthuong'=>'Chư Prông, Gia Lai',
            'tenhanhchinh'=>'Huyện Chư Prông, Tỉnh Gia Lai',
            'code'=>632,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>633,
            'ten'=>'Chư Sê',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chu-se',
            'tendaydu'=>'Huyện Chư Sê',
            'tenthuong'=>'Chư Sê, Gia Lai',
            'tenhanhchinh'=>'Huyện Chư Sê, Tỉnh Gia Lai',
            'code'=>633,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>634,
            'ten'=>'Đăk Pơ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dak-po',
            'tendaydu'=>'Huyện Đăk Pơ',
            'tenthuong'=>'Đăk Pơ, Gia Lai',
            'tenhanhchinh'=>'Huyện Đăk Pơ, Tỉnh Gia Lai',
            'code'=>634,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>635,
            'ten'=>'Ia Pa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ia-pa',
            'tendaydu'=>'Huyện Ia Pa',
            'tenthuong'=>'Ia Pa, Gia Lai',
            'tenhanhchinh'=>'Huyện Ia Pa, Tỉnh Gia Lai',
            'code'=>635,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>637,
            'ten'=>'Krông Pa',
            'donvi'=>'huyen',
            'tenkhongdau'=>'krong-pa',
            'tendaydu'=>'Huyện Krông Pa',
            'tenthuong'=>'Krông Pa, Gia Lai',
            'tenhanhchinh'=>'Huyện Krông Pa, Tỉnh Gia Lai',
            'code'=>637,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>638,
            'ten'=>'Phú Thiện',
            'donvi'=>'huyen',
            'tenkhongdau'=>'phu-thien',
            'tendaydu'=>'Huyện Phú Thiện',
            'tenthuong'=>'Phú Thiện, Gia Lai',
            'tenhanhchinh'=>'Huyện Phú Thiện, Tỉnh Gia Lai',
            'code'=>638,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>639,
            'ten'=>'Chư Pưh',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chu-puh',
            'tendaydu'=>'Huyện Chư Pưh',
            'tenthuong'=>'Chư Pưh, Gia Lai',
            'tenhanhchinh'=>'Huyện Chư Pưh, Tỉnh Gia Lai',
            'code'=>639,
            'id_tinh_thanhpho'=>64
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>148,
            'ten'=>'Hòa Bình',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'hoa-binh',
            'tendaydu'=>'Thành phố Hòa Bình',
            'tenthuong'=>'Hòa Bình, Hoà Bình',
            'tenhanhchinh'=>'Thành phố Hòa Bình, Tỉnh Hoà Bình',
            'code'=>148,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>150,
            'ten'=>'Đà Bắc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'da-bac',
            'tendaydu'=>'Huyện Đà Bắc',
            'tenthuong'=>'Đà Bắc, Hoà Bình',
            'tenhanhchinh'=>'Huyện Đà Bắc, Tỉnh Hoà Bình',
            'code'=>150,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>151,
            'ten'=>'Kỳ Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'ky-son',
            'tendaydu'=>'Huyện Kỳ Sơn',
            'tenthuong'=>'Kỳ Sơn, Hoà Bình',
            'tenhanhchinh'=>'Huyện Kỳ Sơn, Tỉnh Hoà Bình',
            'code'=>151,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>152,
            'ten'=>'Lương Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'luong-son',
            'tendaydu'=>'Huyện Lương Sơn',
            'tenthuong'=>'Lương Sơn, Hoà Bình',
            'tenhanhchinh'=>'Huyện Lương Sơn, Tỉnh Hoà Bình',
            'code'=>152,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>153,
            'ten'=>'Kim Bôi',
            'donvi'=>'huyen',
            'tenkhongdau'=>'kim-boi',
            'tendaydu'=>'Huyện Kim Bôi',
            'tenthuong'=>'Kim Bôi, Hoà Bình',
            'tenhanhchinh'=>'Huyện Kim Bôi, Tỉnh Hoà Bình',
            'code'=>153,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>154,
            'ten'=>'Cao Phong',
            'donvi'=>'huyen',
            'tenkhongdau'=>'cao-phong',
            'tendaydu'=>'Huyện Cao Phong',
            'tenthuong'=>'Cao Phong, Hoà Bình',
            'tenhanhchinh'=>'Huyện Cao Phong, Tỉnh Hoà Bình',
            'code'=>154,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>155,
            'ten'=>'Tân Lạc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tan-lac',
            'tendaydu'=>'Huyện Tân Lạc',
            'tenthuong'=>'Tân Lạc, Hoà Bình',
            'tenhanhchinh'=>'Huyện Tân Lạc, Tỉnh Hoà Bình',
            'code'=>155,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>156,
            'ten'=>'Mai Châu',
            'donvi'=>'huyen',
            'tenkhongdau'=>'mai-chau',
            'tendaydu'=>'Huyện Mai Châu',
            'tenthuong'=>'Mai Châu, Hoà Bình',
            'tenhanhchinh'=>'Huyện Mai Châu, Tỉnh Hoà Bình',
            'code'=>156,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>157,
            'ten'=>'Lạc Sơn',
            'donvi'=>'huyen',
            'tenkhongdau'=>'lac-son',
            'tendaydu'=>'Huyện Lạc Sơn',
            'tenthuong'=>'Lạc Sơn, Hoà Bình',
            'tenhanhchinh'=>'Huyện Lạc Sơn, Tỉnh Hoà Bình',
            'code'=>157,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>158,
            'ten'=>'Yên Thủy',
            'donvi'=>'huyen',
            'tenkhongdau'=>'yen-thuy',
            'tendaydu'=>'Huyện Yên Thủy',
            'tenthuong'=>'Yên Thủy, Hoà Bình',
            'tenhanhchinh'=>'Huyện Yên Thủy, Tỉnh Hoà Bình',
            'code'=>158,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>159,
            'ten'=>'Lạc Thủy',
            'donvi'=>'huyen',
            'tenkhongdau'=>'lac-thuy',
            'tendaydu'=>'Huyện Lạc Thủy',
            'tenthuong'=>'Lạc Thủy, Hoà Bình',
            'tenhanhchinh'=>'Huyện Lạc Thủy, Tỉnh Hoà Bình',
            'code'=>159,
            'id_tinh_thanhpho'=>17
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>747,
            'ten'=>'Vũng Tàu',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'vung-tau',
            'tendaydu'=>'Thành phố Vũng Tàu',
            'tenthuong'=>'Vũng Tàu, Bà Rịa - Vũng Tàu',
            'tenhanhchinh'=>'Thành phố Vũng Tàu, Tỉnh Bà Rịa - Vũng Tàu',
            'code'=>747,
            'id_tinh_thanhpho'=>77
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>748,
            'ten'=>'Bà Rịa',
            'donvi'=>'thanh-pho',
            'tenkhongdau'=>'ba-ria',
            'tendaydu'=>'Thành phố Bà Rịa',
            'tenthuong'=>'Bà Rịa, Bà Rịa - Vũng Tàu',
            'tenhanhchinh'=>'Thành phố Bà Rịa, Tỉnh Bà Rịa - Vũng Tàu',
            'code'=>748,
            'id_tinh_thanhpho'=>77
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>750,
            'ten'=>'Châu Đức',
            'donvi'=>'huyen',
            'tenkhongdau'=>'chau-duc',
            'tendaydu'=>'Huyện Châu Đức',
            'tenthuong'=>'Châu Đức, Bà Rịa - Vũng Tàu',
            'tenhanhchinh'=>'Huyện Châu Đức, Tỉnh Bà Rịa - Vũng Tàu',
            'code'=>750,
            'id_tinh_thanhpho'=>77
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>751,
            'ten'=>'Xuyên Mộc',
            'donvi'=>'huyen',
            'tenkhongdau'=>'xuyen-moc',
            'tendaydu'=>'Huyện Xuyên Mộc',
            'tenthuong'=>'Xuyên Mộc, Bà Rịa - Vũng Tàu',
            'tenhanhchinh'=>'Huyện Xuyên Mộc, Tỉnh Bà Rịa - Vũng Tàu',
            'code'=>751,
            'id_tinh_thanhpho'=>77
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>752,
            'ten'=>'Long Điền',
            'donvi'=>'huyen',
            'tenkhongdau'=>'long-dien',
            'tendaydu'=>'Huyện Long Điền',
            'tenthuong'=>'Long Điền, Bà Rịa - Vũng Tàu',
            'tenhanhchinh'=>'Huyện Long Điền, Tỉnh Bà Rịa - Vũng Tàu',
            'code'=>752,
            'id_tinh_thanhpho'=>77
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>753,
            'ten'=>'Đất Đỏ',
            'donvi'=>'huyen',
            'tenkhongdau'=>'dat-do',
            'tendaydu'=>'Huyện Đất Đỏ',
            'tenthuong'=>'Đất Đỏ, Bà Rịa - Vũng Tàu',
            'tenhanhchinh'=>'Huyện Đất Đỏ, Tỉnh Bà Rịa - Vũng Tàu',
            'code'=>753,
            'id_tinh_thanhpho'=>77
            ] );
            
                        
            
            QuanHuyen::create( [
            'id'=>754,
            'ten'=>'Tân Thành',
            'donvi'=>'huyen',
            'tenkhongdau'=>'tan-thanh',
            'tendaydu'=>'Huyện Tân Thành',
            'tenthuong'=>'Tân Thành, Bà Rịa - Vũng Tàu',
            'tenhanhchinh'=>'Huyện Tân Thành, Tỉnh Bà Rịa - Vũng Tàu',
            'code'=>754,
            'id_tinh_thanhpho'=>77
            ] );



QuanHuyen::create( [
    'id'=>964,
    'ten'=>'Cà Mau',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'ca-mau',
    'tendaydu'=>'Thành phố Cà Mau',
    'tenthuong'=>'Cà Mau, Cà Mau',
    'tenhanhchinh'=>'Thành phố Cà Mau, Tỉnh Cà Mau',
    'code'=>964,
    'id_tinh_thanhpho'=>96
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>966,
    'ten'=>'U Minh',
    'donvi'=>'huyen',
    'tenkhongdau'=>'u-minh',
    'tendaydu'=>'Huyện U Minh',
    'tenthuong'=>'U Minh, Cà Mau',
    'tenhanhchinh'=>'Huyện U Minh, Tỉnh Cà Mau',
    'code'=>966,
    'id_tinh_thanhpho'=>96
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>967,
    'ten'=>'Thới Bình',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thoi-binh',
    'tendaydu'=>'Huyện Thới Bình',
    'tenthuong'=>'Thới Bình, Cà Mau',
    'tenhanhchinh'=>'Huyện Thới Bình, Tỉnh Cà Mau',
    'code'=>967,
    'id_tinh_thanhpho'=>96
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>968,
    'ten'=>'Trần Văn Thời',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tran-van-thoi',
    'tendaydu'=>'Huyện Trần Văn Thời',
    'tenthuong'=>'Trần Văn Thời, Cà Mau',
    'tenhanhchinh'=>'Huyện Trần Văn Thời, Tỉnh Cà Mau',
    'code'=>968,
    'id_tinh_thanhpho'=>96
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>969,
    'ten'=>'Cái Nước',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cai-nuoc',
    'tendaydu'=>'Huyện Cái Nước',
    'tenthuong'=>'Cái Nước, Cà Mau',
    'tenhanhchinh'=>'Huyện Cái Nước, Tỉnh Cà Mau',
    'code'=>969,
    'id_tinh_thanhpho'=>96
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>970,
    'ten'=>'Đầm Dơi',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dam-doi',
    'tendaydu'=>'Huyện Đầm Dơi',
    'tenthuong'=>'Đầm Dơi, Cà Mau',
    'tenhanhchinh'=>'Huyện Đầm Dơi, Tỉnh Cà Mau',
    'code'=>970,
    'id_tinh_thanhpho'=>96
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>971,
    'ten'=>'Năm Căn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nam-can',
    'tendaydu'=>'Huyện Năm Căn',
    'tenthuong'=>'Năm Căn, Cà Mau',
    'tenhanhchinh'=>'Huyện Năm Căn, Tỉnh Cà Mau',
    'code'=>971,
    'id_tinh_thanhpho'=>96
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>972,
    'ten'=>'Phú Tân',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phu-tan',
    'tendaydu'=>'Huyện Phú Tân',
    'tenthuong'=>'Phú Tân, Cà Mau',
    'tenhanhchinh'=>'Huyện Phú Tân, Tỉnh Cà Mau',
    'code'=>972,
    'id_tinh_thanhpho'=>96
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>973,
    'ten'=>'Ngọc Hiển',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ngoc-hien',
    'tendaydu'=>'Huyện Ngọc Hiển',
    'tenthuong'=>'Ngọc Hiển, Cà Mau',
    'tenhanhchinh'=>'Huyện Ngọc Hiển, Tỉnh Cà Mau',
    'code'=>973,
    'id_tinh_thanhpho'=>96
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>718,
    'ten'=>'Thủ Dầu Một',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'thu-dau-mot',
    'tendaydu'=>'Thành phố Thủ Dầu Một',
    'tenthuong'=>'Thủ Dầu Một, Bình Dương',
    'tenhanhchinh'=>'Thành phố Thủ Dầu Một, Tỉnh Bình Dương',
    'code'=>718,
    'id_tinh_thanhpho'=>74
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>719,
    'ten'=>'Bàu Bàng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'bau-bang',
    'tendaydu'=>'Huyện Bàu Bàng',
    'tenthuong'=>'Bàu Bàng, Bình Dương',
    'tenhanhchinh'=>'Huyện Bàu Bàng, Tỉnh Bình Dương',
    'code'=>719,
    'id_tinh_thanhpho'=>74
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>720,
    'ten'=>'Dầu Tiếng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dau-tieng',
    'tendaydu'=>'Huyện Dầu Tiếng',
    'tenthuong'=>'Dầu Tiếng, Bình Dương',
    'tenhanhchinh'=>'Huyện Dầu Tiếng, Tỉnh Bình Dương',
    'code'=>720,
    'id_tinh_thanhpho'=>74
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>721,
    'ten'=>'Bến Cát',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'ben-cat',
    'tendaydu'=>'Thị xã Bến Cát',
    'tenthuong'=>'Bến Cát, Bình Dương',
    'tenhanhchinh'=>'Thị xã Bến Cát, Tỉnh Bình Dương',
    'code'=>721,
    'id_tinh_thanhpho'=>74
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>722,
    'ten'=>'Phú Giáo',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phu-giao',
    'tendaydu'=>'Huyện Phú Giáo',
    'tenthuong'=>'Phú Giáo, Bình Dương',
    'tenhanhchinh'=>'Huyện Phú Giáo, Tỉnh Bình Dương',
    'code'=>722,
    'id_tinh_thanhpho'=>74
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>723,
    'ten'=>'Tân Uyên',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'tan-uyen',
    'tendaydu'=>'Thị xã Tân Uyên',
    'tenthuong'=>'Tân Uyên, Bình Dương',
    'tenhanhchinh'=>'Thị xã Tân Uyên, Tỉnh Bình Dương',
    'code'=>723,
    'id_tinh_thanhpho'=>74
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>724,
    'ten'=>'Dĩ An',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'di-an',
    'tendaydu'=>'Thị xã Dĩ An',
    'tenthuong'=>'Dĩ An, Bình Dương',
    'tenhanhchinh'=>'Thị xã Dĩ An, Tỉnh Bình Dương',
    'code'=>724,
    'id_tinh_thanhpho'=>74
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>725,
    'ten'=>'Thuận An',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'thuan-an',
    'tendaydu'=>'Thị xã Thuận An',
    'tenthuong'=>'Thuận An, Bình Dương',
    'tenhanhchinh'=>'Thị xã Thuận An, Tỉnh Bình Dương',
    'code'=>725,
    'id_tinh_thanhpho'=>74
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>726,
    'ten'=>'Bắc Tân Uyên',
    'donvi'=>'huyen',
    'tenkhongdau'=>'bac-tan-uyen',
    'tendaydu'=>'Huyện Bắc Tân Uyên',
    'tenthuong'=>'Bắc Tân Uyên, Bình Dương',
    'tenhanhchinh'=>'Huyện Bắc Tân Uyên, Tỉnh Bình Dương',
    'code'=>726,
    'id_tinh_thanhpho'=>74
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>916,
    'ten'=>'Ninh Kiều',
    'donvi'=>'quan',
    'tenkhongdau'=>'ninh-kieu',
    'tendaydu'=>'Quận Ninh Kiều',
    'tenthuong'=>'Ninh Kiều, Cần Thơ',
    'tenhanhchinh'=>'Quận Ninh Kiều, Thành phố Cần Thơ',
    'code'=>916,
    'id_tinh_thanhpho'=>92
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>917,
    'ten'=>'Ô Môn',
    'donvi'=>'quan',
    'tenkhongdau'=>'o-mon',
    'tendaydu'=>'Quận Ô Môn',
    'tenthuong'=>'Ô Môn, Cần Thơ',
    'tenhanhchinh'=>'Quận Ô Môn, Thành phố Cần Thơ',
    'code'=>917,
    'id_tinh_thanhpho'=>92
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>918,
    'ten'=>'Bình Thuỷ',
    'donvi'=>'quan',
    'tenkhongdau'=>'binh-thuy',
    'tendaydu'=>'Quận Bình Thuỷ',
    'tenthuong'=>'Bình Thuỷ, Cần Thơ',
    'tenhanhchinh'=>'Quận Bình Thuỷ, Thành phố Cần Thơ',
    'code'=>918,
    'id_tinh_thanhpho'=>92
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>919,
    'ten'=>'Cái Răng',
    'donvi'=>'quan',
    'tenkhongdau'=>'cai-rang',
    'tendaydu'=>'Quận Cái Răng',
    'tenthuong'=>'Cái Răng, Cần Thơ',
    'tenhanhchinh'=>'Quận Cái Răng, Thành phố Cần Thơ',
    'code'=>919,
    'id_tinh_thanhpho'=>92
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>923,
    'ten'=>'Thốt Nốt',
    'donvi'=>'quan',
    'tenkhongdau'=>'thot-not',
    'tendaydu'=>'Quận Thốt Nốt',
    'tenthuong'=>'Thốt Nốt, Cần Thơ',
    'tenhanhchinh'=>'Quận Thốt Nốt, Thành phố Cần Thơ',
    'code'=>923,
    'id_tinh_thanhpho'=>92
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>924,
    'ten'=>'Vĩnh Thạnh',
    'donvi'=>'huyen',
    'tenkhongdau'=>'vinh-thanh',
    'tendaydu'=>'Huyện Vĩnh Thạnh',
    'tenthuong'=>'Vĩnh Thạnh, Cần Thơ',
    'tenhanhchinh'=>'Huyện Vĩnh Thạnh, Thành phố Cần Thơ',
    'code'=>924,
    'id_tinh_thanhpho'=>92
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>925,
    'ten'=>'Cờ Đỏ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'co-do',
    'tendaydu'=>'Huyện Cờ Đỏ',
    'tenthuong'=>'Cờ Đỏ, Cần Thơ',
    'tenhanhchinh'=>'Huyện Cờ Đỏ, Thành phố Cần Thơ',
    'code'=>925,
    'id_tinh_thanhpho'=>92
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>926,
    'ten'=>'Phong Điền',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phong-dien',
    'tendaydu'=>'Huyện Phong Điền',
    'tenthuong'=>'Phong Điền, Cần Thơ',
    'tenhanhchinh'=>'Huyện Phong Điền, Thành phố Cần Thơ',
    'code'=>926,
    'id_tinh_thanhpho'=>92
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>927,
    'ten'=>'Thới Lai',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thoi-lai',
    'tendaydu'=>'Huyện Thới Lai',
    'tenthuong'=>'Thới Lai, Cần Thơ',
    'tenhanhchinh'=>'Huyện Thới Lai, Thành phố Cần Thơ',
    'code'=>927,
    'id_tinh_thanhpho'=>92
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>474,
    'ten'=>'Huế',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'hue',
    'tendaydu'=>'Thành phố Huế',
    'tenthuong'=>'Huế, Thừa Thiên Huế',
    'tenhanhchinh'=>'Thành phố Huế, Tỉnh Thừa Thiên Huế',
    'code'=>474,
    'id_tinh_thanhpho'=>46
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>476,
    'ten'=>'Phong Điền',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phong-dien',
    'tendaydu'=>'Huyện Phong Điền',
    'tenthuong'=>'Phong Điền, Thừa Thiên Huế',
    'tenhanhchinh'=>'Huyện Phong Điền, Tỉnh Thừa Thiên Huế',
    'code'=>476,
    'id_tinh_thanhpho'=>46
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>477,
    'ten'=>'Quảng Điền',
    'donvi'=>'huyen',
    'tenkhongdau'=>'quang-dien',
    'tendaydu'=>'Huyện Quảng Điền',
    'tenthuong'=>'Quảng Điền, Thừa Thiên Huế',
    'tenhanhchinh'=>'Huyện Quảng Điền, Tỉnh Thừa Thiên Huế',
    'code'=>477,
    'id_tinh_thanhpho'=>46
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>478,
    'ten'=>'Phú Vang',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phu-vang',
    'tendaydu'=>'Huyện Phú Vang',
    'tenthuong'=>'Phú Vang, Thừa Thiên Huế',
    'tenhanhchinh'=>'Huyện Phú Vang, Tỉnh Thừa Thiên Huế',
    'code'=>478,
    'id_tinh_thanhpho'=>46
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>479,
    'ten'=>'Hương Thủy',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'huong-thuy',
    'tendaydu'=>'Thị xã Hương Thủy',
    'tenthuong'=>'Hương Thủy, Thừa Thiên Huế',
    'tenhanhchinh'=>'Thị xã Hương Thủy, Tỉnh Thừa Thiên Huế',
    'code'=>479,
    'id_tinh_thanhpho'=>46
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>480,
    'ten'=>'Hương Trà',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'huong-tra',
    'tendaydu'=>'Thị xã Hương Trà',
    'tenthuong'=>'Hương Trà, Thừa Thiên Huế',
    'tenhanhchinh'=>'Thị xã Hương Trà, Tỉnh Thừa Thiên Huế',
    'code'=>480,
    'id_tinh_thanhpho'=>46
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>481,
    'ten'=>'A Lưới',
    'donvi'=>'huyen',
    'tenkhongdau'=>'a-luoi',
    'tendaydu'=>'Huyện A Lưới',
    'tenthuong'=>'A Lưới, Thừa Thiên Huế',
    'tenhanhchinh'=>'Huyện A Lưới, Tỉnh Thừa Thiên Huế',
    'code'=>481,
    'id_tinh_thanhpho'=>46
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>482,
    'ten'=>'Phú Lộc',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phu-loc',
    'tendaydu'=>'Huyện Phú Lộc',
    'tenthuong'=>'Phú Lộc, Thừa Thiên Huế',
    'tenhanhchinh'=>'Huyện Phú Lộc, Tỉnh Thừa Thiên Huế',
    'code'=>482,
    'id_tinh_thanhpho'=>46
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>483,
    'ten'=>'Nam Đông',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nam-dong',
    'tendaydu'=>'Huyện Nam Đông',
    'tenthuong'=>'Nam Đông, Thừa Thiên Huế',
    'tenhanhchinh'=>'Huyện Nam Đông, Tỉnh Thừa Thiên Huế',
    'code'=>483,
    'id_tinh_thanhpho'=>46
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>731,
    'ten'=>'Biên Hòa',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'bien-hoa',
    'tendaydu'=>'Thành phố Biên Hòa',
    'tenthuong'=>'Biên Hòa, Đồng Nai',
    'tenhanhchinh'=>'Thành phố Biên Hòa, Tỉnh Đồng Nai',
    'code'=>731,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>732,
    'ten'=>'Long Khánh',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'long-khanh',
    'tendaydu'=>'Thị xã Long Khánh',
    'tenthuong'=>'Long Khánh, Đồng Nai',
    'tenhanhchinh'=>'Thị xã Long Khánh, Tỉnh Đồng Nai',
    'code'=>732,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>734,
    'ten'=>'Tân Phú',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tan-phu',
    'tendaydu'=>'Huyện Tân Phú',
    'tenthuong'=>'Tân Phú, Đồng Nai',
    'tenhanhchinh'=>'Huyện Tân Phú, Tỉnh Đồng Nai',
    'code'=>734,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>735,
    'ten'=>'Vĩnh Cửu',
    'donvi'=>'huyen',
    'tenkhongdau'=>'vinh-cuu',
    'tendaydu'=>'Huyện Vĩnh Cửu',
    'tenthuong'=>'Vĩnh Cửu, Đồng Nai',
    'tenhanhchinh'=>'Huyện Vĩnh Cửu, Tỉnh Đồng Nai',
    'code'=>735,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>736,
    'ten'=>'Định Quán',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dinh-quan',
    'tendaydu'=>'Huyện Định Quán',
    'tenthuong'=>'Định Quán, Đồng Nai',
    'tenhanhchinh'=>'Huyện Định Quán, Tỉnh Đồng Nai',
    'code'=>736,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>737,
    'ten'=>'Trảng Bom',
    'donvi'=>'huyen',
    'tenkhongdau'=>'trang-bom',
    'tendaydu'=>'Huyện Trảng Bom',
    'tenthuong'=>'Trảng Bom, Đồng Nai',
    'tenhanhchinh'=>'Huyện Trảng Bom, Tỉnh Đồng Nai',
    'code'=>737,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>738,
    'ten'=>'Thống Nhất',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thong-nhat',
    'tendaydu'=>'Huyện Thống Nhất',
    'tenthuong'=>'Thống Nhất, Đồng Nai',
    'tenhanhchinh'=>'Huyện Thống Nhất, Tỉnh Đồng Nai',
    'code'=>738,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>739,
    'ten'=>'Cẩm Mỹ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cam-my',
    'tendaydu'=>'Huyện Cẩm Mỹ',
    'tenthuong'=>'Cẩm Mỹ, Đồng Nai',
    'tenhanhchinh'=>'Huyện Cẩm Mỹ, Tỉnh Đồng Nai',
    'code'=>739,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>740,
    'ten'=>'Long Thành',
    'donvi'=>'huyen',
    'tenkhongdau'=>'long-thanh',
    'tendaydu'=>'Huyện Long Thành',
    'tenthuong'=>'Long Thành, Đồng Nai',
    'tenhanhchinh'=>'Huyện Long Thành, Tỉnh Đồng Nai',
    'code'=>740,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>741,
    'ten'=>'Xuân Lộc',
    'donvi'=>'huyen',
    'tenkhongdau'=>'xuan-loc',
    'tendaydu'=>'Huyện Xuân Lộc',
    'tenthuong'=>'Xuân Lộc, Đồng Nai',
    'tenhanhchinh'=>'Huyện Xuân Lộc, Tỉnh Đồng Nai',
    'code'=>741,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>742,
    'ten'=>'Nhơn Trạch',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nhon-trach',
    'tendaydu'=>'Huyện Nhơn Trạch',
    'tenthuong'=>'Nhơn Trạch, Đồng Nai',
    'tenhanhchinh'=>'Huyện Nhơn Trạch, Tỉnh Đồng Nai',
    'code'=>742,
    'id_tinh_thanhpho'=>75
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>815,
    'ten'=>'Mỹ Tho',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'my-tho',
    'tendaydu'=>'Thành phố Mỹ Tho',
    'tenthuong'=>'Mỹ Tho, Tiền Giang',
    'tenhanhchinh'=>'Thành phố Mỹ Tho, Tỉnh Tiền Giang',
    'code'=>815,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>816,
    'ten'=>'Gò Công',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'go-cong',
    'tendaydu'=>'Thị xã Gò Công',
    'tenthuong'=>'Gò Công, Tiền Giang',
    'tenhanhchinh'=>'Thị xã Gò Công, Tỉnh Tiền Giang',
    'code'=>816,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>817,
    'ten'=>'Cai Lậy',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'cai-lay',
    'tendaydu'=>'Thị xã Cai Lậy',
    'tenthuong'=>'Cai Lậy, Tiền Giang',
    'tenhanhchinh'=>'Thị xã Cai Lậy, Tỉnh Tiền Giang',
    'code'=>817,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>818,
    'ten'=>'Tân Phước',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tan-phuoc',
    'tendaydu'=>'Huyện Tân Phước',
    'tenthuong'=>'Tân Phước, Tiền Giang',
    'tenhanhchinh'=>'Huyện Tân Phước, Tỉnh Tiền Giang',
    'code'=>818,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>819,
    'ten'=>'Cái Bè',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cai-be',
    'tendaydu'=>'Huyện Cái Bè',
    'tenthuong'=>'Cái Bè, Tiền Giang',
    'tenhanhchinh'=>'Huyện Cái Bè, Tỉnh Tiền Giang',
    'code'=>819,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>820,
    'ten'=>'Cai Lậy',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cai-lay',
    'tendaydu'=>'Huyện Cai Lậy',
    'tenthuong'=>'Cai Lậy, Tiền Giang',
    'tenhanhchinh'=>'Huyện Cai Lậy, Tỉnh Tiền Giang',
    'code'=>820,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>821,
    'ten'=>'Châu Thành',
    'donvi'=>'huyen',
    'tenkhongdau'=>'chau-thanh',
    'tendaydu'=>'Huyện Châu Thành',
    'tenthuong'=>'Châu Thành, Tiền Giang',
    'tenhanhchinh'=>'Huyện Châu Thành, Tỉnh Tiền Giang',
    'code'=>821,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>822,
    'ten'=>'Chợ Gạo',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cho-gao',
    'tendaydu'=>'Huyện Chợ Gạo',
    'tenthuong'=>'Chợ Gạo, Tiền Giang',
    'tenhanhchinh'=>'Huyện Chợ Gạo, Tỉnh Tiền Giang',
    'code'=>822,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>823,
    'ten'=>'Gò Công Tây',
    'donvi'=>'huyen',
    'tenkhongdau'=>'go-cong-tay',
    'tendaydu'=>'Huyện Gò Công Tây',
    'tenthuong'=>'Gò Công Tây, Tiền Giang',
    'tenhanhchinh'=>'Huyện Gò Công Tây, Tỉnh Tiền Giang',
    'code'=>823,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>824,
    'ten'=>'Gò Công Đông',
    'donvi'=>'huyen',
    'tenkhongdau'=>'go-cong-dong',
    'tendaydu'=>'Huyện Gò Công Đông',
    'tenthuong'=>'Gò Công Đông, Tiền Giang',
    'tenhanhchinh'=>'Huyện Gò Công Đông, Tỉnh Tiền Giang',
    'code'=>824,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>825,
    'ten'=>'Tân Phú Đông',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tan-phu-dong',
    'tendaydu'=>'Huyện Tân Phú Đông',
    'tenthuong'=>'Tân Phú Đông, Tiền Giang',
    'tenhanhchinh'=>'Huyện Tân Phú Đông, Tỉnh Tiền Giang',
    'code'=>825,
    'id_tinh_thanhpho'=>82
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>94,
    'ten'=>'Điện Biên Phủ',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'dien-bien-phu',
    'tendaydu'=>'Thành phố Điện Biên Phủ',
    'tenthuong'=>'Điện Biên Phủ, Điện Biên',
    'tenhanhchinh'=>'Thành phố Điện Biên Phủ, Tỉnh Điện Biên',
    'code'=>94,
    'id_tinh_thanhpho'=>11
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>95,
    'ten'=>'Mường Lay',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'muong-lay',
    'tendaydu'=>'Thị xã Mường Lay',
    'tenthuong'=>'Mường Lay, Điện Biên',
    'tenhanhchinh'=>'Thị xã Mường Lay, Tỉnh Điện Biên',
    'code'=>95,
    'id_tinh_thanhpho'=>11
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>96,
    'ten'=>'Mường Nhé',
    'donvi'=>'huyen',
    'tenkhongdau'=>'muong-nhe',
    'tendaydu'=>'Huyện Mường Nhé',
    'tenthuong'=>'Mường Nhé, Điện Biên',
    'tenhanhchinh'=>'Huyện Mường Nhé, Tỉnh Điện Biên',
    'code'=>96,
    'id_tinh_thanhpho'=>11
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>97,
    'ten'=>'Mường Chà',
    'donvi'=>'huyen',
    'tenkhongdau'=>'muong-cha',
    'tendaydu'=>'Huyện Mường Chà',
    'tenthuong'=>'Mường Chà, Điện Biên',
    'tenhanhchinh'=>'Huyện Mường Chà, Tỉnh Điện Biên',
    'code'=>97,
    'id_tinh_thanhpho'=>11
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>98,
    'ten'=>'Tủa Chùa',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tua-chua',
    'tendaydu'=>'Huyện Tủa Chùa',
    'tenthuong'=>'Tủa Chùa, Điện Biên',
    'tenhanhchinh'=>'Huyện Tủa Chùa, Tỉnh Điện Biên',
    'code'=>98,
    'id_tinh_thanhpho'=>11
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>99,
    'ten'=>'Tuần Giáo',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tuan-giao',
    'tendaydu'=>'Huyện Tuần Giáo',
    'tenthuong'=>'Tuần Giáo, Điện Biên',
    'tenhanhchinh'=>'Huyện Tuần Giáo, Tỉnh Điện Biên',
    'code'=>99,
    'id_tinh_thanhpho'=>11
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>100,
    'ten'=>'Điện Biên',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dien-bien',
    'tendaydu'=>'Huyện Điện Biên',
    'tenthuong'=>'Điện Biên, Điện Biên',
    'tenhanhchinh'=>'Huyện Điện Biên, Tỉnh Điện Biên',
    'code'=>100,
    'id_tinh_thanhpho'=>11
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>101,
    'ten'=>'Điện Biên Đông',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dien-bien-dong',
    'tendaydu'=>'Huyện Điện Biên Đông',
    'tenthuong'=>'Điện Biên Đông, Điện Biên',
    'tenhanhchinh'=>'Huyện Điện Biên Đông, Tỉnh Điện Biên',
    'code'=>101,
    'id_tinh_thanhpho'=>11
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>102,
    'ten'=>'Mường Ảng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'muong-ang',
    'tendaydu'=>'Huyện Mường Ảng',
    'tenthuong'=>'Mường Ảng, Điện Biên',
    'tenhanhchinh'=>'Huyện Mường Ảng, Tỉnh Điện Biên',
    'code'=>102,
    'id_tinh_thanhpho'=>11
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>103,
    'ten'=>'Nậm Pồ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nam-po',
    'tendaydu'=>'Huyện Nậm Pồ',
    'tenthuong'=>'Nậm Pồ, Điện Biên',
    'tenhanhchinh'=>'Huyện Nậm Pồ, Tỉnh Điện Biên',
    'code'=>103,
    'id_tinh_thanhpho'=>11
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>243,
    'ten'=>'Vĩnh Yên',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'vinh-yen',
    'tendaydu'=>'Thành phố Vĩnh Yên',
    'tenthuong'=>'Vĩnh Yên, Vĩnh Phúc',
    'tenhanhchinh'=>'Thành phố Vĩnh Yên, Tỉnh Vĩnh Phúc',
    'code'=>243,
    'id_tinh_thanhpho'=>26
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>244,
    'ten'=>'Phúc Yên',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'phuc-yen',
    'tendaydu'=>'Thị xã Phúc Yên',
    'tenthuong'=>'Phúc Yên, Vĩnh Phúc',
    'tenhanhchinh'=>'Thị xã Phúc Yên, Tỉnh Vĩnh Phúc',
    'code'=>244,
    'id_tinh_thanhpho'=>26
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>246,
    'ten'=>'Lập Thạch',
    'donvi'=>'huyen',
    'tenkhongdau'=>'lap-thach',
    'tendaydu'=>'Huyện Lập Thạch',
    'tenthuong'=>'Lập Thạch, Vĩnh Phúc',
    'tenhanhchinh'=>'Huyện Lập Thạch, Tỉnh Vĩnh Phúc',
    'code'=>246,
    'id_tinh_thanhpho'=>26
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>247,
    'ten'=>'Tam Dương',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tam-duong',
    'tendaydu'=>'Huyện Tam Dương',
    'tenthuong'=>'Tam Dương, Vĩnh Phúc',
    'tenhanhchinh'=>'Huyện Tam Dương, Tỉnh Vĩnh Phúc',
    'code'=>247,
    'id_tinh_thanhpho'=>26
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>248,
    'ten'=>'Tam Đảo',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tam-dao',
    'tendaydu'=>'Huyện Tam Đảo',
    'tenthuong'=>'Tam Đảo, Vĩnh Phúc',
    'tenhanhchinh'=>'Huyện Tam Đảo, Tỉnh Vĩnh Phúc',
    'code'=>248,
    'id_tinh_thanhpho'=>26
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>249,
    'ten'=>'Bình Xuyên',
    'donvi'=>'huyen',
    'tenkhongdau'=>'binh-xuyen',
    'tendaydu'=>'Huyện Bình Xuyên',
    'tenthuong'=>'Bình Xuyên, Vĩnh Phúc',
    'tenhanhchinh'=>'Huyện Bình Xuyên, Tỉnh Vĩnh Phúc',
    'code'=>249,
    'id_tinh_thanhpho'=>26
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>251,
    'ten'=>'Yên Lạc',
    'donvi'=>'huyen',
    'tenkhongdau'=>'yen-lac',
    'tendaydu'=>'Huyện Yên Lạc',
    'tenthuong'=>'Yên Lạc, Vĩnh Phúc',
    'tenhanhchinh'=>'Huyện Yên Lạc, Tỉnh Vĩnh Phúc',
    'code'=>251,
    'id_tinh_thanhpho'=>26
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>252,
    'ten'=>'Vĩnh Tường',
    'donvi'=>'huyen',
    'tenkhongdau'=>'vinh-tuong',
    'tendaydu'=>'Huyện Vĩnh Tường',
    'tenthuong'=>'Vĩnh Tường, Vĩnh Phúc',
    'tenhanhchinh'=>'Huyện Vĩnh Tường, Tỉnh Vĩnh Phúc',
    'code'=>252,
    'id_tinh_thanhpho'=>26
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>253,
    'ten'=>'Sông Lô',
    'donvi'=>'huyen',
    'tenkhongdau'=>'song-lo',
    'tendaydu'=>'Huyện Sông Lô',
    'tenthuong'=>'Sông Lô, Vĩnh Phúc',
    'tenhanhchinh'=>'Huyện Sông Lô, Tỉnh Vĩnh Phúc',
    'code'=>253,
    'id_tinh_thanhpho'=>26
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>502,
    'ten'=>'Tam Kỳ',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'tam-ky',
    'tendaydu'=>'Thành phố Tam Kỳ',
    'tenthuong'=>'Tam Kỳ, Quảng Nam',
    'tenhanhchinh'=>'Thành phố Tam Kỳ, Tỉnh Quảng Nam',
    'code'=>502,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>503,
    'ten'=>'Hội An',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'hoi-an',
    'tendaydu'=>'Thành phố Hội An',
    'tenthuong'=>'Hội An, Quảng Nam',
    'tenhanhchinh'=>'Thành phố Hội An, Tỉnh Quảng Nam',
    'code'=>503,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>504,
    'ten'=>'Tây Giang',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tay-giang',
    'tendaydu'=>'Huyện Tây Giang',
    'tenthuong'=>'Tây Giang, Quảng Nam',
    'tenhanhchinh'=>'Huyện Tây Giang, Tỉnh Quảng Nam',
    'code'=>504,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>505,
    'ten'=>'Đông Giang',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dong-giang',
    'tendaydu'=>'Huyện Đông Giang',
    'tenthuong'=>'Đông Giang, Quảng Nam',
    'tenhanhchinh'=>'Huyện Đông Giang, Tỉnh Quảng Nam',
    'code'=>505,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>506,
    'ten'=>'Đại Lộc',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dai-loc',
    'tendaydu'=>'Huyện Đại Lộc',
    'tenthuong'=>'Đại Lộc, Quảng Nam',
    'tenhanhchinh'=>'Huyện Đại Lộc, Tỉnh Quảng Nam',
    'code'=>506,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>507,
    'ten'=>'Điện Bàn',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'dien-ban',
    'tendaydu'=>'Thị xã Điện Bàn',
    'tenthuong'=>'Điện Bàn, Quảng Nam',
    'tenhanhchinh'=>'Thị xã Điện Bàn, Tỉnh Quảng Nam',
    'code'=>507,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>508,
    'ten'=>'Duy Xuyên',
    'donvi'=>'huyen',
    'tenkhongdau'=>'duy-xuyen',
    'tendaydu'=>'Huyện Duy Xuyên',
    'tenthuong'=>'Duy Xuyên, Quảng Nam',
    'tenhanhchinh'=>'Huyện Duy Xuyên, Tỉnh Quảng Nam',
    'code'=>508,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>509,
    'ten'=>'Quế Sơn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'que-son',
    'tendaydu'=>'Huyện Quế Sơn',
    'tenthuong'=>'Quế Sơn, Quảng Nam',
    'tenhanhchinh'=>'Huyện Quế Sơn, Tỉnh Quảng Nam',
    'code'=>509,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>510,
    'ten'=>'Nam Giang',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nam-giang',
    'tendaydu'=>'Huyện Nam Giang',
    'tenthuong'=>'Nam Giang, Quảng Nam',
    'tenhanhchinh'=>'Huyện Nam Giang, Tỉnh Quảng Nam',
    'code'=>510,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>511,
    'ten'=>'Phước Sơn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phuoc-son',
    'tendaydu'=>'Huyện Phước Sơn',
    'tenthuong'=>'Phước Sơn, Quảng Nam',
    'tenhanhchinh'=>'Huyện Phước Sơn, Tỉnh Quảng Nam',
    'code'=>511,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>512,
    'ten'=>'Hiệp Đức',
    'donvi'=>'huyen',
    'tenkhongdau'=>'hiep-duc',
    'tendaydu'=>'Huyện Hiệp Đức',
    'tenthuong'=>'Hiệp Đức, Quảng Nam',
    'tenhanhchinh'=>'Huyện Hiệp Đức, Tỉnh Quảng Nam',
    'code'=>512,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>513,
    'ten'=>'Thăng Bình',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thang-binh',
    'tendaydu'=>'Huyện Thăng Bình',
    'tenthuong'=>'Thăng Bình, Quảng Nam',
    'tenhanhchinh'=>'Huyện Thăng Bình, Tỉnh Quảng Nam',
    'code'=>513,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>514,
    'ten'=>'Tiên Phước',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tien-phuoc',
    'tendaydu'=>'Huyện Tiên Phước',
    'tenthuong'=>'Tiên Phước, Quảng Nam',
    'tenhanhchinh'=>'Huyện Tiên Phước, Tỉnh Quảng Nam',
    'code'=>514,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>515,
    'ten'=>'Bắc Trà My',
    'donvi'=>'huyen',
    'tenkhongdau'=>'bac-tra-my',
    'tendaydu'=>'Huyện Bắc Trà My',
    'tenthuong'=>'Bắc Trà My, Quảng Nam',
    'tenhanhchinh'=>'Huyện Bắc Trà My, Tỉnh Quảng Nam',
    'code'=>515,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>516,
    'ten'=>'Nam Trà My',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nam-tra-my',
    'tendaydu'=>'Huyện Nam Trà My',
    'tenthuong'=>'Nam Trà My, Quảng Nam',
    'tenhanhchinh'=>'Huyện Nam Trà My, Tỉnh Quảng Nam',
    'code'=>516,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>517,
    'ten'=>'Núi Thành',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nui-thanh',
    'tendaydu'=>'Huyện Núi Thành',
    'tenthuong'=>'Núi Thành, Quảng Nam',
    'tenhanhchinh'=>'Huyện Núi Thành, Tỉnh Quảng Nam',
    'code'=>517,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>518,
    'ten'=>'Phú Ninh',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phu-ninh',
    'tendaydu'=>'Huyện Phú Ninh',
    'tenthuong'=>'Phú Ninh, Quảng Nam',
    'tenhanhchinh'=>'Huyện Phú Ninh, Tỉnh Quảng Nam',
    'code'=>518,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>519,
    'ten'=>'Nông Sơn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nong-son',
    'tendaydu'=>'Huyện Nông Sơn',
    'tenthuong'=>'Nông Sơn, Quảng Nam',
    'tenhanhchinh'=>'Huyện Nông Sơn, Tỉnh Quảng Nam',
    'code'=>519,
    'id_tinh_thanhpho'=>49
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>643,
    'ten'=>'Buôn Ma Thuột',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'buon-ma-thuot',
    'tendaydu'=>'Thành phố Buôn Ma Thuột',
    'tenthuong'=>'Buôn Ma Thuột, Đắk Lắk',
    'tenhanhchinh'=>'Thành phố Buôn Ma Thuột, Tỉnh Đắk Lắk',
    'code'=>643,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>644,
    'ten'=>'Buôn Hồ',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'buon-ho',
    'tendaydu'=>'Thị xã Buôn Hồ',
    'tenthuong'=>'Buôn Hồ, Đắk Lắk',
    'tenhanhchinh'=>'Thị xã Buôn Hồ, Tỉnh Đắk Lắk',
    'code'=>644,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>645,
    'ten'=>'Ea H\'leo',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ea-h-leo',
    'tendaydu'=>'Huyện Ea H\'leo',
    'tenthuong'=>'Ea H\'leo, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Ea H\'leo, Tỉnh Đắk Lắk',
    'code'=>645,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>646,
    'ten'=>'Ea Súp',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ea-sup',
    'tendaydu'=>'Huyện Ea Súp',
    'tenthuong'=>'Ea Súp, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Ea Súp, Tỉnh Đắk Lắk',
    'code'=>646,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>647,
    'ten'=>'Buôn Đôn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'buon-don',
    'tendaydu'=>'Huyện Buôn Đôn',
    'tenthuong'=>'Buôn Đôn, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Buôn Đôn, Tỉnh Đắk Lắk',
    'code'=>647,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>648,
    'ten'=>'Cư M\'gar',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cu-m-gar',
    'tendaydu'=>'Huyện Cư M\'gar',
    'tenthuong'=>'Cư M\'gar, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Cư M\'gar, Tỉnh Đắk Lắk',
    'code'=>648,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>649,
    'ten'=>'Krông Búk',
    'donvi'=>'huyen',
    'tenkhongdau'=>'krong-buk',
    'tendaydu'=>'Huyện Krông Búk',
    'tenthuong'=>'Krông Búk, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Krông Búk, Tỉnh Đắk Lắk',
    'code'=>649,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>650,
    'ten'=>'Krông Năng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'krong-nang',
    'tendaydu'=>'Huyện Krông Năng',
    'tenthuong'=>'Krông Năng, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Krông Năng, Tỉnh Đắk Lắk',
    'code'=>650,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>651,
    'ten'=>'Ea Kar',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ea-kar',
    'tendaydu'=>'Huyện Ea Kar',
    'tenthuong'=>'Ea Kar, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Ea Kar, Tỉnh Đắk Lắk',
    'code'=>651,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>652,
    'ten'=>'M\'Đrắk',
    'donvi'=>'huyen',
    'tenkhongdau'=>'m-drak',
    'tendaydu'=>'Huyện M\'Đrắk',
    'tenthuong'=>'M\'Đrắk, Đắk Lắk',
    'tenhanhchinh'=>'Huyện M\'Đrắk, Tỉnh Đắk Lắk',
    'code'=>652,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>653,
    'ten'=>'Krông Bông',
    'donvi'=>'huyen',
    'tenkhongdau'=>'krong-bong',
    'tendaydu'=>'Huyện Krông Bông',
    'tenthuong'=>'Krông Bông, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Krông Bông, Tỉnh Đắk Lắk',
    'code'=>653,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>654,
    'ten'=>'Krông Pắc',
    'donvi'=>'huyen',
    'tenkhongdau'=>'krong-pac',
    'tendaydu'=>'Huyện Krông Pắc',
    'tenthuong'=>'Krông Pắc, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Krông Pắc, Tỉnh Đắk Lắk',
    'code'=>654,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>655,
    'ten'=>'Krông A Na',
    'donvi'=>'huyen',
    'tenkhongdau'=>'krong-a-na',
    'tendaydu'=>'Huyện Krông A Na',
    'tenthuong'=>'Krông A Na, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Krông A Na, Tỉnh Đắk Lắk',
    'code'=>655,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>656,
    'ten'=>'Lắk',
    'donvi'=>'huyen',
    'tenkhongdau'=>'lak',
    'tendaydu'=>'Huyện Lắk',
    'tenthuong'=>'Lắk, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Lắk, Tỉnh Đắk Lắk',
    'code'=>656,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>657,
    'ten'=>'Cư Kuin',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cu-kuin',
    'tendaydu'=>'Huyện Cư Kuin',
    'tenthuong'=>'Cư Kuin, Đắk Lắk',
    'tenhanhchinh'=>'Huyện Cư Kuin, Tỉnh Đắk Lắk',
    'code'=>657,
    'id_tinh_thanhpho'=>66
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>164,
    'ten'=>'Thái Nguyên',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'thai-nguyen',
    'tendaydu'=>'Thành phố Thái Nguyên',
    'tenthuong'=>'Thái Nguyên, Thái Nguyên',
    'tenhanhchinh'=>'Thành phố Thái Nguyên, Tỉnh Thái Nguyên',
    'code'=>164,
    'id_tinh_thanhpho'=>19
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>165,
    'ten'=>'Sông Công',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'song-cong',
    'tendaydu'=>'Thành phố Sông Công',
    'tenthuong'=>'Sông Công, Thái Nguyên',
    'tenhanhchinh'=>'Thành phố Sông Công, Tỉnh Thái Nguyên',
    'code'=>165,
    'id_tinh_thanhpho'=>19
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>167,
    'ten'=>'Định Hóa',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dinh-hoa',
    'tendaydu'=>'Huyện Định Hóa',
    'tenthuong'=>'Định Hóa, Thái Nguyên',
    'tenhanhchinh'=>'Huyện Định Hóa, Tỉnh Thái Nguyên',
    'code'=>167,
    'id_tinh_thanhpho'=>19
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>168,
    'ten'=>'Phú Lương',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phu-luong',
    'tendaydu'=>'Huyện Phú Lương',
    'tenthuong'=>'Phú Lương, Thái Nguyên',
    'tenhanhchinh'=>'Huyện Phú Lương, Tỉnh Thái Nguyên',
    'code'=>168,
    'id_tinh_thanhpho'=>19
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>169,
    'ten'=>'Đồng Hỷ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dong-hy',
    'tendaydu'=>'Huyện Đồng Hỷ',
    'tenthuong'=>'Đồng Hỷ, Thái Nguyên',
    'tenhanhchinh'=>'Huyện Đồng Hỷ, Tỉnh Thái Nguyên',
    'code'=>169,
    'id_tinh_thanhpho'=>19
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>170,
    'ten'=>'Võ Nhai',
    'donvi'=>'huyen',
    'tenkhongdau'=>'vo-nhai',
    'tendaydu'=>'Huyện Võ Nhai',
    'tenthuong'=>'Võ Nhai, Thái Nguyên',
    'tenhanhchinh'=>'Huyện Võ Nhai, Tỉnh Thái Nguyên',
    'code'=>170,
    'id_tinh_thanhpho'=>19
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>171,
    'ten'=>'Đại Từ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dai-tu',
    'tendaydu'=>'Huyện Đại Từ',
    'tenthuong'=>'Đại Từ, Thái Nguyên',
    'tenhanhchinh'=>'Huyện Đại Từ, Tỉnh Thái Nguyên',
    'code'=>171,
    'id_tinh_thanhpho'=>19
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>172,
    'ten'=>'Phổ Yên',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'pho-yen',
    'tendaydu'=>'Thị xã Phổ Yên',
    'tenthuong'=>'Phổ Yên, Thái Nguyên',
    'tenhanhchinh'=>'Thị xã Phổ Yên, Tỉnh Thái Nguyên',
    'code'=>172,
    'id_tinh_thanhpho'=>19
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>173,
    'ten'=>'Phú Bình',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phu-binh',
    'tendaydu'=>'Huyện Phú Bình',
    'tenthuong'=>'Phú Bình, Thái Nguyên',
    'tenhanhchinh'=>'Huyện Phú Bình, Tỉnh Thái Nguyên',
    'code'=>173,
    'id_tinh_thanhpho'=>19
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>288,
    'ten'=>'Hải Dương',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'hai-duong',
    'tendaydu'=>'Thành phố Hải Dương',
    'tenthuong'=>'Hải Dương, Hải Dương',
    'tenhanhchinh'=>'Thành phố Hải Dương, Tỉnh Hải Dương',
    'code'=>288,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>290,
    'ten'=>'Chí Linh',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'chi-linh',
    'tendaydu'=>'Thị xã Chí Linh',
    'tenthuong'=>'Chí Linh, Hải Dương',
    'tenhanhchinh'=>'Thị xã Chí Linh, Tỉnh Hải Dương',
    'code'=>290,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>291,
    'ten'=>'Nam Sách',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nam-sach',
    'tendaydu'=>'Huyện Nam Sách',
    'tenthuong'=>'Nam Sách, Hải Dương',
    'tenhanhchinh'=>'Huyện Nam Sách, Tỉnh Hải Dương',
    'code'=>291,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>292,
    'ten'=>'Kinh Môn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'kinh-mon',
    'tendaydu'=>'Huyện Kinh Môn',
    'tenthuong'=>'Kinh Môn, Hải Dương',
    'tenhanhchinh'=>'Huyện Kinh Môn, Tỉnh Hải Dương',
    'code'=>292,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>293,
    'ten'=>'Kim Thành',
    'donvi'=>'huyen',
    'tenkhongdau'=>'kim-thanh',
    'tendaydu'=>'Huyện Kim Thành',
    'tenthuong'=>'Kim Thành, Hải Dương',
    'tenhanhchinh'=>'Huyện Kim Thành, Tỉnh Hải Dương',
    'code'=>293,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>294,
    'ten'=>'Thanh Hà',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thanh-ha',
    'tendaydu'=>'Huyện Thanh Hà',
    'tenthuong'=>'Thanh Hà, Hải Dương',
    'tenhanhchinh'=>'Huyện Thanh Hà, Tỉnh Hải Dương',
    'code'=>294,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>295,
    'ten'=>'Cẩm Giàng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cam-giang',
    'tendaydu'=>'Huyện Cẩm Giàng',
    'tenthuong'=>'Cẩm Giàng, Hải Dương',
    'tenhanhchinh'=>'Huyện Cẩm Giàng, Tỉnh Hải Dương',
    'code'=>295,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>296,
    'ten'=>'Bình Giang',
    'donvi'=>'huyen',
    'tenkhongdau'=>'binh-giang',
    'tendaydu'=>'Huyện Bình Giang',
    'tenthuong'=>'Bình Giang, Hải Dương',
    'tenhanhchinh'=>'Huyện Bình Giang, Tỉnh Hải Dương',
    'code'=>296,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>297,
    'ten'=>'Gia Lộc',
    'donvi'=>'huyen',
    'tenkhongdau'=>'gia-loc',
    'tendaydu'=>'Huyện Gia Lộc',
    'tenthuong'=>'Gia Lộc, Hải Dương',
    'tenhanhchinh'=>'Huyện Gia Lộc, Tỉnh Hải Dương',
    'code'=>297,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>298,
    'ten'=>'Tứ Kỳ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tu-ky',
    'tendaydu'=>'Huyện Tứ Kỳ',
    'tenthuong'=>'Tứ Kỳ, Hải Dương',
    'tenhanhchinh'=>'Huyện Tứ Kỳ, Tỉnh Hải Dương',
    'code'=>298,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>299,
    'ten'=>'Ninh Giang',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ninh-giang',
    'tendaydu'=>'Huyện Ninh Giang',
    'tenthuong'=>'Ninh Giang, Hải Dương',
    'tenhanhchinh'=>'Huyện Ninh Giang, Tỉnh Hải Dương',
    'code'=>299,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>300,
    'ten'=>'Thanh Miện',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thanh-mien',
    'tendaydu'=>'Huyện Thanh Miện',
    'tenthuong'=>'Thanh Miện, Hải Dương',
    'tenhanhchinh'=>'Huyện Thanh Miện, Tỉnh Hải Dương',
    'code'=>300,
    'id_tinh_thanhpho'=>30
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>954,
    'ten'=>'Bạc Liêu',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'bac-lieu',
    'tendaydu'=>'Thành phố Bạc Liêu',
    'tenthuong'=>'Bạc Liêu, Bạc Liêu',
    'tenhanhchinh'=>'Thành phố Bạc Liêu, Tỉnh Bạc Liêu',
    'code'=>954,
    'id_tinh_thanhpho'=>95
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>956,
    'ten'=>'Hồng Dân',
    'donvi'=>'huyen',
    'tenkhongdau'=>'hong-dan',
    'tendaydu'=>'Huyện Hồng Dân',
    'tenthuong'=>'Hồng Dân, Bạc Liêu',
    'tenhanhchinh'=>'Huyện Hồng Dân, Tỉnh Bạc Liêu',
    'code'=>956,
    'id_tinh_thanhpho'=>95
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>957,
    'ten'=>'Phước Long',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phuoc-long',
    'tendaydu'=>'Huyện Phước Long',
    'tenthuong'=>'Phước Long, Bạc Liêu',
    'tenhanhchinh'=>'Huyện Phước Long, Tỉnh Bạc Liêu',
    'code'=>957,
    'id_tinh_thanhpho'=>95
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>958,
    'ten'=>'Vĩnh Lợi',
    'donvi'=>'huyen',
    'tenkhongdau'=>'vinh-loi',
    'tendaydu'=>'Huyện Vĩnh Lợi',
    'tenthuong'=>'Vĩnh Lợi, Bạc Liêu',
    'tenhanhchinh'=>'Huyện Vĩnh Lợi, Tỉnh Bạc Liêu',
    'code'=>958,
    'id_tinh_thanhpho'=>95
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>959,
    'ten'=>'Giá Rai',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'gia-rai',
    'tendaydu'=>'Thị xã Giá Rai',
    'tenthuong'=>'Giá Rai, Bạc Liêu',
    'tenhanhchinh'=>'Thị xã Giá Rai, Tỉnh Bạc Liêu',
    'code'=>959,
    'id_tinh_thanhpho'=>95
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>960,
    'ten'=>'Đông Hải',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dong-hai',
    'tendaydu'=>'Huyện Đông Hải',
    'tenthuong'=>'Đông Hải, Bạc Liêu',
    'tenhanhchinh'=>'Huyện Đông Hải, Tỉnh Bạc Liêu',
    'code'=>960,
    'id_tinh_thanhpho'=>95
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>961,
    'ten'=>'Hoà Bình',
    'donvi'=>'huyen',
    'tenkhongdau'=>'hoa-binh',
    'tendaydu'=>'Huyện Hoà Bình',
    'tenthuong'=>'Hoà Bình, Bạc Liêu',
    'tenhanhchinh'=>'Huyện Hoà Bình, Tỉnh Bạc Liêu',
    'code'=>961,
    'id_tinh_thanhpho'=>95
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>842,
    'ten'=>'Trà Vinh',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'tra-vinh',
    'tendaydu'=>'Thành phố Trà Vinh',
    'tenthuong'=>'Trà Vinh, Trà Vinh',
    'tenhanhchinh'=>'Thành phố Trà Vinh, Tỉnh Trà Vinh',
    'code'=>842,
    'id_tinh_thanhpho'=>84
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>844,
    'ten'=>'Càng Long',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cang-long',
    'tendaydu'=>'Huyện Càng Long',
    'tenthuong'=>'Càng Long, Trà Vinh',
    'tenhanhchinh'=>'Huyện Càng Long, Tỉnh Trà Vinh',
    'code'=>844,
    'id_tinh_thanhpho'=>84
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>845,
    'ten'=>'Cầu Kè',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cau-ke',
    'tendaydu'=>'Huyện Cầu Kè',
    'tenthuong'=>'Cầu Kè, Trà Vinh',
    'tenhanhchinh'=>'Huyện Cầu Kè, Tỉnh Trà Vinh',
    'code'=>845,
    'id_tinh_thanhpho'=>84
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>846,
    'ten'=>'Tiểu Cần',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tieu-can',
    'tendaydu'=>'Huyện Tiểu Cần',
    'tenthuong'=>'Tiểu Cần, Trà Vinh',
    'tenhanhchinh'=>'Huyện Tiểu Cần, Tỉnh Trà Vinh',
    'code'=>846,
    'id_tinh_thanhpho'=>84
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>847,
    'ten'=>'Châu Thành',
    'donvi'=>'huyen',
    'tenkhongdau'=>'chau-thanh',
    'tendaydu'=>'Huyện Châu Thành',
    'tenthuong'=>'Châu Thành, Trà Vinh',
    'tenhanhchinh'=>'Huyện Châu Thành, Tỉnh Trà Vinh',
    'code'=>847,
    'id_tinh_thanhpho'=>84
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>848,
    'ten'=>'Cầu Ngang',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cau-ngang',
    'tendaydu'=>'Huyện Cầu Ngang',
    'tenthuong'=>'Cầu Ngang, Trà Vinh',
    'tenhanhchinh'=>'Huyện Cầu Ngang, Tỉnh Trà Vinh',
    'code'=>848,
    'id_tinh_thanhpho'=>84
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>849,
    'ten'=>'Trà Cú',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tra-cu',
    'tendaydu'=>'Huyện Trà Cú',
    'tenthuong'=>'Trà Cú, Trà Vinh',
    'tenhanhchinh'=>'Huyện Trà Cú, Tỉnh Trà Vinh',
    'code'=>849,
    'id_tinh_thanhpho'=>84
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>850,
    'ten'=>'Duyên Hải',
    'donvi'=>'huyen',
    'tenkhongdau'=>'duyen-hai',
    'tendaydu'=>'Huyện Duyên Hải',
    'tenthuong'=>'Duyên Hải, Trà Vinh',
    'tenhanhchinh'=>'Huyện Duyên Hải, Tỉnh Trà Vinh',
    'code'=>850,
    'id_tinh_thanhpho'=>84
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>851,
    'ten'=>'Duyên Hải',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'duyen-hai',
    'tendaydu'=>'Thị xã Duyên Hải',
    'tenthuong'=>'Duyên Hải, Trà Vinh',
    'tenhanhchinh'=>'Thị xã Duyên Hải, Tỉnh Trà Vinh',
    'code'=>851,
    'id_tinh_thanhpho'=>84
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>336,
    'ten'=>'Thái Bình',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'thai-binh',
    'tendaydu'=>'Thành phố Thái Bình',
    'tenthuong'=>'Thái Bình, Thái Bình',
    'tenhanhchinh'=>'Thành phố Thái Bình, Tỉnh Thái Bình',
    'code'=>336,
    'id_tinh_thanhpho'=>34
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>338,
    'ten'=>'Quỳnh Phụ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'quynh-phu',
    'tendaydu'=>'Huyện Quỳnh Phụ',
    'tenthuong'=>'Quỳnh Phụ, Thái Bình',
    'tenhanhchinh'=>'Huyện Quỳnh Phụ, Tỉnh Thái Bình',
    'code'=>338,
    'id_tinh_thanhpho'=>34
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>339,
    'ten'=>'Hưng Hà',
    'donvi'=>'huyen',
    'tenkhongdau'=>'hung-ha',
    'tendaydu'=>'Huyện Hưng Hà',
    'tenthuong'=>'Hưng Hà, Thái Bình',
    'tenhanhchinh'=>'Huyện Hưng Hà, Tỉnh Thái Bình',
    'code'=>339,
    'id_tinh_thanhpho'=>34
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>340,
    'ten'=>'Đông Hưng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dong-hung',
    'tendaydu'=>'Huyện Đông Hưng',
    'tenthuong'=>'Đông Hưng, Thái Bình',
    'tenhanhchinh'=>'Huyện Đông Hưng, Tỉnh Thái Bình',
    'code'=>340,
    'id_tinh_thanhpho'=>34
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>341,
    'ten'=>'Thái Thụy',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thai-thuy',
    'tendaydu'=>'Huyện Thái Thụy',
    'tenthuong'=>'Thái Thụy, Thái Bình',
    'tenhanhchinh'=>'Huyện Thái Thụy, Tỉnh Thái Bình',
    'code'=>341,
    'id_tinh_thanhpho'=>34
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>342,
    'ten'=>'Tiền Hải',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tien-hai',
    'tendaydu'=>'Huyện Tiền Hải',
    'tenthuong'=>'Tiền Hải, Thái Bình',
    'tenhanhchinh'=>'Huyện Tiền Hải, Tỉnh Thái Bình',
    'code'=>342,
    'id_tinh_thanhpho'=>34
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>343,
    'ten'=>'Kiến Xương',
    'donvi'=>'huyen',
    'tenkhongdau'=>'kien-xuong',
    'tendaydu'=>'Huyện Kiến Xương',
    'tenthuong'=>'Kiến Xương, Thái Bình',
    'tenhanhchinh'=>'Huyện Kiến Xương, Tỉnh Thái Bình',
    'code'=>343,
    'id_tinh_thanhpho'=>34
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>344,
    'ten'=>'Vũ Thư',
    'donvi'=>'huyen',
    'tenkhongdau'=>'vu-thu',
    'tendaydu'=>'Huyện Vũ Thư',
    'tenthuong'=>'Vũ Thư, Thái Bình',
    'tenhanhchinh'=>'Huyện Vũ Thư, Tỉnh Thái Bình',
    'code'=>344,
    'id_tinh_thanhpho'=>34
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>436,
    'ten'=>'Hà Tĩnh',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'ha-tinh',
    'tendaydu'=>'Thành phố Hà Tĩnh',
    'tenthuong'=>'Hà Tĩnh, Hà Tĩnh',
    'tenhanhchinh'=>'Thành phố Hà Tĩnh, Tỉnh Hà Tĩnh',
    'code'=>436,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>437,
    'ten'=>'Hồng Lĩnh',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'hong-linh',
    'tendaydu'=>'Thị xã Hồng Lĩnh',
    'tenthuong'=>'Hồng Lĩnh, Hà Tĩnh',
    'tenhanhchinh'=>'Thị xã Hồng Lĩnh, Tỉnh Hà Tĩnh',
    'code'=>437,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>439,
    'ten'=>'Hương Sơn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'huong-son',
    'tendaydu'=>'Huyện Hương Sơn',
    'tenthuong'=>'Hương Sơn, Hà Tĩnh',
    'tenhanhchinh'=>'Huyện Hương Sơn, Tỉnh Hà Tĩnh',
    'code'=>439,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>440,
    'ten'=>'Đức Thọ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'duc-tho',
    'tendaydu'=>'Huyện Đức Thọ',
    'tenthuong'=>'Đức Thọ, Hà Tĩnh',
    'tenhanhchinh'=>'Huyện Đức Thọ, Tỉnh Hà Tĩnh',
    'code'=>440,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>441,
    'ten'=>'Vũ Quang',
    'donvi'=>'huyen',
    'tenkhongdau'=>'vu-quang',
    'tendaydu'=>'Huyện Vũ Quang',
    'tenthuong'=>'Vũ Quang, Hà Tĩnh',
    'tenhanhchinh'=>'Huyện Vũ Quang, Tỉnh Hà Tĩnh',
    'code'=>441,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>442,
    'ten'=>'Nghi Xuân',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nghi-xuan',
    'tendaydu'=>'Huyện Nghi Xuân',
    'tenthuong'=>'Nghi Xuân, Hà Tĩnh',
    'tenhanhchinh'=>'Huyện Nghi Xuân, Tỉnh Hà Tĩnh',
    'code'=>442,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>443,
    'ten'=>'Can Lộc',
    'donvi'=>'huyen',
    'tenkhongdau'=>'can-loc',
    'tendaydu'=>'Huyện Can Lộc',
    'tenthuong'=>'Can Lộc, Hà Tĩnh',
    'tenhanhchinh'=>'Huyện Can Lộc, Tỉnh Hà Tĩnh',
    'code'=>443,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>444,
    'ten'=>'Hương Khê',
    'donvi'=>'huyen',
    'tenkhongdau'=>'huong-khe',
    'tendaydu'=>'Huyện Hương Khê',
    'tenthuong'=>'Hương Khê, Hà Tĩnh',
    'tenhanhchinh'=>'Huyện Hương Khê, Tỉnh Hà Tĩnh',
    'code'=>444,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>445,
    'ten'=>'Thạch Hà',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thach-ha',
    'tendaydu'=>'Huyện Thạch Hà',
    'tenthuong'=>'Thạch Hà, Hà Tĩnh',
    'tenhanhchinh'=>'Huyện Thạch Hà, Tỉnh Hà Tĩnh',
    'code'=>445,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>446,
    'ten'=>'Cẩm Xuyên',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cam-xuyen',
    'tendaydu'=>'Huyện Cẩm Xuyên',
    'tenthuong'=>'Cẩm Xuyên, Hà Tĩnh',
    'tenhanhchinh'=>'Huyện Cẩm Xuyên, Tỉnh Hà Tĩnh',
    'code'=>446,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>447,
    'ten'=>'Kỳ Anh',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ky-anh',
    'tendaydu'=>'Huyện Kỳ Anh',
    'tenthuong'=>'Kỳ Anh, Hà Tĩnh',
    'tenhanhchinh'=>'Huyện Kỳ Anh, Tỉnh Hà Tĩnh',
    'code'=>447,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>448,
    'ten'=>'Lộc Hà',
    'donvi'=>'huyen',
    'tenkhongdau'=>'loc-ha',
    'tendaydu'=>'Huyện Lộc Hà',
    'tenthuong'=>'Lộc Hà, Hà Tĩnh',
    'tenhanhchinh'=>'Huyện Lộc Hà, Tỉnh Hà Tĩnh',
    'code'=>448,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>449,
    'ten'=>'Kỳ Anh',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'ky-anh',
    'tendaydu'=>'Thị xã Kỳ Anh',
    'tenthuong'=>'Kỳ Anh, Hà Tĩnh',
    'tenhanhchinh'=>'Thị xã Kỳ Anh, Tỉnh Hà Tĩnh',
    'code'=>449,
    'id_tinh_thanhpho'=>42
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>582,
    'ten'=>'Phan Rang-Tháp Chàm',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'phan-rang-thap-cham',
    'tendaydu'=>'Thành phố Phan Rang-Tháp Chàm',
    'tenthuong'=>'Phan Rang-Tháp Chàm, Ninh Thuận',
    'tenhanhchinh'=>'Thành phố Phan Rang-Tháp Chàm, Tỉnh Ninh Thuận',
    'code'=>582,
    'id_tinh_thanhpho'=>58
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>584,
    'ten'=>'Bác Ái',
    'donvi'=>'huyen',
    'tenkhongdau'=>'bac-ai',
    'tendaydu'=>'Huyện Bác Ái',
    'tenthuong'=>'Bác Ái, Ninh Thuận',
    'tenhanhchinh'=>'Huyện Bác Ái, Tỉnh Ninh Thuận',
    'code'=>584,
    'id_tinh_thanhpho'=>58
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>585,
    'ten'=>'Ninh Sơn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ninh-son',
    'tendaydu'=>'Huyện Ninh Sơn',
    'tenthuong'=>'Ninh Sơn, Ninh Thuận',
    'tenhanhchinh'=>'Huyện Ninh Sơn, Tỉnh Ninh Thuận',
    'code'=>585,
    'id_tinh_thanhpho'=>58
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>586,
    'ten'=>'Ninh Hải',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ninh-hai',
    'tendaydu'=>'Huyện Ninh Hải',
    'tenthuong'=>'Ninh Hải, Ninh Thuận',
    'tenhanhchinh'=>'Huyện Ninh Hải, Tỉnh Ninh Thuận',
    'code'=>586,
    'id_tinh_thanhpho'=>58
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>587,
    'ten'=>'Ninh Phước',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ninh-phuoc',
    'tendaydu'=>'Huyện Ninh Phước',
    'tenthuong'=>'Ninh Phước, Ninh Thuận',
    'tenhanhchinh'=>'Huyện Ninh Phước, Tỉnh Ninh Thuận',
    'code'=>587,
    'id_tinh_thanhpho'=>58
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>588,
    'ten'=>'Thuận Bắc',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thuan-bac',
    'tendaydu'=>'Huyện Thuận Bắc',
    'tenthuong'=>'Thuận Bắc, Ninh Thuận',
    'tenhanhchinh'=>'Huyện Thuận Bắc, Tỉnh Ninh Thuận',
    'code'=>588,
    'id_tinh_thanhpho'=>58
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>589,
    'ten'=>'Thuận Nam',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thuan-nam',
    'tendaydu'=>'Huyện Thuận Nam',
    'tenthuong'=>'Thuận Nam, Ninh Thuận',
    'tenhanhchinh'=>'Huyện Thuận Nam, Tỉnh Ninh Thuận',
    'code'=>589,
    'id_tinh_thanhpho'=>58
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>866,
    'ten'=>'Cao Lãnh',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'cao-lanh',
    'tendaydu'=>'Thành phố Cao Lãnh',
    'tenthuong'=>'Cao Lãnh, Đồng Tháp',
    'tenhanhchinh'=>'Thành phố Cao Lãnh, Tỉnh Đồng Tháp',
    'code'=>866,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>867,
    'ten'=>'Sa Đéc',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'sa-dec',
    'tendaydu'=>'Thành phố Sa Đéc',
    'tenthuong'=>'Sa Đéc, Đồng Tháp',
    'tenhanhchinh'=>'Thành phố Sa Đéc, Tỉnh Đồng Tháp',
    'code'=>867,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>868,
    'ten'=>'Hồng Ngự',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'hong-ngu',
    'tendaydu'=>'Thị xã Hồng Ngự',
    'tenthuong'=>'Hồng Ngự, Đồng Tháp',
    'tenhanhchinh'=>'Thị xã Hồng Ngự, Tỉnh Đồng Tháp',
    'code'=>868,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>869,
    'ten'=>'Tân Hồng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tan-hong',
    'tendaydu'=>'Huyện Tân Hồng',
    'tenthuong'=>'Tân Hồng, Đồng Tháp',
    'tenhanhchinh'=>'Huyện Tân Hồng, Tỉnh Đồng Tháp',
    'code'=>869,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>870,
    'ten'=>'Hồng Ngự',
    'donvi'=>'huyen',
    'tenkhongdau'=>'hong-ngu',
    'tendaydu'=>'Huyện Hồng Ngự',
    'tenthuong'=>'Hồng Ngự, Đồng Tháp',
    'tenhanhchinh'=>'Huyện Hồng Ngự, Tỉnh Đồng Tháp',
    'code'=>870,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>871,
    'ten'=>'Tam Nông',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tam-nong',
    'tendaydu'=>'Huyện Tam Nông',
    'tenthuong'=>'Tam Nông, Đồng Tháp',
    'tenhanhchinh'=>'Huyện Tam Nông, Tỉnh Đồng Tháp',
    'code'=>871,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>872,
    'ten'=>'Tháp Mười',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thap-muoi',
    'tendaydu'=>'Huyện Tháp Mười',
    'tenthuong'=>'Tháp Mười, Đồng Tháp',
    'tenhanhchinh'=>'Huyện Tháp Mười, Tỉnh Đồng Tháp',
    'code'=>872,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>873,
    'ten'=>'Cao Lãnh',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cao-lanh',
    'tendaydu'=>'Huyện Cao Lãnh',
    'tenthuong'=>'Cao Lãnh, Đồng Tháp',
    'tenhanhchinh'=>'Huyện Cao Lãnh, Tỉnh Đồng Tháp',
    'code'=>873,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>874,
    'ten'=>'Thanh Bình',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thanh-binh',
    'tendaydu'=>'Huyện Thanh Bình',
    'tenthuong'=>'Thanh Bình, Đồng Tháp',
    'tenhanhchinh'=>'Huyện Thanh Bình, Tỉnh Đồng Tháp',
    'code'=>874,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>875,
    'ten'=>'Lấp Vò',
    'donvi'=>'huyen',
    'tenkhongdau'=>'lap-vo',
    'tendaydu'=>'Huyện Lấp Vò',
    'tenthuong'=>'Lấp Vò, Đồng Tháp',
    'tenhanhchinh'=>'Huyện Lấp Vò, Tỉnh Đồng Tháp',
    'code'=>875,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>876,
    'ten'=>'Lai Vung',
    'donvi'=>'huyen',
    'tenkhongdau'=>'lai-vung',
    'tendaydu'=>'Huyện Lai Vung',
    'tenthuong'=>'Lai Vung, Đồng Tháp',
    'tenhanhchinh'=>'Huyện Lai Vung, Tỉnh Đồng Tháp',
    'code'=>876,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>877,
    'ten'=>'Châu Thành',
    'donvi'=>'huyen',
    'tenkhongdau'=>'chau-thanh',
    'tendaydu'=>'Huyện Châu Thành',
    'tenthuong'=>'Châu Thành, Đồng Tháp',
    'tenhanhchinh'=>'Huyện Châu Thành, Tỉnh Đồng Tháp',
    'code'=>877,
    'id_tinh_thanhpho'=>87
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>794,
    'ten'=>'Tân An',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'tan-an',
    'tendaydu'=>'Thành phố Tân An',
    'tenthuong'=>'Tân An, Long An',
    'tenhanhchinh'=>'Thành phố Tân An, Tỉnh Long An',
    'code'=>794,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>795,
    'ten'=>'Kiến Tường',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'kien-tuong',
    'tendaydu'=>'Thị xã Kiến Tường',
    'tenthuong'=>'Kiến Tường, Long An',
    'tenhanhchinh'=>'Thị xã Kiến Tường, Tỉnh Long An',
    'code'=>795,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>796,
    'ten'=>'Tân Hưng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tan-hung',
    'tendaydu'=>'Huyện Tân Hưng',
    'tenthuong'=>'Tân Hưng, Long An',
    'tenhanhchinh'=>'Huyện Tân Hưng, Tỉnh Long An',
    'code'=>796,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>797,
    'ten'=>'Vĩnh Hưng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'vinh-hung',
    'tendaydu'=>'Huyện Vĩnh Hưng',
    'tenthuong'=>'Vĩnh Hưng, Long An',
    'tenhanhchinh'=>'Huyện Vĩnh Hưng, Tỉnh Long An',
    'code'=>797,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>798,
    'ten'=>'Mộc Hóa',
    'donvi'=>'huyen',
    'tenkhongdau'=>'moc-hoa',
    'tendaydu'=>'Huyện Mộc Hóa',
    'tenthuong'=>'Mộc Hóa, Long An',
    'tenhanhchinh'=>'Huyện Mộc Hóa, Tỉnh Long An',
    'code'=>798,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>799,
    'ten'=>'Tân Thạnh',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tan-thanh',
    'tendaydu'=>'Huyện Tân Thạnh',
    'tenthuong'=>'Tân Thạnh, Long An',
    'tenhanhchinh'=>'Huyện Tân Thạnh, Tỉnh Long An',
    'code'=>799,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>800,
    'ten'=>'Thạnh Hóa',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thanh-hoa',
    'tendaydu'=>'Huyện Thạnh Hóa',
    'tenthuong'=>'Thạnh Hóa, Long An',
    'tenhanhchinh'=>'Huyện Thạnh Hóa, Tỉnh Long An',
    'code'=>800,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>801,
    'ten'=>'Đức Huệ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'duc-hue',
    'tendaydu'=>'Huyện Đức Huệ',
    'tenthuong'=>'Đức Huệ, Long An',
    'tenhanhchinh'=>'Huyện Đức Huệ, Tỉnh Long An',
    'code'=>801,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>802,
    'ten'=>'Đức Hòa',
    'donvi'=>'huyen',
    'tenkhongdau'=>'duc-hoa',
    'tendaydu'=>'Huyện Đức Hòa',
    'tenthuong'=>'Đức Hòa, Long An',
    'tenhanhchinh'=>'Huyện Đức Hòa, Tỉnh Long An',
    'code'=>802,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>803,
    'ten'=>'Bến Lức',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ben-luc',
    'tendaydu'=>'Huyện Bến Lức',
    'tenthuong'=>'Bến Lức, Long An',
    'tenhanhchinh'=>'Huyện Bến Lức, Tỉnh Long An',
    'code'=>803,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>804,
    'ten'=>'Thủ Thừa',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thu-thua',
    'tendaydu'=>'Huyện Thủ Thừa',
    'tenthuong'=>'Thủ Thừa, Long An',
    'tenhanhchinh'=>'Huyện Thủ Thừa, Tỉnh Long An',
    'code'=>804,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>805,
    'ten'=>'Tân Trụ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tan-tru',
    'tendaydu'=>'Huyện Tân Trụ',
    'tenthuong'=>'Tân Trụ, Long An',
    'tenhanhchinh'=>'Huyện Tân Trụ, Tỉnh Long An',
    'code'=>805,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>806,
    'ten'=>'Cần Đước',
    'donvi'=>'huyen',
    'tenkhongdau'=>'can-duoc',
    'tendaydu'=>'Huyện Cần Đước',
    'tenthuong'=>'Cần Đước, Long An',
    'tenhanhchinh'=>'Huyện Cần Đước, Tỉnh Long An',
    'code'=>806,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>807,
    'ten'=>'Cần Giuộc',
    'donvi'=>'huyen',
    'tenkhongdau'=>'can-giuoc',
    'tendaydu'=>'Huyện Cần Giuộc',
    'tenthuong'=>'Cần Giuộc, Long An',
    'tenhanhchinh'=>'Huyện Cần Giuộc, Tỉnh Long An',
    'code'=>807,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>808,
    'ten'=>'Châu Thành',
    'donvi'=>'huyen',
    'tenkhongdau'=>'chau-thanh',
    'tendaydu'=>'Huyện Châu Thành',
    'tenthuong'=>'Châu Thành, Long An',
    'tenhanhchinh'=>'Huyện Châu Thành, Tỉnh Long An',
    'code'=>808,
    'id_tinh_thanhpho'=>80
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>930,
    'ten'=>'Vị Thanh',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'vi-thanh',
    'tendaydu'=>'Thành phố Vị Thanh',
    'tenthuong'=>'Vị Thanh, Hậu Giang',
    'tenhanhchinh'=>'Thành phố Vị Thanh, Tỉnh Hậu Giang',
    'code'=>930,
    'id_tinh_thanhpho'=>93
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>931,
    'ten'=>'Ngã Bảy',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'nga-bay',
    'tendaydu'=>'Thị xã Ngã Bảy',
    'tenthuong'=>'Ngã Bảy, Hậu Giang',
    'tenhanhchinh'=>'Thị xã Ngã Bảy, Tỉnh Hậu Giang',
    'code'=>931,
    'id_tinh_thanhpho'=>93
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>932,
    'ten'=>'Châu Thành A',
    'donvi'=>'huyen',
    'tenkhongdau'=>'chau-thanh-a',
    'tendaydu'=>'Huyện Châu Thành A',
    'tenthuong'=>'Châu Thành A, Hậu Giang',
    'tenhanhchinh'=>'Huyện Châu Thành A, Tỉnh Hậu Giang',
    'code'=>932,
    'id_tinh_thanhpho'=>93
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>933,
    'ten'=>'Châu Thành',
    'donvi'=>'huyen',
    'tenkhongdau'=>'chau-thanh',
    'tendaydu'=>'Huyện Châu Thành',
    'tenthuong'=>'Châu Thành, Hậu Giang',
    'tenhanhchinh'=>'Huyện Châu Thành, Tỉnh Hậu Giang',
    'code'=>933,
    'id_tinh_thanhpho'=>93
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>934,
    'ten'=>'Phụng Hiệp',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phung-hiep',
    'tendaydu'=>'Huyện Phụng Hiệp',
    'tenthuong'=>'Phụng Hiệp, Hậu Giang',
    'tenhanhchinh'=>'Huyện Phụng Hiệp, Tỉnh Hậu Giang',
    'code'=>934,
    'id_tinh_thanhpho'=>93
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>935,
    'ten'=>'Vị Thuỷ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'vi-thuy',
    'tendaydu'=>'Huyện Vị Thuỷ',
    'tenthuong'=>'Vị Thuỷ, Hậu Giang',
    'tenhanhchinh'=>'Huyện Vị Thuỷ, Tỉnh Hậu Giang',
    'code'=>935,
    'id_tinh_thanhpho'=>93
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>936,
    'ten'=>'Long Mỹ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'long-my',
    'tendaydu'=>'Huyện Long Mỹ',
    'tenthuong'=>'Long Mỹ, Hậu Giang',
    'tenhanhchinh'=>'Huyện Long Mỹ, Tỉnh Hậu Giang',
    'code'=>936,
    'id_tinh_thanhpho'=>93
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>937,
    'ten'=>'Long Mỹ',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'long-my',
    'tendaydu'=>'Thị xã Long Mỹ',
    'tenthuong'=>'Long Mỹ, Hậu Giang',
    'tenhanhchinh'=>'Thị xã Long Mỹ, Tỉnh Hậu Giang',
    'code'=>937,
    'id_tinh_thanhpho'=>93
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>193,
    'ten'=>'Hạ Long',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'ha-long',
    'tendaydu'=>'Thành phố Hạ Long',
    'tenthuong'=>'Hạ Long, Quảng Ninh',
    'tenhanhchinh'=>'Thành phố Hạ Long, Tỉnh Quảng Ninh',
    'code'=>193,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>194,
    'ten'=>'Móng Cái',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'mong-cai',
    'tendaydu'=>'Thành phố Móng Cái',
    'tenthuong'=>'Móng Cái, Quảng Ninh',
    'tenhanhchinh'=>'Thành phố Móng Cái, Tỉnh Quảng Ninh',
    'code'=>194,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>195,
    'ten'=>'Cẩm Phả',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'cam-pha',
    'tendaydu'=>'Thành phố Cẩm Phả',
    'tenthuong'=>'Cẩm Phả, Quảng Ninh',
    'tenhanhchinh'=>'Thành phố Cẩm Phả, Tỉnh Quảng Ninh',
    'code'=>195,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>196,
    'ten'=>'Uông Bí',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'uong-bi',
    'tendaydu'=>'Thành phố Uông Bí',
    'tenthuong'=>'Uông Bí, Quảng Ninh',
    'tenhanhchinh'=>'Thành phố Uông Bí, Tỉnh Quảng Ninh',
    'code'=>196,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>198,
    'ten'=>'Bình Liêu',
    'donvi'=>'huyen',
    'tenkhongdau'=>'binh-lieu',
    'tendaydu'=>'Huyện Bình Liêu',
    'tenthuong'=>'Bình Liêu, Quảng Ninh',
    'tenhanhchinh'=>'Huyện Bình Liêu, Tỉnh Quảng Ninh',
    'code'=>198,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>199,
    'ten'=>'Tiên Yên',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tien-yen',
    'tendaydu'=>'Huyện Tiên Yên',
    'tenthuong'=>'Tiên Yên, Quảng Ninh',
    'tenhanhchinh'=>'Huyện Tiên Yên, Tỉnh Quảng Ninh',
    'code'=>199,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>200,
    'ten'=>'Đầm Hà',
    'donvi'=>'huyen',
    'tenkhongdau'=>'dam-ha',
    'tendaydu'=>'Huyện Đầm Hà',
    'tenthuong'=>'Đầm Hà, Quảng Ninh',
    'tenhanhchinh'=>'Huyện Đầm Hà, Tỉnh Quảng Ninh',
    'code'=>200,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>201,
    'ten'=>'Hải Hà',
    'donvi'=>'huyen',
    'tenkhongdau'=>'hai-ha',
    'tendaydu'=>'Huyện Hải Hà',
    'tenthuong'=>'Hải Hà, Quảng Ninh',
    'tenhanhchinh'=>'Huyện Hải Hà, Tỉnh Quảng Ninh',
    'code'=>201,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>202,
    'ten'=>'Ba Chẽ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ba-che',
    'tendaydu'=>'Huyện Ba Chẽ',
    'tenthuong'=>'Ba Chẽ, Quảng Ninh',
    'tenhanhchinh'=>'Huyện Ba Chẽ, Tỉnh Quảng Ninh',
    'code'=>202,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>203,
    'ten'=>'Vân Đồn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'van-don',
    'tendaydu'=>'Huyện Vân Đồn',
    'tenthuong'=>'Vân Đồn, Quảng Ninh',
    'tenhanhchinh'=>'Huyện Vân Đồn, Tỉnh Quảng Ninh',
    'code'=>203,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>204,
    'ten'=>'Hoành Bồ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'hoanh-bo',
    'tendaydu'=>'Huyện Hoành Bồ',
    'tenthuong'=>'Hoành Bồ, Quảng Ninh',
    'tenhanhchinh'=>'Huyện Hoành Bồ, Tỉnh Quảng Ninh',
    'code'=>204,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>205,
    'ten'=>'Đông Triều',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'dong-trieu',
    'tendaydu'=>'Thị xã Đông Triều',
    'tenthuong'=>'Đông Triều, Quảng Ninh',
    'tenhanhchinh'=>'Thị xã Đông Triều, Tỉnh Quảng Ninh',
    'code'=>205,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>206,
    'ten'=>'Quảng Yên',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'quang-yen',
    'tendaydu'=>'Thị xã Quảng Yên',
    'tenthuong'=>'Quảng Yên, Quảng Ninh',
    'tenhanhchinh'=>'Thị xã Quảng Yên, Tỉnh Quảng Ninh',
    'code'=>206,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>207,
    'ten'=>'Cô Tô',
    'donvi'=>'huyen',
    'tenkhongdau'=>'co-to',
    'tendaydu'=>'Huyện Cô Tô',
    'tenthuong'=>'Cô Tô, Quảng Ninh',
    'tenhanhchinh'=>'Huyện Cô Tô, Tỉnh Quảng Ninh',
    'code'=>207,
    'id_tinh_thanhpho'=>22
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>227,
    'ten'=>'Việt Trì',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'viet-tri',
    'tendaydu'=>'Thành phố Việt Trì',
    'tenthuong'=>'Việt Trì, Phú Thọ',
    'tenhanhchinh'=>'Thành phố Việt Trì, Tỉnh Phú Thọ',
    'code'=>227,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>228,
    'ten'=>'Phú Thọ',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'phu-tho',
    'tendaydu'=>'Thị xã Phú Thọ',
    'tenthuong'=>'Phú Thọ, Phú Thọ',
    'tenhanhchinh'=>'Thị xã Phú Thọ, Tỉnh Phú Thọ',
    'code'=>228,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>230,
    'ten'=>'Đoan Hùng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'doan-hung',
    'tendaydu'=>'Huyện Đoan Hùng',
    'tenthuong'=>'Đoan Hùng, Phú Thọ',
    'tenhanhchinh'=>'Huyện Đoan Hùng, Tỉnh Phú Thọ',
    'code'=>230,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>231,
    'ten'=>'Hạ Hoà',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ha-hoa',
    'tendaydu'=>'Huyện Hạ Hoà',
    'tenthuong'=>'Hạ Hoà, Phú Thọ',
    'tenhanhchinh'=>'Huyện Hạ Hoà, Tỉnh Phú Thọ',
    'code'=>231,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>232,
    'ten'=>'Thanh Ba',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thanh-ba',
    'tendaydu'=>'Huyện Thanh Ba',
    'tenthuong'=>'Thanh Ba, Phú Thọ',
    'tenhanhchinh'=>'Huyện Thanh Ba, Tỉnh Phú Thọ',
    'code'=>232,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>233,
    'ten'=>'Phù Ninh',
    'donvi'=>'huyen',
    'tenkhongdau'=>'phu-ninh',
    'tendaydu'=>'Huyện Phù Ninh',
    'tenthuong'=>'Phù Ninh, Phú Thọ',
    'tenhanhchinh'=>'Huyện Phù Ninh, Tỉnh Phú Thọ',
    'code'=>233,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>234,
    'ten'=>'Yên Lập',
    'donvi'=>'huyen',
    'tenkhongdau'=>'yen-lap',
    'tendaydu'=>'Huyện Yên Lập',
    'tenthuong'=>'Yên Lập, Phú Thọ',
    'tenhanhchinh'=>'Huyện Yên Lập, Tỉnh Phú Thọ',
    'code'=>234,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>235,
    'ten'=>'Cẩm Khê',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cam-khe',
    'tendaydu'=>'Huyện Cẩm Khê',
    'tenthuong'=>'Cẩm Khê, Phú Thọ',
    'tenhanhchinh'=>'Huyện Cẩm Khê, Tỉnh Phú Thọ',
    'code'=>235,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>236,
    'ten'=>'Tam Nông',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tam-nong',
    'tendaydu'=>'Huyện Tam Nông',
    'tenthuong'=>'Tam Nông, Phú Thọ',
    'tenhanhchinh'=>'Huyện Tam Nông, Tỉnh Phú Thọ',
    'code'=>236,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>237,
    'ten'=>'Lâm Thao',
    'donvi'=>'huyen',
    'tenkhongdau'=>'lam-thao',
    'tendaydu'=>'Huyện Lâm Thao',
    'tenthuong'=>'Lâm Thao, Phú Thọ',
    'tenhanhchinh'=>'Huyện Lâm Thao, Tỉnh Phú Thọ',
    'code'=>237,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>238,
    'ten'=>'Thanh Sơn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thanh-son',
    'tendaydu'=>'Huyện Thanh Sơn',
    'tenthuong'=>'Thanh Sơn, Phú Thọ',
    'tenhanhchinh'=>'Huyện Thanh Sơn, Tỉnh Phú Thọ',
    'code'=>238,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>239,
    'ten'=>'Thanh Thuỷ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thanh-thuy',
    'tendaydu'=>'Huyện Thanh Thuỷ',
    'tenthuong'=>'Thanh Thuỷ, Phú Thọ',
    'tenhanhchinh'=>'Huyện Thanh Thuỷ, Tỉnh Phú Thọ',
    'code'=>239,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>240,
    'ten'=>'Tân Sơn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tan-son',
    'tendaydu'=>'Huyện Tân Sơn',
    'tenthuong'=>'Tân Sơn, Phú Thọ',
    'tenhanhchinh'=>'Huyện Tân Sơn, Tỉnh Phú Thọ',
    'code'=>240,
    'id_tinh_thanhpho'=>25
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>450,
    'ten'=>'Đồng Hới',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'dong-hoi',
    'tendaydu'=>'Thành Phố Đồng Hới',
    'tenthuong'=>'Đồng Hới, Quảng Bình',
    'tenhanhchinh'=>'Thành Phố Đồng Hới, Tỉnh Quảng Bình',
    'code'=>450,
    'id_tinh_thanhpho'=>44
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>452,
    'ten'=>'Minh Hóa',
    'donvi'=>'huyen',
    'tenkhongdau'=>'minh-hoa',
    'tendaydu'=>'Huyện Minh Hóa',
    'tenthuong'=>'Minh Hóa, Quảng Bình',
    'tenhanhchinh'=>'Huyện Minh Hóa, Tỉnh Quảng Bình',
    'code'=>452,
    'id_tinh_thanhpho'=>44
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>453,
    'ten'=>'Tuyên Hóa',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tuyen-hoa',
    'tendaydu'=>'Huyện Tuyên Hóa',
    'tenthuong'=>'Tuyên Hóa, Quảng Bình',
    'tenhanhchinh'=>'Huyện Tuyên Hóa, Tỉnh Quảng Bình',
    'code'=>453,
    'id_tinh_thanhpho'=>44
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>454,
    'ten'=>'Quảng Trạch',
    'donvi'=>'huyen',
    'tenkhongdau'=>'quang-trach',
    'tendaydu'=>'Huyện Quảng Trạch',
    'tenthuong'=>'Quảng Trạch, Quảng Bình',
    'tenhanhchinh'=>'Huyện Quảng Trạch, Tỉnh Quảng Bình',
    'code'=>454,
    'id_tinh_thanhpho'=>44
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>455,
    'ten'=>'Bố Trạch',
    'donvi'=>'huyen',
    'tenkhongdau'=>'bo-trach',
    'tendaydu'=>'Huyện Bố Trạch',
    'tenthuong'=>'Bố Trạch, Quảng Bình',
    'tenhanhchinh'=>'Huyện Bố Trạch, Tỉnh Quảng Bình',
    'code'=>455,
    'id_tinh_thanhpho'=>44
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>456,
    'ten'=>'Quảng Ninh',
    'donvi'=>'huyen',
    'tenkhongdau'=>'quang-ninh',
    'tendaydu'=>'Huyện Quảng Ninh',
    'tenthuong'=>'Quảng Ninh, Quảng Bình',
    'tenhanhchinh'=>'Huyện Quảng Ninh, Tỉnh Quảng Bình',
    'code'=>456,
    'id_tinh_thanhpho'=>44
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>457,
    'ten'=>'Lệ Thủy',
    'donvi'=>'huyen',
    'tenkhongdau'=>'le-thuy',
    'tendaydu'=>'Huyện Lệ Thủy',
    'tenthuong'=>'Lệ Thủy, Quảng Bình',
    'tenhanhchinh'=>'Huyện Lệ Thủy, Tỉnh Quảng Bình',
    'code'=>457,
    'id_tinh_thanhpho'=>44
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>458,
    'ten'=>'Ba Đồn',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'ba-don',
    'tendaydu'=>'Thị xã Ba Đồn',
    'tenthuong'=>'Ba Đồn, Quảng Bình',
    'tenhanhchinh'=>'Thị xã Ba Đồn, Tỉnh Quảng Bình',
    'code'=>458,
    'id_tinh_thanhpho'=>44
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>760,
    'ten'=>'1',
    'donvi'=>'quan',
    'tenkhongdau'=>'1',
    'tendaydu'=>'Quận 1',
    'tenthuong'=>'1, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 1, Thành phố Hồ Chí Minh',
    'code'=>760,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>761,
    'ten'=>'12',
    'donvi'=>'quan',
    'tenkhongdau'=>'12',
    'tendaydu'=>'Quận 12',
    'tenthuong'=>'12, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 12, Thành phố Hồ Chí Minh',
    'code'=>761,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>762,
    'ten'=>'Thủ Đức',
    'donvi'=>'quan',
    'tenkhongdau'=>'thu-duc',
    'tendaydu'=>'Quận Thủ Đức',
    'tenthuong'=>'Thủ Đức, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận Thủ Đức, Thành phố Hồ Chí Minh',
    'code'=>762,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>763,
    'ten'=>'9',
    'donvi'=>'quan',
    'tenkhongdau'=>'9',
    'tendaydu'=>'Quận 9',
    'tenthuong'=>'9, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 9, Thành phố Hồ Chí Minh',
    'code'=>763,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>764,
    'ten'=>'Gò Vấp',
    'donvi'=>'quan',
    'tenkhongdau'=>'go-vap',
    'tendaydu'=>'Quận Gò Vấp',
    'tenthuong'=>'Gò Vấp, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận Gò Vấp, Thành phố Hồ Chí Minh',
    'code'=>764,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>765,
    'ten'=>'Bình Thạnh',
    'donvi'=>'quan',
    'tenkhongdau'=>'binh-thanh',
    'tendaydu'=>'Quận Bình Thạnh',
    'tenthuong'=>'Bình Thạnh, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận Bình Thạnh, Thành phố Hồ Chí Minh',
    'code'=>765,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>766,
    'ten'=>'Tân Bình',
    'donvi'=>'quan',
    'tenkhongdau'=>'tan-binh',
    'tendaydu'=>'Quận Tân Bình',
    'tenthuong'=>'Tân Bình, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận Tân Bình, Thành phố Hồ Chí Minh',
    'code'=>766,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>767,
    'ten'=>'Tân Phú',
    'donvi'=>'quan',
    'tenkhongdau'=>'tan-phu',
    'tendaydu'=>'Quận Tân Phú',
    'tenthuong'=>'Tân Phú, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận Tân Phú, Thành phố Hồ Chí Minh',
    'code'=>767,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>768,
    'ten'=>'Phú Nhuận',
    'donvi'=>'quan',
    'tenkhongdau'=>'phu-nhuan',
    'tendaydu'=>'Quận Phú Nhuận',
    'tenthuong'=>'Phú Nhuận, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận Phú Nhuận, Thành phố Hồ Chí Minh',
    'code'=>768,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>769,
    'ten'=>'2',
    'donvi'=>'quan',
    'tenkhongdau'=>'2',
    'tendaydu'=>'Quận 2',
    'tenthuong'=>'2, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 2, Thành phố Hồ Chí Minh',
    'code'=>769,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>770,
    'ten'=>'3',
    'donvi'=>'quan',
    'tenkhongdau'=>'3',
    'tendaydu'=>'Quận 3',
    'tenthuong'=>'3, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 3, Thành phố Hồ Chí Minh',
    'code'=>770,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>771,
    'ten'=>'10',
    'donvi'=>'quan',
    'tenkhongdau'=>'10',
    'tendaydu'=>'Quận 10',
    'tenthuong'=>'10, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 10, Thành phố Hồ Chí Minh',
    'code'=>771,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>772,
    'ten'=>'11',
    'donvi'=>'quan',
    'tenkhongdau'=>'11',
    'tendaydu'=>'Quận 11',
    'tenthuong'=>'11, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 11, Thành phố Hồ Chí Minh',
    'code'=>772,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>773,
    'ten'=>'4',
    'donvi'=>'quan',
    'tenkhongdau'=>'4',
    'tendaydu'=>'Quận 4',
    'tenthuong'=>'4, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 4, Thành phố Hồ Chí Minh',
    'code'=>773,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>774,
    'ten'=>'5',
    'donvi'=>'quan',
    'tenkhongdau'=>'5',
    'tendaydu'=>'Quận 5',
    'tenthuong'=>'5, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 5, Thành phố Hồ Chí Minh',
    'code'=>774,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>775,
    'ten'=>'6',
    'donvi'=>'quan',
    'tenkhongdau'=>'6',
    'tendaydu'=>'Quận 6',
    'tenthuong'=>'6, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 6, Thành phố Hồ Chí Minh',
    'code'=>775,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>776,
    'ten'=>'8',
    'donvi'=>'quan',
    'tenkhongdau'=>'8',
    'tendaydu'=>'Quận 8',
    'tenthuong'=>'8, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 8, Thành phố Hồ Chí Minh',
    'code'=>776,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>777,
    'ten'=>'Bình Tân',
    'donvi'=>'quan',
    'tenkhongdau'=>'binh-tan',
    'tendaydu'=>'Quận Bình Tân',
    'tenthuong'=>'Bình Tân, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận Bình Tân, Thành phố Hồ Chí Minh',
    'code'=>777,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>778,
    'ten'=>'7',
    'donvi'=>'quan',
    'tenkhongdau'=>'7',
    'tendaydu'=>'Quận 7',
    'tenthuong'=>'7, Hồ Chí Minh',
    'tenhanhchinh'=>'Quận 7, Thành phố Hồ Chí Minh',
    'code'=>778,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>783,
    'ten'=>'Củ Chi',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cu-chi',
    'tendaydu'=>'Huyện Củ Chi',
    'tenthuong'=>'Củ Chi, Hồ Chí Minh',
    'tenhanhchinh'=>'Huyện Củ Chi, Thành phố Hồ Chí Minh',
    'code'=>783,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>784,
    'ten'=>'Hóc Môn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'hoc-mon',
    'tendaydu'=>'Huyện Hóc Môn',
    'tenthuong'=>'Hóc Môn, Hồ Chí Minh',
    'tenhanhchinh'=>'Huyện Hóc Môn, Thành phố Hồ Chí Minh',
    'code'=>784,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>785,
    'ten'=>'Bình Chánh',
    'donvi'=>'huyen',
    'tenkhongdau'=>'binh-chanh',
    'tendaydu'=>'Huyện Bình Chánh',
    'tenthuong'=>'Bình Chánh, Hồ Chí Minh',
    'tenhanhchinh'=>'Huyện Bình Chánh, Thành phố Hồ Chí Minh',
    'code'=>785,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>786,
    'ten'=>'Nhà Bè',
    'donvi'=>'huyen',
    'tenkhongdau'=>'nha-be',
    'tendaydu'=>'Huyện Nhà Bè',
    'tenthuong'=>'Nhà Bè, Hồ Chí Minh',
    'tenhanhchinh'=>'Huyện Nhà Bè, Thành phố Hồ Chí Minh',
    'code'=>786,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>787,
    'ten'=>'Cần Giờ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'can-gio',
    'tendaydu'=>'Huyện Cần Giờ',
    'tenthuong'=>'Cần Giờ, Hồ Chí Minh',
    'tenhanhchinh'=>'Huyện Cần Giờ, Thành phố Hồ Chí Minh',
    'code'=>787,
    'id_tinh_thanhpho'=>79
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>347,
    'ten'=>'Phủ Lý',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'phu-ly',
    'tendaydu'=>'Thành phố Phủ Lý',
    'tenthuong'=>'Phủ Lý, Hà Nam',
    'tenhanhchinh'=>'Thành phố Phủ Lý, Tỉnh Hà Nam',
    'code'=>347,
    'id_tinh_thanhpho'=>35
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>349,
    'ten'=>'Duy Tiên',
    'donvi'=>'huyen',
    'tenkhongdau'=>'duy-tien',
    'tendaydu'=>'Huyện Duy Tiên',
    'tenthuong'=>'Duy Tiên, Hà Nam',
    'tenhanhchinh'=>'Huyện Duy Tiên, Tỉnh Hà Nam',
    'code'=>349,
    'id_tinh_thanhpho'=>35
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>350,
    'ten'=>'Kim Bảng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'kim-bang',
    'tendaydu'=>'Huyện Kim Bảng',
    'tenthuong'=>'Kim Bảng, Hà Nam',
    'tenhanhchinh'=>'Huyện Kim Bảng, Tỉnh Hà Nam',
    'code'=>350,
    'id_tinh_thanhpho'=>35
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>351,
    'ten'=>'Thanh Liêm',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thanh-liem',
    'tendaydu'=>'Huyện Thanh Liêm',
    'tenthuong'=>'Thanh Liêm, Hà Nam',
    'tenhanhchinh'=>'Huyện Thanh Liêm, Tỉnh Hà Nam',
    'code'=>351,
    'id_tinh_thanhpho'=>35
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>352,
    'ten'=>'Bình Lục',
    'donvi'=>'huyen',
    'tenkhongdau'=>'binh-luc',
    'tendaydu'=>'Huyện Bình Lục',
    'tenthuong'=>'Bình Lục, Hà Nam',
    'tenhanhchinh'=>'Huyện Bình Lục, Tỉnh Hà Nam',
    'code'=>352,
    'id_tinh_thanhpho'=>35
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>353,
    'ten'=>'Lý Nhân',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ly-nhan',
    'tendaydu'=>'Huyện Lý Nhân',
    'tenthuong'=>'Lý Nhân, Hà Nam',
    'tenhanhchinh'=>'Huyện Lý Nhân, Tỉnh Hà Nam',
    'code'=>353,
    'id_tinh_thanhpho'=>35
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>256,
    'ten'=>'Bắc Ninh',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'bac-ninh',
    'tendaydu'=>'Thành phố Bắc Ninh',
    'tenthuong'=>'Bắc Ninh, Bắc Ninh',
    'tenhanhchinh'=>'Thành phố Bắc Ninh, Tỉnh Bắc Ninh',
    'code'=>256,
    'id_tinh_thanhpho'=>27
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>258,
    'ten'=>'Yên Phong',
    'donvi'=>'huyen',
    'tenkhongdau'=>'yen-phong',
    'tendaydu'=>'Huyện Yên Phong',
    'tenthuong'=>'Yên Phong, Bắc Ninh',
    'tenhanhchinh'=>'Huyện Yên Phong, Tỉnh Bắc Ninh',
    'code'=>258,
    'id_tinh_thanhpho'=>27
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>259,
    'ten'=>'Quế Võ',
    'donvi'=>'huyen',
    'tenkhongdau'=>'que-vo',
    'tendaydu'=>'Huyện Quế Võ',
    'tenthuong'=>'Quế Võ, Bắc Ninh',
    'tenhanhchinh'=>'Huyện Quế Võ, Tỉnh Bắc Ninh',
    'code'=>259,
    'id_tinh_thanhpho'=>27
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>260,
    'ten'=>'Tiên Du',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tien-du',
    'tendaydu'=>'Huyện Tiên Du',
    'tenthuong'=>'Tiên Du, Bắc Ninh',
    'tenhanhchinh'=>'Huyện Tiên Du, Tỉnh Bắc Ninh',
    'code'=>260,
    'id_tinh_thanhpho'=>27
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>261,
    'ten'=>'Từ Sơn',
    'donvi'=>'thi-xa',
    'tenkhongdau'=>'tu-son',
    'tendaydu'=>'Thị xã Từ Sơn',
    'tenthuong'=>'Từ Sơn, Bắc Ninh',
    'tenhanhchinh'=>'Thị xã Từ Sơn, Tỉnh Bắc Ninh',
    'code'=>261,
    'id_tinh_thanhpho'=>27
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>262,
    'ten'=>'Thuận Thành',
    'donvi'=>'huyen',
    'tenkhongdau'=>'thuan-thanh',
    'tendaydu'=>'Huyện Thuận Thành',
    'tenthuong'=>'Thuận Thành, Bắc Ninh',
    'tenhanhchinh'=>'Huyện Thuận Thành, Tỉnh Bắc Ninh',
    'code'=>262,
    'id_tinh_thanhpho'=>27
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>263,
    'ten'=>'Gia Bình',
    'donvi'=>'huyen',
    'tenkhongdau'=>'gia-binh',
    'tendaydu'=>'Huyện Gia Bình',
    'tenthuong'=>'Gia Bình, Bắc Ninh',
    'tenhanhchinh'=>'Huyện Gia Bình, Tỉnh Bắc Ninh',
    'code'=>263,
    'id_tinh_thanhpho'=>27
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>264,
    'ten'=>'Lương Tài',
    'donvi'=>'huyen',
    'tenkhongdau'=>'luong-tai',
    'tendaydu'=>'Huyện Lương Tài',
    'tenthuong'=>'Lương Tài, Bắc Ninh',
    'tenhanhchinh'=>'Huyện Lương Tài, Tỉnh Bắc Ninh',
    'code'=>264,
    'id_tinh_thanhpho'=>27
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>213,
    'ten'=>'Bắc Giang',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'bac-giang',
    'tendaydu'=>'Thành phố Bắc Giang',
    'tenthuong'=>'Bắc Giang, Bắc Giang',
    'tenhanhchinh'=>'Thành phố Bắc Giang, Tỉnh Bắc Giang',
    'code'=>213,
    'id_tinh_thanhpho'=>24
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>215,
    'ten'=>'Yên Thế',
    'donvi'=>'huyen',
    'tenkhongdau'=>'yen-the',
    'tendaydu'=>'Huyện Yên Thế',
    'tenthuong'=>'Yên Thế, Bắc Giang',
    'tenhanhchinh'=>'Huyện Yên Thế, Tỉnh Bắc Giang',
    'code'=>215,
    'id_tinh_thanhpho'=>24
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>216,
    'ten'=>'Tân Yên',
    'donvi'=>'huyen',
    'tenkhongdau'=>'tan-yen',
    'tendaydu'=>'Huyện Tân Yên',
    'tenthuong'=>'Tân Yên, Bắc Giang',
    'tenhanhchinh'=>'Huyện Tân Yên, Tỉnh Bắc Giang',
    'code'=>216,
    'id_tinh_thanhpho'=>24
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>217,
    'ten'=>'Lạng Giang',
    'donvi'=>'huyen',
    'tenkhongdau'=>'lang-giang',
    'tendaydu'=>'Huyện Lạng Giang',
    'tenthuong'=>'Lạng Giang, Bắc Giang',
    'tenhanhchinh'=>'Huyện Lạng Giang, Tỉnh Bắc Giang',
    'code'=>217,
    'id_tinh_thanhpho'=>24
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>218,
    'ten'=>'Lục Nam',
    'donvi'=>'huyen',
    'tenkhongdau'=>'luc-nam',
    'tendaydu'=>'Huyện Lục Nam',
    'tenthuong'=>'Lục Nam, Bắc Giang',
    'tenhanhchinh'=>'Huyện Lục Nam, Tỉnh Bắc Giang',
    'code'=>218,
    'id_tinh_thanhpho'=>24
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>219,
    'ten'=>'Lục Ngạn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'luc-ngan',
    'tendaydu'=>'Huyện Lục Ngạn',
    'tenthuong'=>'Lục Ngạn, Bắc Giang',
    'tenhanhchinh'=>'Huyện Lục Ngạn, Tỉnh Bắc Giang',
    'code'=>219,
    'id_tinh_thanhpho'=>24
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>220,
    'ten'=>'Sơn Động',
    'donvi'=>'huyen',
    'tenkhongdau'=>'son-dong',
    'tendaydu'=>'Huyện Sơn Động',
    'tenthuong'=>'Sơn Động, Bắc Giang',
    'tenhanhchinh'=>'Huyện Sơn Động, Tỉnh Bắc Giang',
    'code'=>220,
    'id_tinh_thanhpho'=>24
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>221,
    'ten'=>'Yên Dũng',
    'donvi'=>'huyen',
    'tenkhongdau'=>'yen-dung',
    'tendaydu'=>'Huyện Yên Dũng',
    'tenthuong'=>'Yên Dũng, Bắc Giang',
    'tenhanhchinh'=>'Huyện Yên Dũng, Tỉnh Bắc Giang',
    'code'=>221,
    'id_tinh_thanhpho'=>24
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>222,
    'ten'=>'Việt Yên',
    'donvi'=>'huyen',
    'tenkhongdau'=>'viet-yen',
    'tendaydu'=>'Huyện Việt Yên',
    'tenthuong'=>'Việt Yên, Bắc Giang',
    'tenhanhchinh'=>'Huyện Việt Yên, Tỉnh Bắc Giang',
    'code'=>222,
    'id_tinh_thanhpho'=>24
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>223,
    'ten'=>'Hiệp Hòa',
    'donvi'=>'huyen',
    'tenkhongdau'=>'hiep-hoa',
    'tendaydu'=>'Huyện Hiệp Hòa',
    'tenthuong'=>'Hiệp Hòa, Bắc Giang',
    'tenhanhchinh'=>'Huyện Hiệp Hòa, Tỉnh Bắc Giang',
    'code'=>223,
    'id_tinh_thanhpho'=>24
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>58,
    'ten'=>'Bắc Kạn',
    'donvi'=>'thanh-pho',
    'tenkhongdau'=>'bac-kan',
    'tendaydu'=>'Thành Phố Bắc Kạn',
    'tenthuong'=>'Bắc Kạn, Bắc Kạn',
    'tenhanhchinh'=>'Thành Phố Bắc Kạn, Tỉnh Bắc Kạn',
    'code'=>58,
    'id_tinh_thanhpho'=>6
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>60,
    'ten'=>'Pác Nặm',
    'donvi'=>'huyen',
    'tenkhongdau'=>'pac-nam',
    'tendaydu'=>'Huyện Pác Nặm',
    'tenthuong'=>'Pác Nặm, Bắc Kạn',
    'tenhanhchinh'=>'Huyện Pác Nặm, Tỉnh Bắc Kạn',
    'code'=>60,
    'id_tinh_thanhpho'=>6
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>61,
    'ten'=>'Ba Bể',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ba-be',
    'tendaydu'=>'Huyện Ba Bể',
    'tenthuong'=>'Ba Bể, Bắc Kạn',
    'tenhanhchinh'=>'Huyện Ba Bể, Tỉnh Bắc Kạn',
    'code'=>61,
    'id_tinh_thanhpho'=>6
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>62,
    'ten'=>'Ngân Sơn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'ngan-son',
    'tendaydu'=>'Huyện Ngân Sơn',
    'tenthuong'=>'Ngân Sơn, Bắc Kạn',
    'tenhanhchinh'=>'Huyện Ngân Sơn, Tỉnh Bắc Kạn',
    'code'=>62,
    'id_tinh_thanhpho'=>6
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>63,
    'ten'=>'Bạch Thông',
    'donvi'=>'huyen',
    'tenkhongdau'=>'bach-thong',
    'tendaydu'=>'Huyện Bạch Thông',
    'tenthuong'=>'Bạch Thông, Bắc Kạn',
    'tenhanhchinh'=>'Huyện Bạch Thông, Tỉnh Bắc Kạn',
    'code'=>63,
    'id_tinh_thanhpho'=>6
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>64,
    'ten'=>'Chợ Đồn',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cho-don',
    'tendaydu'=>'Huyện Chợ Đồn',
    'tenthuong'=>'Chợ Đồn, Bắc Kạn',
    'tenhanhchinh'=>'Huyện Chợ Đồn, Tỉnh Bắc Kạn',
    'code'=>64,
    'id_tinh_thanhpho'=>6
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>65,
    'ten'=>'Chợ Mới',
    'donvi'=>'huyen',
    'tenkhongdau'=>'cho-moi',
    'tendaydu'=>'Huyện Chợ Mới',
    'tenthuong'=>'Chợ Mới, Bắc Kạn',
    'tenhanhchinh'=>'Huyện Chợ Mới, Tỉnh Bắc Kạn',
    'code'=>65,
    'id_tinh_thanhpho'=>6
    ] );
    
                
    
    QuanHuyen::create( [
    'id'=>66,
    'ten'=>'Na Rì',
    'donvi'=>'huyen',
    'tenkhongdau'=>'na-ri',
    'tendaydu'=>'Huyện Na Rì',
    'tenthuong'=>'Na Rì, Bắc Kạn',
    'tenhanhchinh'=>'Huyện Na Rì, Tỉnh Bắc Kạn',
    'code'=>66,
    'id_tinh_thanhpho'=>6
    ] );
    
                
    
    
    }
}
