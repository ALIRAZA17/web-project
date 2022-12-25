<?php

namespace App\Http\Controllers;
use App\Models\Resume;
use Illuminate\Http\Request;
use App\Models\User;

class ResumeController extends Controller
{
    public function create(){
        return view('resume.create');
    }


    public function show(Resume $resume){
        $resumes = Resume::all();
        $data = compact('resumes');
        return view('resume.show')->with($data);
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'pitch' => 'required',
            'email' => ['required', 'email'],
            'photo' => '',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'url' => 'required',
            'lan1' => 'required',
            'lancat1' => 'required',
            'lan2' => '',
            'lancat2' => '',
            'lan3' => '',
            'lancat3' => '',
            'sskill1' => 'required',
            'sskill2' => '',
            'sskill3' => '',
            'sskill4' => '',
            'sskill5' => '',
            'tskill1' => 'required',
            'tskill2' => '',
            'tskill3' => '',
            'tskill4' => '',
            'tskill5' => '',
            'tskill6' => '',
            'tskill7' => '',
            'tskill8' => '',
            'tskill9' => '',
            'tskill10' => '',
            "program1" => "required",
            "school1" => "required",
            "programDateFrom1" => "required",
            "programDateTo1" => "required",
            "insCity1" => "required",
            "insCountry1" => "required",
            "info1" => '',
            "program2" => "",
            "school2" => "",
            "programDateFrom2" => "",
            "programDateTo2" => "",
            "insCity2" => "",
            "insCountry2" => "",
            "info2" => "",
            "program3" => "",
            "school3" => "",
            "programDateFrom3" => "",
            "programDateTo3" => "",
            "insCity3" => "",
            "insCountry3" => "",
            "info3" => "",
            "position1" => "required",
            "company1" => "required",
            "workDateFrom1" => "required",
            "workDateTo1" => "required",
            "workCity1" => "required",
            "workCountry1" => "required",
            "mode1" => "required",
            "workInfo1" => '',
            "position2" => "",
            "company2" => "",
            "workDateFrom2" => "",
            "workDateTo2" => "",
            "workCity2" => "",
            "workCountry2" => "",
            "mode2" => "",
            "workInfo2" => '',
            "position3" => "",
            "company3" => "",
            "workDateFrom3" => "",
            "workDateTo3" => "",
            "workCity3" => "",
            "workCountry3" => "",
            "mode3" => "",
            "workInfo3" => ''


        ]);

        if($request->hasFile('photo')) {
        $formFields['photo'] = $request->file('photo')->store('resumes');
        }

        // $request->user()->resumes()->create($formFields);
        // $formFields['user_id'] = auth()->id();

        Resume::create($formFields);

        return redirect('/');
    }


    // Delete Listing
    public function destroy(Resume $resume) {
        // // Make sure logged in user is owner
        // if($resume->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }
        
        $resume->delete();
        return redirect('/');
    }

}
