<?php

use Illuminate\Database\Seeder;

class LienHeSeeder extends Seeder
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
            DB::table('lienhe')->insert([
                'sodienthoai' => $faker->phoneNumber,
                'nguoiquanly' => $faker->name,
                'tencoso' => 'Cơ sở ' . $i,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(LienHe::class, 5)->create();
    }
}
