<?php

use Illuminate\Support\Facades\Input;

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

if (App::environment('remote')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
  return view('home');
});

Route::get('/download/resume', function()
{
  return Response::download('assets/Build And Release Engineer - Alberto Gonzalez Tajuelo.pdf');
});
