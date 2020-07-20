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

Route::get('/samo', 'HomeController@home');
Route::get('/registration', 'RegistrationController@index');
Route::get('/testingEmail', 'RegistrationController@kirimEmail');
Route::post('/registrationAction','RegistrationController@registrationAction');
Route::get('/registrationEmailVerification/{verifiedToken}/{email}','RegistrationController@registrationEmailVerification');
Route::get('/login', 'LoginController@index');
Route::post('/loginAction', 'LoginController@loginAction');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/userProfile', 'UserProfileController@index');
Route::post('/getProdukTani', 'UserProfileController@getProdukTani');
Route::post('/addProdukTani', 'UserProfileController@addProdukTani');
Route::post('/deleteProdukTani', 'UserProfileController@deleteProdukTani');
