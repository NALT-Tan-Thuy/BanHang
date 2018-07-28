<?php

use Illuminate\Database\Seeder;
use App\LienHe;

class LienHeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(LienHe::class, 5)->create();
    }
}
