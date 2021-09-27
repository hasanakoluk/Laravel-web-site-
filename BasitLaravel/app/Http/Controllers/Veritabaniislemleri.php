<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class Veritabaniislemleri extends Controller
{
    public function ekle(){
       DB::table("bilgiler")->insert([
           "metin"=>"Php'yi seviyorum"."<br>"
       ]);
    }
    public function guncelle(){
        DB::table("bilgiler")->update([
            "metin"=>"Tablo güncelleme işlemi"
        ]);
 }
    public function sil(){
        DB::table("bilgiler")->where("id",3)->delete();
    }
    public function listele(){
      /*  $veriler=DB::table("bilgiler")->get();   
       foreach($veriler as $key => $value ){       //sadece metin bölümünü listelemek için kullanılır
           echo $value->metin;
           echo "<br>";
       }  */

       $veri=DB::table("bilgiler")->where("id",4)->first();  // metin alanındaki id si 4 olan satırı listeler
       echo $veri->metin;
    }    

}