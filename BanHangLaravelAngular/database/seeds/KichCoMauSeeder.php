<?php

use Illuminate\Database\Seeder;

class KichCoMauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $arrKichCoMau = ['L', 'M', 'S', 'SM', 'X', 'XL'];
        $limit = 15;
        for ($i = 0; $i <= $limit; $i++) {
            if ($i < count($arrKichCoMau)) {
                DB::table('kichcomau')->insert([
                    'ten' => $arrKichCoMau[$i],
                    'created_at' => $faker->date('Y-m-d', 'now'),
                ]);
            } else {
                DB::table('kichcomau')->insert([
                    'ten' => $i + 30,
                    'created_at' => $faker->date('Y-m-d', 'now'),
                ]);
            }

        }
        // factory(KichCoMau::class, 10)->create();
    }
}
