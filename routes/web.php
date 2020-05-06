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
    return view('jobs.jobs');
});

Route::get('/admin', function () {
    return view('admin.adminIndex');
});
Route::get('/admincreate', function () {
    return view('admin.adminCreate');
});
Route::get('/adminedit', function () {
    return view('admin.adminEdit');
});
<<<<<<< HEAD
=======
 

Route::get('/forms', function () {
	return view('forms.formsIndex');
});
 
>>>>>>> 58016c3327d1b0a641359137c0634d21d9edfa1d
