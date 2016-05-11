<?php

echo "Hello Word";

Route::get('/', function () {
    return view('welcome');
});
Route::get('registro', function(){
	return view('registrar');

//el simon vale callampa