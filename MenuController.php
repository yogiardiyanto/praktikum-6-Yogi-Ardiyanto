<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        return view('menu');
    }
    public function menu_proses(request $request){
        $makanan = $request->input('makanan');
        $minuman = $request->input('minuman');

        return 
        "Makanan :".$makanan.", 
        Minuman :".$minuman;
    }
}
