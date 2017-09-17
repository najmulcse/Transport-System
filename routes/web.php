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



Route::post('/login/custom',[

		'uses' => 'LoginController@login',
		'as' => 'login.custom'

]);


Route::group(['middleware' => 'auth'], function(){

	Route::get('/home', 'HomeController@index')->name('home');


	Route::get('/supervisor', 'UserController@supervisor')->name('user.supervisor');

	Route::get('/oilDept', 'UserController@oilDept')->name('user.oilDept');

	Route::get('/mechanicalDept', 'UserController@mechanicalDept')->name('user.mechanicalDept');

	Route::get('/driver', 'UserController@driver')->name('user.driver');



	Route::get('/oilDept/createIssue', 'UserController@oilDeptCreateIssue')->name('oilDept.createIssue');

});


//admin controller ....
Route::group(['middleware' => 'auth','isAdmin'], function(){

		Route::get('/admin', 'UserController@admin')->name('user.admin');
		Route::get('admin/add_member', ['as'=>'add.member','uses'=>'AdminController@addMember']);
		Route::post('admin/add_member', ['as'=>'store.member','uses'=>'AdminController@storeMember']);
		Route::get('admin/all_member', ['as'=>'all.member','uses'=>'AdminController@memberList']);
		Route::get('admin/delete_member/{id}', ['as'=>'delete.member','uses'=>'AdminController@deleteMember']);
});


//Supervisor controller...

Route::group(['prefix'=>'supervisor','middleware' =>'auth'],function(){
		//vehicles
		Route::get('add_vehicle', ['as'=>'add.vehicle','uses'=>'SupervisorController@addVehicle']);

		Route::post('add_vehicle', ['as'=>'store.vehicle','uses'=>'SupervisorController@storeVehicle']);
		Route::get('all_vehicles', ['as'=>'all.vehicles','uses'=>'SupervisorController@allVehicles']);
		Route::get('delete_vehicle/{id}', ['as'=>'delete.vehicle','uses'=>'SupervisorController@deleteVehicle']);

		//drivers
		Route::get('add_driver', ['as'=>'add.driver','uses'=>'SupervisorController@addDriver']);
		Route::post('add_driver', ['as'=>'store.driver','uses'=>'SupervisorController@storeDriver']);

		Route::get('all_drivers', ['as'=>'all.drivers','uses'=>'SupervisorController@allDrivers']);

		Route::get('delete_driver/{id}', ['as'=>'delete.driver','uses'=>'SupervisorController@deleteDriver']);


		//Time & routes

		Route::get('add_time', ['as'=>'add.times','uses'=>'SupervisorController@addTime']);
		Route::post('add_time', ['as'=>'store.time','uses'=>'SupervisorController@storeTime']);
		Route::get('all_times&routes', ['as'=>'all.times.routes','uses'=>'SupervisorController@showTimesAndRoute']);
		Route::get('delete_time/{id}', ['as'=>'delete.time','uses'=>'SupervisorController@deleteTime']);


		Route::get('add_route', ['as'=>'add.route','uses'=>'SupervisorController@addRoute']);
		Route::post('add_route', ['as'=>'store.route','uses'=>'SupervisorController@storeRoute']);
		Route::get('delete_route/{id}', ['as'=>'delete.route','uses'=>'SupervisorController@deleteRoute']);

		//assign vehicles to driver
		Route::get('assign_vehicle', ['as'=>'assign.vehicle','uses'=>'SupervisorController@assignVehicle']);
		Route::post('assign_vehicle', ['as'=>'store.assign.vehicle','uses'=>'SupervisorController@storeAssignVehicle']);
		Route::get('show_assign_vehicles', ['as'=>'show.assign_vehicle','uses'=>'SupervisorController@showAssignVehicles']);
});

Route::get('/something', function(){
	return view('test');
});
