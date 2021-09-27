<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateForm extends Controller
{
   public function valitadeFonksiyon(){
       return view("filtreForm");
   }
   public function filtreFonksiyon(Request $uyeBilgi){
        $uyeBilgi->validate([
            "adsoyad"=>"required|min:3|max:12",
            "telefon"=>"required|min:10|max:11",
            "mail"=>"required|email"
        ]);
        echo"Form bilgileri filtreden geçti";
   }
}
