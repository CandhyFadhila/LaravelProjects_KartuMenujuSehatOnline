<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Middleware_Login_Users
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
          return redirect('/session_users')->with('error_session_user', 'Maaf Anda Diwajibkan Login Terlebih Dahulu');
     }
}
