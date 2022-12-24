<!-- navbar -->
<header class="p-3 mb-3 border-bottom bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{url('/')}}" class="nav-link px-2 link-light nav-item">Home</a></li>
          <li><a href="{{url('/availableJobs')}}" class="nav-link px-2 link-light nav-item">Browse Jobs</a></li>
          <li><a href="{{url('/savedJobs')}}" class="nav-link px-2 link-light nav-item">Saved Jobs</a></li>
          <li><a href="{{url('/appliedJobs')}}" class="nav-link px-2 link-light nav-item">Applied Jobs</a></li>
          <li><a href="#" class="nav-link px-2 link-light nav-item">Resume Builder</a></li>
        </ul>


        <div class="d-flex align-items-center" style="gap: 1rem;">
          <span style="color: white;">Abdullah</span>
          <a href="#" class="d-block link-dark text-decoration-none tool-tip nav-item">
            <img src="images/profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
            <span class="tooltiptext">LogOut</span>
          </a>
        </div>
      </div>
    </div>
  </header>
