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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');

Route::get('/pasien', 'PatientController@index');
Route::post('/pasien/create', 'PatientController@create');
Route::get('/pasien/{id}/detail', 'PatientController@show');
Route::delete('/pasien/{id}/delete', 'PatientController@destroy');
Route::get('pasien/{id}/edit', 'PatientController@edit');
Route::post('pasien/{id}/update', 'PatientController@update');
