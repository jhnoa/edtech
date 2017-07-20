<?php

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

Route::get('/','LandingController@index')->name('index');

// Authentication
Auth::routes();


// Learning Mahasiswa
Route::get('learning','LandingController@learning')->name('myCourse');
Route::get('learning/view','LandingController@course')->name('viewCourse');
Route::get('learning/view/folder','LandingController@makeFolder')->name('makeFolder');
Route::get('learning/view/start-kuis','LandingController@sebelumKuis')->name('sebelumKuis');
Route::get('learning/view/kuis','LandingController@kuis')->name('kuis');

//Survey
Route::get('survey','LandingController@survey')->name('survey');


// Learning Dosen
Route::get('admin/learning', 'HomeController@dosen')->name('adminIndex');

//Route::get('home', 'LandingController@index');
//Route::get('logout', 'HomeController@index');
