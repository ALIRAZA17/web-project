<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/categories.css') }}>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img width="100px" src="./images/Jobify white.png" alt="" />
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
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Find Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Job Posts</a>
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
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container mt-4 col-xxl-8 px-4 py-5">
      <div id="myDIV" class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="./images/working_women.jpg" class="d-block mx-lg-auto rounded img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
          <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          </div>
        </div>
      </div>
    </div>


        <!--Trusted Companies Title -->
        <div id="companyTitle" style="text-align: center">Trusted Companies</div>
  

        <div class="container company-logos">
          <div class="row">
            <div class="col-sm">
              <img
                src="https://assets-global.website-files.com/5f030e7bdf54ce3c5daf3964/6080bb0ff0490361a94fc2b4_Microsoft.svg"
                class="img-fluid"
                alt="Responsive image"
              />
            </div>
            <div class="col-sm">
              <img
                src="https://assets-global.website-files.com/5f030e7bdf54ce3c5daf3964/6080bb0ff04903bb884fc2b0_Airbnb.svg"
                class="img-fluid"
                alt="Responsive image"
              />
            </div>
            <div class="col-sm">
              <img
                src="https://assets-global.website-files.com/5f030e7bdf54ce3c5daf3964/6080bb0ff0490343134fc2b5_logo-automatic.svg"
                class="img-fluid"
                alt="Responsive image"
              />
            </div>
            <div class="col-sm">
              <img
                src="https://assets-global.website-files.com/5f030e7bdf54ce3c5daf3964/6080bb0ff0490327424fc2b2_Bissell.svg"
                class="img-fluid"
                alt="Responsive image"
              />
            </div>
          </div>
        </div>

        <div class="container mt-5">
          <h2 class="pb-2 border-bottom"></h2>
          </div>

<div class="col-md-10 container">
    <div class="row ">
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Graphic Designers</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                3,243
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>12.5% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Art Directors</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                15.07k
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>9.23% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Web Designers</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                578
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>10% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Motion Designers</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $11.61k
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>2.5% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
          <div class="card l-bg-green-dark">
              <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                  <div class="mb-4">
                      <h5 class="card-title mb-0">Animators</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                      <div class="col-8">
                          <h2 class="d-flex align-items-center mb-0">
                              578
                          </h2>
                      </div>
                      <div class="col-4 text-right">
                          <span>10% <i class="fa fa-arrow-up"></i></span>
                      </div>
                  </div>
                  <div class="progress mt-1 " data-height="8" style="height: 8px;">
                      <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-lg-6">
        <div class="card l-bg-blue-dark">
            <div class="card-statistic-3 p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                <div class="mb-4">
                    <h5 class="card-title mb-0">Video Editors</h5>
                </div>
                <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">
                            15.07k
                        </h2>
                    </div>
                    <div class="col-4 text-right">
                        <span>9.23% <i class="fa fa-arrow-up"></i></span>
                    </div>
                </div>
                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6">
      <div class="card l-bg-orange-dark">
          <div class="card-statistic-3 p-4">
              <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
              <div class="mb-4">
                  <h5 class="card-title mb-0">Voice Artists</h5>
              </div>
              <div class="row align-items-center mb-2 d-flex">
                  <div class="col-8">
                      <h2 class="d-flex align-items-center mb-0">
                          $11.61k
                      </h2>
                  </div>
                  <div class="col-4 text-right">
                      <span>2.5% <i class="fa fa-arrow-up"></i></span>
                  </div>
              </div>
              <div class="progress mt-1 " data-height="8" style="height: 8px;">
                  <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-xl-3 col-lg-6">
    <div class="card l-bg-cherry">
        <div class="card-statistic-3 p-4">
            <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
            <div class="mb-4">
                <h5 class="card-title mb-0">UI/UX Designers</h5>
            </div>
            <div class="row align-items-center mb-2 d-flex">
                <div class="col-8">
                    <h2 class="d-flex align-items-center mb-0">
                        3,243
                    </h2>
                </div>
                <div class="col-4 text-right">
                    <span>12.5% <i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
            </div>
        </div>
    </div>
</div>
        
    </div>
</div>

<footer
class="bg-dark text-light pt-4 pt-md-5 border-top"
style="overflow-x: hidden"
>
<div class="row">
  <div class="col-12 col-md">
    <small class="d-block mb-3 text-muted">© 2017-2022</small>
  </div>
  <div class="col-6 col-md">
    <h5>Features</h5>
    <ul class="list-unstyled text-small">
      <li><a class="text-muted" href="#">Cool stuff</a></li>
      <li><a class="text-muted" href="#">Random feature</a></li>
      <li><a class="text-muted" href="#">Team feature</a></li>
      <li><a class="text-muted" href="#">Stuff for developers</a></li>
      <li><a class="text-muted" href="#">Another one</a></li>
      <li><a class="text-muted" href="#">Last time</a></li>
    </ul>
  </div>
  <div class="col-6 col-md">
    <h5>Resources</h5>
    <ul class="list-unstyled text-small">
      <li><a class="text-muted" href="#">Resource</a></li>
      <li><a class="text-muted" href="#">Resource name</a></li>
      <li><a class="text-muted" href="#">Another resource</a></li>
      <li><a class="text-muted" href="#">Final resource</a></li>
    </ul>
  </div>
  <div class="col-6 col-md">
    <h5>About</h5>
    <ul class="list-unstyled text-small">
      <li><a class="text-muted" href="#">Team</a></li>
      <li><a class="text-muted" href="#">Locations</a></li>
      <li><a class="text-muted" href="#">Privacy</a></li>
      <li><a class="text-muted" href="#">Terms</a></li>
    </ul>
  </div>
</div>
</footer>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>