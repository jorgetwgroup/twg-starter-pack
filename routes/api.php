<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



// API V1
Route::group([ 'prefix' => '/v1'], function() {

    Route::post('/login', 'Api\v1\AuthController@authenticate');

    Route::group([ 'middleware' => 'auth.jwt'], function() {

        Route::get('/test', 'Api\v1\AuthController@test');

        // Brand
        Route::post('/brand', 'Api\v1\BrandController@store');

    });
    
});

