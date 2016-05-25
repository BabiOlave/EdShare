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
// Inicio y menuprincipal
Route::get('menuprincipal', 'MenuController@index');

Route::get('/', function () {
    return view('index'); 
});
Route::get('index', function () {
    return view('index'); 
});
    Route::get('subir', function () {
    return view('welcome');
});
    // Descargar Archivo
Route::get('buscar', function(){
	return view('buscar');
});
Route::get('curso', function(){
    return view('buscar/curso'); 
    });
Route::get('descargar', function(){
    return view('descargar/Download');
});

    Route::get('uploads/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/uploads/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);



});
    // Iniciar Sesion

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);




////-----------////

Route::resource('usuario','UsuarioController');

Route::any('form-submit', function(){
 var_dump(Input::file('file'));
});
// Subir Archivo
Route::post('upload','UploadController@upload');



// Registro



Route::post('registro', 'crud@registro');