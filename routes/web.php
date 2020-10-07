<?php

//Admin singin and singup Area
Route::get('/admin-login', 'adminloginController@login_form');
Route::post('/admin-login', 'adminloginController@login_form_action');

Route::get('/admin-password-reset', 'adminloginController@admin_password_reset_page');
Route::post('/admin-password-reset', 'adminloginController@admin_password_reset');

Route::get('/admin-reset-code', 'adminloginController@admin_reset_code');
Route::post('/admin-reset-code', 'adminloginController@admin_reset_verify_code');

Route::get('/admin-update-password', 'adminloginController@admin_update_password_page');
Route::post('/admin-update-password', 'adminloginController@admin_update_password');

Route::get('/logout', 'adminloginController@logout');
//---------------------user-----------------

Route::get('/user-login','userLoginController@user_login');
Route::post('/user-login','userLoginController@user_login_action');

///Admin Dashboard Page
Route::get('/admin-dashboard', 'HomeController@home');

Route::get('/', 'HomeController@index');

// Master Setup Controller 

//Company 
Route::get('/company', 'mastersetupController@company_details');
Route::post('/company', 'mastersetupController@companyAdd');
Route::get('/company/delete/{id}', 'mastersetupController@companydelete');
Route::get('/company-info/{id}', 'mastersetupController@compviewbyid');
Route::post('/company/update', 'mastersetupController@companyupdate');

/////user
Route::get('/user', 'mastersetupController@user_details');
Route::post('/user', 'mastersetupController@user_add');
Route::get('/user-info/{id}', 'mastersetupController@user_edit');
Route::post('/user-update', 'mastersetupController@user_update');
Route::get('/user-delete/{id}', 'mastersetupController@user_delete');
Route::get('/user/status/{id}',[
    'uses'=>'mastersetupController@status',
    'as'=>'user_status'
       ]);

//Profile..........................................................................
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/store', 'ProfileController@store')->name('store');
Route::get('/profile/edit/{id}', 'ProfileController@edit')->name('edit');
Route::post('/profile/update', 'ProfileController@update')->name('update');

//------------------SHOP Account..............Expense......................................
Route::get('/daily_expense', 'Stock\AccountController@index'); 
Route::post('/daily_expense/store', 'Stock\AccountController@store'); 
Route::get('/daily_expense/edit/{id}', 'Stock\AccountController@edit'); 
Route::post('/daily_expense/update', 'Stock\AccountController@update'); 
Route::get('/daily_expense/delete/{id}', 'Stock\AccountController@delete'); 
Route::get('/expense_report', 'Shop\ReportController@expensereport');

//Member Create.........................................................................
Route::get('/member', 'MemberController@index'); 
Route::post('/member/store', 'MemberController@memberstore'); 
Route::get('/member/edit/{id}', 'MemberController@memberedit'); 
Route::post('/member/update', 'MemberController@memberupdate'); 
Route::get('/member/delete/{id}', 'MemberController@memberdelete'); 
Route::get('/member/view/{id}', 'MemberController@memberview'); 

//Collection Amount....................................................................
Route::get('/daily_collection_admin', 'CollectionController@collection_admin'); 
Route::get('/daily_collection', 'CollectionController@collection'); 
Route::post('/daily_collection/store', 'CollectionController@collection_store'); 
Route::get('/daily_collection/edit/{id}', 'CollectionController@collection_edit'); 
Route::post('/daily_collection/update', 'CollectionController@collection_update'); 
Route::get('/daily_collection/delete/{id}', 'CollectionController@collection_delete'); 
//kisti Collection.........................................................
Route::get('/kisti_collection_admin', 'KistiController@kisti_admin');
Route::get('/kisti_collection', 'KistiController@kisti');
Route::post('/kisti_collection/store', 'KistiController@kisti_store');
Route::get('/kisti_collection/edit/{id}', 'KistiController@kisti_edit');
Route::post('/kisti_collection/update', 'KistiController@kisti_update');
Route::get('/kisti_collection/delete/{id}', 'KistiController@kisti_delete');

//Loan............................................................................
Route::get('/loan', 'LoanController@index'); 
Route::post('/loan/store', 'LoanController@store'); 
Route::get('/loan/edit/{id}', 'LoanController@edit'); 
Route::post('/loan/update', 'LoanController@update'); 
Route::get('/loan/delete/{id}', 'LoanController@delete'); 
Route::get('/loan/view/{id}', 'LoanController@view'); 
Route::get('/loan/invoice/{id}', 'LoanController@invoice'); 

//Share.................................................
Route::get('/share', 'LoanController@share')->name('share'); 
Route::post('/share/store', 'LoanController@share_store'); 
Route::get('/share/edit/{id}', 'LoanController@share_edit'); 
Route::post('/share/update', 'LoanController@share_update'); 
Route::get('/share/delete/{id}', 'LoanController@share_delete'); 
//MSP.................................................
Route::get('/msp', 'LoanController@msp')->name('msp'); 
Route::post('/msp/store', 'LoanController@msp_store'); 
Route::get('/msp/edit/{id}', 'LoanController@msp_edit'); 
Route::post('/msp/update', 'LoanController@msp_update'); 
Route::get('/msp/delete/{id}', 'LoanController@msp_delete'); 

//All Report.................................
Route::get('/collection_report', 'Shop\ReportController@collection');
Route::get('/kisti_report', 'Shop\ReportController@kisti_collection');
Route::get('/member_collection_report', 'Shop\ReportController@member_collection');
Route::get('/member_collection_report/invoice/{id}', 'Shop\ReportController@member_collection_invoice');
Route::get('/member_kisti_report', 'Shop\ReportController@member_kisti');
Route::get('/member_kisti_report/invoice/{id}', 'Shop\ReportController@member_kisti_invoice');
Route::get('/month_report', 'Shop\ReportController@report_show');
Route::get('/monthly_report', 'Shop\ReportController@monthly_report');
Route::get('/close', 'Shop\ReportController@close');
Route::get('/close_report', 'Shop\ReportController@close_report');
Route::get('/summary', 'Shop\ReportController@summary');
