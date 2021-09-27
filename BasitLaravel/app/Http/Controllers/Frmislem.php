<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frmislem extends Controller
{
    public function goruntu(){
        return view("frm");
    }
    public function snc(Request $request){
        return $request->mtn;
    }
}
