<?php
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Frmislem;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\Kisisel;
use App\Http\Controllers\ResimYukle;
use App\Http\Controllers\DosyaYukle;
use App\Http\Controllers\Marka;
use App\Http\Controllers\Garaj;
use App\Http\Controllers\Yukle;
use App\Http\Controllers\ValidateForm;
use App\Http\Controllers\passProject;
use App\Http\Controllers\ValSample;
use App\Http\Controllers\Ara;
use App\Http\Controllers\Midd;
/*Route::get('/ornek', function () {
    return view('ornek');
});   */
//Route::get("/phpturkiye/{isim}",[Ornek::class,"test"]);

Route::get('/web',[Yonet::class,'site']);
Route::get('/form',[Formislemleri::class,'gorunum']);
Route::middleware('arakontrol')->post('/form-sonuc',[Formislemleri::class,'sonuc'])->name("sonuc");
Route::get("/frm",[Frmislem::class,'goruntu']);
Route::middleware('aracntrl')->post("/frm-snc",[Frmislem::class,'snc'])->name("snc");
Route::get("/ekle",[Veritabaniislemleri::class,"ekle"]);
Route::get("/guncelle",[Veritabaniislemleri::class,"guncelle"]);
Route::get("/sil",[Veritabaniislemleri::class,"sil"]);
Route::get("/listele",[Veritabaniislemleri::class,"listele"]);
Route::get("/modelliste",[Modelislemleri::class,"liste"]);
Route::get("/modelEkle",[Modelislemleri::class,"modelEkle"]);
Route::get("/iletisim",[Iletisim::class,"index"]);
Route::post("/iletisim-sonuc",[Iletisim::class,"ekleme"])->name("iletisim-sonuc");
Route::get("/kisisel",[Kisisel::class,"anasayfa"]);
Route::post("/kisisel-sonuc",[kisisel::class,"ekle"])->name("kisisel-sonuc");
Route::get("/upload",function(){
  return view("upload");
});
Route::post("/resim-ilet",[ResimYukle::class,"resimYukleme"])->name("yukle");
Route::get("/yukleme",function(){
  return view("yukleme");
});
Route::post("/yukle-ilet",[DosyaYukle::class,"dosyaYukleme"])->name("yuklemeİslemi");
Route::get("/markalar",[Marka::class,"Ilet"]);
Route::get("/listele",[Marka::class,"Lst"]);
Route::get("/guncelle",[Marka::class,"Gnc"]);
Route::get("/carr",[Garaj::class,"araclar"]);
Route::post("/carr-sonuc",[Garaj::class,"olustur"])->name("carr-sonuc");
Route::get("/yukle",function(){
  return view("yukle");
});
Route::post("/yukle-getir",[Yukle::class,"Islem"])->name("getir");
Route::get("/validate",[ValidateForm::class,"valitadeFonksiyon"]);
Route::post("/validate-sonuc",[ValidateForm::class,"filtreFonksiyon"])->name("validateSnc");
Route::get("/ilkİslem",[PassProject::class,"passOrnek"]);
Route::post("/ilkİslem-sonuc",[PassProject::class,"passSonuc"])->name("pSonuc");
Route::get("/valGetir",[ValSample::class,"valFonk"]);
Route::post("/valGetirSonuc",[ValSample::class,"valFonkSonuc"])->name("valSonuc");

Route::get("/tema",function(){
  return view("tema");
});

Route::get("/about",function(){
    return view("sayfalar.about");
});
Route::get("/portfolio",function(){
  return view("sayfalar.portfolio");
});
Route::get("/contact",function(){
  return view("sayfalar.contact");
});

Route::get("/foto",function(){
 /*  $img=Image::make('orneksite.jpg')->resize('300','300');
   $img->save("islenmis.jpg");
   return $img->response("jpg"); */
   return view('foto');
});
Route::post("/fotoYukle",function(){
  Image::make(Request()->file('foto'))->resize(300, 300)->save('formfoto.jpg');
})->name('yukle');

Route::get("/opacity",function(){
    return view('opaklık');
});
Route::post("/opacitySonuc",function(){
  Image::make(Request()->file('opaklık'))->resize(300, 300)->opacity(50)->save('opakfoto.jpg');
})->name("opakForm");
Route::get("/middleware",[Ara::class,"arakatman"]);
Route::middleware("Aracontrol")->post("/middlewareSonuc",[Ara::class,"katmanSonuc"])->name("ara");
Route::get("/midd",[Midd::class,"middGetir"]);
Route::middleware("Cntrl")->post("/middSonuc",[Midd::class,"middPost"])->name("sonuc");