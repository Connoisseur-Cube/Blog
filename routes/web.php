<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Models\Post;

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
    $posts = Post::latest()->get();
    return view('welcome', compact('posts'));

})->name('welcome');

Route::get('/login', 'App\Http\Controllers\PageController@login')->name('login');

Route::get('/signup','App\Http\Controllers\PageController@signup')->name('signup');

Route::post('/register','App\Http\Controllers\PageController@register')->name('register');

Route::post('/login','App\Http\Controllers\PageController@log_in');

Route::post('/logout','App\Http\Controllers\PageController@logout')->name('logout');

Route::get('/profile', 'App\Http\Controllers\PageController@profile')->name('profile');

Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit');

Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');
Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show')->name('posts.show');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit');
Route::put('/posts/{post}', 'App\Http\Controllers\PostController@update')->name('posts.update');
Route::delete('/posts/{post}', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');


