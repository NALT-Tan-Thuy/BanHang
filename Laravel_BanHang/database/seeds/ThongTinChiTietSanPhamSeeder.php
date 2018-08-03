<?php

use App\ThongTinChiTietSanPham;
use Illuminate\Database\Seeder;

class ThongTinChiTietSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ThongTinChiTietSanPham::class, 50)->create();
    }
}
