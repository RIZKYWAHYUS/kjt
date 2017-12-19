<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>General Supplier of Scaffolding</title>
        <meta name="description" content="Website KJT">
        <link href="<?php echo base_url('assets/styles/gaya.css')?>" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
       
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#our-service">SERVICE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#our-product">PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">CONTACTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                        </ul>
                    </div>
                    <a class="navbar-brand" href="#">
                        <img class="logoAtas" src="<?php echo base_url('assets/images/logo.png') ?>" />
                    </a>
                </div>
            </nav>

        <header class="tf-header">
            <div class="container isiHeader">
                <div class="row jumbku">
                    <div class="col-lg-5 col-md-5 col-xs-12 vertical-center">
                        <div class="col-lg-12">
                            <h2>CV. KARYA JAYA TEKNIK</h2>
                            <i>General Supplier of Scaffolding</i>
                        </div>
                    </div>
                
                    <div class="col-lg-2 col-md-2"></div>
                    
                    <div class="col-lg-5 col-md-5 col-xs-5 formku">
                        <form action="/">
                            <h5 class="text-center">Subscribe & Contacts</h5>
                            <input class="form-control kotakInput" type="text" name="name" id="name" placeholder="*Name">
                            <input class="form-control kotakInput" type="text" name="company" id="company" placeholder="Company">
                            <input class="form-control kotakInput" type="text" name="email" id="email" placeholder="*Email">
                            <input class="tombolSubmit btn" type="button" value="SEND">       
                        </form>

                    </div>
                </div>
            </div>
        </header>
        
        <div class="tf-work-section" id="our-service">        
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center judulOurService">
                        <h4>Our Service</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p><center>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis interdum tellus ut efficitur. Pellentesque in bibendum velit. Aenean ac augue pulvinar metus luctus interdum vel vel felis. Maecenas et mauris consectetur, posuere lacus vel, lacinia magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</center></p>
                    </div>
                </div>
                <div class="row penggabung2icon">
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <img class="iconJualSewa" src="<?php echo base_url('assets/images/beli.png')?>" alt="">
                            <h5 class="text-center">Penjualan</h5>
                            <p><center>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis interdum tellus ut efficitur. Pellentesque in bibendum velit. Aenean ac augue pulvinar metus luctus interdum vel vel felis. Maecenas et mauris consectetur</center></p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <img class="iconJualSewa" src="<?php echo base_url('assets/images/sewa.png')?>" alt="">
                            <h5 class="text-center">Persewaan</h5>
                            <p><center>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis interdum tellus ut efficitur. Pellentesque in bibendum velit. Aenean ac augue pulvinar metus luctus interdum vel vel felis. Maecenas et mauris consectetur</center></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-product" id="our-product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center judulOurService">
                        <h4>Our Product</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <p><center>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis interdum tellus ut efficitur. Pellentesque in bibendum velit. Aenean ac augue pulvinar metus luctus interdum vel vel felis. Maecenas et mauris consectetur, posuere lacus vel, lacinia magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</center></p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-lg-3">
                                    <div class="card" style="width: 20rem;">
                                        <img class="card-img-top" src="http://i.imgur.com/EW5FgJM.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-3">
                                    <div class="card" style="width: 20rem;">
                                        <img class="card-img-top" src="http://i.imgur.com/EW5FgJM.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-3">
                                    <div class="card" style="width: 20rem;">
                                        <img class="card-img-top" src="http://i.imgur.com/EW5FgJM.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>            
                                        </div>
                                    </div>
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
                </div>



            </div>
        </div>



 

        <div class="footer" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-12">
                            <h3>CV. KARYA JAYA TEKNIK</h3>
                            <h5>General Supplier of Scaffolding</h5>
                            <div class="row address">
                                <div class="col-lg-1">
                                    <img class="iconFooter" src="<?php echo base_url('assets/images/location.png') ?>" alt="">
                                </div>
                                <div class="col-lg-8">Address</div>
                            </div>
                            <div class="row alamat">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-8">
                                    Jalan Semeru II no.7, Bambe, Diyorejo, Gresik, Sidoarjo
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <h5>Contact Us</h5>
                            <div class="row kontak">
                                <div class="col-lg-1">
                                    <img class="iconFooter" src="<?php echo base_url('assets/images/HP.png') ?>" alt="">
                                </div>
                                <div class="col-lg-8">
                                    081333322261 / 081286135034
                                </div>
                            </div>
                            <div class="row kontak">
                                <div class="col-lg-1">
                                    <img class="iconFooter" src="<?php echo base_url('assets/images/TLP.png') ?>" alt="">
                                </div>
                                <div class="col-lg-8">
                                    031-7671618 / 031-7675065
                                </div>
                            </div>
                            <div class="row kontak">
                                <div class="col-lg-1">
                                    <img class="iconFooter" src="<?php echo base_url('assets/images/email.png') ?>" alt="">
                                </div>
                                <div class="col-lg-8">
                                    kjt.scaffolding@gmail.com
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/scripts/gaya.js')?>"></script>
    </body>
</html>
