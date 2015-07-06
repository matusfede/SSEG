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

// Ruta de Inicio
Route::get('/', function () {
    //return view('welcome');
    return view('sitio.inicio');
});

// Rutas de Autentificacion...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Rutas de Registro...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Rutas del Sitio...
//Route::any('/home', 'Sitio\SitioController@Inicio');

// Rutas del Sistema
Route::any('/home', 'Dashboard\SistemaController@inicio');