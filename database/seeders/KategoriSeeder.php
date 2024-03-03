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
            ['kategori_id' => 1, 'kategori_kode' => 'KTB','kategori_name' => 'Kitab'],
            ['kategori_id' => 2, 'kategori_kode' => 'ASH','kategori_name' => 'Alat Sholat'],
            ['kategori_id' => 3, 'kategori_kode' => 'BJM','kategori_name' => 'Baju Muslim'],
            ['kategori_id' => 4, 'kategori_kode' => 'PCI','kategori_name' => 'Peci'],
            ['kategori_id' => 5, 'kategori_kode' => 'SRG','kategori_name' => 'Sarung'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
