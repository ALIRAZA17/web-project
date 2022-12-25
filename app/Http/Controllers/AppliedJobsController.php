<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppliedJob;
use App\Models\Job;

class AppliedJobsController extends Controller
{
    public function insert($job_id, $user_id)
    {
        $same_user = AppliedJob::where('user_id', $user_id)->first();
        $same_job = AppliedJob::where('job_id', $job_id)->first();
        if (!($same_user && $same_job)) {
            AppliedJob::insert(
                ['job_id' => $job_id, 'user_id' => $user_id]
            );
        }

        return redirect()->action([JobsController::class, 'view_available_jobs']);

    }

    public function view_applied_jobs($user_id)
    {
        $appliedJobs = Job::join('applied_jobs', 'applied_jobs.job_id', '=', 'jobs.id')->where('applied_jobs.user_id', '=', $user_id)->get(['jobs.*']);
        $data = compact('appliedJobs');
        return view('appliedJobs')->with($data);
    }



}