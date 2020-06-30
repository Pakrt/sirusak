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

Route::group(['middleware' => ['checkRole:admin']], function () {
    Route::get('/dokter', 'DoctorController@index');
    Route::post('/dokter/create', 'DoctorController@create');
    Route::get('/dokter/{id}/detail', 'DoctorController@show');
    Route::delete('/dokter/{id}/delete', 'DoctorController@destroy');
    Route::get('/dokter/{id}/edit', 'DoctorController@edit');
    Route::post('/dokter/{id}/update', 'DoctorController@update');

    Route::get('/perawat', 'NurseController@index');
    Route::post('/perawat/create', 'NurseController@create');
    Route::get('/perawat/{id}/detail', 'NurseController@show');
    Route::delete('/perawat/{id}/delete', 'NurseController@destroy');
    Route::get('/perawat/{id}/edit', 'NurseController@edit');
    Route::post('/perawat/{id}/update', 'NurseController@update');

    Route::get('/kamar', 'RoomController@index');
    Route::post('/kamar/create', 'RoomController@create');
    Route::delete('/kamar/{id}/delete', 'RoomController@destroy');
    Route::get('/kamar/{id}/edit', 'RoomController@edit');
    Route::post('/kamar/{id}/update', 'RoomController@update');

    Route::get('/material', 'MaterialController@index');
    Route::post('/material/create', 'MaterialController@create');
    Route::delete('/material/{id}/delete', 'MaterialController@destroy');
    Route::get('/material/{id}/edit', 'MaterialController@edit');
    Route::post('/material/{id}/update', 'MaterialController@update');

    Route::get('/tindakan', 'TindakanController@index');
    Route::post('/tindakan/create', 'TindakanController@create');
    Route::delete('/tindakan/{id}/delete', 'TindakanController@destroy');
    Route::get('/tindakan/{id}/edit', 'TindakanController@edit');
    Route::post('/tindakan/{id}/update', 'TindakanController@update');
});
Route::group(['middleware' => ['checkRole:admin,dokter,perawat']], function () {
    Route::get('/pasien', 'PatientController@index');
    Route::post('/pasien/create', 'PatientController@create');
    Route::get('/pasien/{id}/detail', 'PatientController@show');
    Route::delete('/pasien/{id}/delete', 'PatientController@destroy');
    Route::get('pasien/{id}/edit', 'PatientController@edit');
    Route::post('pasien/{id}/update', 'PatientController@update');

});
