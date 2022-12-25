<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href={{ asset('css/HomePage.css') }}>
    <link rel="stylesheet" href={{ asset('css/mycards.css') }}>

    <title>Jobify</title>
  </head>
  <body class="mybody">
    <!-- Navbar -->

    <x-StaticNavbar />

      <!-- jumbotron -->
      <div class="jumbotron" style="color: white;">
        <!-- <h1 style="font-size: 5vw" class="display-4 title">Gig Hub</h1> -->
        <img src="{{ asset('images/Jobify psd.png') }}" width="250px" class="title" alt="">
        <p class="lead">
          Forget the old rules. You can have the best people. Right now. Right
          here.
        </p>
        <p>
          Access the top 1% of talent on Upwork, and a full suite of hybrid
          workforce management tools. This is how innovation works now.
        </p>
        <p class="lead">
          <a class="btn btn-danger btn-md" href="#" role="button">Get Started</a>
        </p>
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
  
      <br />
      <br />
      <br />
  
      <!-- Job Domains -->
      <div id="companyTitle" style="text-align: center">Job Domains</div>
  
      <!-- Job Domains Cards -->
  
      <div
        class="container-fluid"
        style="
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          align-items: center;
        "
      >
        <div class="card_container">
          <div class="my_card">
            <div class="card_box">
              <div class="card_content">

                <h3>Development & IT</h3>
                <p>
                  Find tailored Software Developers to create, design, deploy or maintain your software. 
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
  
        <div class="card_container">
          <div class="my_card">
            <div class="card_box">
              <div class="card_content">
              
                <h3>Design & Creative</h3>
                <p>
                  Get your logos designed by world class independent designers.
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card_container">
          <div class="my_card">
            <div class="card_box">
              <div class="card_content">
                
                <h3>Sales & Marketing</h3>
                <p>
                 Rocket your product sales by hiring world class marketers
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card_container">
          <div class="my_card">
            <div class="card_box">
              <div class="card_content">
                <h3>Writing & Translation</h3>
                <p>
                  Hire professional writers and translators for any writing & translating tasks
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card_container">
          <div class="my_card">
            <div class="card_box">
              <div class="card_content">
                <h3>Admin & Customer Support</h3>
                <p>
                 Ensure a smooth running business by hiring a proficient admin as well as employees for customer support 
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card_container">
          <div class="my_card">
            <div class="card_box">
              <div class="card_content">
           
                <h3>Voice Over</h3>
                <p>
                  Get your broadcast, film or audio book voice-over by individual voice artists
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <br />
      <br />
      <br />
  
      <!-- title what youll get -->
      <div class="container">
        <div id="companyTitle">What you'll get</div>
      </div>
  
      <!-- section of what youll get -->
  
      <div class="container" style="display: flex; flex-wrap: wrap">
        <div style="width: 100%; margin-top: 2vw; display: flex;">
          <img
            src="https://assets-global.website-files.com/5f030e7bdf54ce3c5daf3964/61f27db471fd1d94ad12c61a_profile-search.svg"
            alt=""
          />
          <div class="qualities-list" style="width: 100%;">
            <h3>Discover Quality Talent Fast</h3>
            <ul class="mylist">
              <li>Post a job and receive proposals from talent</li>
              <li>See verified work history and reviews</li>
              <li>Send 30 invitations to talent per job post</li>
              <li>Use advanced search filters</li>
            </ul>
          </div>
        </div>
        <div style="width: 100%">
          <hr />
        </div>
        <div style="width: 100%; margin-top: 2vw;display: flex;">
          <img
            src="https://assets-global.website-files.com/5f030e7bdf54ce3c5daf3964/61f27db4fd39a19644ed23b8_Group%201%20(1).svg"
            alt=""
          />
  
          <div class="qualities-list">
            <h3>Responsive messaging system</h3>
            <ul class="mylist">
              <li>A secure encrypted system</li>
              <li>Fast and responsive</li>
              <li>Easy to use</li>
              <li>Different fonts</li>
            </ul>
          </div>
        </div>
  
        
        
        <div style="width: 100%">
          <hr />
        </div>
        
        
        <div style="width: 100%; margin-top: 2vw;display: flex;">
          <img
            src="https://assets-global.website-files.com/5f030e7bdf54ce3c5daf3964/61f27db4f69cca0cd9604a89_avatar-customer-service-female-one.svg"
            alt=""
          />
          <div class="qualities-list">
            <h3>Customer support</h3>
            <ul class="mylist">
              <li>24/7 customer support available throughout the world</li>
              <li>All of our agents are well-trained </li>
              <li>We make sure that you queries are resolved no matter how small or big</li>
              <li>Feel free to contact us anytime</li>
            </ul>
          </div>
        </div>
        <div style="width: 100%">
          <hr />
        </div>
        <div style="width: 100%; margin-top: 2vw;display: flex;">
          <img
            src="https://assets-global.website-files.com/5f030e7bdf54ce3c5daf3964/61f27db5e3a57e46f7311a3a_secure-payment.svg"
            alt=""
          />
  
          <div class="qualities-list">
            <h3>Secure Payment</h3>
            <ul class="mylist">
              <li>Pay using the worlds famous Visa and Mastercard secure payment methods</li>
              <li>Payments are authenticated before being sent</li>
              <li>Make huge payments in one go without any restrictions</li>
              <li>Various secure ways to make your payment</li>
            </ul>
          </div>
        </div>
        <div style="width: 100%">
          <hr />
        </div>
      </div>
  
      <br>
      <br>
      <br>
  
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
  


    


    <!-- jumbotron -->
   
   
    

  </body>
</html>
