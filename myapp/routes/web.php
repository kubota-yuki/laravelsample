<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('hello','App\Http\Controllers\HelloController@index');
Route::get('hello/show','App\Http\Controllers\HelloController@show');
Route::get('hello/add','App\Http\Controllers\HelloController@add');
Route::post('hello/add','App\Http\Controllers\HelloController@create');
Route::get('hello/edit','App\Http\Controllers\HelloController@edit');
Route::post('hello/edit','App\Http\Controllers\HelloController@update');
Route::get('hello/del','App\Http\Controllers\HelloController@del');
Route::post('hello/del','App\Http\Controllers\HelloController@remove');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('music','App\Http\Controllers\MusicController@date');
Route::get('music/choose','App\Http\Controllers\MusicController@choose');
Route::get('music/time','App\Http\Controllers\MusicController@time');
Route::get('music/check','App\Http\Controllers\MusicController@check');
Route::get('music/finish','App\Http\Controllers\MusicController@finish');
Route::get('music/loguin','App\Http\Controllers\MusicController@login');
