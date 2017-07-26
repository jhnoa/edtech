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
Route::get('learning','HomeController@learning')->name('myCourse');
Route::get('learning/view','HomeController@course')->name('viewCourse');
Route::get('learning/view/folder','HomeController@makeFolder')->name('makeFolder');
Route::get('learning/view/start-kuis','HomeController@sebelumKuis')->name('sebelumKuis');
Route::get('learning/view/kuis','HomeController@kuis')->name('kuis');

//Survey
Route::get('survey','LandingController@survey')->name('survey');
Route::get('survey/view','LandingController@survey2')->name('surveyView');
Route::get('survey/makeSurvey','LandingController@survey3')->name('surveyMake');

//forum
Route::get('forum','HomeController@forum1')->name('forum');
Route::get('forum/view','HomeController@forum2')->name('forumView');
Route::get('forum/view/detail','HomeController@forum3')->name('forumDetail');
Route::get('forum/view/create','HomeController@forum4')->name('forumCreate');

// Learning Dosen
Route::get('admin/learning', 'HomeController@dosen')->name('adminIndex');
Route::get('admin/assign', 'HomeController@dosenAssign')->name('adminAssign');
Route::get('admin/assign/{course}', 'HomeController@dosenAssignDetail')->name('adminAssignDetail');
Route::get('admin/lecturer', 'HomeController@assignDosenToCourse')->name('assignDosenToCourse');
Route::post('admin/lecturer', 'HomeController@assignDosenToCoursePost')->name('assignDosenToCoursePost');
Route::get('admin/course', 'HomeController@makeCourse')->name('makeCourse');
Route::post('admin/course', 'HomeController@makeCoursePost')->name('makeCoursePost');
Route::get('admin/news', 'HomeController@makeNew')->name('makeNew');
Route::post('admin/news', 'HomeController@makeNewPost')->name('makeNewPost');

//profile
Route::get('profile', 'HomeController@profile1')->name('profile');

//Route::get('home', 'LandingController@index');
//Route::get('logout', 'HomeController@index');
