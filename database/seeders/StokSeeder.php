<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['stok_id' => 1, 'barang_id' => 1, 'user_id'=>3, 'stok_tanggal' => '2024-02-28 20:00:1', 'stok_jumlah' => 50,'sisa' => 49],
            ['stok_id' => 2, 'barang_id' => 2, 'user_id'=>3, 'stok_tanggal' => '2024-02-28 20:10:1', 'stok_jumlah' => 50,'sisa' => 49],
            ['stok_id' => 3, 'barang_id' => 3, 'user_id'=>3, 'stok_tanggal' => '2024-02-28 20:20:1', 'stok_jumlah' => 50,'sisa' => 49],
            ['stok_id' => 4, 'barang_id' => 4, 'user_id'=>3, 'stok_tanggal' => '2024-02-28 20:30:1', 'stok_jumlah' => 50,'sisa' => 49],
            ['stok_id' => 5, 'barang_id' => 5, 'user_id'=>3, 'stok_tanggal' => '2024-02-28 20:40:1', 'stok_jumlah' => 50,'sisa' => 49],
            ['stok_id' => 6, 'barang_id' => 6, 'user_id'=>3, 'stok_tanggal' => '2024-03-01 20:00:0', 'stok_jumlah' => 50,'sisa' => 49],
            ['stok_id' => 7, 'barang_id' => 7, 'user_id'=>3, 'stok_tanggal' => '2024-03-01 20:10:0', 'stok_jumlah' => 50,'sisa' => 49],
            ['stok_id' => 8, 'barang_id' => 8, 'user_id'=>3, 'stok_tanggal' => '2024-03-01 20:20:0', 'stok_jumlah' => 50,'sisa' => 49],
            ['stok_id' => 9, 'barang_id' => 9, 'user_id'=>3, 'stok_tanggal' => '2024-03-01 20:30:0', 'stok_jumlah' => 50,'sisa' => 49],
            ['stok_id' => 10, 'barang_id' => 10, 'user_id'=>3, 'stok_tanggal' => '2024-03-01 20:40:0', 'stok_jumlah' => 50,'sisa' => 49],
        ];

        DB::table('t_stok')->insert($data);
    }
}
