<?php

use Illuminate\Database\Seeder;

class LoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 6;
        for ($i = 1; $i <= $limit; $i++) {
            DB::table('loaisanpham')->insert([
                'ten' => 'Loại sản phẩm' . $i,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(LoaiSanPham::class, 8)->create();
    }
}
