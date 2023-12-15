<?php

use Illuminate\Support\Facades\Route;

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


Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');
/*
Route::view('/', 'welcome')->name('welcome');

Route::get('mi/ruta/', ControladorDeLaRuta)
Route::post('mi/ruta/', ControladorDeLaRuta)
Route::put('mi/ruta/', ControladorDeLaRuta)
Route::delete('mi/ruta/', ControladorDeLaRuta)
Route::patch('mi/ruta/', ControladorDeLaRuta)
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/