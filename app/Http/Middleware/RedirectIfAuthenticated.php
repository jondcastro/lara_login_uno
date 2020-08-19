<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //si no estoy autenticado me redirecciona
        if (Auth::guard($guard)->check()) {
            return redirect('/home');

            // return redirect('/algo');

            // return 'puto';
        }

        return $next($request);

        // return 'pu';
    }
}
