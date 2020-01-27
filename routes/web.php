<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@homeApp')->name('home');

Route::group(['prefix'=>'apps','middleware' => ['auth','apps']], function() {
    Route::get('/', 'Apps\DashboardController@index')->name('apps');	
});


