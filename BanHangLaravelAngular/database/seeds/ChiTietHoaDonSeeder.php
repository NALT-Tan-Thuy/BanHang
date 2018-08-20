<?php

use Illuminate\Database\Seeder;

class ChiTietHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 20;
        for ($i = 1; $i <= $limit; $i++) {
            DB::table('chitiethoadon')->insert([
                'id_hoadon' => App\HoaDon::pluck('id')->random(),
                'id_chitietsanpham' => App\ChiTietSanPham::pluck('id')->random(),
                'soluong' => rand(1, 10),
                'kichco' => substr($faker->text(10), 1, 1),
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(ChiTietHoaDon::class, 50)->create();
    }
}
