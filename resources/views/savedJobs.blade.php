<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{asset('img/jobify title.png')}}"/>
    <title>Jobify</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <style>
        .delete-icon{
            transition: 1s;
        }
        .delete-icon:hover{
            transform: scale(1.3);
        }
    </style>
  </head>

  <body>

      @php
        $logged_in_userId = Auth::user()->id;
      @endphp
      {{-- navbar --}}
      <x-navbar/>
 
      <!-- search bar -->
      <div class="container" style="margin-top: 3rem; max-width: 75%;">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
          <span class="fs-4">Saved Jobs</span>
        </header>
      </div>

      
      <!-- cards -->
      <div class="container d-flex flex-wrap justify-content-center save_job_card" style="gap: 3rem; margin-top: 7rem; margin-bottom: 3rem;">
        
        @foreach ($savedJobs as $saved_job)
        <x-saved-job-card id="{{$saved_job->id}}" logged_in_userId="{{$logged_in_userId}}" jobName="{{$saved_job->title}}" img="{{$saved_job->logo ? asset('storage/'. $saved_job->logo) : asset('/img/default.png')}}" description="{{$saved_job->desc}}" 
                              skills="{{$saved_job->tags}} " mode="{{$saved_job->mode}}" location="{{$saved_job->location}}"/>
        @endforeach
        
      </div>
        
        {{-- footer --}}
        <x-footer/>

  </body>
</html>
