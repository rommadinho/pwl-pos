<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function cekObject()
    {
        $anggota = new Anggota;
        dump($anggota);
    }

    public function insert()
    {
        $anggota = new Anggota;
        $anggota->nip = '1234231';
        $anggota->nama = 'dika';
        $anggota->tanggal_lahir = '2001-12-31';
        $anggota->nilai = '3.2';
        $anggota->save();
        echo "data berhasil disimpan";
    }
    
    public function update()
    {
        $anggota = Anggota::find(1);
        $anggota->nama = 'Qasim ';
        $anggota->nilai = '3.3';
        $anggota->save();
        echo "data berhasil disimpan";
    }

    public function delete()
    {
        $anggota =Anggota::find(1);
        $anggota -> delete();
        echo "data berhasil di hapus";
    }

    public function insertMultiple(){
        // Data yang ingin ditambahkan
        $anggotaData = [
            ['nip' => '1234232', 'nama' => 'Dika', 'tanggal_lahir' => '2001-12-31', 'nilai' => '3.2'],
            ['nip' => '1234233', 'nama' => 'Qapri', 'tanggal_lahir' => '2002-01-15', 'nilai' => '3.3'],
            ['nip' => '1234234', 'nama' => 'Rina', 'tanggal_lahir' => '2000-10-20', 'nilai' => '3.4'],
        ];
    
        // Iterasi melalui setiap data anggota
        foreach ($anggotaData as $data) {
            $anggota = new Anggota;
            $anggota->nip = $data['nip'];
            $anggota->nama = $data['nama'];
            $anggota->tanggal_lahir = $data['tanggal_lahir'];
            $anggota->nilai = $data['nilai'];
            $anggota->save();
            echo "Data untuk {$data['nama']} berhasil disimpan<br>";
        }
    }
    public function all()
    {
        $result = Anggota::all();
        return view('tampilkan',['anggotas'=>$result]);
    }
    public function find()
    {
        $result=Anggota::find(4);
        return view('tampilkan',['anggotas' =>[$result]]);
        //dump($result);
    }
    public function getWhere()
    {
        $result = Anggota::where('nilai','>','3.3')
            -> orderBy('nama','desc')
                ->get();
        return view('tampilkan',['anggotas' => $result]);

    }
}
