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


Route::get('/', 'HomeController@index')->name('admin.home');

Route::group(['namespace'=>'Admin'], function(){
	/* Dashboard */
	Route::get('admin/dashboard', 'DashboardController@index')->name('admin.dashboard');

	/* card type */
	Route::get('admin/card_type/create', 'CardTypeController@create')->name('admin.card_type.create');
	Route::post('admin/card_type/store', 'CardTypeController@store')->name('admin.card_type.store');
	Route::get('admin/card_type/view', 'CardTypeController@index')->name('admin.card_type.view');
	Route::get('admin/card_type/edit/{id}', 'CardTypeController@edit')->name('admin.card_type.edit');
	Route::put('admin/card_type/update/{id}', 'CardTypeController@update')->name('admin.card_type.update');

	/* payment type */
	Route::get('admin/payment_type/create', 'PaymentTypeController@create')->name('admin.payment_type.create');
	Route::post('admin/payment_type/store', 'PaymentTypeController@store')->name('admin.payment_type.store');
	Route::get('admin/payment_type/view', 'PaymentTypeController@index')->name('admin.payment_type.view');
	Route::get('admin/payment_type/edit/{id}', 'PaymentTypeController@edit')->name('admin.payment_type.edit');
	Route::put('admin/payment_type/update/{id}', 'PaymentTypeController@update')->name('admin.payment_type.update');

	/* institute type */
	Route::get('admin/institute_type/create', 'InstituteTypeController@create')->name('admin.institute_type.create');
	Route::post('admin/institute_type/store', 'InstituteTypeController@store')->name('admin.institute_type.store');
	Route::get('admin/institute_type/view', 'InstituteTypeController@index')->name('admin.institute_type.view');
	Route::get('admin/institute_type/edit/{id}', 'InstituteTypeController@edit')->name('admin.institute_type.edit');
	Route::put('admin/institute_type/update/{id}', 'InstituteTypeController@update')->name('admin.institute_type.update');

	/* param */
	Route::get('admin/params/create', 'ParamController@create')->name('admin.params.create');
	Route::post('admin/params/store', 'ParamController@store')->name('admin.params.store');
	Route::get('admin/params/view', 'ParamController@index')->name('admin.params.view');
	Route::get('admin/params/edit/{id}', 'ParamController@edit')->name('admin.params.edit');
	Route::put('admin/params/update/{id}', 'ParamController@update')->name('admin.params.update');

	/* card status */
	Route::get('admin/card_status/create', 'CardStatusController@create')->name('admin.card_status.create');
	Route::post('admin/card_status/store', 'CardStatusController@store')->name('admin.card_status.store');
	Route::get('admin/card_status/view', 'CardStatusController@index')->name('admin.card_status.view');
	Route::get('admin/card_status/edit/{id}', 'CardStatusController@edit')->name('admin.card_status.edit');
	Route::put('admin/card_status/update/{id}', 'CardStatusController@update')->name('admin.card_status.update');

	/* payment status */
	Route::get('admin/payment_status/create', 'PaymentStatusController@create')->name('admin.payment_status.create');
	Route::post('admin/payment_status/store', 'PaymentStatusController@store')->name('admin.payment_status.store');
	Route::get('admin/payment_status/view', 'PaymentStatusController@index')->name('admin.payment_status.view');
	Route::get('admin/payment_status/edit/{id}', 'PaymentStatusController@edit')->name('admin.payment_status.edit');
	Route::put('admin/payment_status/update/{id}', 'PaymentStatusController@update')->name('admin.payment_status.update');

	/* delivery status */
	Route::get('admin/delivery_status/create', 'DeliveryStatusController@create')->name('admin.delivery_status.create');
	Route::post('admin/delivery_status/store', 'DeliveryStatusController@store')->name('admin.delivery_status.store');
	Route::get('admin/delivery_status/view', 'DeliveryStatusController@index')->name('admin.delivery_status.view');
	Route::get('admin/delivery_status/edit/{id}', 'DeliveryStatusController@edit')->name('admin.delivery_status.edit');
	Route::put('admin/delivery_status/update/{id}', 'DeliveryStatusController@update')->name('admin.delivery_status.update');

	/* workflow status */
	Route::get('admin/workflow_status/create', 'WorkflowStatusController@create')->name('admin.workflow_status.create');
	Route::post('admin/workflow_status/store', 'WorkflowStatusController@store')->name('admin.workflow_status.store');
	Route::get('admin/workflow_status/view', 'WorkflowStatusController@index')->name('admin.workflow_status.view');
	Route::get('admin/workflow_status/edit/{id}', 'WorkflowStatusController@edit')->name('admin.workflow_status.edit');
	Route::put('admin/workflow_status/update/{id}', 'WorkflowStatusController@update')->name('admin.workflow_status.update');

	/* order status */
	Route::get('admin/order_status/create', 'OrderStatusController@create')->name('admin.order_status.create');
	Route::post('admin/order_status/store', 'OrderStatusController@store')->name('admin.order_status.store');
	Route::get('admin/order_status/view', 'OrderStatusController@index')->name('admin.order_status.view');
	Route::get('admin/order_status/edit/{id}', 'OrderStatusController@edit')->name('admin.order_status.edit');
	Route::put('admin/order_status/update/{id}', 'OrderStatusController@update')->name('admin.order_status.update');

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
