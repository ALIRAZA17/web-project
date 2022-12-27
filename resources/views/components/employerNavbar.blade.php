<!-- navbar -->
<header class="p-3 mb-3 bg-dark border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img width="100px" src="./images/Jobify white.png" alt="">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ url('/job') }}" class="nav-link px-2 link-light text-decoration-none nav-item">Post Jobs</a></li>
          <li><a href="{{ url('/postJob') }}" class="nav-link px-2 link-light text-decoration-none nav-item">About Jobs</a></li>
          <li><a href="{{ url('/jobs-posted')  }}" class="nav-link px-2 link-light text-decoration-none nav-item">Jobs Posted</a></li>
        </ul>


        <div class="d-flex align-items-center" style="gap: 1rem;">
          <span style="color: white;">{{ Auth::user()->name }}</span>
          <a href="#" class="d-block link-dark text-decoration-none tool-tip nav-item">
            <img src="{{ asset('images/profile.jpg') }}" alt="mdo" width="32" height="32" class="rounded-circle">
            <a style="text-decoration: none;color:red;" href="{{ url('/logout') }}"><span class="tooltiptext">LogOut</span></a>
          </a>
        </div>
      </div>
    </div>
  </header>
