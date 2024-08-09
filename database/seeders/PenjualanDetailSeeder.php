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
        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_penjualan_detail')->insert([
                [
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 10),
                    'jumlah' => rand(1, 5),
                    'harga' => rand(50000, 200000),
                ],
                [
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 10),
                    'jumlah' => rand(1, 5),
                    'harga' => rand(50000, 200000),
                ],
                [
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 10),
                    'jumlah' => rand(1, 5),
                    'harga' => rand(50000, 200000),
                ],
            ]);
        }
    }
}
