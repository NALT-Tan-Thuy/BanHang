<?php

use Illuminate\Database\Seeder;
use App\SanPham;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SanPham::class, 30)->create();
    }
}
