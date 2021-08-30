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

Route::get('sell-private-business/{countryId}/{priceId}',"\App\Http\Controllers\UserController@registerPrivateSellerPage");
Route::post('save-basic-details',"\App\Http\Controllers\UserController@saveBasicDetails");
Route::get('pricing-table/{countryId}',"\App\Http\Controllers\UserController@openPricingPage");
Route::post('get-categories',"\App\Http\Controllers\UserController@getCategories");
Route::post('get-cities',"\App\Http\Controllers\UserController@getCities");
Route::post('save-listing-details',"\App\Http\Controllers\UserController@saveListingDetails");
Route::get('list',"\App\Http\Controllers\FrontController@openList");
Route::post('save-business-details',"\App\Http\Controllers\UserController@saveBusinessDetails");
Route::post('save-subscription-details',"\App\Http\Controllers\UserController@saveSubscriptionDetails");
Route::post('finalize-wizard',"\App\Http\Controllers\UserController@finalizeWizard");
