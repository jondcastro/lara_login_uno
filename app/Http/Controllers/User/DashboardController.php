<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

// use App\Http\Middleware\RedirectIfAuthenticated;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // si estoy autenticado tengo acceso
        // $this->middleware('auth');

        $this->middleware('level.user');

        // si estoy autenticado tengo acceso
        $this->middleware('auth');

        //si no estoy autenticado me redirecciona
        // $this->middleware('guest');

        // primero agregarlo en el kernel.php
        // $this->middleware('test');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.dashboard');
    }

}
