<?php

use App\TinhThanhPho;
use Illuminate\Database\Seeder;

class TinhThanhPhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TinhThanhPho::create([
            'id' => 0,
            'ten' => '',
            'tenkhongdau' => '',
            'donvi' => '',
            'tendaydu' => '',
            'code' => 0,
        ]);

        TinhThanhPho::create([
            'id' => 89,
            'ten' => 'An Giang',
            'tenkhongdau' => 'an-giang',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh An Giang',
            'code' => 89,
        ]);

        TinhThanhPho::create([
            'id' => 62,
            'ten' => 'Kon Tum',
            'tenkhongdau' => 'kon-tum',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Kon Tum',
            'code' => 62,
        ]);

        TinhThanhPho::create([
            'id' => 67,
            'ten' => 'Đắk Nông',
            'tenkhongdau' => 'dak-nong',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Đắk Nông',
            'code' => 67,
        ]);

        TinhThanhPho::create([
            'id' => 94,
            'ten' => 'Sóc Trăng',
            'tenkhongdau' => 'soc-trang',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Sóc Trăng',
            'code' => 94,
        ]);

        TinhThanhPho::create([
            'id' => 70,
            'ten' => 'Bình Phước',
            'tenkhongdau' => 'binh-phuoc',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Bình Phước',
            'code' => 70,
        ]);

        TinhThanhPho::create([
            'id' => 33,
            'ten' => 'Hưng Yên',
            'tenkhongdau' => 'hung-yen',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Hưng Yên',
            'code' => 33,
        ]);

        TinhThanhPho::create([
            'id' => 38,
            'ten' => 'Thanh Hóa',
            'tenkhongdau' => 'thanh-hoa',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Thanh Hóa',
            'code' => 38,
        ]);

        TinhThanhPho::create([
            'id' => 45,
            'ten' => 'Quảng Trị',
            'tenkhongdau' => 'quang-tri',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Quảng Trị',
            'code' => 45,
        ]);

        TinhThanhPho::create([
            'id' => 8,
            'ten' => 'Tuyên Quang',
            'tenkhongdau' => 'tuyen-quang',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Tuyên Quang',
            'code' => 8,
        ]);

        TinhThanhPho::create([
            'id' => 51,
            'ten' => 'Quảng Ngãi',
            'tenkhongdau' => 'quang-ngai',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Quảng Ngãi',
            'code' => 51,
        ]);

        TinhThanhPho::create([
            'id' => 1,
            'ten' => 'Hà Nội',
            'tenkhongdau' => 'ha-noi',
            'donvi' => 'thanh-pho',
            'tendaydu' => 'Thành phố Hà Nội',
            'code' => 1,
        ]);

        TinhThanhPho::create([
            'id' => 10,
            'ten' => 'Lào Cai',
            'tenkhongdau' => 'lao-cai',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Lào Cai',
            'code' => 10,
        ]);

        TinhThanhPho::create([
            'id' => 86,
            'ten' => 'Vĩnh Long',
            'tenkhongdau' => 'vinh-long',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Vĩnh Long',
            'code' => 86,
        ]);

        TinhThanhPho::create([
            'id' => 68,
            'ten' => 'Lâm Đồng',
            'tenkhongdau' => 'lam-dong',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Lâm Đồng',
            'code' => 68,
        ]);

        TinhThanhPho::create([
            'id' => 52,
            'ten' => 'Bình Định',
            'tenkhongdau' => 'binh-dinh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Bình Định',
            'code' => 52,
        ]);

        TinhThanhPho::create([
            'id' => 40,
            'ten' => 'Nghệ An',
            'tenkhongdau' => 'nghe-an',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Nghệ An',
            'code' => 40,
        ]);

        TinhThanhPho::create([
            'id' => 91,
            'ten' => 'Kiên Giang',
            'tenkhongdau' => 'kien-giang',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Kiên Giang',
            'code' => 91,
        ]);

        TinhThanhPho::create([
            'id' => 2,
            'ten' => 'Hà Giang',
            'tenkhongdau' => 'ha-giang',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Hà Giang',
            'code' => 2,
        ]);

        TinhThanhPho::create([
            'id' => 54,
            'ten' => 'Phú Yên',
            'tenkhongdau' => 'phu-yen',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Phú Yên',
            'code' => 54,
        ]);

        TinhThanhPho::create([
            'id' => 20,
            'ten' => 'Lạng Sơn',
            'tenkhongdau' => 'lang-son',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Lạng Sơn',
            'code' => 20,
        ]);

        TinhThanhPho::create([
            'id' => 48,
            'ten' => 'Đà Nẵng',
            'tenkhongdau' => 'da-nang',
            'donvi' => 'thanh-pho',
            'tendaydu' => 'Thành phố Đà Nẵng',
            'code' => 48,
        ]);

        TinhThanhPho::create([
            'id' => 14,
            'ten' => 'Sơn La',
            'tenkhongdau' => 'son-la',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Sơn La',
            'code' => 14,
        ]);

        TinhThanhPho::create([
            'id' => 72,
            'ten' => 'Tây Ninh',
            'tenkhongdau' => 'tay-ninh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Tây Ninh',
            'code' => 72,
        ]);

        TinhThanhPho::create([
            'id' => 36,
            'ten' => 'Nam Định',
            'tenkhongdau' => 'nam-dinh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Nam Định',
            'code' => 36,
        ]);

        TinhThanhPho::create([
            'id' => 12,
            'ten' => 'Lai Châu',
            'tenkhongdau' => 'lai-chau',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Lai Châu',
            'code' => 12,
        ]);

        TinhThanhPho::create([
            'id' => 83,
            'ten' => 'Bến Tre',
            'tenkhongdau' => 'ben-tre',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Bến Tre',
            'code' => 83,
        ]);

        TinhThanhPho::create([
            'id' => 56,
            'ten' => 'Khánh Hòa',
            'tenkhongdau' => 'khanh-hoa',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Khánh Hòa',
            'code' => 56,
        ]);

        TinhThanhPho::create([
            'id' => 60,
            'ten' => 'Bình Thuận',
            'tenkhongdau' => 'binh-thuan',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Bình Thuận',
            'code' => 60,
        ]);

        TinhThanhPho::create([
            'id' => 4,
            'ten' => 'Cao Bằng',
            'tenkhongdau' => 'cao-bang',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Cao Bằng',
            'code' => 4,
        ]);

        TinhThanhPho::create([
            'id' => 31,
            'ten' => 'Hải Phòng',
            'tenkhongdau' => 'hai-phong',
            'donvi' => 'thanh-pho',
            'tendaydu' => 'Thành phố Hải Phòng',
            'code' => 31,
        ]);

        TinhThanhPho::create([
            'id' => 37,
            'ten' => 'Ninh Bình',
            'tenkhongdau' => 'ninh-binh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Ninh Bình',
            'code' => 37,
        ]);

        TinhThanhPho::create([
            'id' => 15,
            'ten' => 'Yên Bái',
            'tenkhongdau' => 'yen-bai',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Yên Bái',
            'code' => 15,
        ]);

        TinhThanhPho::create([
            'id' => 64,
            'ten' => 'Gia Lai',
            'tenkhongdau' => 'gia-lai',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Gia Lai',
            'code' => 64,
        ]);

        TinhThanhPho::create([
            'id' => 17,
            'ten' => 'Hoà Bình',
            'tenkhongdau' => 'hoa-binh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Hoà Bình',
            'code' => 17,
        ]);

        TinhThanhPho::create([
            'id' => 77,
            'ten' => 'Bà Rịa - Vũng Tàu',
            'tenkhongdau' => 'ba-ria-vung-tau',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Bà Rịa - Vũng Tàu',
            'code' => 77,
        ]);

        TinhThanhPho::create([
            'id' => 96,
            'ten' => 'Cà Mau',
            'tenkhongdau' => 'ca-mau',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Cà Mau',
            'code' => 96,
        ]);

        TinhThanhPho::create([
            'id' => 74,
            'ten' => 'Bình Dương',
            'tenkhongdau' => 'binh-duong',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Bình Dương',
            'code' => 74,
        ]);

        TinhThanhPho::create([
            'id' => 92,
            'ten' => 'Cần Thơ',
            'tenkhongdau' => 'can-tho',
            'donvi' => 'thanh-pho',
            'tendaydu' => 'Thành phố Cần Thơ',
            'code' => 92,
        ]);

        TinhThanhPho::create([
            'id' => 46,
            'ten' => 'Thừa Thiên Huế',
            'tenkhongdau' => 'thua-thien-hue',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Thừa Thiên Huế',
            'code' => 46,
        ]);

        TinhThanhPho::create([
            'id' => 75,
            'ten' => 'Đồng Nai',
            'tenkhongdau' => 'dong-nai',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Đồng Nai',
            'code' => 75,
        ]);

        TinhThanhPho::create([
            'id' => 82,
            'ten' => 'Tiền Giang',
            'tenkhongdau' => 'tien-giang',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Tiền Giang',
            'code' => 82,
        ]);

        TinhThanhPho::create([
            'id' => 11,
            'ten' => 'Điện Biên',
            'tenkhongdau' => 'dien-bien',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Điện Biên',
            'code' => 11,
        ]);

        TinhThanhPho::create([
            'id' => 26,
            'ten' => 'Vĩnh Phúc',
            'tenkhongdau' => 'vinh-phuc',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Vĩnh Phúc',
            'code' => 26,
        ]);

        TinhThanhPho::create([
            'id' => 49,
            'ten' => 'Quảng Nam',
            'tenkhongdau' => 'quang-nam',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Quảng Nam',
            'code' => 49,
        ]);

        TinhThanhPho::create([
            'id' => 66,
            'ten' => 'Đắk Lắk',
            'tenkhongdau' => 'dak-lak',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Đắk Lắk',
            'code' => 66,
        ]);

        TinhThanhPho::create([
            'id' => 19,
            'ten' => 'Thái Nguyên',
            'tenkhongdau' => 'thai-nguyen',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Thái Nguyên',
            'code' => 19,
        ]);

        TinhThanhPho::create([
            'id' => 30,
            'ten' => 'Hải Dương',
            'tenkhongdau' => 'hai-duong',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Hải Dương',
            'code' => 30,
        ]);

        TinhThanhPho::create([
            'id' => 95,
            'ten' => 'Bạc Liêu',
            'tenkhongdau' => 'bac-lieu',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Bạc Liêu',
            'code' => 95,
        ]);

        TinhThanhPho::create([
            'id' => 84,
            'ten' => 'Trà Vinh',
            'tenkhongdau' => 'tra-vinh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Trà Vinh',
            'code' => 84,
        ]);

        TinhThanhPho::create([
            'id' => 34,
            'ten' => 'Thái Bình',
            'tenkhongdau' => 'thai-binh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Thái Bình',
            'code' => 34,
        ]);

        TinhThanhPho::create([
            'id' => 42,
            'ten' => 'Hà Tĩnh',
            'tenkhongdau' => 'ha-tinh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Hà Tĩnh',
            'code' => 42,
        ]);

        TinhThanhPho::create([
            'id' => 58,
            'ten' => 'Ninh Thuận',
            'tenkhongdau' => 'ninh-thuan',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Ninh Thuận',
            'code' => 58,
        ]);

        TinhThanhPho::create([
            'id' => 87,
            'ten' => 'Đồng Tháp',
            'tenkhongdau' => 'dong-thap',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Đồng Tháp',
            'code' => 87,
        ]);

        TinhThanhPho::create([
            'id' => 80,
            'ten' => 'Long An',
            'tenkhongdau' => 'long-an',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Long An',
            'code' => 80,
        ]);

        TinhThanhPho::create([
            'id' => 93,
            'ten' => 'Hậu Giang',
            'tenkhongdau' => 'hau-giang',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Hậu Giang',
            'code' => 93,
        ]);

        TinhThanhPho::create([
            'id' => 22,
            'ten' => 'Quảng Ninh',
            'tenkhongdau' => 'quang-ninh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Quảng Ninh',
            'code' => 22,
        ]);

        TinhThanhPho::create([
            'id' => 25,
            'ten' => 'Phú Thọ',
            'tenkhongdau' => 'phu-tho',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Phú Thọ',
            'code' => 25,
        ]);

        TinhThanhPho::create([
            'id' => 44,
            'ten' => 'Quảng Bình',
            'tenkhongdau' => 'quang-binh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Quảng Bình',
            'code' => 44,
        ]);

        TinhThanhPho::create([
            'id' => 79,
            'ten' => 'Hồ Chí Minh',
            'tenkhongdau' => 'ho-chi-minh',
            'donvi' => 'thanh-pho',
            'tendaydu' => 'Thành phố Hồ Chí Minh',
            'code' => 79,
        ]);

        TinhThanhPho::create([
            'id' => 35,
            'ten' => 'Hà Nam',
            'tenkhongdau' => 'ha-nam',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Hà Nam',
            'code' => 35,
        ]);

        TinhThanhPho::create([
            'id' => 27,
            'ten' => 'Bắc Ninh',
            'tenkhongdau' => 'bac-ninh',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Bắc Ninh',
            'code' => 27,
        ]);

        TinhThanhPho::create([
            'id' => 24,
            'ten' => 'Bắc Giang',
            'tenkhongdau' => 'bac-giang',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Bắc Giang',
            'code' => 24,
        ]);

        TinhThanhPho::create([
            'id' => 6,
            'ten' => 'Bắc Kạn',
            'tenkhongdau' => 'bac-kan',
            'donvi' => 'tinh',
            'tendaydu' => 'Tỉnh Bắc Kạn',
            'code' => 6,
        ]);
    }
}
