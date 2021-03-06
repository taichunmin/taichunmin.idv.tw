<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('about-me');
});

Route::get('about-me', function(){
	return View::make('about-me');
});

Route::get('experiences', function(){
	return View::make('experiences');
});

Route::get('about-site', function(){
	return View::make('about-site');
});

Route::get('works', function(){
	return View::make('works');
});

Route::get('my-ip', function(){
	$ip = @$_SERVER['HTTP_CLIENT_IP'] ?: (@$_SERVER['HTTP_X_FORWARDED_FOR'] ?: @$_SERVER['REMOTE_ADDR']);
	return $ip;
});

Route::get('skills', 'SkillsController@getIndex');
