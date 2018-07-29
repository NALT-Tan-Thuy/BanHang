<?php

use Illuminate\Database\Seeder;
use App\KichCo;

class KichCoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KichCo::class, 500)->create();
    }
}
