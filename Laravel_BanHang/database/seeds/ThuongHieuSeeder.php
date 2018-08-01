<?php

use Illuminate\Database\Seeder;

class ThuongHieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 5;
        for ($i = 1; $i <= $limit; $i++) {
            DB::table('thuonghieu')->insert([
                'ten' => $faker->company,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(ThuongHieu::class, 20)->create();
    }
}
