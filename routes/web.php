<?php

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

Route::group([], function () {
    Route::match(['GET', 'POST'], '/', 'IndexController@execute');
    Route::match(['GET', 'POST'], '/services', 'ServicesPageController@execute');
    Route::match(['GET', 'POST'], '/portfolio', 'PortfolioPageController@execute');
    Route::match(['GET', 'POST'], '/contacts', 'ContactsPageController@execute');
    Route::group(['prefix' => 'services'], function () {
        Route::match(['GET', 'POST'], '/{service}', 'ServiceDescPageController@execute');
    });
    Route::group(['prefix' => 'portfolio'], function () {
        Route::match(['GET', 'POST'], '/{work}', 'WorkDescPageController@execute');
    });
});
