<?php

use Illuminate\Database\Seeder;
use App\ThongTinChiTietSanPham;

class ThongTinChiTietSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ThongTinChiTietSanPham::class, 200)->create();
    }
}
