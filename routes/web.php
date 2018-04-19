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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Get all Students record route
Route::get('/home','StudentController@getallStudents');

//Insert Students record route Route
Route::post('/insertStudent','StudentController@InsertStudent');

//Delete Students record route Route
Route::get('/deleteStudent/delete/{student}','StudentController@deleteStudent');

//Update Students record route
//Route::post('/UpdateStudent/update','StudentController@updateStudent');
Route::post('/UpdateStudent/update','StudentController@updateStudent');