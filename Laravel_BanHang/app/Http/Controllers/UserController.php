<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function index(){
        $user = User::all();
        return view('admin.user.danhsach', ['user' => $user]);
    }
    
    // function getSua($id){
    //     $user = User::find($id);
    //     echo $a;
        // return view('admin.user.sua', compact('user'));
        // print_r($user);
        // $json = File::get("hanhchinhVietNam/tinh_tp.json");
        // $data = json_decode($json);
        // // foreach($data as $key => $value){
        // //     echo $key.": ".$value->name."<br>";
        // // }
        // echo "<pre>";
        // print_r($data);

    // }

}
