<?php

use App\ChiTietHoaDon;
use Illuminate\Database\Seeder;

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
