<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'cors'], function(){
    Route::resource('employees', 'EmployeesController');
    Route::post('/employees/update', 'EmployeesController@update');
    Route::resource('employers', 'EmployersController');
    Route::resource('jobs', 'JobsController');
    Route::post('/clients', 'ClientsController@store');
    Route::post('/partners', 'PartnersController@store');
    Route::post('/intervalJob', 'JobsController@intervalJob');
    Route::resource('applications', 'EmployeesJobsController');
    Route::post('/employees/login', 'EmployeesController@login');
    Route::post('/employers/login', 'EmployersController@login');
    Route::post('/clients/login', 'ClientsController@login');
    Route::post('/partners/login', 'PartnersController@login');

    Route::post('/employees/exist', 'EmployeesController@exist');
    Route::post('/employers/exist', 'EmployersController@exist');
    Route::post('/clients/exist', 'ClientsController@exist');
    Route::post('/partners/exist', 'PartnersController@exist');

    Route::post('/clientservices', 'ClientservicesController@store');
    Route::post('/partnerservices', 'PartnerservicesController@store');

    Route::post('/sentsms', 'JobsController@sentsms');


});
