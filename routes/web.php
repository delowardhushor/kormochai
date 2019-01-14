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


Route::group(['middleware' => 'auth'], function(){
    Route::resource('employees', 'EmployeesController');
    Route::post('/employees/update', 'EmployeesController@update');
    Route::resource('employers', 'EmployersController');
    Route::resource('jobs', 'JobsController');
    Route::post('/intervalJob', 'JobsController@intervalJob');
    Route::resource('applications', 'EmployeesJobsController');
    Route::post('/employees/login', 'EmployeesController@login');
    Route::post('/employers/login', 'EmployersController@login');
    Route::resource('locations', 'LocationsController');
    Route::resource('cats', 'CatsController');
    Route::resource('educatives', 'EducativesController');
    Route::post('/dellocations' ,'LocationsController@destroy');
    Route::post('/delcats' , 'CatsController@destroy');
    Route::post('/deledue' , 'EducativesController@destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
