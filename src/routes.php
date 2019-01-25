<?php

Route::group(['prefix' => 'categories', 'middleware' => ['web', 'auth']], function () {
    Route::get('/')
        ->uses('Cecos\Category\CategoriesController@index')
        ->name('categories');

    Route::post('/')
        ->uses('Cecos\Category\CategoriesController@store')
        ->name('store-category');

    Route::post('/{category}')
        ->uses('Cecos\Category\CategoriesController@destroy')
        ->name('destroy-category');
});

