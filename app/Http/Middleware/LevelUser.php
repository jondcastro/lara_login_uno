<?php

namespace App\Http\Middleware;

use Closure;
// importar para podder trabajar con el Auth
use Illuminate\Support\Facades\Auth;

class LevelUser
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


        // if (Auth::user()->role_id === 1) {

        //     // dd(Auth::user()->role_id);

        //     // dd($next($request));


        //     // next($request)

        //     // return route('dashboard');        

        //     return redirect('/panel');

        //     // exit;

        // }


        if (!Auth::user()->role_id === 2) {

            // dd(Auth::user()->role_id);

            // dd($next($request));


            // next($request)

            // return route('dashboard'); 

            // return 'puto';       

            return redirect('/');

            // exit;

        }


        // if (!Auth::user()->role_id === 1) {

        //     // dd(Auth::user()->role_id);

        //     // dd($next($request));


        //     // next($request)

        //     // return route('dashboard');        

        //     return redirect('/home');

        //     // exit;

        // }else{

        //     return redirect('/user/dashboard');



        // }


        // if (Auth::user()->role_id === 2) {

        //     // dd(Auth::user()->role_id);

        //     // dd($next($request));


        //     // next($request)

        //     // return route('dashboard');        

        //     return redirect('/user/dashboard');

        //     // exit;

        // }






        // else{

        //     return redirect('/user/dashboard');

        // }


        //  if (Auth::user()->role_id === 2) {

        //     return redirect('/panel');

        //     // exit;

        // }

        // estoy es necesario por que si esta vacion hay un error de token

        return $next($request);

        // return 'pu';
    }
}
