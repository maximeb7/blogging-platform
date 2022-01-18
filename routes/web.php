<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;

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


Route::get('/login', 'App\Http\Controllers\AuthenticatedSessionController@create' )
->middleware('guest')
->name('login');

Route::get('/register', 'App\Http\Controllers\RegisteredUserController@create')
                ->middleware('guest')
                ->name('register');

Route::get('/{username}/{slug_post}/edit-post', 'App\Http\Controllers\PostController@editView')->name('post.edit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::delete('/delete/{id}', 'App\Http\Controllers\PostController@delete')->name('delete.post');
#Region Blog

#RegionPost
Route::post('/create_post', 'App\Http\Controllers\PostController@create')->middleware('auth');
Route::post('/update_post/{id}', 'App\Http\Controllers\PostController@update')->middleware('auth');
Route::get('/', 'App\Http\Controllers\PostController@index');

Route::get('/{username}', 'App\Http\Controllers\PostController@getUserPost' )->name('post.user');
Route::get('/{username}/{slug_post}','App\Http\Controllers\PostController@show' )->name('post.see');


require __DIR__.'/auth.php';




