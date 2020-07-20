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
    return redirect('home');
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/student-profile', 'StudentProfileController@index')->name('student-profile-index')->middleware('verified');
Route::get('/student-profile-create', 'StudentProfileController@create')->name('student-profile-create')->middleware('verified');
Route::post('/student-profile-store','StudentProfileController@store')->name('student-profile-store')->middleware('verified');
/* Route::get('/student-profile-edit','StudentProfileController@Edit')->name('student-profile-edit')->middleware('verified'); */
