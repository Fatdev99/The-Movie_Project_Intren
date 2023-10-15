<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::id() == null){
            return redirect()-> route('movie.login')->with('error', 'Bạn chưa đăng nhập. Vui lòng đăng nhập để sử dụng chức năng này');
        }

        elseif (Auth::id() != 1){
            return redirect()-> route('movie.login')->with('error', 'Bạn phải đăng nhập bằng tài khoản admin để sử dụng chức năng này');
        }

        return $next($request);
    }
}
