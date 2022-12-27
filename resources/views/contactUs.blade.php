<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>CONTACT US</title>
    <link rel="icon" href="{{asset('img/jobify title.png')}}"/>
   <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/csscont.css') }}>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <x-StaticNavbar/>

  <section class="mybody mt-4">
  <div class="mycontainer">
    <div class="mycontent">
      <div class="myleft-side">
        <div class="myaddress mydetails">
          <i class="fas fa-map-marker-alt"></i>
          <div class="mytopic">Address</div>
          <div class="mytext-one">NUST, H12</div>
          <div class="mytext-two">ISLAMABAD, PAKISTAN</div>
        </div>
        <div class="myphone mydetails">
          <i class="fas fa-phone-alt"></i>
          <div class="mytopic">Phone</div>
          <div class="mytext-one">+1234 5678 923</div>
          <div class="mytext-two">+92 324 49213</div>
        </div>
        <div class="myemail mydetails">
          <i class="fas fa-envelope"></i>
          <div class="mytopic">Email</div>
          <div class="mytext-one">Chaudrymochar@gmail.com</div>
          <div class="mytext-two">JHELUMIDAR@gmail.com</div>
        </div>
      </div>
      <div class="myright-side">
        <div class="mytopic-text" style=" color:#38b6ff;;font-weight:700;">Send us a message</div>
        <p>Feel free to contact an agent at Jobify regarding any queries.</p>
      <form action="#">
        <div class="myinput-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="myinput-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="myinput-box mymessage-box">
          <input type="text" placeholder="Enter the text here">
          
        </div>
        <div class="mybutton">
          <input type="button" style="background-color: #38b6ff;color:white;font-weight:700;"  value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
  </section>

  <x-footer/>

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
