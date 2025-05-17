<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth('admin')->check()) {
            if (auth('admin')->user()->isactive == 0) {
                auth('admin')->logout();
                return redirect()->route('admin.login')->withErrors(['username' => 'Tài khoản của bạn đã bị khóa vui lòng liên hệ admin.']);
            }
            return $next($request);
        }
        return redirect()->guest(route('admin.login'));
    }
}
