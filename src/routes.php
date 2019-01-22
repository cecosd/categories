<?php

Route::get('categories')
->uses('Cecos\Category\CategoriesController@index')
->name('categories');

Route::post('categories')
->uses('Cecos\Category\CategoriesController@store')
->name('store-category');