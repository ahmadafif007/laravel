<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('HTML.form');
    }

    public function welcome(Request $request){

        $namaFirst = $request['nama_pertama'];
        $namaLast = $request['nama_kedua'];

        return view('HTML.Welcome', compact('namaFirst', 'namaLast'));
    }
}
