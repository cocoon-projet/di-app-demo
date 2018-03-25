<?php
/**
 * Les routes de l'application
 */

Route::get('/', 'ArticlesController@index');
Route::get('/show/{id:\d+}', 'ArticlesController@show');
