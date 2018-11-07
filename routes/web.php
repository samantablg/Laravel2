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

Use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/all', function () {
    $aUser =  User::all();

    foreach ($aUser as $uUser) {
        echo $uUser -> id . "<br>";
    }
});

Route::get('/users', 'userController@mostrar');

Route::get('/user/{id}', 'userController@mostrarUsuario');

Route::get('/{id}', 'userController@mostrarInvoice');

Route::get('/nameUser/{id}', 'userController@mostrarName');
