<?php

use Illuminate\Database\Seeder;
use App\KichCoMau;

class KichCoMauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KichCoMau::class, 10)->create();
    }
}
