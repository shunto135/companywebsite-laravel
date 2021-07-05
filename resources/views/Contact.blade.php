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
<section class="map">
        <iframe src="https://www.google.com/maps/place/Sirajganj+Bazar+Station/@24.4476532,89.7032561,17z/data=!3m1!4b1!4m5!3m4!1s0x39fdebdc9c6e91fd:0xee599bb031b93730!8m2!3d24.4476483!4d89.7054448?hl=en" width="1000" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </section>


<!---------------contact us------------->
<section id="contact" class="contact">
  <div class="container"data-aos="fade-up">
    <div class="section-title">
      <h2 class="text-center text-info">Contact</h2>
      <p class="btn btn-dark">Get in touch</P>
    </div>
    <div class="row">
      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="far fa-address-card"></i>
            <h4> The IT Zone</h4>
            <p> House #30,Road #2 ,Block #B,Banani, Dhaka-1213.</p>
          </div>
          <div class="email">
            <i class="fas fa-envelope-square"></i>
            <h4>Email:</h4>
            <p> mshunto171135bscse@uiu.ac.bd.</p>
          </div>
          <div class="phone">
            <i class="fas fa-mobile"></i>
            <h4> Call:</h4>
            <p> 01795033539, 01521417363.</p>
          </div>
          <div class="website">
            <i class="fas fa-globe"></i>
            <h4> Web Site</h4>
            <a href="https://www.uiu.ac.bd/">https://www.uiu.ac.bd/</a>
        </div>
       
        </div>
    </div>
    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
      <form action="form/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text"name="name"class="form-control"id="name"data-rule="minlen:4" data-msg="Please enter at least 4 charectar">
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your email</label>
              <input type="email"name="name"class="form-control"id="email"data-rule="email" data-msg="Please enter valid email">
              <div class="validation"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 charecter">
            <div class="validation"></div>
          </div>
          <div class="form-group">
          <label for="name">Message</label>
          <textarea class="form-control" name="message" rows="10" data-rude="required" data-msg="Please write something about us"></textarea>
          <div class="validation"></div>

        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank You!</div>
        </div>
        <div class="text-center"><button type="submit">Sent Message</button></div>
        </form>

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
        