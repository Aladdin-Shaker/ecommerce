<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // authunticated admin
        if (Auth::guard($guard)->check()) {
            return $next($request);
        }
        // not authenticated admin
        else {
            return redirect('admin/login');
        }
    }
}
