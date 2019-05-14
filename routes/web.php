<?php

Route::get('/', 'CrudController@index')->name('home');
Route::post('/save', 'CrudController@save')->name('save');
Route::get('/update/{id}', 'CrudController@updateIndex')->name('updateView');
Route::post('/update', 'CrudController@update')->name('update');
Route::post('/delete/{id}', 'CrudController@delete')->name('delete');
