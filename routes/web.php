<?php


Route::group(['prefix' => 'items'], function () {
    //GET All items
    Route::get('/', 'ItemsController@view')->name('all_items');
    Route::get('anyData', 'ItemsController@getAll')->name('items.data');

});

Route::get('/nightmode', 'ThemeController@switchModes')->name('nightmode');

Route::get('/', 'WelcomeController@view')->name('home');

Route::group(['prefix' => 'npcs'], function () {
    //GET All items
    Route::get('/', 'NpcsController@view')->name('all_npcs');
    Route::get('npcsdata', 'NpcsController@List')->name('npcs.data');

});

Auth::routes();

// PROFILE ROUTE

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', 'Profile\ProfileController@view')->name('profile');
    Route::get('character/{id}', 'Profile\ProfileController@character')->name('character');
});

// GUIDE
Route::get('/guide', function(){
    return view('pages.guide');
})->name('guide');