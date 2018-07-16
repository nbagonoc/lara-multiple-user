<?php

Route::get('/', [
    'uses' => 'PagesController@index',
    'as' => 'pages.home'
]);

Route::get('/admin', [
    'uses' => 'PagesController@admin',
    'as' => 'pages.admin'
])->middleware('admin');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes();