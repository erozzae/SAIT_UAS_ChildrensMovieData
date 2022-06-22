<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('welcome');
});

//index
Route::get('/children', 'ChildrensDataController@index')->name('childrensData.index');

// //create
// Route::get('/children/create', 'ChildrensDataController@create')->name('childrensData.create');
// Route::post('/children/addstore', 'ChildrensDataController@store' );

// //update
// Route::post('/children/edit/{id}', 'ChildrensDataController@edit')->name('childrensData.edit');
// Route::PUT('/children/update/{id}', 'ChildrensDataController@update')->name('childrensData.update');

// //delete
// Route::post('/children/delete/{id}','ChildrensDataController@destroy')->name('childrensData.destroy');


//get childrens data api

//get data api
Route::get('/children/getChildrensApi', 'GetApiChildrensDataController@index')->name('childrensData.api');

//add data api
Route::get('/children/addDataApi', 'GetApiChildrensDataController@create')->name('addData.api');
Route::post('/children/storeApi', 'GetApiChildrensDataController@store')->name('storeData.api');

//delete
Route::get('/children/deleteDataApi/{id}', 'GetApiChildrensDataController@destroy')->name('delete.api');

//edit data
Route::POST('/children/editChildrenApi/{id}', 'GetApiChildrensDataController@edit')->name('edit.api');
Route::POST('/children/updateChildrenApi/{id}', 'GetApiChildrensDataController@update' )->name('update.api');


//Movie
Route::get('/movie/getMovieKids', 'GetMovieKidsApiController@index')->name('movieKids.api');



