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
    return view('dashboard');
});

Route::get('/', ['uses' => 'App\Http\Controllers\PatientController@index', 'as' => 'patient_register']);
Route::post('/add_patient', ['uses' => 'App\Http\Controllers\PatientController@add_patient', 'as' => 'add_patient']);


// Route::group(['middleware' => 'auth'], function () {
//     // Route::get('/login', ['uses' => 'App\Http\Controllers\Auth\LoginController@login', 'as' => 'login']);
//     Route::get('/login', ['uses' => 'App\Http\Controllers\Auth\LoginController@login', 'as' => 'login']);
//     Route::get('/patient_register', ['uses' => 'App\Http\Controllers\PatientController@index', 'as' => 'patient_register']);
// });
