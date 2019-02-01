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

Route::get('/items/all', 'ItemsController@view')->name('all_items');
Route::post('/items/all', 'ItemsController@List')->name('post_all_items');

Route::get('/', 'HomeController@view');

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


