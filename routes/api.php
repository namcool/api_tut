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

Route::get('products','Api\ProductController@index')->name('products.index');
Route::get('products/{id}','Api\ProductController@show')->name('products.show');
Route::post('products','Api\ProductController@store')->name('products.store');
Route::put('products/{id}','Api\ProductController@update')->name('products.update');
Route::patch('products/{id}','Api\ProductController@update')->name('products.update');
Route::delete('products/{id}','Api\ProductController@destroy')->name('products.destroy');
// Route::apiResource('products','Api\ProductController');
