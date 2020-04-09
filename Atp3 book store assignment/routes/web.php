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

Route::get('/', 'login@index');
Route::get('/login', 'login@index');
Route::post('/checkuser', 'login@verify');

Route::get('/reg', 'reg@index');
Route::post('/newAccount', 'reg@newAccount');

Route::get('/admin_home', 'admin_home@index');
Route::get('/cust_home', 'cust_home@index');

