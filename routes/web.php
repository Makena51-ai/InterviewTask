<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('users', 'HomeController@index')->name('users');

Auth::routes();

Route::get('users', 'HomeController@index')->name('users');


Route::get('users',[UserController::class, 'users']);
Route::get('delete/{id}',[UserController::class, 'delete']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
