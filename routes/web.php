<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleSelectionController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\SavedJobsController;
use App\Http\Controllers\AppliedJobsController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('role', [RoleSelectionController::class, 'create'])->name('role'); 
Route::get('job', [JobController::class, 'index'])->name('job');
Route::get('resume', [ResumeController::class, 'create'])->name('resume');
Route::post('resume/save', [ResumeController::class, 'store'])->name('resume/save');
Route::delete('resume/{resume}', [ResumeController::class, 'destroy']);
Route::get('resume/preview', [ResumeController::class, 'show'])->name('resume/preview');
Route::get('apply', [JobController::class, 'apply'])->name('apply');
Route::get('storeJob', [JobController::class, 'store'])->name('storeJob');

Route::get('/availableJobs', [JobsController::class, 'view_available_jobs']);

Route::get('/selectedJob/{id}', [JobsController::class, 'find_selectedJob']);


Route::get('/savedJobs/{user_id}', [SavedJobsController::class, 'view_saved_jobs']);
Route::get('/savedJobs/{id}/{userId}', [SavedJobsController::class, 'insert']);
Route::get('/savedJobs/unsave/{id}/{userId}', [SavedJobsController::class, 'unsave_job']);

Route::get('/appliedJobs/{user_id}', [AppliedJobsController::class, 'view_applied_jobs']);
Route::get('/appliedJobs/{id}/{userId}', [AppliedJobsController::class, 'insert']);





Route::get('/', function () {
    return view('HomePage');
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

Route::get('/contactUs', function () {
    return view('contactUs');
});
Route::get('/aboutUs', function () {
    return view('AboutUs');
});
Route::get('/categories_desc', function () {
    return view('Categories_desc');
});

Route::resource('chirps', ChirpController::class)

    ->only(['index', 'store', 'edit', 'update', 'destroy'])

    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
