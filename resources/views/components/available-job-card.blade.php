@php
  $logged_in_userId = 1;
@endphp

<div class="card mb-3 shadow-lg rounded-5 border-secondary col-12 col-sm-12 col-md-12 col-lg-5" style="background-color: rgb(226, 242, 246);">
  <div class="row g-0 d-flex align-items-center">
    <div class="col-md-4">
      <img src="{{$img}}" class="img-fluid rounded-start" alt="company_logo" style="padding: 2rem 1rem 0 1rem;width: 20rem; height:7rem;object-fit: contain;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title d-flex align-items-center" style="gap: 6rem;">{{$jobName}} 
          <a href="{{url('savedJobs/'.$id.'/'.$logged_in_userId)}}" class="tool-tip">
          <button class="btn" style="font-size: 2rem;color: rgb(159, 43, 43);" onclick="return alert('Added to Saved Jobs!')">
            <i class="fa fa-heart save-icon" style="font-size: 1.5rem;"></i>
            <span class="tooltiptext" style="font-size: 1rem;">Save</span>
          </button>
        </a></h5>
        <hr>
        <div class="d-flex flex-wrap justify-content-start" style="max-width: 95%;margin-top: 1rem; gap: 0.75rem;">
          @php
              $Job_skills = explode(',',$skills);
          @endphp
          @foreach ($Job_skills as $skill)
            <h5><span class="badge bg-secondary">{{$skill}}</span></h5>    
          @endforeach
            
        </div>
        <hr>
        <h5><span class="badge bg-info" style="max-width: 10rem">{{$mode}} / {{$location}}</span></h5>
        <hr>
        </div>
    </div>
  </div>
  <div class="container" style="margin: 0 0 1.5rem 1rem;">
    <p class="card-text" style="width: 90%">{{$description}}</p>
  </div>
  <div class="container d-flex justify-content-end" style="margin: 0 0 1.5rem 1rem;max-width: 90%;">
    
    <a href="{{url('selectedJob/'.$id)}}" class="btn btn-success rounded-5">Apply Now</a>
  </div>
  
</div>