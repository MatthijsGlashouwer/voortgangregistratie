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
	return View::make('home');
});

Route::get('/checklist', function()
{
	return View::make('checklist');
});

Route::get('/createchecklist', function()
{
	return View::make('createchecklist');
});

Route::get('/group', function()
{
	return View::make('group');
});

Route::get('/checklisttest', function()
{
	return View::make('checklisttest');
});

Route::get('/creategroup', function()
{
	return View::make('creategroup');
});
Route::get('/project', function()
{
	return View::make('project');
});
Route::get('/createproject', function()
{
	return View::make('createproject');
});

Route::get('/contact/{id}', 'userController@index');
Route::get('/contact/update/{id}', 'userController@update');

Route::get('/projecten', function()
{
	return View::make('projecten');
});

Route::get( '/leereenheden', function()
{
	return View::make('leereenheden');
});

Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/tables', function()
{
	return View::make('table');
});


Route::get('/leereenheid', function()
{
	return View::make('leereenheid');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');