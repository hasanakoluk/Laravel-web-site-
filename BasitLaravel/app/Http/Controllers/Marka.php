<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Markalar;

class Marka extends Controller
{
    public function Ilet(){
        Markalar::create([
            "isim"=>"bmw",
            "numara"=>"13",
            "fiyat"=>"20",
        ]);
    }
    public function Lst(){
        $list=Markalar::where("id",1)->first();
       echo $list->isim;
        echo $list->numara;
    }
    public function Gnc(){
        $gun=Markalar::whereId(2)->update([
              "isim"=>"Mercedes",  
        ]);
    }
}
