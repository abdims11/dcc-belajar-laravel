<?php



Route::group(['prefix'=>'admin','middleware' => ['auth','admin']], function() {

	Route::get('/', 'Admin\DashboardController@index')->name('admin');
	Route::get('/userv', 'Admin\DashboardController@user')->name('userv');
	//berita
	Route::Resource('/berita', 'Admin\BeritaController');

	//kategori
	Route::Resource('/kategori', 'Admin\KategoriController');

	//user
	Route::Resource('/user', 'Admin\UserController');
});

