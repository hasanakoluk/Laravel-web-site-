<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Aracontrol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
   
            if($request->ara=="yasak"){
                   return redirect()->back();
            }
               
        return $next($request);
    }
}
