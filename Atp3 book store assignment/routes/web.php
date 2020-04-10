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

//
Route::get('/', 'login@index');
Route::get('/login', 'login@index');
Route::post('/checkuser', 'login@verify');

Route::get('/reg', 'reg@index');
Route::post('/newAccount', 'reg@newAccount');

Route::get('/admin_home', 'admin_home@index');
Route::get('/admin_profile', 'admin_home@profile');
Route::post('/admin_profileUpdate', 'admin_home@admin_profileUpdate');
Route::get('/admin_cl', 'admin_home@custlist');
Route::get('/admin_cl_delete/{id}', 'admin_home@admin_cl_delete');
Route::get('/admin_ul', 'admin_home@userlist');
Route::get('/admin_nb', 'admin_home@newbook');
Route::post('/newbook_2', 'admin_home@newbook_2');


Route::get('/cust_home', 'cust_home@index');
Route::get('/cust_profile', 'cust_home@profile');
Route::post('/cust_profileUpdate', 'cust_home@cust_profileUpdate');

Route::post('/view', 'cust_home@view');
Route::post('/orderNow', 'cust_home@orderNow');
Route::post('/addtocart', 'cust_home@addtocart');
Route::post('/pm_selected', 'cust_home@payment');

Route::get('/cart_payment', 'cust_home@cart_payment');
Route::post('/cart_pm_selected', 'cust_home@cart_pm_selected');
Route::post('/cart_delete', 'cust_home@cart_delete');
Route::get('/cart_order_all', 'cust_home@cart_order_all');





