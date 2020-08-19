<?php

namespace App\Http\Middleware;

use Closure;
// importar para podder trabajar con el Auth
use Illuminate\Support\Facades\Auth;

class LevelAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request).'puto';

    //     // return 'puto';
    // }

    public function handle($request, Closure $next, $guard = null)
    {

        // return $guard;
        //si no estoy autenticado me redirecciona
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');

        //     // return redirect('/algo');

        //     // return 'puto';
        // }


        // dd(Auth::guard($guard)->check());

        // dd(Auth::user()->role_id);


        // if (Auth::user()->role_id === 2) {

        //     // dd(Auth::user()->role_id);

        //     // dd($next($request));


        //     // next($request)

        //     // return route('dashboard');        

        //     // return redirect('/panel');

        //     // exit;

        // }else{

        //     return route('panel');
        // }

        //  if (Auth::user()->role_id === 2) {

        //     return redirect('/panel');

        //     // exit;

        // }

        // return $next($request);

        // return 'pu';
    }
}
