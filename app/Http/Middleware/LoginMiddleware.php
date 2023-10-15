<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::id() == 1){
            return redirect()->route('movie.index')->with('warning', 'Bạn đã đăng nhập. Vui lòng đăng xuất trước');
        }

        elseif (Auth::id() > 0 && Auth::id() != 1){
            return redirect()->route('movie.index')->with('warning', 'Bạn đã đăng nhập. Vui lòng đăng xuất trước');
        }

        return $next($request);
    }
}
