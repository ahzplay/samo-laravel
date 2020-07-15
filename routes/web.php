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
    return view('welcome');
});
/*
Route::get('/factory', function (){
    factory(\App\User::class, 3)->create();
});*/

Route::get('/registration', 'RegistrationController@index');
Route::post('/registrationAction','RegistrationController@registrationAction');
