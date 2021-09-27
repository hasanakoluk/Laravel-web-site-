<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Frmkontrol
{
   
    public function handle(Request $request, Closure $next)
    {
        if($request->mtn=='küfür'){
             return redirect()->back();
        }
        return $next($request);
    }
}
