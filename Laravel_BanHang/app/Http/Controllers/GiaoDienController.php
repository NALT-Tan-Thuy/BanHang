<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaoDienController extends Controller
{
    public function getTrangChu(){
        return view('giaodien/trangchu');
        // return view('giaodien/main');

    }
}
