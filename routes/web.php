<?php


Route::group(['prefix' => 'items'], function () {
    //GET All items
    Route::get('/', 'ItemsController@view')->name('all_items');

    Route::post('category/{id}', 'ItemsController@ShowItemByCategory')->where('id', '[0-9]+')->name('category_items');

    Route::post('all', 'ItemsController@List')->name('post_all_items');
});

Route::get('/nightmode', 'ThemeController@switchModes')->name('nightmode');

Route::get('/test', 'ItemsController@test');

Route::get('/', 'WelcomeController@view')->name('home');

Route::group(['prefix' => 'npcs'], function () {
    //All npcs
    Route::get('/all', ['as' => 'npcs_all', 'uses' => 'NpcsController@npcs']);
    //npcs by grade
    Route::get('/grade/{grade_id}', ['as' => 'npcs_grade', 'uses' => 'NpcsController@npcs'])->where('grade_id', '[0-9]+');
    //npcs by zone
    Route::get('/zone/{zone_id}', ['as' => 'npcs_zone', 'uses' => 'NpcsController@npcs'])->where('zone_id', '[0-9]+');
    //Battle Pets
    Route::get('/battlepets', ['as' => 'npcs_travel', 'uses' => 'NpcsController@battlepets']);
    //Travel
    Route::get('/travels', ['as' => 'npcs_travel', 'uses' => 'NpcsController@travel']);
});



Auth::routes();

// PROFILE ROUTE

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', 'Profile\ProfileController@view')->name('profile');
    Route::get('character/{id}', 'Profile\ProfileController@character')->name('character');
});

// GUIDE
Route::get('/guide', function()
{
    return view('pages.guide');
})->name('guide');
