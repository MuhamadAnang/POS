<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'KTB','kategori_nama' => 'Kitab'],
            ['kategori_id' => 2, 'kategori_kode' => 'ASH','kategori_nama' => 'Alat Sholat'],
            ['kategori_id' => 3, 'kategori_kode' => 'BJM','kategori_nama' => 'Baju Muslim'],
            ['kategori_id' => 4, 'kategori_kode' => 'PCI','kategori_nama' => 'Peci'],
            ['kategori_id' => 5, 'kategori_kode' => 'SRG','kategori_nama' => 'Sarung'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
