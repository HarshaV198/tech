<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/board/edit/view','BoardController@editView');
Route::post('/board/delete','BoardController@delete');
Route::post('/service/edit/view','ServiceController@editView');
Route::post('/service/delete','ServiceController@delete');
Route::post('/config/edit/view','FrontDeskController@editView');
Route::post('/config/delete','FrontDeskController@delete');
