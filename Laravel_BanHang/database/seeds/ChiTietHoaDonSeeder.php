<?php

use Illuminate\Database\Seeder;
use App\ChiTietHoaDon;

class ChiTietHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ChiTietHoaDon::class, 50)->create();
    }
}
