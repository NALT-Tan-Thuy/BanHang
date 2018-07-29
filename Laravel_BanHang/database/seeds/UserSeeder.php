<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        $arrHoTen = array("Trần Quang Tân", "Huỳnh Văn Thùy", "Nguyễn Văn A", "Trần Thị B");
        $arrGioiTinh = array("Nam", "Nữ");
        for ($i = 1; $i <= $limit; $i++) {
            DB::table('users')->insert([
                'tendangnhap' => $faker->unique()->userName,
                'email' => $faker->unique()->safeEmail,
                'matkhau' => bcrypt('123'),
                'gioitinh' => $arrGioiTinh[array_rand($arrGioiTinh, 1)],
                'hoten' => $arrHoTen[rand(0, 3)] . $i,
                'img' => $i . '.jpg',
                'ngaysinh' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'sodienthoai' => $faker->phoneNumber,
                'tinh' => "Tỉnh Thừa Thiên Huế",
                'huyen' => "Thành phố Huế",
                'diachi' => "Phường Phú Thuận",
                'nghenghiep' => $faker->company,
                'sothich' => $faker->text(100),
                'gioithieubanthan' => $faker->text(100),
                'remember_token' => str_random(10),
            ]);
        }
        // factory(User::class, 10)->create();
    }
}
