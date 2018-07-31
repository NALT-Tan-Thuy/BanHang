<?php

use Illuminate\Database\Seeder;

class SanPhamSeeder extends Seeder
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
        // factory(SanPham::class, 6)->create();
        for ($i = 1; $i <= $limit; $i++) {
            DB::table('sanpham')->insert([
                'ten' => 'Sản phẩm' . $i,
                'id_loaisanpham' => App\LoaiSanPham::pluck('id')->random(),
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
    }
}
