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

Route::any('/', function () {
    return ['online' => true];
});

Route::group(['prefix' => 'app'], function () {
    Route::any('ls', 'WebAppController@ls');
    Route::any('discover', 'WebAppController@discover');
    Route::any('lan-discover', 'WebAppController@lanDiscover');
    Route::any('download', 'WebAppController@download');
    Route::post('deploy_in_lan', 'PinnedWebAppController@deploy');
});

Route::group(['prefix' => 'sync'], function () {
    Route::any('/', 'SyncController@index');
});

Route::group(['prefix' => 'file'], function () {
    Route::any('/download', 'FileController@download');
});