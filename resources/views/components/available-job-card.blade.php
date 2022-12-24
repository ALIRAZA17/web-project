<div class="card mb-3 shadow-lg rounded-5 border-secondary col-12 col-sm-12 col-md-12 col-lg-5" style="background-color: rgb(226, 242, 246);">
    <div class="row g-0 d-flex">
      <div class="col-md-4">
        <img src="{{$img}}" class="img-fluid rounded-start" alt="company_logo" style="padding: 2rem 1rem 0 1rem;width: 20rem; height:7rem;object-fit: contain;">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title d-flex align-items-center" style="gap: 6rem;">{{$jobName}} 
            <a href="" class="tool-tip">
            <button class="btn save-icon" style="font-size: 2rem;color: rgb(159, 43, 43);">
               &#9829;
              <span class="tooltiptext">Save</span>
            </button>
          </a></h5>
          <hr>
          <div class="d-flex flex-wrap justify-content-start" style="max-width: 95%;margin-top: 1rem; gap: 0.75rem;">
            <h5><span class="badge bg-secondary">C++</span></h5>
            <h5><span class="badge bg-secondary">Java</span></h5>
            <h5><span class="badge bg-secondary">Python</span></h5>
            <h5><span class="badge bg-secondary">JavaScript</span></h5>
            <h5><span class="badge bg-secondary">ReactJS</span></h5>
            <h5><span class="badge bg-secondary">NodeJs</span></h5>
            <h5><span class="badge bg-secondary">MongoDB</span></h5>
          </div>
          <hr>
          </div>
      </div>
    </div>
    <div class="container" style="margin: 0 0 1.5rem 1rem;">
      <p class="card-text">Software architects will have at least a bachelor's degree in computer science, information systems, software engineering or another related field.</p>
    </div>
    <div class="container d-flex justify-content-end" style="margin: 0 0 1.5rem 1rem;max-width: 90%;">
      <a href="{{url('/selectedJob')}}" class="btn btn-success rounded-5">Apply Now</a>
    </div>
    
  </div>