<?php

use App\Hub;
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

Route::get('careers', function () {
    return view('careers');
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

Route::get('/ballet-company-of-east-county', function () {
    return view('/ballet-company-of-east-county');
});

//Route::get('live-stream', function () {
//    return view('live-stream');
//});

Route::get('connect', function () {
    return view('connect');
});

Route::post('connect', function () {
    return view('connect');
});

Route::get('brentwood-kids-dance', function () {
    return view('brentwood-kids-dance');
});

//Route::get('privacy-policy', function () {
//    return view('privacy-policy');
//});

//Route::get('dance-classes-in-stockton-ca', function () {
//    return view('dance-classes-in-stockton-ca');
//});
//
//Route::get('dance-studios-in-stockton-ca', function () {
//    return view('dance-studios-in-stockton-ca');
//});

Route::get('/recital-hub', function () {
    return view('/recital-hub');
});

Route::get('/competition-hub', function () {
    return view('/competition-hub');
});

Route::get('/dance-classes-in-antioch-ca', function () {
    return view('/dance-classes-in-antioch-ca');
});

Route::get('/dance-discovery-bay', function () {
    return view('/dance-discovery-bay');
});

Route::get('/dance-oakley', function () {
    return view('/dance-oakley');
});
Route::get('/dance-lessons-oakley', function () {
    return view('/dance-lessons-oakley');
});
Route::get('/dance-studios-oakley-ca', function () {
    return view('/dance-studios-oakley-ca');
});
Route::get('/dance-studios-discovery-bay', function () {
    return view('/dance-studios-discovery-bay');
});
Route::get('/oakley-dance', function () {
    return view('/oakley-dance');
});


Route::resource('texts', 'TextController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('updates', 'UpdateController');
Route::resource('posts', 'PostController');
Route::resource('hubs', 'HubController');
Route::resource('terms', 'TermController');

Route::get('/hubs/{hub:hubSlug}', function (Hub $hub) {
    return view('hubs.show', compact('hub'));
});
Route::post('/hubs/{hub:hubSlug}', function (Hub $hub) {
    return $hub;
});
