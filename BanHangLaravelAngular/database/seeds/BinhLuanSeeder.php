<?php

use App\BinhLuan;
use Illuminate\Database\Seeder;

class BinhLuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BinhLuan::class, 300)->create();
    }
}
