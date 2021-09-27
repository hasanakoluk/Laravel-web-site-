<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yukle extends Controller
{
    public function Islem(Request $request){
         $dosyaGetir=$request->yukle->getClientOriginalName();
             $yukle=$request->yukle->move(public_path("dosyalar"),$dosyaGetir);
    }
}
