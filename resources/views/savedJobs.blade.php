<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">

    <style>
        .delete-icon{
            transition: 1s;
        }
        .delete-icon:hover{
            transform: scale(1.3);
        }
    </style>
  </head>

  <body>
      {{-- navbar --}}
      <x-navbar/>
 
      <!-- search bar -->
      <div class="container" style="margin-top: 3rem; max-width: 50%;">
        <form class="d-flex mt-4" role="search" >
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
      </div>

      <!-- cards -->
      <div class="container d-flex flex-wrap justify-content-center" style="gap: 3rem; margin-top: 7rem; margin-bottom: 3rem;">
        
        <x-saved-job-card jobName="Graphics Designer" img="/imgs/microsoft.png"/>
        <x-saved-job-card jobName="Web Developer" img="/imgs/google.png"/>
        <x-saved-job-card jobName="Graphics Designer" img="/imgs/amazon.png"/>
        <x-saved-job-card jobName="Graphics Designer" img="/imgs/apple.png"/>
        
      </div>
        
        {{-- footer --}}
        <x-footer/>

  </body>
</html>
