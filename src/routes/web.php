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
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
Route::get('home','HomeController@index');
Route::get('ejemplo1','HomeController@index');
Route::get('/','HomeController@index');

Route::get('/', function () {
    return view('home.index');
});

Route::get('ejemplo', function () {
    return view('home.ejemplo1');
});

Route::get('ejemplo', function () {
    return view('home.ejemplo1');
});

Route::get('/', function () {
    return view('home.welcome');
});
Route::resource('home','HomeController');
// Para Desabilitar la gestion de creacion de usuarios.
Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');

*/

Route::get('/','HomeController@index');

Route::get('home','HomeController@index');

Route::get('atentados','AtentadosController@index');

Route::get('validarcliente','ClientesJsonController@validarcliente');

Route::resource('clientes','ClientesController');

Route::resource('usuarios','UsuariosController');

Route::auth();
