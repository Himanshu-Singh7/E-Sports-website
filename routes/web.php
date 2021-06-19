<?php

use App\Http\Controllers\GamesReg;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
// use App\Http\Controllers\Gamesreg;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Basic vews of all pages
Route::view('/','homepage');
Route::view('homepage','homepage');
Route::view('Games','Games');
Route::view('gallery','Gallery');
Route::view('sponsers','sponsers');
Route::view('news','News');
Route::view('about','About');
Route::view('login','login');
Route::view('register','Register');
Route::view('registerotp','registerotp');
Route::view('passupdate','passupdate');
