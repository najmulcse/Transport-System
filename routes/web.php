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

	Route::get('/admin', 'UserController@admin')->name('user.admin');

	Route::get('/supervisor', 'UserController@supervisor')->name('user.supervisor');

	Route::get('/oilDept', 'UserController@oilDept')->name('user.oilDept');

	Route::get('/mechanicalDept', 'UserController@mechanicalDept')->name('user.mechanicalDept');

	Route::get('/driver', 'UserController@driver')->name('user.driver');



	Route::get('/oilDept/createIssue', 'UserController@oilDeptCreateIssue')->name('oilDept.createIssue');

});


//admin controller ....

Route::get('admin/add_member', ['as'=>'add.member','uses'=>'AdminController@addMember']);
Route::post('admin/add_member', ['as'=>'store.member','uses'=>'AdminController@storeMember']);
Route::get('admin/all_member', ['as'=>'all.member','uses'=>'AdminController@memberList']);
Route::get('admin/delete_member/{id}', ['as'=>'delete.member','uses'=>'AdminController@deleteMember']);


Route::get('/something', function(){
	return view('test');
});
