<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'PagesController@index'); //@index is the function in the PagesController
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/posts', 'PagesController@posts');

Route::resource('posts', 'PostsController');

