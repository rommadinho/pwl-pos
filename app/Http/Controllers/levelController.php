<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class levelController extends Controller
{
   public function index()
   {
    //DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)',['CUS','Pelanggan',now()]);
    //return 'insert data baru berhasil';

    //$row = DB::update('update m_level set level-nama = ? where level_kode = ?',['Customer','CUS']);
    //return 'update data berhasil. jumlah data yang di update: '. $row.'baris';

    //$row = DB::delete('delete from m_Level where level_kode = ? ', ['CUS']);
    //return 'Delete data berhasil. jumlah data yang dihapus: '.$row.'baris';

    $data = DB::select ('select * from m_level');
    return view('level',['data'=>$data]);
   }
}
