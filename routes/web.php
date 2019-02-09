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
    Route::resource('partners', 'PartnersController');
    Route::resource('clients', 'ClientsController');
    Route::resource('jobs', 'JobsController');
    Route::resource('clientservices', 'ClientservicesController');
    Route::resource('partnerservices', 'PartnerservicesController');
    Route::post('/intervalJob', 'JobsController@intervalJob');

    Route::post('/job/update', 'JobsController@update');
    Route::resource('applications', 'EmployeesJobsController');
    Route::post('/employees/login', 'EmployeesController@login');
    Route::post('/employers/login', 'EmployersController@login');
    Route::resource('locations', 'LocationsController');

    Route::resource('cats', 'CatsController');

    Route::resource('parcats', 'ParcatsController');
    Route::post('/parcats/addqus', 'ParcatsController@addqus');
    Route::post('/parcats/delqus', 'ParcatsController@delqus');


    Route::resource('clicats', 'ClicatsController');
    Route::post('/clicats/addqus', 'ClicatsController@addqus');
    Route::post('/clicats/delqus', 'ClicatsController@delqus');

    Route::resource('educatives', 'EducativesController');
    Route::post('/dellocations' ,'LocationsController@destroy');
    Route::post('/delcats' , 'CatsController@destroy');
    Route::post('delclicats', 'ClicatsController@destroy');
    Route::post('delparcats', 'ParcatsController@destroy');
    Route::post('/deledue' , 'EducativesController@destroy');

    Route::get('/printjob/{id}' , "JobsController@print");
    Route::get('/printser/{id}' , "PartnerservicesController@print");
    Route::get('/printserreq/{id}' , "ClientservicesController@print");


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/pendingjob', 'HomeController@pendingjob');
Route::get('/sentsms', 'JobsController@sentsms');


