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
Route::get('/contact', [
    'uses' => 'Jobscontroller@getContact',
    'as' => 'extraContacts'
]);

Route::get('/admin', [
    'uses' => 'Jobscontroller@getAdminIndex',
    'as' => 'adminJobs'
]);
Route::get('/adminabout', [
    'uses' => 'Jobscontroller@getAdminAbout',
    'as' => 'adminAbout'
]);
