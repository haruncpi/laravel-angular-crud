<?php

Route::resource('/todos','TodoController');
Route::get('/todo-list','TodoController@getTodos');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
