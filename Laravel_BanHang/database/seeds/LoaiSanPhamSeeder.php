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
        $arrLoaiSanPham = ['Áo', 'Quần', 'Giày', 'Nón', 'Túi xách & Ba lô'];

        for ($i = 0; $i < count($arrLoaiSanPham); $i++) {
            DB::table('loaisanpham')->insert([
                'ten' => $arrLoaiSanPham[$i],
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(LoaiSanPham::class, 8)->create();
    }
}
