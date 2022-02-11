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
    return view('user');
});

Route::any('/modifypermissions', 'PermissionsModifier@index');
// Route::group(['prefix'=>'admin','middleware'=>['auth','admin.access'] ],function(){

// 	Route::post('/add-institution', 'AddStructureController@institution');
// 	Route::get('/add-institution', 'AddStructureController@institution');

// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
