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

Route::get('/', function () {
    return view('auth/login');
});

// Route:: get('/Authentification',function(){
//     return view('Authentification');
// })->name('Authentification');

// Route:: get('home',function(){
//     return view('home');
// })->name('home');

Route:: get('/navbar',function(){
    return view('navbar');
})->name('navbar');

Route::get('aboutUs',function(){
    return view('AboutUs');
})->name('about');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


