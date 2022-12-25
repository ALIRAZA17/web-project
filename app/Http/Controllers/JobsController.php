<?php

namespace App\Http\Controllers;

use App\Models\Job;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function view_available_jobs()
    {
        $jobs = Job::all();
        $data = compact('jobs');
        return view('availableJobs')->with($data);
    }

    public function find_selectedJob($id)
    {
        $jobs = Job::all()->where('id', $id);
        $data = compact('jobs');
        return view('selectedJob')->with($data);
    }



    public function unsave_job($id)
    {
        $job_to_unsave = Job::where('id', $id)->delete();
        $jobs = Job::all();
        $data = compact('jobs');
        return view('savedJobs')->with($data);
    }
}