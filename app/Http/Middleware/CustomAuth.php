<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomAuth
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
            $path = $request->path();
            if (($path == 'login' || $path == 'register') && Session::has('user')) {
                return redirect('list');
            }
            elseif(($path!='login' && !Session::has('user')) && ($path!='register' && !Session::has('user')))
            {
                return redirect('login');
            }
            return $next($request);

     

        
    }
}
