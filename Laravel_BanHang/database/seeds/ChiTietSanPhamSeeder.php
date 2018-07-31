<?php

use Illuminate\Database\Seeder;

class ChiTietSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 25;
        for ($i = 1; $i <= $limit; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Chi tiết sản phẩm ' . $i,
                'img' => 'sanpham' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => $faker->numberBetween(100000, 1000000),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => App\SanPham::pluck('id')->random(),
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        // factory(ChiTietSanPham::class, 200)->create();
    }
}
