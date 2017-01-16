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
//	Route::controller('admin/auth'	, 'AuthController' 	); 	
	//Route::controller('admin/destination'	, 'DestinationController' 	); 	
	//Route::controller('admin/holidayhome'	, 'HolidayhomeController' 	); 	
	//Route::controller('admin/banner'	, 'BannerController' 	); 	
	//Route::controller('admin/settings'	, 'SettingsController' 	); 	
});
