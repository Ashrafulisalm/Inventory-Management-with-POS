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
Route::get('/home/salary','HomeController@salary')->name('salary');


Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');

/*------Supplier-----*/
Route::get('/suppliers/create','SupplierController@create');
Route::post('/suppliers/store','SupplierController@store');
Route::any('/suppliers/delete/{id}','SupplierController@destroy');
Route::get('/suppliers/edit/{id}','SupplierController@edit');


/*-----Salary-----*/
Route::get('/salary/create','SalaryController@create');
Route::post('/salary/store','SalaryController@store');
Route::get('/salary/paysalary','SalaryController@paysalary');


/*------Products-------*/
Route::get('/product/catagory','CatagoryController@index');
Route::get('/product/catagory/create','CatagoryController@create');
Route::post('/product/catagory/store','CatagoryController@store');
Route::get('/product/catagory/edit/{id}','CatagoryController@edit');
Route::any('/product/catagory/delete/{id}','CatagoryController@destroy');