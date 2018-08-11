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

Route::get('/',                                     'IndexController@index')->name('index');
Route::get('/employees/{sort?}/{type?}/{search1?}', 'IndexController@getEmployeesInfo')->name('employees');
Route::post('/employees',                           'IndexController@ajaxSearchAndSort')->name('employeesSearchAndSort');

/*Route::get('/', function () {
    return view('welcome');
});*/


Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::group(['prefix'=>'crud','middleware' => 'auth'], function(){
    Route::get('/',                'CRUD\EmployeeController@index')->name('crudEmployeeIndex');
    Route::get('/show/{id}',       'CRUD\EmployeeController@show')->name('crudEmployeeShow');
    Route::delete('/delete/{id?}', 'CRUD\EmployeeController@delete')->name('deleteEmployee');
    Route::post('/update/{id?}',   'CRUD\EmployeeController@update')->name('crudEmployeeUpdate');
    Route::get('/new/',            'CRUD\EmployeeController@New')->name('crudEmployeeNew');
    Route::post('/new/{id?}',       'CRUD\EmployeeController@New')->name('crudEmployeeNewSave');


});