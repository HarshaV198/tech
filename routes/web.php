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



// Super Admin Routes
Route::group(['namespace' => 'Superadmin'], function() {

    Route::get('/superadmin/management', 'ManagementController@index')->name('management');

    Route::get('/superadmin/management/{id}/edit', 'ManagementController@edit')->name('user.edit');

    Route::put('/superadmin/management/{id}', 'ManagementController@update')->name('user.update');

    Route::delete('/superadmin/management/{id}', 'ManagementController@destroy')->name('user.destroy');

    Route::get('/superadmin/clients', 'ClientController@index')->name('client');

    Route::get('/superadmin/client/{id}/edit', 'ClientController@edit')->name('client.edit'); 

    Route::put('/superadmin/client/{id}', 'ClientController@update')->name('client.update');

    Route::delete('/superadmin/client/{id}', 'ClientController@destroy')->name('client.destroy');
});


// Oragnization Admin Routes
Route::group(['namespace' => 'Admin'], function() {

    Route::get('/organization/staff', 'OrganizationController@index')->name('organization');

    Route::get('/admin/staff/create', 'OrganizationController@create')->name('staff.create');

    Route::post('/admin/staff/store', 'OrganizationController@store')->name('staff.store');

    Route::get('/admin/staff/{id}/edit', 'OrganizationController@edit')->name('staff.edit');

    Route::put('/admin/staff/{id}', 'OrganizationController@update')->name('staff.update');

    Route::delete('/admin/staff/{id}', 'OrganizationController@destroy')->name('staff.destroy');
});


Route::group(['middleware' => ['auth']], function() {    

    Route::post('/user/change_password','UserController@changePassword');

    Route::get('/display_board','BoardController@index');

    Route::post('/board/create','BoardController@store');

    Route::post('//board/edit/save','BoardController@update');

    Route::get('/frontdesk','ServiceController@index');

    Route::post('/service/create','ServiceController@store');

    Route::post('/service/edit/save','ServiceController@update');

    Route::post('/frontdesk/create','FrontDeskController@store');
    
    Route::post('/frontdesk/edit/save','FrontDeskController@update');

});



