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

Route::get('/page/dharura', function () {
    return view('/page/dharura');
});
// Route::get('/page/dharuraview', function () {
//     return view('/page/dharuraview');
// });

Route::get('/page/dharuraview', 'EmergencyController@index')->name('dharula');

Route::get('page/maendeleo', function () {
    return view('/page/maendeleo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('emergency', 'EmergencyController');

Route::group(['middleware'=> ['auth','admin']], function(){});
Route::get('/dashboard', function(){
    return view('admin.dashboard');
});





