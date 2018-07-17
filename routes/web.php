<?php

// GET| home
Route::get('/', [
    'uses' => 'PagesController@index',
    'as' => 'pages.home'
]);

// GET | dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// GET | profile
Route::get('/profile', [
    'uses' => 'PagesController@profile',
    'as' => 'pages.profile'
])->middleware('auth');

// GET | profile edit
Route::get('/profile/edit/{id}', [
    'uses' => 'PagesController@profileEdit',
    'as' => 'pages.profileEdit'
])->middleware('auth');

// PATCH | profile update
Route::patch('/profile/update/{id}', [
    'uses' => 'PagesController@profileUpdate',
    'as' => 'pages.profileUpdate'
])->middleware('auth');

// GET | users
Route::get('/users', [
    'uses' => 'UsersController@index',
    'as' => 'users.index'
])->middleware('admin');

// GET | read user
Route::get('/users/show/{id}', [
    'uses' => 'UsersController@show',
    'as' => 'users.show'
])->middleware('admin');

// GET | edit user
Route::get('/users/edit/{id}', [
    'uses' => 'UsersController@edit',
    'as' => 'users.edit'  
])->middleware('admin');

// PATCH | edit user process
Route::patch('/users/update/{id}',[
    'uses' => 'UsersController@update',
    'as' => 'users.update' 
])->middleware('admin');

// DELETE | delete user
Route::delete('/users/delete/{id}',[
    'uses' => 'UsersController@destroy',
    'as' => 'users.delete' 
])->middleware('admin');

Auth::routes();