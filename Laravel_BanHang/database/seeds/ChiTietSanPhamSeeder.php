<?php

use Illuminate\Database\Seeder;
use App\ChiTietSanPham;

class ChiTietSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ChiTietSanPham::class, 200)->create();
    }
}
