<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        /**
         * Apakah user ter authitentikasi atau tidak
         * Lalu memanggil field roles di table users dengan mengecek apakah ADMIN atau bukan
         */
        if (Auth::user() && Auth::user()->roles == 'ADMIN') {
            return $next($request);
        }

        // Jika bukan admin maka di lempar ke halaman utama
        return redirect('/');
    }
}
