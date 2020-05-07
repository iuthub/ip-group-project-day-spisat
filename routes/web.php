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

Route::get('/', [
    'uses' => 'JobsController@getJobs',
    'as' => 'jobsJobs'
]);

Route::get('/about', [
    'uses' => 'JobsController@getAbout',
    'as' => 'aboutPageAbout'
]);

Route::get('/admin', function () {
    return view('admin.adminIndex');
});
Route::get('/admincreate', function () {
    return view('admin.adminCreate');
});
Route::get('/adminedit', function () {
    return view('admin.adminEdit');
});

Route::get('/contacts', function () {
	return view('extra.contacts');
});

