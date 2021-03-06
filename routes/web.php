<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('layouts.inventory');
});

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth'], 'namespace' => 'Dashboard'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('service', 'DashboardController@service')->name('service');

    // user controller
    Route::resource('users', 'Users\UserListController');

    // supplier controller
    Route::resource('supplier', 'Suppliers\SuppliersController');

    // purchase controller
    Route::resource('purchase', 'Products\Purchase\PurchaseController');
});
