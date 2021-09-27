<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class Modelislemleri extends Controller
{
    public function liste(){
        $listele=Bilgiler::whereId(4)->first();
       echo $listele->metin;
    }
    public function modelEkle(){
        Bilgiler::create([
            "metin"=>"Model ile ekleme",
        ]);
    }
}
