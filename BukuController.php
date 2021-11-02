<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
     public function formulir(){
        return view('formulir');
    }
    public function formulir_proses(request $request){
        $judul = $request->input('judul');
        $penerbit = $request->input('penerbit');

        return "judul : ".$judul.", penerbit :".$penerbit;
    }
}
