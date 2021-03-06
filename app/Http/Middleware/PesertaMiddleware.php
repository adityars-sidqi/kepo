<?php

namespace App\Http\Middleware;

use Closure;

class PesertaMiddleware
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
        if (session()->get('jenis') == 'peserta') {
            return $next($request);
        }
        return abort(403);
    }
}
