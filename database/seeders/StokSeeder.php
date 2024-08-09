<?php

namespace Database\Seeders;

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
            ['barang_id' => 1, 'jumlah' => 100],
            ['barang_id' => 2, 'jumlah' => 50],
            ['barang_id' => 3, 'jumlah' => 150],
            ['barang_id' => 4, 'jumlah' => 200],
            ['barang_id' => 5, 'jumlah' => 80],
            ['barang_id' => 6, 'jumlah' => 60],
            ['barang_id' => 7, 'jumlah' => 120],
            ['barang_id' => 8, 'jumlah' => 90],
            ['barang_id' => 9, 'jumlah' => 110],
            ['barang_id' => 10, 'jumlah' => 70],
        ];

        DB::table('t_stok')->insert($data);
    }
}
