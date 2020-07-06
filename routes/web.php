<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/employee','HomeController@employee')->name('employee');
Route::get('/home/customer','HomeController@customer')->name('customer');
Route::get('/home/supplier','HomeController@supplier')->name('supplier');
Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');

/*------Supplier-----*/
Route::get('/suppliers/create','SupplierController@create');
Route::post('/suppliers/store','SupplierController@store');
Route::any('/suppliers/delete/{id}','SupplierController@destroy');
Route::get('/suppliers/edit/{id}','SupplierController@edit');
Route::post('/suppliers/update/{id}','SupplierController@update');