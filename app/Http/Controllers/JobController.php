<?php

namespace App\Http\Controllers;
use App\Models\JobResponse;
use App\Models\JobCreate;
use App\Models\AppliedJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Job;



class JobController extends Controller
{
    public function index(){
        return view('job.index');
    }


    public function apply($job_id){
        $jobId = $job_id;

        return view('job.apply-for-job',[
            'job_id' => $jobId
        ]
        );
    }


   

    public function store(Request $request){
        // dd(Auth::user()->id);
        $formFields = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'resume' => 'required',
            'letter' => 'required',
            
        ]);

        
        $formFields['resume'] = $request->file('resume')->store('appliedResumes', 'public');
        

        // $request->user()->resumes()->create($formFields);
        $formFields['user_id'] = Auth::user()->id;
        $formFields['job_id'] = $request->job_id;

        $same_user = AppliedJob::where('user_id',  $formFields['user_id'])->first();
        $same_job = AppliedJob::where('job_id', $formFields['job_id'])->first();
        if(!($same_user && $same_job)){
            AppliedJob::insert(['job_id' => $formFields['job_id'], 'user_id' => $formFields['user_id']]);
        }


        $same_user = JobResponse::where('user_id', $formFields['user_id'])->first();
        $same_job = JobResponse::where('job_id', $formFields['job_id'])->first();
        if (!($same_user && $same_job)) {
            JobResponse::create($formFields);
        }
        return redirect('/availableJobs');
    }



    public function save(Request $request){
            $saved_logo = $request->file('logo')->store('jobLogos', 'public');
            JobCreate::insert(
                [
                'user_id' => Auth::user()->id,
                'name'=>$request->name,
                'title'=>$request->title,
                'location'=>$request->location,
                'mode'=>$request->mode,
                'category'=>$request->category,
                'deadline'=>$request->deadline,
                'url'=>$request->url,
                'tags'=>$request->tags,
                'logo'=>$saved_logo,
                'desc'=>$request->desc,
                ]
            );

        return redirect('/postJob');
    }

    public function view_available_jobs()
    {
        $jobs = Job::all();
        $data = compact('jobs');
        return view('availableJobs')->with($data);
    }

    public function view_posted_jobs(){
        $emloyer_id = Auth::user()->id;
        $jobs = Job::all()->where('user_id', $emloyer_id);
        $data = compact('jobs');
        return view('Employer_posted_jobs')->with($data);
    }

    public function find_selectedJob($id)
    {
        $jobs = Job::all()->where('id', $id);
        $data = compact('jobs');
        return view('selectedJob')->with($data);
    }

}
