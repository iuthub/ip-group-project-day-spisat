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

Route::group([
    'prefix' => 'admin'
], function () {


    Route::get('/', [
        'uses' => 'Jobscontroller@getAdminIndex',
        'as' => 'adminJobs'
    ]);
    Route::get('/about', [
        'uses' => 'Jobscontroller@getAdminAbout',
        'as' => 'adminAbout'
    ]);
    Route::get('/create', [
        'uses' => 'Jobscontroller@getAdminCreate',
        'as' => 'adminCreate'
    ]);
    Route::get('/edit', [
        'uses' => 'Jobscontroller@getAdminEdit',
        'as' => 'adminEdit'
    ]);
    Route::get('/delete', [
        'uses' => 'Jobscontroller@getAdminDelete',
        'as' => 'adminDelete'
    ]);
});
