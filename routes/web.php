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



// Route::get('/', 'ComicController@index')->name('Comic');

//Route::get('/single/{key}', 'SingleController@index')->name('Show');

Route::get('/', 'PageController@home')->name('home');

Route::resource('/comic', ComicController::class);
