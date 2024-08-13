<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $data=
        //[
          //  'username'=>'dika',
          //  'nama'=>'dika',
          //  'password'=>Hash::make('12345'),
          //  'user_id'=>4,
          //  'level_id'=>1
        //];
        //UserModel::insert($data);
        

        $data = 
        [
            'nama'=>'bartok',
        ];
        UserModel::where('username','dika')->update($data);

        UserModel::where('username','dika')->delete();



        //$user = UserModel::all();
        //return view('user',['data'=>$user]);

        $user = UserModel::with('level')->get();
        return view('user',['data' =>$user]);
    }
}

