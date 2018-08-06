<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class TaiKhoanMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->phanquyen == 'admin') {
                return $next($request);
            } else {
                return redirect('/');
            }
        } else {
            return redirect()->route('dangnhap');
        }
    }
}
