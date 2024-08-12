<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        
        // Menambahkan data ke dalam tabel m_kategori
        $data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Scank/makanan ringan',
            'created_at' => now()
        ];

        DB::table('m_kategori')->insert($data);
        return 'Data berhasil ditambah';

        // Mengupdate data di tabel m_kategori berdasarkan kategori_kode
        //$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        //return 'Update data berhasil, jumlah data yang berhasil terupdate ' . $row . ' baris';

        //$data=DB::table('m_kategori')->where('kategori_kode','SNK')->delete();
        //return 'delete data berhasil, jumlah data yang terhapus'.$data.'baris';

        //$data = DB::table('m_kategori')->get();
        //return view('kategori',['data'=>$data]);
    }
}
