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

Route::view('/', 'home.index')->name('home');
Route::view('/program', 'program.index')->name('program');
Route::view('/contacts', 'contacts.index')->name('contacts');
Route::view('/sponsor', 'sponsor.index')->name('sponsor');
Route::view('/thesis', 'thesis.index')->name('thesis');

Route::middleware('guest')->group(function () {
    Route::view('login', 'login.index')->name('login');
});

Route::redirect('/home', '/')->name('home.redirect');
