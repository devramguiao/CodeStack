<?php
Route::get('/', 'LoginController@index')->name('login');
Route::post('login', 'LoginController@login');

Route::middleware('auth')->group(function() {
	Route::resource('tasks', 'ToDoController');
	Route::get('logout', 'LoginController@logout');
});
