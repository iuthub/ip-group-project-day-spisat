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
    'as' => 'jobJobs'
]);

Route::get('/about', [
    'uses' => 'JobsController@getJobInfo',
    'as' => 'aboutPage'
]);
Route::get('/post/{id}', [
    'uses' => 'JobsController@getJobPost',
    'as' => 'jobPost'
]);

Route::get('/postsByTitle/{title}', [
    'uses' => 'PostsController@getJobPostbyTitle',
    'as' => 'jobPostbyTitle'
]);
Route::get('/contact', [
    'uses' => 'Jobscontroller@getJobContact',
    'as' => 'Contact'
]);

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'verified']
], function () {


    Route::get('/adminpage', [
        'uses' => 'Jobscontroller@getAdminJob',
        'as' => 'adminJobs'
    ]);
    Route::get('/', [
        'uses' => 'Jobscontroller@getAdminJobs',
        'as' => 'adminJob'
    ]);
    Route::get('/about', [
        'uses' => 'Jobscontroller@getAdminAbout',
        'as' => 'adminAbout'
    ]);

    Route::get('/create', [
        'uses' => 'Jobscontroller@getAdminCreateJob',
        'as' => 'adminCreate'
    ]);

    Route::post('/create', [
        'uses' => 'JobsController@postAdminCreateJob',
        'as' => 'adminCreatePost'
    ]);


    Route::get('/edit/{id}', [
        'uses' => 'Jobscontroller@getAdminEditJob',
        'as' => 'adminEdit'
    ]);

    Route::post('/edit', [
        'uses' => 'JobsController@postAdminEditJob',
        'as' => 'adminEditPost'
    ]);
    Route::get('/delete/{id}', [
        'uses' => 'Jobscontroller@getAdminDeleteJob',
        'as' => 'adminDelete'
    ]);
    Route::get('/admin', function () {
        return view('admin.adminInedx');
    })->name('Registerpanel');
});

Auth::routes(['verify' => true]);
