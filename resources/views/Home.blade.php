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
<!--------------slider------>
<section class="slider">
  <div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
       <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('image/slider-1.jpg')}}" alt="First slide">
        <div class ="carousel-caption">
        <h2>Best Website Design and Development Company in Bangladesh</h2>
        </div>
      </div>

      <div class="carousel-item">
      <img class="d-block w-100" src="image/slider-2.jpg" alt="Second slide">
        <div class="carousel-caption">
        <h2>Best IT Tranning Provider Company in Bangladesh</h2>
        </div>
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="image/slider-3.jpg" alt="Third slide">
       <div class="carousel-caption">
        <h2>Best Software Service Provider Company in Bangladesh</h2>
       </div>
     </div>
    </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
     </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

<!-------about------>
<section class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img class="img-fuild poaition relative"src="{{asset('/image/image-1.jpg') }}"alt="">
      
      </div>
      <div class="col-6">
      <h3 class="text-about-headline display-5 text-center">About Us</h3>
      <p class="py-2">This company is an IT enable web and IT tranning institute service providing company in Bangladesh. 
         It is provided two major type of service.Privacy Friendly. 
         Always Facts. 100% Secure. The Best Resources. Unlimited Access.
         Results & Answers. Types: Best Results, Explore Now, New Sources, Best in Search.
       </p>
       <button class="btn btn-primary mb-4" data-target="#collapse-1" data-toggle="collapse">Read More</button>
      <div class="collapse" id="collapse-1">
        <div class="card bg bg-info">
          <div class="card-body">
            <p> Information technology (IT) is the use of computers to store or retrieve data and information.
            Companies in the information technology field are often discussed as a group as the "tech sector" or the "tech industry". 
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!--------Service----->
<section class="service">
  <div class="container">
    <div class="row">
     <div class="col-lg-6 col-md-6 col-12">
      <img class="img-fluid" src="{{asset('/image/image-2.jpg')}}"alt="">
    
     </div>
    <div class="col-6">
      <div class="elementor-text-editor elementor-clearfix"><p><span style="color: #4c4c4c; font-size: 50px; font-weight: 600;
      font-family:Titillium web,san-serif;line-height:55px;">We built<br/></span><span style= "color: rgb(214,18,214);
      font-size:40px;font-weight:900;font-family:Titillium web,san-serif;line-height:55px;">Awesome</span><span style= 
      "color: #4c4c4c;font-size: 50px; font-weight: 900; font-family:Titillium web,san-serif;line-height:55px;">WEBSITES</span></p>
      </div>
      <p class="py-2">IT services refers to the application of business and technical expertise to enable organizations 
       in the creation, management and optimization of or access to information and business processes.
       There are also different categories of service: business process services, application services and infrastructure services.</p>
       <button class="btn btn-secondary text-sucess"><a class="text-white" >Order now</a></button>
    </div>
    <div class="col-12 pt-4 text-center">
      <div class="elementor-text-editor elementor-clearfix"><span style="color :#1e1e1e; font-size:40px;font-weight:bold;">CHOOSE</span>
      <span style="color:#00ff00;font-size:40px; font-weight:bold;">YOUR BEST</span><span style="color:#1e1e1e;
      font-size:40px; font-weight:bold;">PACKAGE</span>
     </div>
    </div>  
     <div class="col-lg-6 col-md-6 col-12">
     <img class="img-fluid position-relative pt-4" src="{{asset('/image/image-3.jpg')}}"alt=""style="height:auto;width:400px;">
     </div>  
       
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="bg-info text-bold text-center">Static Web Site</h2>
          <h3 class="btn btn-outline-dark">The IT company offer low cost mobile friendly static website for expand your business in online.</h3>
          <li class="btn button-error btn btn-outline-info">
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> 6 Static page</span></i>
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> .Com Domain</span></i>
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> Standard Hosting</span></i>
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> Smart Design</span></i>
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> Corporation Email address</span></i>
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> 24/7 Live Support</span></i>


          </li>
          <h3 class="text-bold text-exceptation thead-dark pt-2 py-2 text-center"style="background-color: aquamarine">STARTING $10,000/BDT</h3>
          <button class="btn btn-secondary text-white">Buy Now</button>
        </div>

     <div class="col-lg-6 col-md-6 col-sm-6 ">
        <img class="img-fluid position-relative pt-4" src="{{asset('/image/image-5.jpg')}}"alt=""style="height:auto;width:400px;">
     </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="bg-dark text-bold text-center">DYNAMIC WEBSITE</h2>
          <h3 class="bg-light">This company offer you low cost mobile friendly static website for online business .</h3>
          <li class="btn button-error btn btn-outline-info">
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> Smart design</span></i>
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> .Com Domain</span></i>
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> 1000 MB Hosting</span></i>
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> Call support</span></i>
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> Corporation Email address</span></i>
            <i aria-hidden="true"class="fas fa-check-square" style="margin-left:30px;"> <span> 24/7 Live Support</span></i>


          </li>
          <h3 class="text-bold text-exceptation thead-dark pt-2 py-2 text-center"style="background-color: aquamarine">STARTING AT JUST $10,000/BDT</h3>
          <button class="btn btn-secondary text-white">Buy Now</button>
        </div>
        
        
        <div class="col-6">
    
    
    </div>
    
  </div>
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
        <iframe src="https://www.google.com/maps/place/United+International+University/@23.7977815,90.449626,15z/data=!4m5!3m4!1s0x0:0x686fa3e360361ddf!8m2!3d23.7977815!4d90.449626"></iframe>
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
