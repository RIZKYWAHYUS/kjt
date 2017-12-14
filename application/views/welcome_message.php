<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Start Simple</title>
    <meta name="description" content="This is a basic starter template for MMPilot which includes Bootstrap Framework."/>
    <link href="<?php echo base_url('assets/styles/main.css')?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,600,700" rel="stylesheet">
  </head>
  <body id="top">
    <header class="tf-header">
      <nav class="navbar navbar-dark" style="background-color: white;color:black;">
        <div class="container">
          <div id="navbar">
            <ul class="nav ">
              <li class="nav-item"><a class="nav-link" style="color : black;" href="#">HOME</a></li>
              <li class="nav-item"><a class="nav-link" style="color : black;" href="#work">SERVICE</a></li>
              <li class="nav-item"><a class="nav-link" style="color : black;" href="#work">PRODUCTS</a></li>
              <li class="nav-item"><a class="nav-link" style="color : black;" href="#contact">CONTACT</a></li>
              <li class="nav-item"><a class="nav-link" style="color : black;" href="#contact">ABOUT US</a></li>
            </ul>
          </div>
          <h1><a class="navbar-brand pull-right"  href="/"><img style="width:280px;" src="<?php echo base_url('assets/images/logo.png') ?>" /></a></h1>
        </div>
      </nav>
      <div class="container">
        <div class="row" >
          <div class="col-md-5 col-sm-12">
          <h2>CV. KARYA JAYA TEKNIK</h2>
          <h3><i>General Supplier of Scafolding</i></h3>
          </div>
          <div class="col-md-7 col-sm-12" style="height:200dp; background-color:rgba(211, 15, 25, 0.5);">
            <form action="/" method="POST">

              <div class="form-group">
                <h3>Subscribe & Contact</h3>
              </div>

              <div class="form-group">
                <input class="form-control" placeholder="name" type="text" name="nama" id="nama">
              </div> 
              
              <div class="form-group">
                <input class="form-control" type="text" name="company" id="company" placeholder="Company">
              </div>

              <div class="form-group">
                <input class="form-control" type="text" name="email" id="email" placeholder="*Email">
              </div>

              <input class="btn btn-danger" type="button" value="SEND">
            </form>
          </div>
        </div>
       
       
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="tf-work-section">
  <!-- <div class="container" id="work">
    <h2 class="h3">Our Success Stroies</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="<?php echo base_url('assets/images/2-start-simple.jpg')?>" alt="2-start-simple"/>
          <div class="card-body">
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipiscing elit interdum sagittis, nisi ac aptent vitae est facilisi.</p><a class="text-dark card-link" href="#">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="<?php echo base_url('assets/images/3-start-simple.jpg')?>" alt="3-start-simple"/>
          <div class="card-body">
            <p class="text-muted">Porttitor varius auctor litora congue sociosqu montes eleifend facilisi elementum convallis, diam et nullam sem.</p><a class="text-dark card-link" href="#">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="<?php echo base_url('assets/images/4-start-simple.jpg')?>" alt="4-start-simple"/>
          <div class="card-body">
            <p class="text-muted">Commodo convallis varius egestas purus rhoncus cras morbi dignissim, ligula vestibulum ultrices urna semper.</p><a class="text-dark card-link" href="#">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>  -->

<div class="container-fluid">
  <div class="row">
      <div class="col-md-2 col-sm-3 col-lg-3 col-xl-3mx-auto header-ourservice">
        <h3>Our Service</h3>
      </div>

      <div class="col-lg-12">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis, justo at finibus tincidunt, orci erat mattis nisl, non sodales purus nisi a ante. Pellentesque viverra gravida massa blandit sagittis. Morbi et lectus auctor, dictum nulla id, vulputate neque. Pellentesque lobortis porttitor porta. Proin tempus maximus justo a cursus. Maecenas pellentesque auctor ex id rhoncus. In ornare mauris ligula. Cras eu tristique tortor. Ut nec ultricies libero. 
      </div>
  </div>
</div>


</div>



<div class="tf-quotes-section">
  <div class="carousel slide mt-5" id="tf-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
      <li class="active" data-target="#tf-carousel" data-slide-to="0"></li>
      <li data-target="#tf-carousel" data-slide-to="1"></li>
      <li data-target="#tf-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url(<?php echo base_url('assets/images/5-start-simple-slider.jpg')?>);">
        <div class="carousel-caption">
          <p class="slider-text-1">"Amazing product, Start Simple cares for their customers and helps them at every step.<br/>I am a satisfied customer!"</p>
          <p class="slider-text-2">Walter George<br/>CEO, Founder of Gupply</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/images/6-start-simple-slider.jpg')?>);">
        <div class="carousel-caption">
          <p class="slider-text-1">"Start Simple thinks outside the box and offers solutions through the creative process of developing apps.<br/>They helped me succeed!"</p>
          <p class="slider-text-2">Nancy Young<br/>Managing Director, Amazingly</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/images/7-start-simple-slider.jpg')?>);">
        <div class="carousel-caption">
          <p class="slider-text-1">"Simple yet elegant solution to showcase our product and services.<br/>Couldn't have asked for more!"</p>
          <p class="slider-text-2">Glenn Harrold</br>Marketing Manager</p>
        </div>
      </div>
    </div><a class="carousel-control-prev" href="#tf-carousel" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#tf-carousel" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
  </div>
</div>
<div class="tf-contact-section"> 
  <div class="container" id="contact">
    <h2 class="h4">Tell us About Your Requirement</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <form>
          <h3 class="h5">Contact us</h3>
          <div class="row no-gutters">
            <div class="col-lg-6 col-md-12 col-sm-12 tf-contact-col">
              <input class="bg-light form-control" type="text" placeholder="*Name"/>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 pb-2">
              <input class="bg-light form-control" type="email" id="inputEmail3" placeholder="*Your Email Address"/>
            </div>
          </div>
          <div class="row pb-2 no-gutters">
            <div class="col-md-12 col-sm-12">
              <textarea class="bg-light form-control mb-2 mb-sm-0" name="" cols="30" rows="5" type="text" id="inlineFormInput" placeholder="*Your Message"></textarea>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
        </form>
      </div>
      <div class="col-md-8 col-sm-12 float-right text-right">
        <h3 class="h5">Address</h3><span>Start Simple<br/>United States</span>
        <p></p>
        <h3 class="h5">Phone</h3>
        <p>(243) 948 3866</p>
        <h3 class="h5">Email</h3>
        <p>contact@example.com</p>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="bg-dark py-4 mt-5 tf-footer">
      <div class="container text-light">
        <div class="row">
          <div class="col-md-6 col-sm-12">&copy Your Company Name. All rights reserved.</div>
          <div class="col-md-6 col-sm-12 text-right tf-design">Design - <a href="https://templateflip.com" target="_blank">Templateflip</a></div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/scripts/main.js')?>"></script>
  </body>
</html>