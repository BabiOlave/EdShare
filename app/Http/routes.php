<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('buscar', function(){
	return view('buscar');


});

Route::get('login', function(){
	return view('login');

	

});
Route::get('form', function(){
 return View::make('create');
});

Route::any('form-submit', function(){
 var_dump(Input::file('file'));
});
// Route::get('create', 'StorageController@index');
Route::post('upload','UploadController@upload');
Route::resource('pelicula','MovieController');
Route::get('upload', function() {
  return View::make('create');
});
Route::post('apply/upload', 'ApplyController@upload');
Route::get('descargar','UploadController@downloadFile');