<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KisiselModel;
class Kisisel extends Controller
{
   public function anasayfa(){
       return view("Kisisel");
   }
   public function ekle(Request $request){
       $adsoyad=$request->adsoyad;
       $tc=$request->tc;
       $il=$request->il;
       $ilce=$request->ilce;
       KisiselModel::create([
           "adsoyad"=>$adsoyad,
           "tc"=>$tc,
           "il"=>$il,
           "ilce"=>$ilce
       ]);
         echo"Veriler eklendi";
   }
}
