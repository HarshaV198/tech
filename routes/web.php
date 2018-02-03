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


//home page related routes

Route::get('/', 'IndexController@index');



Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');

Route::get('/verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('/verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::get('/admin/profile', 'ProfileController@index')->name('profile');

Route::get('/admin/profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');

Route::put('/admin/profile/{id}', 'ProfileController@update')->name('profile.update');



// Super Admin related Routes
Route::group(['namespace' => 'Superadmin'], function() {

    // Management Route
    Route::get('/superadmin/management', 'ManagementController@index')->name('management');

    Route::get('/superadmin/management/{id}/edit', 'ManagementController@edit')->name('user.edit');

    Route::put('/superadmin/management/{id}', 'ManagementController@update')->name('user.update');

    Route::delete('/superadmin/management/{id}', 'ManagementController@destroy')->name('user.destroy');

    // Clients Routes
    Route::get('/superadmin/clients', 'ClientController@index')->name('client');

    Route::get('/superadmin/client/{id}/edit', 'ClientController@edit')->name('client.edit'); 

    Route::put('/superadmin/client/{id}', 'ClientController@update')->name('client.update');

    Route::delete('/superadmin/client/{id}', 'ClientController@destroy')->name('client.destroy');

    // Category Routes
    Route::get('/superadmin/categories', 'CategoryController@index')->name('category');

    Route::post('/superadmin/category/store', 'CategoryController@store')->name('category.store');

    Route::get('/superadmin/category/{id}/edit', 'CategoryController@edit')->name('category.edit');

    Route::put('/superadmin/category/{id}', 'CategoryController@update')->name('category.update');

    // Subcategory Routes
    Route::get('/superadmin/subcategories', 'SubcategoryController@index')->name('subcategory');

    Route::post('superadmin/subcategory/store', 'SubcategoryController@store')->name('subcategory.store');

    Route::get('/superadmin/subcategory/{id}/edit', 'SubcategoryController@edit')->name('subcategory.edit');
});


// Oragnization Admin related Routes
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

    Route::post('/board/edit/save','BoardController@update');

    Route::get('/frontdesk','ServiceController@index');

    Route::post('/service/create','ServiceController@store');

    Route::post('/service/edit/save','ServiceController@update');

    Route::post('/frontdesk/create','FrontDeskController@store');
    
    Route::post('/frontdesk/edit/save','FrontDeskController@update');

    Route::get('/global_settings','GlobalController@index');

    Route::post('/global_setting/store','GlobalController@store');

});

// Satff related routes
Route::group(['namespace' => 'Staff'], function(){

    Route::get('/staff/serve_token', 'ServeTokenController@index')->name('servetoken');

    Route::get('/staff/issue_token', 'IssueTokenController@index')->name('issuetoken');
});




Route::get('/list/view',function(){
    return view('listview');
});

