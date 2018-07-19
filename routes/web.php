<?php

// GET| home
Route::get('/', [
    'uses' => 'PagesController@index',
    'as' => 'pages.home'
]);

// GET | dashboard
Route::get('/dashboard', [
    'uses'=>'DashboardController@index',
    'as'=>'pages.dashboard'
]);

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
])->middleware('moderator');

// GET | users data using dataTable
Route::get('/users/data', [
    'uses' => 'UsersController@indexData',
    'as' => 'users.indexData'
])->middleware('moderator');

// GET | read user
Route::get('/users/show/{id}', [
    'uses' => 'UsersController@show',
    'as' => 'users.show'
])->middleware('moderator');

// GET | edit user
Route::get('/users/edit/{id}', [
    'uses' => 'UsersController@edit',
    'as' => 'users.edit'  
])->middleware('moderator');

// PATCH | edit user process
Route::patch('/users/update/{id}',[
    'uses' => 'UsersController@update',
    'as' => 'users.update' 
])->middleware('moderator');

// DELETE | delete user
Route::delete('/users/delete/{id}',[
    'uses' => 'UsersController@destroy',
    'as' => 'users.delete' 
])->middleware('moderator');

Auth::routes();