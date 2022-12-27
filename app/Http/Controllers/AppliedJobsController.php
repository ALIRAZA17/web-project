<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppliedJob;
use App\Models\Job;

class AppliedJobsController extends Controller
{
    public function view_applied_jobs($user_id)
    {
        $appliedJobs = Job::join('applied_jobs', 'applied_jobs.job_id', '=', 'jobs.id')->where('applied_jobs.user_id', '=', $user_id)->get(['jobs.*']);
        $data = compact('appliedJobs');
        return view('appliedJobs')->with($data);
    }




}