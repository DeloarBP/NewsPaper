<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//Use Route
Route::prefix('user')->namespace('User')->group(function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::post('data', 'UserController@getData')->name('user.data');
    Route::get('create', 'UserController@create')->name('user.create');
    Route::post('store', 'UserController@store')->name('user.store');
    Route::get('{user}/edit', 'UserController@edit')->name('user.edit');
    Route::post('{user}/update', 'UserController@update')->name('user.update');
    Route::get('{user}/show', 'UserController@show')->name('user.show');
    Route::put('{user}/approve', 'UserController@approveToggle')->name('user.approve');
    Route::delete('{user}/delete', 'UserController@delete')->name('user.delete');
});

//Categorys
Route::prefix('category')->namespace('Category')->group(function () {
    Route::get('/', 'CategoryController@index')->name('category.index');
    Route::get('/create', 'CategoryController@create')->name('category.create');
    //Route::get('categories/create', 'CategoryController@example')->name('category.create');

    Route::get('sub_categories', 'CategoryController@sub_categories')->name('category.sub_category');
   // Route::get('sub_categories', 'CategoryController@example')->name('category.sub_cat_create');
});


//Settings
Route::prefix('settings')->namespace('Configurations')->group( function (){
    Route::get('/', 'SettingsController@index')->name('settings.index');
    Route::get('/create', 'SettingsController@create')->name('settings.create');
    Route::post('/store', 'SettingsController@store')->name('settings.store');
    Route::get('/{settings}/edit', 'SettingsController@edit')->name('settings.edit');
    Route::put('/{settings}/update', 'SettingsController@update')->name('settingsupdate');
    Route::post('/data', 'SettingsController@getData')->name('settings.data');
    Route::put('{settings}/approve', 'SettingsController@approveToggle')->name('settings.approve');
    Route::delete('{settings}/delete', 'SettingsController@delete')->name('settings.delete');
});
