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
Route::get('/admin/memberview', function () {
    return view('/admin/memberview');
});
Route::get('/admin/uamuzi', function () {
    return view('/admin/uamuzi');
});
Route::get('/admin/loanofficer', function () {
    return view('/admin/loanofficer');
});
Route::get('/admin/chair', function () {
    return view('/admin/chair');
});



Route::get('/page/dharuraview', 'EmergencyController@index')->name('dharula');
Route::get('/admin/memberview', 'EmergencyController@index')->name('dharula2');
Route::get('/admin/chair', 'EmergencyController@index')->name('dharula3');


Route::get('page/maendeleo', function () {
    return view('/page/maendeleo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('emergency', 'EmergencyController');
// Route::resource('uamuzi', 'DecisionController');
Route::post('uamuzi', 'DecisionController@store')->name('uamuzi.store');

// admin authetication
Route::group(['middleware'=> ['auth','admin']], function(){});

Route::get('/dashboard', function(){
    return view('admin.dashboard');
});
//chairman authetication

Route::group(['middleware'=> ['auth','chair']], function(){});

Route::get('/chair', function(){
    return view('admin.chair');
});

//Loan Oficcer authetication
Route::group(['middleware'=> ['auth','loanofficer']], function(){});

Route::get('/loanofficer', function(){
    return view('admin.loanofficer');
});



