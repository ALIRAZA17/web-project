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
    <link rel="stylesheet" href="index.css">
    <style>
      .save-icon{
        transition: 1s;
      }

      .save-icon:hover{
        transform: scale(1.3);
      }
    </style>
  </head>

  <body>
      <x-navbar/>
      {{-- navbar --}}
      {{-- search bar --}}
      <div class="container" style="margin-top: 3rem; max-width: 50%;">
        <form class="d-flex mt-4" role="search" >
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
      </div>

      {{-- cards --}}
      <div class="container d-flex flex-wrap justify-content-center" style="gap: 3rem; margin-top: 7rem; margin-bottom: 3rem;">
        
        <x-available-job-card jobName="Architect & Designer" img="/imgs/microsoft.png"/>
        <x-available-job-card jobName="Web Developer" img="/imgs/google.png"/>
        <x-available-job-card jobName="Graphic Designer" img="/imgs/apple.png"/>
        <x-available-job-card jobName="Product Manager" img="/imgs/amazon.png"/>

      </div>
        
      {{-- footer --}}
      <x-footer/>

  </body>
</html>
