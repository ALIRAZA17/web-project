<?php

namespace App\Http\Controllers;

use App\Http\Controllers\JobsController;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use App\Models\SavedJob;
use App\Models\Job;

class SavedJobsController extends Controller
{
    public function insert($job_id, $user_id)
    {
        $same_user = SavedJob::where('user_id', $user_id)->first();
        $same_job = SavedJob::where('job_id', $job_id)->first();
        if (!($same_user && $same_job)) {
            SavedJob::insert(
                ['job_id' => $job_id, 'user_id' => $user_id]
            );
        }

        return redirect()->action([JobsController::class, 'view_available_jobs']);

    }

    public function view_saved_jobs($user_id)
    {
        $savedJobs = Job::join('saved_jobs', 'saved_jobs.job_id', '=', 'jobs.id')->where('saved_jobs.user_id', '=', $user_id)->get(['jobs.*']);
        $data = compact('savedJobs');
        return view('savedJobs')->with($data);
    }


    public function unsave_job($id, $user_id)
    {
        SavedJob::where('job_id', $id)->where('user_id', $user_id)->delete();
        return redirect()->action([JobsController::class, 'view_available_jobs']);
    }
}