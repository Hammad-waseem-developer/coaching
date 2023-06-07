<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


            if(session()->has('admin_email') && session()->has('admin_password') ){

                return $next($request);
            }
            // return redirect('/dashboard');
        else{
            return redirect('/login');
        }
    }
}
