<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CekLogin
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
        //pengecekan apakah pengguna sudah memiliki session
        if(Session::has('user')){
            return $next($request);
		}else{
			return redirect('/login')->with('error', 'Anda Harus Login Terlebih Dahulu');
		}
    }
}
