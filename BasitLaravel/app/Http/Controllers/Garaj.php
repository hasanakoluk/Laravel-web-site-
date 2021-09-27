<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;
class Garaj extends Controller
{
    public function araclar(){
        return view("Car");
    }
    public function olustur(REQUEST $request){
         $marka=$request->marka;
         $model=$request->model;
         $tip=$request->tip;
         $aciklama=$request->tip;
         CarModel::create([
              "marka"=>$marka,
              "model"=>$model,
              "tip"=>$tip,
              "aciklama"=>$aciklama,
         ]);
         echo"İşlem Başarılı";
    }
}
