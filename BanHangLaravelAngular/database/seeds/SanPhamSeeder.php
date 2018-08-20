<?php

use Illuminate\Database\Seeder;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $spAo = ['Áo kiểu', 'Áo thun', 'Áo sơ mi', 'Áo khoác'];
        // factory(SanPham::class, 6)->create();
        for ($i = 0; $i < count($spAo); $i++) {
            DB::table('sanpham')->insert([
                'ten' => $spAo[$i],
                'id_loaisanpham' => 1,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        $spQuan = ['Quần kaki', 'Quần Jean', 'Quần Short', 'Đầm nữ', 'Quần Jogger'];
        for ($i = 0; $i < count($spQuan); $i++) {
            DB::table('sanpham')->insert([
                'ten' => $spQuan[$i],
                'id_loaisanpham' => 2,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        $spGiay = ['Giày nam', 'Giày nữ'];
        for ($i = 0; $i < count($spGiay); $i++) {
            DB::table('sanpham')->insert([
                'ten' => $spGiay[$i],
                'id_loaisanpham' => 3,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        $spNon = ['Nón phớt', 'Nón Snapback', 'Nón Bucket'];
        for ($i = 0; $i < count($spNon); $i++) {
            DB::table('sanpham')->insert([
                'ten' => $spNon[$i],
                'id_loaisanpham' => 4,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
    }
}
