<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'KTB001', 'barang_nama' => 'Al-Qur\'an', 'harga_beli' => 100000,'harga_jual' => 150000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'KTB002', 'barang_nama' => 'Tafsir', 'harga_beli' => 150000,'harga_jual' => 200000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'ASH001', 'barang_nama' => 'Mukena', 'harga_beli' => 200000,'harga_jual' => 250000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'ASH002', 'barang_nama' => 'Sajadah', 'harga_beli' => 50000,'harga_jual' => 80000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BJM001', 'barang_nama' => 'Baju Koko', 'harga_beli' => 150000,'harga_jual' => 200000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BJM002', 'barang_nama' => 'Baju Muslimah', 'harga_beli' => 200000,'harga_jual' => 250000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'PCI001', 'barang_nama' => 'Peci Hitam', 'harga_beli' => 50000, 'harga_jual' => 80000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'PCI002', 'barang_nama' => 'Peci Putih', 'harga_beli' => 50000, 'harga_jual' => 80000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'SRG001', 'barang_nama' => 'Sarung Hitam', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'SRG002', 'barang_nama' => 'Sarung Putih', 'harga_beli' => 200000, 'harga_jual' => 250000],
        ];
        DB::table('m_barang')->insert($data);
    }

}
