<?php

// home
Route::get('/', [
    'uses' => 'PagesController@index',
    'as' => 'pages.home'
]);

// dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// admin
Route::get('/admin', [
    'uses' => 'PagesController@admin',
    'as' => 'pages.admin'
])->middleware('admin');

Auth::routes();