<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::User()->is_role == 1) {
                return $next($request);
            } else {
                Auth::logout();
                return redirect(url('login'));
            }
        } else {
            Auth::logout();
            return redirect(url('login'));
        }
    }
}
