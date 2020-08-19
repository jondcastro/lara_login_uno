<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request; 

// use App\Http\Controllers\Auth\Auth;

// use Illuminate\Auth\Middleware\Authenticate as Middleware;

// use Illuminate\Support\Facades\Auth;

// use App\User;


// importar para podder trabajar con el Auth
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
     protected function authenticated(Request $request, $user)
     {
        //

        // return $user;

        // return Auth::users();

        // if (Auth::users()) {
        //     # code...
        // }

        if (Auth::user()->role_id === 1) {

            // dd(Auth::user()->role_id);

            // dd($next($request));


            // next($request)

            // return route('dashboard');        

            return redirect('/admin/dashboard');

            // exit;

        }else{

            return redirect('/user/dashboard');



        }

    }

    // public function username()
    // {
    //     return ['email','role_id'];
    // }


    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('panel');
    //     }

    //     // return 'puto';
    // }


     /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
     //sobre escribiendo este metodo
    //  public function showLoginForm()
    //  {
    //     return view('auth.login');
    // }
 }
