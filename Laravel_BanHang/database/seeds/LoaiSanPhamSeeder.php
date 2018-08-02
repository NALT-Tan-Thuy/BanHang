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
        $loaisp = ['Áo', 'Quần', 'Giày', 'Nón','Túi sách' ,'Phụ kiện'];
        for ($i = 1; $i < count($loaisp); $i++) {
            DB::table('loaisanpham')->insert([
                'ten' => $loaisp[$i],
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(LoaiSanPham::class, 8)->create();
    }
}
