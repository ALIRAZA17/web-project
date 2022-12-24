<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Post a Job</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
    </head>
<body>
    {{-- navbar --}}
    <x-navbar/>

    <div class="col-lg-8 mx-auto p-4 py-md-5">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
          <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4" style="color:darkslategray; ">How to post a Job?</span>
          </a>
        </header>
      
        <main>
          <h1 class="col-12 col-lg-6" style="color:darkslategray;">Do start with a strong headline.</h1>
          <p class="fs-5 col-12">This helps your job post stand out to the right candidates. It's the first thing they'll see, so make it count!</p>
      
      
          <hr style="margin-top:2rem;">
      
          <div class="row g-5">
            <div class="col-12" style="color:darkslategray;">
              <h4>Example titles</h4>

              <ul class="list-group" style="padding: 2rem 0;">
              
                <li class="list-group-item list-group-item-success">Build responsive WordPress site with booking/payment functionality.</li>
                <li class="list-group-item list-group-item-success">Graphic designer needed to design ad creative for multiple campaigns.</li>
                <li class="list-group-item list-group-item-success">Facebook ad specialist needed for product launch.</li>
                <li class="list-group-item list-group-item-success">Data Analyst needed for a new position.</li>
                <li class="list-group-item list-group-item-success">Build responsive E-commerce website for Jobify.</li>
                <li class="list-group-item list-group-item-success">Design a netwrok for a department.</li>
                <li class="list-group-item list-group-item-success">Build UI/UX design for a new website.</li>
                <li class="list-group-item list-group-item-success">Build a student management system for university</li>
              </ul>
            </div>

          </div>
        </main>
        <hr style="margin-top:2rem;">
        <div class="container d-flex justify-content-center">
            <button type="button" class="btn btn-info mb-4 my-4 text-white">Post Now</button>
        </div>
        
        {{-- footer --}}
        <x-footer/>

      </div>

    </body>
</html>