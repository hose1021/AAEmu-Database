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

Route::get('/', function () {
	$data=DB::select("SELECT * FROM items");
	$result = json_decode(json_encode($data,true), true);
	foreach ($result as $item) {
		echo $item['name'] . '<br>';
	}
    return view('welcome');
});
