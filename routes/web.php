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
    return view('HomePage');
});

Route::get('/availableJobs', function () {
    return view('availableJobs');
});

Route::get('/savedJobs', function () {
    return view('savedJobs');
});

Route::get('/appliedJobs', function () {
    return view('appliedJobs');
});

Route::get('/selectedJob', function () {
    return view('selectedJob');
});

Route::get('/postJob', function () {
    return view('postJob');
});
Route::get('/find_work_static', function () {
    return view('find_work');
});
Route::get('/post_jobs_static', function () {
    return view('Post_Jobs_Static');
});
Route::get('/jobs_categories_desc', function () {
    return view('Categories_desc');
});
