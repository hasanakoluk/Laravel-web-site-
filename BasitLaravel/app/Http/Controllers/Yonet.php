<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site(){
        $data["yazi1"]="Hasan Akoluk";
        $data["yazi2"]="Hoşgeldiniz";
        $data["yazi3"]="Hizmetlerimiz";
        $data["yazi4"]="Web Tasarım ve Yazılım hizmetlerimiz";
        $data["yazi5"]="Bize Ulaşın";
        $data["yazi6"]="Çalışmalar Ve Prensipler";
        $data["yazi7"]="Sağlam Temalar";
        $data["yazi8"]="Temalarımız, hatasız kalmaları için düzenli olarak güncellenmektedir!";
        $data["yazi9"]="Güncel";
        $data["yazi10"]="Her şeyi taze tutmak için tüm bağımlılıklar güncel tutulur.";
        $data["yazi11"]="Teknoloji Takibi";
        $data["yazi12"]="Yeni yazılım teknolojilerini takip ediyoruz!";
        $data["yazi13"]="İşimizi Seviyoruz";
        $data["yazi14"]="Daha verimli çalışmalarımızın sebebi kodlamaya olan aşkımızdır!";
        $data["yazi15"]="İletişime Geçin";
        $data["yazi16"]="Bir sonraki projenize bizimle başlamaya hazır mısınız? Bizi arayın veya bize bir e-posta gönderin, mümkün olan en kısa sürede size geri döneceğiz!";
        
        return view("web",$data);
    }
}
