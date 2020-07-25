<?php

use App\Exams;
use Illuminate\Http\Request;
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
Route::get('/student-profile-edit','StudentProfileController@Edit')->name('student-profile-edit')->middleware('verified');
Route::post('/student-profile-edit','StudentProfileController@update')->name('student-profile-update')->middleware('verified');

Route::get('/admin-exam-index','ExamsController@index')->name('exam-index')->middleware('verified');
Route::get('/admin-exam-show','ExamsController@create')->name('exam-show')->middleware('verified');
Route::post('/admin-exam-store','ExamsController@store')->name('exam-store')->middleware('verified');
Route::get('/admin-exam-edit/{id}','ExamsController@edit')->name('exam-edit')->middleware('verified');
Route::post('/admin-exam-update','ExamsController@update')->name('exam-update')->middleware('verified');

Route::post('/admin-exam-edit-information', function(Request $request) {
    return Exams::find($request->id);
})->name('exam-get-information-show')->middleware('verified');


Route::get('/exam-init/{id}','ExamsController@examInit')->name('exam-init')->middleware('verified');
