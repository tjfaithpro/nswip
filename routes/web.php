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

Route::get('/dd', function () {
    return view('emails/test');
});

Route::get('/', 'indexPage@index');
Route::get('/registration', 'registrationController@index');
Route::get('/completeRegistration','HomeController@index')->name('home');
Route::post('/register', 'registrationController@store');
Route::get('/checkEmail', 'registrationController@checkEmail');
// Route::get('/registrationConfirm', 'PhpmailerController@sendEmail');


Route::get('/registrationConfirm','registrationController@confirm');


//clear cache
Route::get('/clear', function () {
    //   Artisan::command('build {project}', function ($project) {
    //     $this->info("Building {$project}!");
    // });
    
        // echo $clearcache = Artisan::call('list');
       
    
        $clearview = Artisan::call('view:clear');
        echo "View cleared<br>";
        
        $clearcache = Artisan::call('cache:clear');
        echo 'Cache cleard<br>';
    
        $clearconfig = Artisan::call('config:cache');
        echo "Config cleared<br>";
        
        // $cleardebugbar = Artisan::call('debugbar:clear');
        // echo "Debug Bar cleared<br>";
    });

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
