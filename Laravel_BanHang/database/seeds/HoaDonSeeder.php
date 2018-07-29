<?php

use Illuminate\Database\Seeder;
use App\HoaDon;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HoaDon::class, 50)->create();
    }
}
