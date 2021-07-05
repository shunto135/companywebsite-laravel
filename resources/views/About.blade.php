<!DOCTYPE html>
<html lang="en">
<head>
  <title>My IT Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-0 py-3">
                <h6> Best Domain hosting & IT Traning provider Company in Bangladesh<h6>
            </div>
            <div class="col-6 social text-right py-3">

                <a href="https://www.facebook.com/AShunto/"> <i class="fab fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/channel/UCqkDd141Dlw_NytBwuNymMg"> <i class="fab fa-youtube-square"></i></a>
                <a href="https://www.instagram.com/adiptoshunto/"> <i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/BCBtigers"> <i class="fab fa-twitter-square"></i></a>

             </div>

        </div>
        
    </div>

</section>

<nav class="navbar navbar-expand-lg navbar-light bg-light pt-2 stick-top">
  <div clas="container">
      <div class="row">
       <div class="col-4">
    <a class="navbar-brand " herf="#"><img src="/image/lar.png"></a>
   <a class="navbar-brand" href="#">The IT Zone</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    </div>
   </div>
    <div class="col-8 text-center">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
     
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('About')}}">About</a>
     
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="{{URL::to('Service')}}">Service</a>
     
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="{{URL::to('Contact')}}">Contact</a>
     
      </li>
     </ul>

    </div>
    </div>
  </div>
</nav>
<section class="body">
    <div class="container">
        <div class="row">
            <div class="col-6 py-3">
                <img class="container-fluid" src="{{asset('/image/img-1.jpg')}}">
            </div>
            <div class="col-6 py-3">
                <h3 class="head-line display-5 text-center">Company Overview</h3>
                <p class="text-pa py-2">
                 Company overviews take the form of a company profile that alerts people to key facts about 
                 a company they may find important or relevant.
                 The location of the company headquarters is disclosed, along with contact information, 
                 the full company name, the type of industry the company is in, and whether or not it
                 is traded on the stock market. Company overviews can also familiarize readers with the
                 company background, including the date the company was founded,
                 what it did historically, and various mergers and acquisitions it has been involved in.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="overview pt-2">
    <div class="container">
        <div class="row">
            <div class="col-12 py-2">
                <h3 class="text-center">Our Expertise</h3>
                <p class="text-center">We apply our management skills, technological flair and, most of all,
                  our ability to harness our strategic insights when solving our clients.</p>  
                
            </div>
        </div>
    </div>
</section>
<section class="img">
  <div class="container">
     <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <div>
          <img class="container-fluid" src="{{asset('/image/html.jpg')}}">
          <img class="container-fluid" src="{{asset('/image/css.jpg')}}">
          <img class="container-fluid" src="{{asset('/image/js.jpg')}}">
          <img class="container-fluid" src="{{asset('/image/php.jpg')}}">
          <img class="container-fluid" src="{{asset('/image/dg.jpg')}}">
          <img class="container-fluid" src="{{asset('/image/laravel.png')}}">
          </div>
        </div>
     </div>
    </div>
</section>

<footer id="footer">
  <div class="footer-newsletter">
   <div class="container">
    <div class="row justifyy-content-center">
      <div class="col-lg-6">
        <h4> Join our Newsletter</h4>
        <p>We are ready to reply your message</p>
        <form action="" meathod="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
   </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>The IT Zone</h3>
          <p>
             House #30,Road #2 ,Block #B,Banani, Dhaka-1213.<br><br>
             <strong>Phone:</strong>01795033539, 01521417363<br>
             <strong>Email:</strong>mshunto171135@uiu.ac.bd, khanshunto@gmail.com<br>
          </p>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Link</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Desigm</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container footer-bottom clearfix">
    <div class="copy right">
      &copy;Copyright<strong><span>The IT Zone</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">Md Abu Hashem Shunto</a>
    </div>
  </div>
</footer>
<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>
</body>
</html>