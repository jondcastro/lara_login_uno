<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
comandos recurrentes a utilizar
php artisan make:migration create_users_table --create=users

php artisan make:migration add_votes_to_users_table --table=users


php artisan make:controller UserController -r

php artisan make:model Flight -m

*/

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
