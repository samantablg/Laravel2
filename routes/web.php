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

Route::get('/users', 'userController@show');

Route::get('/user/{id}', 'userController@showUser');

Route::get('/tutu/{id}', 'userController@showInvoice');

Route::get('/nameUser/{id}', 'userController@showName');

Route::get('/profile/{id}', 'userController@getProfile');

Route::get('/profile/search/{id}', 'userController@getInvoice');

Route::get('/fallo', function () {
    return 'Fallo';
});

Route::get('/peticion', function () {
    return 'peticion Aceptada';
})->middleware('Login');
