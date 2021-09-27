<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValSample extends Controller
{
    public function valFonk(){
        return view("validation");
    }
    public function valFonkSonuc(Request $bolümler){
        $bolümler->validate([
            "marka"=>"required|min:5|max:10",
            "tip"=>"required|min:3|max:10",
            "mail"=>"required|email"
        ]);
        echo"Başarılı";
    }
}
