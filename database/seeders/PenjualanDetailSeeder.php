<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['detail_id' => 1,'penjualan_id' => 1, 'barang_id' => 1, 'harga' => 150000, 'jumlah' => 2,'created_at' => '2024-02-28 10:00:1','updated_at' => '2024-02-28 10:01:1'],
            ['detail_id' => 2,'penjualan_id' => 1, 'barang_id' => 2, 'harga' => 200000, 'jumlah' => 1,'created_at' => '2024-02-28 10:00:1','updated_at' => '2024-02-28 10:01:1'],
            ['detail_id' => 3,'penjualan_id' => 1, 'barang_id' => 9, 'harga' => 250000, 'jumlah' => 1,'created_at' => '2024-02-28 10:00:1','updated_at' => '2024-02-28 10:01:1'],
            ['detail_id' => 4,'penjualan_id' => 2, 'barang_id' => 1, 'harga' => 150000, 'jumlah' => 2,'created_at' => '2024-02-28 10:30:0','updated_at' => '2024-02-28 10:31:0'],
            ['detail_id' => 5,'penjualan_id' => 2, 'barang_id' => 2, 'harga' => 200000, 'jumlah' => 2,'created_at' => '2024-02-28 10:30:0','updated_at' => '2024-02-28 10:31:0'],
            ['detail_id' => 6,'penjualan_id' => 2, 'barang_id' => 9, 'harga' => 250000, 'jumlah' => 1,'created_at' => '2024-02-28 10:30:0','updated_at' => '2024-02-28 10:31:0'],
            ['detail_id' => 7,'penjualan_id' => 3, 'barang_id' => 3, 'harga' => 200000, 'jumlah' => 1,'created_at' => '2024-02-28 10:40:0','updated_at' => '2024-02-28 10:41:0'],
            ['detail_id' => 8,'penjualan_id' => 3, 'barang_id' => 4, 'harga' => 80000, 'jumlah' => 2,'created_at' => '2024-02-28 10:40:0','updated_at' => '2024-02-28 10:41:0'],
            ['detail_id' => 9,'penjualan_id' => 3, 'barang_id' => 6, 'harga' => 250000, 'jumlah' => 2,'created_at' => '2024-02-28 10:40:0','updated_at' => '2024-02-28 10:41:0'],
            ['detail_id' => 10,'penjualan_id' => 4, 'barang_id' => 3, 'harga' => 200000, 'jumlah' => 2,'created_at' => '2024-02-28 10:53:1','updated_at' => '2024-02-28 10:54:1'],
            ['detail_id' => 11,'penjualan_id' => 4, 'barang_id' => 4, 'harga' => 80000, 'jumlah' => 2,'created_at' => '2024-02-28 10:53:1','updated_at' => '2024-02-28 10:54:1'],
            ['detail_id' => 12,'penjualan_id' => 4, 'barang_id' => 6, 'harga' => 250000, 'jumlah' => 2,'created_at' => '2024-02-28 10:53:1','updated_at' => '2024-02-28 10:54:1'],
            ['detail_id' => 13,'penjualan_id' => 5, 'barang_id' => 4, 'harga' => 80000, 'jumlah' => 1,'created_at' => '2024-02-28 11:10:0','updated_at' => '2024-02-28 11:11:0'],
            ['detail_id' => 14,'penjualan_id' => 5, 'barang_id' => 5, 'harga' => 200000, 'jumlah' => 1,'created_at' => '2024-02-28 11:10:0','updated_at' => '2024-02-28 11:11:0'],
            ['detail_id' => 15,'penjualan_id' => 5, 'barang_id' => 9, 'harga' => 250000, 'jumlah' => 2,'created_at' => '2024-02-28 11:10:0','updated_at' => '2024-02-28 11:11:0'],
            ['detail_id' => 16,'penjualan_id' => 6, 'barang_id' => 4, 'harga' => 80000, 'jumlah' => 1,'created_at' => '2024-02-28 12:00:1','updated_at' => '2024-02-28 12:01:1'],
            ['detail_id' => 17,'penjualan_id' => 6, 'barang_id' => 5, 'harga' => 200000, 'jumlah' => 1,'created_at' => '2024-02-28 12:00:1','updated_at' => '2024-02-28 12:01:1'],
            ['detail_id' => 18,'penjualan_id' => 6, 'barang_id' => 9, 'harga' => 250000, 'jumlah' => 1,'created_at' => '2024-02-28 12:00:1','updated_at' => '2024-02-28 12:01:1'],
            ['detail_id' => 19,'penjualan_id' => 7, 'barang_id' => 8, 'harga' => 80000, 'jumlah' => 2,'created_at' => '2024-02-28 15:00:1','updated_at' => '2024-02-28 15:01:1'],
            ['detail_id' => 20,'penjualan_id' => 7, 'barang_id' => 9, 'harga' => 250000, 'jumlah' => 2,'created_at' => '2024-02-28 15:00:1','updated_at' => '2024-02-28 15:01:1'],
            ['detail_id' => 21,'penjualan_id' => 7, 'barang_id' => 10, 'harga' => 250000, 'jumlah' => 1,'created_at' => '2024-02-28 15:00:0','updated_at' => '2024-02-28 15:01:1'],
            ['detail_id' => 22,'penjualan_id' => 8, 'barang_id' => 8, 'harga' => 80000, 'jumlah' => 1,'created_at' => '2024-02-28 15:20:0','updated_at' => '2024-02-28 15:21:0'],
            ['detail_id' => 23,'penjualan_id' => 8, 'barang_id' => 9, 'harga' => 250000, 'jumlah' => 2,'created_at' => '2024-02-28 15:20:0','updated_at' => '2024-02-28 15:21:0'],
            ['detail_id' => 24,'penjualan_id' => 8, 'barang_id' => 10, 'harga' => 250000, 'jumlah' => 2,'created_at' => '2024-02-28 15:20:0','updated_at' => '2024-02-28 15:21:0'],
            ['detail_id' => 25,'penjualan_id' => 9, 'barang_id' => 5, 'harga' => 200000, 'jumlah' => 1,'created_at' => '2024-03-01 10:10:1','updated_at' => '2024-03-01 10:11:1'],
            ['detail_id' => 26,'penjualan_id' => 9, 'barang_id' => 7, 'harga' => 80000, 'jumlah' => 1,'created_at' => '2024-03-01 10:10:1','updated_at' => '2024-03-01 10:11:1'],
            ['detail_id' => 27,'penjualan_id' => 9, 'barang_id' => 8, 'harga' => 80000, 'jumlah' => 2,'created_at' => '2024-03-01 10:10:1','updated_at' => '2024-03-01 10:11:1'],
            ['detail_id' => 28,'penjualan_id' => 10, 'barang_id' => 5, 'harga' => 200000, 'jumlah' => 1,'created_at' => '2024-03-01 13:20:0','updated_at' => '2024-03-01 13:21:0'],
            ['detail_id' => 29,'penjualan_id' => 10, 'barang_id' => 7, 'harga' => 80000, 'jumlah' => 2,'created_at' => '2024-03-01 13:20:0','updated_at' => '2024-03-01 13:21:0'],
            ['detail_id' => 30,'penjualan_id' => 10, 'barang_id' => 8, 'harga' => 80000, 'jumlah' => 2,'created_at' => '2024-03-01 13:20:0','updated_at' => '2024-03-01 13:21:0'],
            
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
