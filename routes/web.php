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

Route::get('/admin/home', 'HomeController@index')->name('home');

Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');



// Route::group(['middleware' => ['auth']], function() {    

//     Route::get('/admin/home', function () {
//         return view('admin.home');
//     });

//     Route::get('/home', function () {
//          return redirect('/admin/home');
//     });

//     // Route::get('/', function () {
//     //      return redirect('/admin/home');
//     // });
// });



