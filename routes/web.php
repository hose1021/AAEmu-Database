<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', 'WelcomeController@view');

Route::get('/', 'HomeController@view');

Route::group(['prefix' => 'npcs'], function () {
    //All npcs
    Route::get('/all', ['as' => 'npcs_all', 'uses' => 'NpcsController@all']);
    //npcs by grade
    Route::get('/grade/{grade_id}', ['as' => 'npcs_grade', 'uses' => 'NpcsController@view'])->where('grade_id', '[0-9]+');
    //npcs by zone
    Route::get('/zone/{zone_id}', ['as' => 'npcs_zone', 'uses' => 'NpcsController@view'])->where('zone_id', '[0-9]+');
    //Battle Pets
    //Travel
});


