<?php

use Illuminate\Database\Seeder;

class TrangChuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('trangchu')->insert([
            'tenshop' => "Tên Shop",
            'tieudetrai' => 'Thế giới mua sắm',
            'tieudeduoi' => 'Mua sắm thả ga, rinh qùa về nhà',
            'email' => $faker->unique()->safeEmail,
            'sodienthoai' => $faker->phoneNumber,
            'diachi' => $faker->streetAddress,
            'giomodongcua' => '7h - 22h hàng ngày',
            'tieudecamon' => 'CẢM ƠN BẠN ĐÃ GHÉ THĂM CẢM ƠN BẠN ĐÃ GHÉ THĂM',
            'noidungcamon' => $faker->text(200),
            'created_at' => $faker->date('Y-m-d', 'now'),
        ]);
        // factory(TrangChu::class, 1)->create();
    }
}
