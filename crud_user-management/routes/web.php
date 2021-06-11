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

Route::get('/', function () {
    echo "test server";
    // return view('welcome');
});

// Route::get('/login', function () {
//     return view('login');
// });

//Route::get('/login', [loginController::class,'index']);

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verification');

Route::get('/registration','registrationController@index');
Route::post('/registration','registrationController@verification');

Route::get('/home','homeController@index');
Route::get('/logout','logoutController@index');

Route::get('/user/create', 'userController@create');
Route::post('/user/create', 'userController@createUser');
Route::get('/user/all', 'userController@all');


Route::get('/user/edit/{id}', 'userController@editUser');
Route::get('/user/delete/{id}', 'userController@deleteUser');
