<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosyaYukle extends Controller
{
    public function dosyaYukleme(Request $request){
        $dosyaAdi=$request->dosya->getClientOriginalName();
       echo $yukle="Yüklendi".$request->dosya->move(public_path("dosyalar"),$dosyaAdi);
    }
   
}
