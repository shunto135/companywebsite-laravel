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

<!------Header----->

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
<!-------navbar------>

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
<!------------------service body----------->
<section class="service-body">
  <div class="container">
    <div class="row">
      <div class="col-12 py-3">
      <a class="navbar-brand " herf="#"><img src="/image/ser.png"></a>
      </div>
    </div>
  </div>
</section>
<!--------footer---------->
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