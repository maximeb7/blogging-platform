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

//  Route::get('/', function () {
//      return view('home');
//  });

//Route::get('/', function () {
//    return view('home', 'App\Http\Controllers\PostController@index');
//});
Route::get('/login', 'App\Http\Controllers\AuthenticatedSessionController@create' )
->middleware('guest')
->name('login');

Route::get('/register', 'App\Http\Controllers\RegisteredUserController@create')
                ->middleware('guest')
                ->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

#Region Blog
//Route::post('/create_blog', 'App\Http\Controllers\BlogController@create')->middleware('auth');


#RegionPost
Route::post('/create_post', 'App\Http\Controllers\PostController@create')->middleware('auth');
Route::get('/', 'App\Http\Controllers\PostController@index');
// Route::get('/{username}/{slug_post}', function (){
//     return view('view-post');
// })->name('post.see');

Route::get('/{username}', 'App\Http\Controllers\PostController@getUserPost' )->name('post.user');
Route::get('/{username}/{slug_post}','App\Http\Controllers\PostController@show' )->name('post.see');






require __DIR__.'/auth.php';




