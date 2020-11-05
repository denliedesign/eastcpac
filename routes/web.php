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

Route::get('faculty', function () {
    return view('faculty');
});

Route::get('why-ecpac', function () {
    return view('why-ecpac');
});

Route::get('classes', function () {
    return view('classes');
});

Route::get('camps-and-events', function () {
    return view('camps-and-events');
});

Route::get('parties', function () {
    return view('parties');
});

Route::get('employment', function () {
    return view('employment');
});

Route::get('recital', function () {
    return view('recital');
});

Route::get('teams', function () {
    return view('teams');
});

Route::get('parents', function () {
    return view('parents');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('updates', 'UpdateController');
Route::resource('posts', 'PostController');
