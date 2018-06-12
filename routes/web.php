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

Route::get('/', function () {
    return view('094007.index');
});
Route::get('/student', function () {
    return view('094007.student');
});
Route::get('/fees', function () {
    return view('094007.fees');
});


Route::post('/student/store', 'StudentController@store');
Route::post('/fees/search','FeesController@search');
