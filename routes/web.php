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

Route::get('/','PagesController@getHome');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');
Route::get('/home','PagesController@getHome');
Route::get('/plans','PagesController@getPlans');
Route::get('/login','PagesController@getLogin');
Route::get('/loginwin','PagesController@getLoginWin');

Route::get('/AdminLogin','PagesController@getAdminLogin');
Route::get('/StaffLogin','PagesController@getStaffLogin');

Route::get('/messages','MessagesController@getMessages');


Route::post('/contact/submit','MessagesController@submit');

Route::post('AdminLogin/checklogin','MainController@checklogin');
Route::get('AdminLogin/adminmenu','MainController@successlogin');
Route::get('AdminLogin/logout','MainController@logout');
