<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Formandsystem\Content\Controllers'], function(){

    // Route::get('/collections', 'Collections@index');
    Route::post('/collections', 'Collections@store');
    Route::patch('/collections/{id}', 'Collections@update');
    Route::delete('/collections/{id}', 'Collections@delete');

    Route::get('/collections/delete/{id}', 'Collections@delete');

    Route::get('/collections/{collection}/{page?}', 'Collections@show');
    // Images
    Route::put('/images', 'Images@upload');
    Route::post('/images', 'Images@upload');
    Route::delete('/images/{id}', 'Images@delete');
    // Pages
    Route::get('/pages', 'Pages@index');
    Route::delete('/pages/{id}', 'Pages@delete');

    Route::get('/pages/{page}', 'Pages@show');

    Route::post('/pages', 'Pages@store');

    Route::patch('/pages/{id}', 'Pages@update');
    // Fragments

    Route::post('/fragments', 'Fragments@store');
    Route::patch('/fragments/{id}', 'Fragments@update');
    Route::delete('/fragments/{id}', 'Fragments@delete');

    Route::get('/dialog/{type}', 'DialogController@show');
});
