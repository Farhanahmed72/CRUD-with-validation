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


Route::get('/add','EmployeeController@addemp');
Route::post('/Employee/addempdata','EmployeeController@addempdata');
Route::get('/','EmployeeController@emplist');
Route::get('/Employee/Delete/{id}','EmployeeController@deleteemp');
Route::get('/Employee/Edit/{id}','EmployeeController@Edit');
Route::post('/Employee/Editemp','EmployeeController@Editemp');
