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


// SEND EMAIL

// Route::any ( 'sendemail', function () {
//     if (Request::get ( 'message' ) != null)
//         $data = array (
//                 'bodyMessage' => Request::get ( 'message' ) 
//         );
//     else
//         // $data [] = '';
//     Mail::send ( 'email', $data, function ($message) {
        
//         $message->from ( 'faithakpeghughu@gmail.com', 'Just Laravel' );
        
//         $message->to ( Request::get ( 'toEmail' ) )->subject ( 'Just Laravel demo email using SendGrid' );
//     } );
//     return Redirect::back ()->withErrors ( [ 
//             'Your email has been sent successfully' 
//     ] );
// } );

