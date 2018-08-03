<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(LoaiSanPhamSeeder::class);
        $this->call(SanPhamSeeder::class);
        $this->call(ChiTietSanPhamSeeder::class);
        $this->call(SlideSeed::class);
        $this->call(TrangChuSeeder::class);
        $this->call(LienHeSeeder::class);
        $this->call(ThuongHieuSeeder::class);
        $this->call(KichCoMauSeeder::class);
        $this->call(KhachHangSeeder::class);
        $this->call(HoaDonSeeder::class);
        $this->call(ChiTietHoaDonSeeder::class);
        $this->call(BinhLuanSeeder::class);
        $this->call(ThongTinChiTietSanPhamSeeder::class);
        // $this->call(KichCoSeeder::class);

    }
}
