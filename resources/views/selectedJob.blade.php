<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/jobify title.png')}}"/>
    <title>Jobify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  </head>
  <style>
    .company-link{
      transition: 1s;
    }
    .company-link:hover{
      transform: scale(1.3);
    }
  </style>

  
<body>
    @php
      $logged_in_userId = Auth::user()->id;
    @endphp
    {{-- navbar --}}
    <x-navbar/>
    @foreach ($jobs as $job)
    <div class="col-lg-8 mx-auto p-4 py-md-5">
      <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
          <span class="fs-4">More About The Job</span>
      </header>
    
      <main>
        <div class="container d-flex justify-content-center">
            <img src="{{$job->logo ? asset('storage/'. $job->logo) : asset('/img/default.png')}}" class="img-fluid rounded-start" alt="company_logo" style="width: 25rem;height:8rem;object-fit: contain;margin-bottom: 4rem;">
        </div>
        <div class="d-flex flex-column align-items-center">
          <h1 class="col-12">{{$job->title}}</h1>
          <p class="fs-5 col-12">{{$job->desc}}</p>
        </div>
        <hr class="mb-4">
        
        <div class="container d-flex flex-wrap justify-content-between" style="gap: 5rem;">
            <span class="d-flex flex-column" style="font-size: 1.25rem;"><b>Company</b><small class="text-muted">{{$job->name}}</small></span>
            <span class="d-flex flex-column" style="font-size: 1.25rem;"><b>Category</b><small class="text-muted">{{$job->category}}</small></span>
            <span class="d-flex flex-column" style="font-size: 1.25rem;"><b>Location</b><small class="text-muted">{{$job->location}}</small></span>
            <span class="d-flex flex-column" style="font-size: 1.25rem;"><b>Mode</b><small class="text-muted">{{$job->mode}}</small></span>
            <span class="d-flex flex-column" style="font-size: 1.25rem;"><b>Deadline</b><small class="text-muted">{{$job->deadline}}</small></span>
            <span class="d-flex flex-column" style="font-size: 1.25rem;"><b>Visit Us</b><a href="{{$job->url}}" class="text-secondary company-link">{{$job->name}}</a></span>
          </div>
        <hr style="margin-bottom: 2rem;">

    
        <div class="col-md-12">
            <h2>Skills and Expertise</h2>
            <div class="d-flex flex-wrap justify-content-start" style="max-width: 95%;margin-top: 1rem; gap: 0.75rem;">
                @php
                    $skills = explode(',',$job->tags); 
                @endphp
                @foreach ($skills as $skill)
                <h4><span class="badge bg-info">{{$skill}}</span></h4>
                @endforeach
              </div>
        </div>
    
        <hr style="margin-bottom: 2rem;">
        
        <h4>About Jobify</h4>
        <div class="text-warning mb-3" style="font-size:2rem;">
            <span>&#9733</span><span>&#9733</span><span>&#9733</span><span>&#9733</span><span style="color:gray">&#9733</span>
          </div>
        <div class="d-flex justify-content-between" style="gap: 5rem;">
            <span class="d-flex flex-column" style="font-size: 1.25rem;"><b>G2 2021</b><small class="text-muted">#1 Freelancing Platform</small></span>
            <span class="d-flex flex-column" style="font-size: 1.25rem;"><b> 35,000+</b><small class="text-muted">
                Signed contract every week</small></span>
            <span class="d-flex flex-column" style="font-size: 1.25rem;"><b> $2.3B</b><small class="text-muted">Freelancers earned on Upwork in 2020</small></span>
                
        </div>
        <hr style="margin-bottom: 2rem;">
      </main>
      <div class="container d-flex justify-content-center">
        <a href="{{url('apply/'.$job->id)}}"><button type="button" class="btn btn-info mb-4 my-4 text-white">Apply Now</button></a>
      </div>
    </div>
    
        
    @endforeach
    
    {{-- footer --}}
    <x-footer/>

    
    </body>

</html>

