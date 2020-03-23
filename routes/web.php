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
    return view('welcome');
});

Auth::routes();

Route::get('/edit/{id}', 'HomeController@edit');
Route::get('/delete/{id}', 'HomeController@delete');
Route::post('/register', 'HomeController@register');
Route::get('/add', 'HomeController@showRegistrationForm');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/updateUserData', 'HomeController@updatedata');