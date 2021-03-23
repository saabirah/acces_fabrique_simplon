<?php

namespace App\Http\Middleware;

use Closure;

class Statut
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   /*  origine example*/
   /* public function handle($request, Closure $next)
    {
        if(auth()->user()->statut == 1){  
                      return $next($request);
                            }
                                       return redirect(‘home’)->with(‘error’,"You don't have admin access.");
    }
}*/
    public function handle($request, Closure $next)
        {
            if(auth()->user()->statut == 1){  
                        return $next($request);
                        }elseif(auth()->user()->statut == 0){
                                    return redirect(‘home’)
                                }                     
             return redirect(‘welcome’)->with(‘error’,"You don't have admin access.");
        }
}