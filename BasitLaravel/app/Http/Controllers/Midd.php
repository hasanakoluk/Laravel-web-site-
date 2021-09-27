<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Midd extends Controller
{
    public function middGetir(){
        return view("midd");
    }
    public function middPost(Request $request){
        return $request->ara;
    }
}
