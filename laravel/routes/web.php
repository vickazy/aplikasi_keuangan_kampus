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

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/mahasiswa', 'MahasiswaController@index' )->name ('mahasiswa');
=======
>>>>>>> e97ebe228fa8ec8b7b8aa7cf40913bc46db8def3
>>>>>>> e0c37e699f92790e3f55ea5f7078828344a78d91
=======
<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
>>>>>>> 7bd1b8541fc7737ead37155eca430eb70e2e350a
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
<<<<<<< HEAD
 
=======
>>>>>>> e97ebe228fa8ec8b7b8aa7cf40913bc46db8def3
>>>>>>> 7bd1b8541fc7737ead37155eca430eb70e2e350a
>>>>>>> 3478376f421014261027730e029fbcad3b8de29e
