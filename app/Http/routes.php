<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::controller('destinations', 'DestinationController');
Route::controller('touroperators', 'OperatorController');
//Route::get('holidayhomes/{state_id}', 'HolidayhomeController@index');
Route::get('holidayhomes', 'HolidayhomeController@getIndex');
Route::controller('holidayhomes/{state_id}', 'HolidayhomeController');
Route::controller('contactus', 'ContactController');
Route::controller('member', 'MemberController');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
	//'password' => 'Auth\PasswordController',
//]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'auth/login' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

	
Route::group(['namespace'=> 'Admin' , 'middleware' => 'auth'] , function(){	
    Route::controller('admin/dashboard'	, 'DashboardController' 	); 
    Route::controller('admin/destination'	, 'DestinationController' 	); 
//	Route::controller('admin/auth'	, 'AuthController' 	); 	
	//Route::controller('admin/destination'	, 'DestinationController' 	); 	
	//Route::controller('admin/holidayhome'	, 'HolidayhomeController' 	); 	
	//Route::controller('admin/banner'	, 'BannerController' 	); 	
	//Route::controller('admin/settings'	, 'SettingsController' 	); 	
});
