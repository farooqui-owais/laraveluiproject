<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\MainController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::middleware('auth:sanctum')->group( function () {
    Route::get('users','AuthController@users')->name('users');
});*/
Route::group([
    'middleware' => 'api','revalidate',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'
], function ($router) {
    Route::get('users','AuthController@users')->name('users');
    Route::post('login','AuthController@login')->name('loginuser');
    Route::post('register', 'AuthController@register')->name('registeruser');
    //Route::post('logout', 'AuthController@logout')->name('logoutuser');
    Route::post('logout', 'AuthController@logout')->name('logout');
    Route::post('refresh','AuthController@refresh');
    Route::post('me', 'AuthController@me')->name('me');
});

