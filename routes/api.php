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

//Route has a /api prefix so has to be added when calling it
//For example 192.168.10.10/api/login or localhost::8000/api/login

Route::post('/login', 'APIController@login');
Route::get('/test', 'APIController@test');
Route::get('/logout', 'APIController@logout');
