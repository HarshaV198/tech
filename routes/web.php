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

Route::get('/verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('/verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::get('/admin/profile', 'ProfileController@index')->name('profile');

Route::get('/admin/profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');

Route::put('/admin/profile/{id}', 'ProfileController@update')->name('profile.update');


Route::get('superadmin/management', 'Superadmin\ManagementController@index')->name('management');


Route::get('/admin/displayboard', function (){
	return view('admin.organization.displayboard');
});


Route::get('/admin/frontdesk', function (){
	return view('admin.organization.frontdesk');
});

Route::group(['middleware' => ['auth']], function() {    

    Route::post('/user/change_password','UserController@changePassword');

});



