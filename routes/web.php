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
    return view('home');
});
Route::get('/', function () {
    return view('login');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Home Page
Route::get('home', 'App\Http\Controllers\HomeController@index');

//admin
Route::get('admin', 'App\Http\Controllers\AdminController@index');
Route::post('submit', 'App\Http\Controllers\AdminController@creatRole');

//Subadmin
Route::get('subadmin', 'App\Http\Controllers\SubadminController@index')->middleware('role:Subadmin');
Route::post('form', 'App\Http\Controllers\SubadminController@creatTicket')->middleware('role:Subadmin');

//Agent
Route::get('agent', 'App\Http\Controllers\AgentController@index')->middleware('role:Agent');
Route::get('edit/{id}','App\Http\Controllers\AgentController@showData')->middleware('role:Agent');
Route::post('update','App\Http\Controllers\AgentController@updateStatus')->middleware('role:Agent');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
