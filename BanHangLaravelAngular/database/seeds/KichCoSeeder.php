<?php

use App\KichCo;
use Illuminate\Database\Seeder;

class KichCoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KichCo::class, 100)->create();
    }
}
