<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3,'pembeli'=>'abid','penjualan_kode'=>1, 'penjualan_tanggal' => '2024-03-02 15:00:1'],
            ['penjualan_id' => 2, 'user_id' => 3,'pembeli'=>'Gym','penjualan_kode'=>2, 'penjualan_tanggal' => '2024-03-02 15:10:1'],
            ['penjualan_id' => 3, 'user_id' => 3,'pembeli'=>'Nasti','penjualan_kode'=>3, 'penjualan_tanggal' => '2024-03-02 15:20:1'],
            ['penjualan_id' => 4, 'user_id' => 3,'pembeli'=>'Tiyar','penjualan_kode'=>4, 'penjualan_tanggal' => '2024-03-02 15:30:1'],
            ['penjualan_id' => 5, 'user_id' => 3,'pembeli'=>'Alfi','penjualan_kode'=>5, 'penjualan_tanggal' => '2024-03-02 15:40:1'],
            ['penjualan_id' => 6, 'user_id' => 3,'pembeli'=>'Ansah','penjualan_kode'=>6, 'penjualan_tanggal' => '2024-03-02 16:00:0'],
            ['penjualan_id' => 7, 'user_id' => 3,'pembeli'=>'Ridho','penjualan_kode'=>7, 'penjualan_tanggal' => '2024-03-02 16:10:0'],
            ['penjualan_id' => 8, 'user_id' => 3,'pembeli'=>'Aul','penjualan_kode'=>8, 'penjualan_tanggal' => '2024-03-02 16:20:0'],
            ['penjualan_id' => 9, 'user_id' => 3,'pembeli'=>'Lia','penjualan_kode'=>9, 'penjualan_tanggal' => '2024-03-02 16:30:0'],
            ['penjualan_id' => 10, 'user_id' => 3,'pembeli'=>'Rahman','penjualan_kode'=>10, 'penjualan_tanggal' => '2024-03-02 16:40:0'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
