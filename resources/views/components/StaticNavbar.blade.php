<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav mr-auto">
        <li>
          <a class="nav-link nav-item" style="color: white" href={{ url('/')  }}
            >Home</a
          >
        </li>
        <li>
          <a class="nav-link nav-item"   style="color: white" href={{ url('/post_jobs_static') }}>Post Jobs</a>
        </li>

        <li>
          <a class="nav-link nav-item" style="color: white" href={{ url('/find_work_static') }}>Find Work</a>
        </li>
       
        <li>
          <a class="nav-link nav-item" style="color: white" href={{ url('/categories_desc') }}>Categories</a>
        </li>
        <li>
          <a class="nav-link nav-item" style="color: white" href={{ url('/aboutUs') }}>About Us</a>
        </li>
        <li>
          <a class="nav-link nav-item" style="color: white" href={{ url('/contactUs') }}>Contact Us</a>
        </li>
        <li>
            <a class="nav-link nav-item" style="color: #38b6ff;font-weight:700;" href={{ url('/role') }}>SIGN UP</a>
          </li>

          <li>
            <a class="nav-link nav-item" style="color: #38b6ff;font-weight:700;" href={{ url('/login') }}>LOG IN</a>
          </li>
      </ul>
    </div>
  </nav>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>