<?php
//Onur Akman
//CST-323
//01/10/2021
//This is my own work
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

//GET
Route::get('/', 'App\Http\Controllers\NavigationController@showHome')->name('home');
Route::get('/joke', 'App\Http\Controllers\NavigationController@showJoke')->name('joke');
Route::get('/joke/share', 'App\Http\Controllers\NavigationController@showShare')->name('share');
//POST
Route::post('joke/share/result', 'App\Http\Controllers\NavigationController@shareJoke')->name('result');
