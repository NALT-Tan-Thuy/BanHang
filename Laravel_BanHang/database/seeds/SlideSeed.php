<?php

use Illuminate\Database\Seeder;

class SlideSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 6;
        for ($i = 1; $i <= $limit; $i++) {
            DB::table('slide')->insert([
                'img' => 'slide' . $i . '.jpg',
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(Slide::class, 8)->create();
    }
}
