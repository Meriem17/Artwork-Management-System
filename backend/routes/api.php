<?php


Route::group([
    'middleware' => 'api',
    'prefix' => 'artiste'
], function () {
    Route::get('index', 'App\Http\Controllers\ArtisteController@index');
    Route::post('store', 'App\Http\Controllers\ArtisteController@store');
    Route::get('show/{id}', 'App\Http\Controllers\ArtisteController@show');
    Route::put('update/{id}', 'App\Http\Controllers\ArtisteController@update');
    Route::delete('destroy/{id}', 'App\Http\Controllers\ArtisteController@destroy');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'ouvrage'
], function () {
    Route::get('index', 'App\Http\Controllers\OuvrageController@index');
    Route::post('store', 'App\Http\Controllers\OuvrageController@store');
    Route::get('show/{id}', 'App\Http\Controllers\OuvrageController@show');
    Route::put('update/{id}', 'App\Http\Controllers\OuvrageController@update');
    Route::delete('destroy/{id}', 'App\Http\Controllers\OuvrageController@destroy');
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'signature'
], function () {
    Route::get('index', 'App\Http\Controllers\SignatureController@index');
    Route::post('store', 'App\Http\Controllers\SignatureController@store');
    Route::get('show/{id}', 'App\Http\Controllers\SignatureController@show');
    Route::put('update/{id}', 'App\Http\Controllers\SignatureController@update');
    Route::delete('destroy/{id}', 'App\Http\Controllers\SignatureController@destroy');
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'acquisition'
], function () {
    Route::get('index', 'App\Http\Controllers\AcquisitionController@index');
    Route::post('store', 'App\Http\Controllers\AcquisitionController@store');
    Route::get('show/{id}', 'App\Http\Controllers\AcquisitionController@show');
    Route::put('update/{id}', 'App\Http\Controllers\AcquisitionController@update');
    Route::delete('destroy/{id}', 'App\Http\Controllers\AcquisitionController@destroy');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'image'
], function () {


    Route::post('uploadFile', 'App\Http\Controllers\ImageController@file');
    Route::get('index', 'App\Http\Controllers\ImageController@index');


});