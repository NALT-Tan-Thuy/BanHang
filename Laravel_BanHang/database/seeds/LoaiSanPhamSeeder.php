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
<<<<<<< HEAD
        $arrLoaiSanPham = ['Áo', 'Quần', 'Giày', 'Nón', 'Túi xách & Ba lô'];

        for ($i = 0; $i < count($arrLoaiSanPham); $i++) {
            DB::table('loaisanpham')->insert([
                'ten' => $arrLoaiSanPham[$i],
=======
        $loaisp = ['Áo', 'Quần', 'Giày', 'Nón','Túi sách' ,'Phụ kiện'];
        for ($i = 1; $i < count($loaisp); $i++) {
            DB::table('loaisanpham')->insert([
                'ten' => $loaisp[$i],
>>>>>>> 93b105d14880f1880f0c523159e9b5d0d066becd
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(LoaiSanPham::class, 8)->create();
    }
}
