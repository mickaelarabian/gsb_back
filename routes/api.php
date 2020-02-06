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


// Route::group(['prefix' => 'auth'], function () {
//     Route::post('/login', 'AuthController@login');
//     Route::post('/logout', 'AuthController@logout');
// });

// Route::group(['prefix' => 'services'], function () {
//     //Route::get('/', 'ServiceController@getAllFromUser');
//     Route::get('/show/{id}', 'ServiceController@getService');
// });

Route::get('/services/{id}', 'ServiceController@getService');
Route::get('services/personnel/{id}', 'ServiceController@getAllFromPersonnel');

Route::post('/depenses/create', 'DepenseController@create');