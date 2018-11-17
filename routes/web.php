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
Route::get('/signup','PagesController@getSignup');
Route::get('/next','PagesController@getNext');

Route::get('/AdminLogin','PagesController@getAdminLogin');
Route::get('/StaffLogin','PagesController@getStaffLogin');
Route::get('/customers','PagesController@getCustomers');

Route::get('/messages','MainController@getMessages');
Route::get('/customers','CustomerController@getCustomers');

Route::Auth();
Route::post('/contact/submit','MessagesController@submit');

Route::post('AdminLogin/checklogin','MainController@checklogin');
Route::get('/adminmenu','MainController@successlogin');
Route::get('/AdminLogin/logout','MainController@logout');

Route::post('StaffLogin/checklogin','StaffController@checklogin');
Route::get('/staffmenu','StaffController@successlogin');
Route::get('StaffLogin/logout','StaffController@logout');

Route::post('customerlogin/checklogin','CustomerController@checklogin');
Route::get('/customermenu','CustomerController@successlogin');
Route::get('/logout','CustomerController@logout');

Route::post('/signup/store','CustomerController@store');
Route::post('/signup/finish','CustomerController@submit');
