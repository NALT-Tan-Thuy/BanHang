<?php

use Illuminate\Database\Seeder;

class HoaDonSeeder extends Seeder
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
            DB::table('hoadon')->insert([
                'id_khachhang' => $i,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(HoaDon::class, 50)->create();
    }
}
