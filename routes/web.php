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

Route::get('/' , function () {

    return view('welcome');

});

Route::get('/PhoneBook', function () {

$data=App\PhoneBook::all() ;    
return view('PhoneBook')->with('lists',$data) ;

});




Route::post('/Phone-Book_Save','PhoneBookController@store');

Route::get('/notwork/{id}','PhoneBookController@updatework');
Route::get('/work/{id}','PhoneBookController@updatenotwork');
Route::get('/deletework/{id}','PhoneBookController@deletework');

Route::get('/updatework/{id}','PhoneBookController@update');

Route::post('/update','PhoneBookController@updatedata');
