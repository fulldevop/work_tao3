<?php

Route::get('/', function () {
	return view('main');
})->name('main');

Route::get('gallery', '\App\Controller\Gallery@all')->name('gallery');
