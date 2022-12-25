<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href={{ url('/')  }}
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ url('/post_jobs_static') }}>Post Jobs</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href={{ url('/find_work_static') }}>Find Work</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href={{ url('/categories_desc') }}>Development & IT</a>
            <a class="dropdown-item" href={{ url('/categories_desc') }}>Design & Creative</a>
            <a class="dropdown-item" href={{ url('/categories_desc') }}>Sales & Marketing</a>
            <a class="dropdown-item" href={{ url('/categories_desc') }}>Writing & Translation</a>
            <a class="dropdown-item" href={{ url('/categories_desc') }}>Finance & Accounting</a>
            <a class="dropdown-item" href={{ url('/categories_desc') }}>HR & Training</a>
            <a class="dropdown-item" href={{ url('/categories_desc') }}>Admin & Customer Support</a>
            <a class="dropdown-item" href={{ url('/categories_desc') }}>Other</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ url('/contactUs') }}>About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ url('/contactUs') }}>Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{ url('/register') }}>Sign In</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href={{ url('/login') }}>log In</a>
          </li>
      </ul>
    </div>
  </nav>