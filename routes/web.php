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

// Route::get('/', function () {
//     return view('layout/pageLayout');
// });

Route::get('/', 'indexPage@index');
Route::get('/registration', 'registrationController@index');
Route::post('/register', 'registrationController@store');
Route::get('/registrationConfirm', 'PhpmailerController@sendEmail');

