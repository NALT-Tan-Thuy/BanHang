<?php

use Illuminate\Database\Seeder;

class ChiTietSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Áo kiểu ' . $i,
                'img' => 'aokieu' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 1,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Áo thun ' . $i,
                'img' => 'aothun' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 2,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Áo sơ mi ' . $i,
                'img' => 'aosomi' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 3,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Áo khoác ' . $i,
                'img' => 'aokhoac' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 4,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Quần kaki ' . $i,
                'img' => 'quankaki' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 5,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Quần Jean ' . $i,
                'img' => 'quanJean' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 6,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Quần Short ' . $i,
                'img' => 'quanShort' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 7,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Đầm nữ ' . $i,
                'img' => 'DamNu' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 8,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Quần Jogger ' . $i,
                'img' => 'quanJogger' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 9,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Giày nam ' . $i,
                'img' => 'giaya' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 10,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Giày nữ ' . $i,
                'img' => 'giayb' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 11,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Nón phớt ' . $i,
                'img' => 'nonphot' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 12,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Nón SnapBack ' . $i,
                'img' => 'NonSnapBack' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 13,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('chitietsanpham')->insert([
                'ten' => 'Nón Bucket ' . $i,
                'img' => 'NonBucket' . $i . '.jpg',
                'noibat' => $faker->numberBetween(0, 1),
                'giagoc' => round($faker->numberBetween(100000, 1000000), -3),
                'khuyenmai' => $faker->numberBetween(0, 100),
                'mota' => $faker->text(100),
                'tieudethongtin' => $faker->text(40),
                'luotthich' => $faker->numberBetween(0, 200),
                'id_sanpham' => 14,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
        // factory(ChiTietSanPham::class, 200)->create();
    }
}
