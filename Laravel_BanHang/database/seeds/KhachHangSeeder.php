<?php

use Illuminate\Database\Seeder;
use App\KhachHang;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KhachHang::class, 50)->create();
    }
}
