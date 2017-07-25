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
Route::get('survey/view','LandingController@survey2')->name('surveyView');
Route::get('survey/makeSurvey','LandingController@survey3')->name('surveyMake');

//forum
Route::get('forum','LandingController@forum1')->name('forum');
Route::get('forum/view','LandingController@forum2')->name('forumView');
Route::get('forum/view/detail','LandingController@forum3')->name('forumDetail');
Route::get('forum/view/create','LandingController@forum4')->name('forumCreate');

// Learning Dosen
Route::get('admin/learning', 'HomeController@dosen')->name('adminIndex');
Route::get('admin/assign', 'HomeController@dosenAssign')->name('adminAssign');
Route::get('admin/assign/{course}', 'HomeController@dosenAssignDetail')->name('adminAssignDetail');
Route::get('admin/lecturer/{id}', 'HomeController@assignDosenToCourse')->name('assignDosenToCourse');
Route::post('admin/lecturer/{id}/{course}', 'HomeController@assignDosenToCoursePost')->name('assignDosenToCoursePost');
Route::get('admin/course', 'HomeController@makeCourse')->name('makeCourse');
Route::post('admin/course', 'HomeController@makeCoursePost')->name('makeCoursePost');

//profile
Route::get('profile', 'LandingController@profile1')->name('profile');

//Route::get('home', 'LandingController@index');
//Route::get('logout', 'HomeController@index');
