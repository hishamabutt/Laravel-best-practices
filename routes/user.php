<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    dd('Welcome to user routes.');
});


Route::post('/create', 'App\Http\Controllers\User@create');
Route::post('/read', 'App\Http\Controllers\User@read');
Route::post('/formrequesttest', 'App\Http\Controllers\User@formRequestTest');
Route::post('/formrequesttest2', 'App\Http\Controllers\User@formRequestTest2');
