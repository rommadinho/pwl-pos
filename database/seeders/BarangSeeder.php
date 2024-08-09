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
            ['nama_barang' => 'Televisi', 'kategori_id' => 1],
            ['nama_barang' => 'Kulkas', 'kategori_id' => 1],
            ['nama_barang' => 'Kemeja', 'kategori_id' => 2],
            ['nama_barang' => 'Celana', 'kategori_id' => 2],
            ['nama_barang' => 'Roti', 'kategori_id' => 3],
            ['nama_barang' => 'Nasi', 'kategori_id' => 3],
            ['nama_barang' => 'Kompor', 'kategori_id' => 4],
            ['nama_barang' => 'Panci', 'kategori_id' => 4],
            ['nama_barang' => 'Buku Pelajaran', 'kategori_id' => 5],
            ['nama_barang' => 'Novel', 'kategori_id' => 5],
        ];

        DB::table('m_barang')->insert($data);
    }
}
