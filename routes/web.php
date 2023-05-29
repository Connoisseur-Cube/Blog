<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', 'App\Http\Controllers\PageController@login')->name('login');

Route::get('/signup','App\Http\Controllers\PageController@signup')->name('signup');

Route::post('/register','App\Http\Controllers\PageController@register')->name('register');

Route::post('/login','App\Http\Controllers\PageController@log_in');

Route::post('/logout','App\Http\Controllers\PageController@logout')->name('logout');


