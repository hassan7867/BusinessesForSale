<?php

use Illuminate\Support\Facades\Route;

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

Route::get('sell-private-business/{countryId}',"\App\Http\Controllers\UserController@registerPrivateSellerPage");
Route::post('save-basic-details',"\App\Http\Controllers\UserController@saveBasicDetails");
Route::get('pricing-table',"\App\Http\Controllers\UserController@openPricingPage");
Route::post('get-categories',"\App\Http\Controllers\UserController@getCategories");
Route::post('get-cities',"\App\Http\Controllers\UserController@getCities");
Route::post('save-listing-details',"\App\Http\Controllers\UserController@saveListingDetails");
Route::post('save-business-details',"\App\Http\Controllers\UserController@saveBusinessDetails");
