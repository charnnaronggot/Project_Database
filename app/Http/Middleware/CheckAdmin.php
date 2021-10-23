<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class CheckAdmin
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

        return $next($request); 
    //     $status = Auth::user() -> status;
    //     $user = Auth::user() -> name ;
    //     if($user == "EMANUEL"){
    //         $status = "admin" ;
    //     } 
       
    //     if ($status == "admin" ) {
    //         return $next($request); 
    //     }else

    //     return redirect('dashboard');

        
     }
}
