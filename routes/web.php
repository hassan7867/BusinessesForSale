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
Route::get('optimize-app', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize');
    return "done!";
});
Route::get('clear-env', function () {
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    return "done!";
});
Route::get('sell-private-business/{countryId}/{priceId}',"\App\Http\Controllers\UserController@registerPrivateSellerPage");
Route::post('save-basic-details',"\App\Http\Controllers\UserController@saveBasicDetails");
Route::get('pricing-table/{countryId}',"\App\Http\Controllers\UserController@openPricingPage");
Route::post('get-categories',"\App\Http\Controllers\UserController@getCategories");
Route::post('get-cities',"\App\Http\Controllers\UserController@getCities");
Route::post('save-listing-details',"\App\Http\Controllers\UserController@saveListingDetails");
Route::get('list',"\App\Http\Controllers\FrontController@openList");
Route::post('save-subscription-details',"\App\Http\Controllers\UserController@saveSubscriptionDetails");
Route::post('finalize-wizard',"\App\Http\Controllers\UserController@finalizeWizard");
Route::get('user-login',"\App\Http\Controllers\UserController@userlogin");
Route::post('login-user-api',"\App\Http\Controllers\UserController@loginUserApi");
Route::post('login-user-request',"\App\Http\Controllers\UserController@userloginRequest");

//user dashboard urls
Route::get('user-dashboard',"\App\Http\Controllers\UserDashboardController@userDashboard")->middleware('CheckSession');
Route::get('user-logout',"\App\Http\Controllers\UserDashboardController@userLogout")->middleware('CheckSession');
Route::get('resources',"\App\Http\Controllers\UserDashboardController@resources")->middleware('CheckSession');
Route::get('user-profile',"\App\Http\Controllers\UserDashboardController@userProfile")->middleware('CheckSession');
Route::post('change/password',"\App\Http\Controllers\UserDashboardController@changePassword");

//Admin Dashboard URLS
Route::get('admin-dashboard',"\App\Http\Controllers\AdminController@adminDashboard");
