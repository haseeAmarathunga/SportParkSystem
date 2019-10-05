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
// pass controller function to views

//pagecontroller function
Route::get('/','PagesController@getHome');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');
Route::get('/home','PagesController@getHome');
Route::get('/plans','PagesController@getPlans');
Route::get('/login','PagesController@getLogin');
Route::get('/loginwin','PagesController@getLoginWin');
Route::get('/signup','PagesController@getSignup');
Route::get('/next','PagesController@getNext');
Route::get('/staffupdate','PagesController@getStaffUpdate');
Route::get('/notices','MessagesController@viewNotices');
Route::get('/staffpasschange','PagesController@getStaffPassChange');
Route::get('/messageinbox','PagesController@getMessageInbox');
Route::get('/AdminLogin','PagesController@getAdminLogin');
Route::get('/StaffLogin','PagesController@getStaffLogin');
Route::get('/customers','PagesController@getCustomers');
Route::get('/staffnextreg','PagesController@getStaffNext');
//end of pagecontroller function

Route::get('/viewadminstaff','StaffController@getStaffAdmin');

Route::get('/messages','MainController@getMessages');
Route::get('/staffreg','MainController@StaffReg');

Route::post('/staffreg/finish','StaffController@submit');

Route::get('/customers','CustomerController@getCustomers');

Route::Auth();
Route::post('/contact/submit','MessagesController@submit');
Route::get('/messageinbox','MessagesController@viewInbox');//staff message

Route::get('/viewcustomer','StaffController@getCustomerUsers');


Route::POST('/messagereply','MessagesController@replyMessage');
Route::POST('/newmessageadmin','MessagesController@NewMessageadmin');
Route::POST('/newmessagestaff','MessagesController@NewMessagestaff');
Route::POST('newmessage','MessagesController@sendMessageCustomer');
Route::POST('/addnotice','MessagesController@addNotice');

Route::POST('/deletenotice','MessagesController@deleteNotice');
//sendemail
Route::POST('/sendemail','MessagesController@sendEmail');

Route::post('AdminLogin/checklogin','MainController@checklogin');
Route::get('/adminmenu','MainController@successlogin');
Route::get('/AdminLogin/logout','MainController@logout');
Route::get('/groupallocate','MainController@allocateGroup');
Route::post('/allocatetrainer','MainController@AddTrainer');

Route::post('StaffLogin/checklogin','StaffController@checklogin');
Route::get('/staffs','StaffController@successlogin');
Route::get('StaffLogin/logout','StaffController@logout');
Route::post('/staffreg/store','StaffController@store');
Route::post('/staffs/update','StaffController@update');
Route::post('/staffs/passchange','StaffController@changePass');
Route::post('/customers/passchange','CustomerController@changePass');


Route::get('/staffs','StaffController@getStaff');
Route::get('/staffupdate','StaffController@getStaff2');
Route::get('/staffpasschange','StaffController@getStaff3');

Route::post('customerlogin/checklogin','CustomerController@checklogin');
Route::get('/customermenu','CustomerController@successlogin');
Route::get('/logout','CustomerController@logout');

Route::post('/signup/store','CustomerController@store');
Route::post('/signup/finish','CustomerController@submit');

Route::post('/customers/update','CustomerController@update');

Route::get('/customerpasschange','CustomerController@getCustomers2');
Route::get('/updatecustomer','CustomerController@getCustomers3');
Route::post('/package','CustomerController@getPackage');

//Adminsidie customer routing
Route::get('/customersopp','AdimnSideCustomerController@index');
Route::get('/cus_profile/{nic}','AdimnSideCustomerController@profile');
Route::get('/cus_attendence/{nic}','AdimnSideCustomerController@attendence');
Route::get('/cus_shedule/{nic}','AdimnSideCustomerController@shedule');
Route::get('/cus_payment/{nic}','AdimnSideCustomerController@payment');
Route::get('/cus_delete','AdimnSideCustomerController@delete');

Route::resource('/addschedule','addscheduleController');
Route::get('/cus_delete_sch/{id}/{nic}','addscheduleController@destroy');
Route::get('/cus_mark_sch/{row1}/{row2}/{row3}/{row4}/{row5}/{row6}','MarkController@senddata');

Route::resource('/Mark','MarkController');
//admin payment
Route::resource('/pay','PaymentController');
//print Bill
Route::get('/print_bill/{id}/{nic}/{type}/{pfm}/{date}/{fee}','PaymentController@pdf');
//print Scheduls
//cus_print_sch/'.$data1.'/'.$data2.'/'.$data3.'/'.$data4.'/'.$data5.'/'.$data6.'/'.$data7
Route::get('cus_print_sch/{nic}','addscheduleController@printsche');
//cus_mark_sch/'.$val['nic']
Route::get('/cus_mark_sch/{nic}','MarkController@viewAttendence');
