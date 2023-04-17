<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Middleware_Login_Admin
{
     /**
      * Handle an incoming request.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
      * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
      */
     public function handle(Request $request, Closure $next)
     {
          if (Auth::check()) {
               return $next($request);
          }
          return redirect('/session_admin')->with('error_session_admin', 'Maaf Anda Diwajibkan Login Terlebih Dahulu');
     }
}
