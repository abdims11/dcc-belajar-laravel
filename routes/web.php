<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@homeApp')->name('home');
Route::get('/apps', 'Apps\DashboardController@index')->name('apps');


