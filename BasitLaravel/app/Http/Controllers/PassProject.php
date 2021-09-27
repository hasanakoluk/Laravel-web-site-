<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PassProject extends Controller
{
    public function passOrnek(){
        return view("formValidate");
    }
    public function passSonuc(Request $islem){
       $islem->validate([
           "adsoyad"=>"required|min:8|max:15",
           "sifre"=>"required|Password|min:8",
       ]);
       echo"Form bilgileri filtreden geçti"; 
       
    }
}
