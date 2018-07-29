<?php

use Illuminate\Database\Seeder;
use App\TrangChu;

class TrangChuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TrangChu::class, 1)->create();
    }
}
