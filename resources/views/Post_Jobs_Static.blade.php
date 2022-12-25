<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href={{ asset('css/HomePage.css') }} />
    <link rel="stylesheet" href={{asset('css/Post_job_static.css')}} />

    <title>Jobify</title>
  </head>
  <body class="mybody">
    <!-- Navbar -->
    <x-StaticNavbar />
    <!-- jumbotron -->
    <div class="jumbotron2" style="color: white">
      <!-- <h1 style="font-size: 5vw" class="display-4 title">Gig Hub</h1> -->
      <img src="./images/Jobify psd.png" width="250px" class="title" alt="" />
      <p class="lead" style="font-weight: bold">
        Post a job today, hire tomorrow
      </p>
      <p style="font-weight: bold">
        Connect with talent that gets you, and hire them to take your business
        to the next level.
      </p>
      <p class="lead">
        <a class="btn btn-danger btn-md" href="#" role="button">Get Started</a>
      </p>
    </div>

    <br />
    <br />

    <!-- Lets Get to Work Portion -->
    <div class="container">
      <div id="work_title" id="companyTitle">Lets Get to Work</div>
      <div style="width: 50%">
        <p class="work_description">
          Build relationships and create your own Virtual Talent Bench™ for
          quick project turnarounds or big transformations.
        </p>
      </div>
      <hr />
    </div>

    <br />

    <!-- Post today Hire tomorrow portion -->

    <div class="container">
      <div class="row justify-content-around">
        <div>
          <img style="border-radius: 15px;width: 100%;" src="./images/working_guy.jpg" alt="" />
        </div>
        <diV style="width: 40%;">
          <h2 id="work_title">Post Today, Hire Tomorrow</h2>

          <p class="hire_tomorrow_span">
            Connect with talent that gets you with Talent Marketplace
          </p>
          <p class="hire_tomorrow_desc">
            Post your job on the world’s work marketplace and wait for the
            proposals to flood in from talented people around the world.
            <br />
            Our advanced algorithms help you shortlist candidates who are the
            best fit. And you can check profiles, portfolios, and reviews before
            you give someone the green light.
          </p>
          <button class="btn btn-md btn-primary">Find Talent</button>
        </diV>
      </div>
    </div>


<br>
    <!-- Horizontal Line -->
    <div class="container">
      <hr>
    </div>
<br>
    <!-- Job Domains -->
    <div id="companyTitle" style="text-align: center">
      Get Talent from Popular Domains
    </div>
    <br>  
    <!-- Talent Domain Cards -->

    <div class="container mt-2">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="card card-block">
            <img
              class="p-2"
              width="100%"
              src="{{ asset('images/card2.jpg') }}"
              alt="Photo of sunset"
            />
            <h5 class="card-title mt-3 pl-2 mb-3" style="font-size: 24px">
              Java Developers
            </h5>
            <p class="card-text pl-2">
              Find specialized Java devlopers that will develop applications and software 
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card card-block">
            <img
              class="p-2"
              width="100%"
              src="{{ asset('images/card3.jpg') }}"
              alt="Photo of sunset"
            />
            <h5 class="card-title mt-3 pl-2 mb-3" style="font-size: 24px">
              Infrastructure engineers
            </h5>
            <p class="card-text pl-2">
              Hire top class Infrastructure engineers to maintain your IT enviornment.
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card card-block">
            <img
              class="p-2"
              width="100%"
              src="{{ asset('images/card4.jpg') }}"
              alt="Photo of sunset"
            />
            <h5 class="card-title mt-3 pl-2 mb-3" style="font-size: 24px">
              Data Scientists
            </h5>
            <p class="card-text pl-2">
              Hire proficient Data Scientists to anaylze data for actionable insights for your business.
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card card-block">
            <img
              class="p-2"
              width="100%"
              src="{{ asset('images/card 6.jpg') }}"
              alt="Photo of sunset"
            />
            <h5 class="card-title mt-3 pl-2 mb-3" style="font-size: 24px">
              SQL developers
            </h5>
            <p class="card-text pl-2">
              Hire SQL developers for designing, creating and maintaining databases
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mt-4">
          <div class="card card-block">
            <img
              class="p-2"
              width="100%"
              src="{{ asset('images/card5.jpg') }}"
              alt="Photo of sunset"
            />
            <h5 class="card-title mt-3 pl-2 mb-3" style="font-size: 24px">
              iOS developers
            </h5>
            <p class="card-text pl-2">
              Get your iOS app developed by an expert iOS developer with a proficient knowledge
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mt-4">
          <div class="card card-block">
            <img
              class="p-2"
              width="100%"
              src="{{ asset('images/card 7.jpg') }}"
              alt="Photo of sunset"
            />
            <h5 class="card-title mt-3 pl-2 mb-3" style="font-size: 24px">
              QA engineer
            </h5>
            <p class="card-text pl-2">
              Get specialized tests for your softwares to ensure high quality software production
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mt-4">
          <div class="card card-block">
            <img
              class="p-2"
              width="100%"
              src="{{ asset('images/card8.jpg') }}"
              alt="Photo of sunset"
            />
            <h5 class="card-title mt-3 pl-2 mb-3" style="font-size: 24px">
              PHP developers
            </h5>
            <p class="card-text pl-2">
              Hire expert PHP developers who excel in designing, testing and implementing softwares using PHP 
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mt-4">
          <div class="card card-block">
            <img
              class="p-2"
              width="100%"
              src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg"
              alt="Photo of sunset"
            />
            <h5 class="card-title mt-3 pl-2 mb-3" style="font-size: 24px">
              JavaScript developers
            </h5>
            <p class="card-text pl-2">
              Hire expert Javascript programmers that can desgin, test and implement softwares using JavaScript
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <x-footer />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
