<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ara extends Controller
{
    public function arakatman(){
        return view("middleware");
    }
    public function katmanSonuc(Request $request){
        return $request->ara;
    }
}
