<?php

Route::group(['prefix' => env('APP_PREFIX')], function () {
    // CMS
    Route::group(['middleware' => ['auth']], function(){

        Route::group(['namespace' => 'Collections'], function() {
            // Route::get('/collections', 'Collections@index');
            Route::post('/collections', 'Collections@store');
            Route::patch('/collections/{id}', 'Collections@update');
            Route::delete('/collections/{id}', 'Collections@delete');

            Route::get('/collections/delete/{id}', 'Collections@delete');

            Route::get('/collections/{collection}/{page?}', 'Collections@show');
        });
        // Images
        Route::put('/images', 'Images@upload');
        Route::post('/images', 'Images@upload');
        Route::delete('/images/{id}', 'Images@delete');
        // Pages
        Route::group(['namespace' => 'Pages'], function() {
            Route::get('/pages', 'Pages@index');
            Route::delete('/pages/{id}', 'Pages@delete');

            Route::get('/pages/{page}', 'Pages@show');

            Route::post('/pages', 'Pages@store');

            Route::patch('/pages/{id}', 'Pages@update');
        });
        // Fragments
        Route::group(['namespace' => 'Fragments'], function() {

            Route::post('/fragments', 'Fragments@store');
            Route::patch('/fragments/{id}', 'Fragments@update');
            Route::delete('/fragments/{id}', 'Fragments@delete');

        });

        Route::get('/dialog/{type}', 'DialogController@show');
    });
});
