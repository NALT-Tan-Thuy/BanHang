<?php

use Illuminate\Database\Seeder;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 5;
        $arrGioiTinh = array("Nam", "Nữ");
        for ($i = 1; $i <= $limit; $i++) {
            DB::table('khachhang')->insert([
                'hoten' => $faker->name,
                'gioitinh' => $arrGioiTinh[rand(0, 1)],
                'email' => $faker->unique()->safeEmail,
                'sodienthoai' => $faker->phoneNumber,
                'tinh' => "Tỉnh Thừa Thiên Huế",
                'huyen' => "Thành phố Huế",
                'xa' => "Phường Phú Thuận",
                'diachi' => "42-Nguyễn Huệ",
                'ghichu' => $faker->text(100),
                'loaithanhtoan' => 'Thanh toán khi nhận hàng',
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(KhachHang::class, 50)->create();
    }
}
