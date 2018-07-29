<?php

use Illuminate\Database\Seeder;
use App\ThuongHieu;
class ThuongHieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ThuongHieu::class, 20)->create();
    }
}
