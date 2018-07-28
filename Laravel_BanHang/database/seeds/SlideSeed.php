<?php

use Illuminate\Database\Seeder;
use App\Slide;

class SlideSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Slide::class, 8)->create();
    }
}