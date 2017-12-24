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
        <link href="<?php echo base_url('../assets/styles/gaya.css')?>" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
       
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav nav" id="navbar">
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
                        <img class="logoAtas" src="<?php echo base_url('../assets/images/logo.png') ?>" />
                    </a>
                </div>
            </nav>

        <header class="tf-header">
            <div class="container isiHeader">
                <div class="row jumbku">
                    <div class="col-lg-5 col-md-5 col-xs-12 vertical-center">
                        <div class="col-lg-12">
                            <h2><?php foreach($nama_perusahaan as $row){ echo $row->isi; }?></h2>
                            <i><?php foreach($nama_perusahaan_sub as $row){ echo $row->isi; }?></i>
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
                        <p><center><?php foreach($our_service as $row) {
                                            echo $row->isi;    
                                        }?></center></p>
                    </div>
                </div>
                <div class="row penggabung2icon">
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <img class="iconJualSewa" src="<?php echo base_url('../assets/images/beli.png')?>" alt="">
                            <h5 class="text-center">Penjualan</h5>
                            <p><center> <?php foreach($our_service_penjualan as $row) {
                                            echo $row->isi;    
                                        }?>
                                </center></p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12"> 
                            <img class="iconJualSewa" src="<?php echo base_url('../assets/images/sewa.png')?>" alt="">
                            <h5 class="text-center">Persewaan</h5>
                            <p><center><?php foreach($our_service_persewaan as $row) {
                                            echo $row->isi;    
                                        }?>
                                </center></p>
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
                        <p><center><?php foreach($our_product as $row){ echo $row->isi; } ?></center></p>
                    </div>
                </div>


                <div class="row karosel">
                    <div class="col-lg-12">
                        <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card" style="width: 20rem;">
                                        <img class="card-img-top" src="http://i.imgur.com/EW5FgJM.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>            
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card" style="width: 20rem;">
                                        <img class="card-img-top" src="http://i.imgur.com/EW5FgJM.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>            
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">                               
                                    <div class="card" style="width: 20rem;">
                                        <img class="card-img-top" src="http://i.imgur.com/EW5FgJM.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>            
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
                        </div> -->



                        <div class="container-fluid">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-2 active">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                             <center><h4>asdasd</h4></center>                                            
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item col-md-2">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                            <center><h4>asdasd</h4></center>                                           
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item col-md-2">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                            <center><h4>asdasd</h4></center>                                            
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item col-md-2">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                            <center><h4>asdasd</h4></center>                                          
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item col-md-2">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                            <center><h4>asdasd</h4></center>                                            
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item col-md-2">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                            <center><h4>asdasd</h4></center>                                            
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item col-md-2">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                            <center><h4>asdasd</h4></center>                                            
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item col-md-2">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                            <center><h4>asdasd</h4></center>                                            
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item col-md-2">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                            <center><h4>asdasd</h4></center>                                            
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item col-md-2">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                            <center><h4>asdasd</h4></center>                                            
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item col-md-2">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
                                        </div>          
                                        <div class="card-body">
                                            <center><h4>asdasd</h4></center>                                            
                                        </div>                              
                                    </div>
                                </div>


                            </div>
                            


                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>





                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12">
                        <form action="/">
                            <input class="tombolGetCatalogue btn" type="button" value="GET CATALOGUE"/>
                        </form>
                    </div>
                </div>


            </div>
        </div>



 

        <div class="footer" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-12">
                            <h3><?php foreach($nama_perusahaan as $row){ echo $row->isi; }?></h3>
                            <h5><?php foreach($nama_perusahaan_sub as $row){ echo $row->isi; }?></h5>
                            <div class="row address">
                                <div class="col-lg-1">
                                    <img class="iconFooter" src="<?php echo base_url('../assets/images/location.png') ?>" alt="">
                                </div>
                                <div class="col-lg-8">Address</div>
                            </div>
                            <div class="row alamat">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-8">
                                    <?php foreach($alamat as $row){ echo $row->isi; }?>                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <h5>Contact Us</h5>
                            <div class="row kontak">
                                <div class="col-lg-1">
                                    <img class="iconFooter" src="<?php echo base_url('../assets/images/HP.png') ?>" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <?php foreach($no_hp as $row){ echo $row->isi; }?>
                                </div>
                            </div>
                            <div class="row kontak">
                                <div class="col-lg-1">
                                    <img class="iconFooter" src="<?php echo base_url('../assets/images/TLP.png') ?>" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <?php foreach($no_telp as $row){ echo $row->isi; }?>
                                </div>
                            </div>
                            <div class="row kontak">
                                <div class="col-lg-1">
                                    <img class="iconFooter" src="<?php echo base_url('../assets/images/email.png') ?>" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <?php foreach($email as $row){ echo $row->isi; }?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('../assets/scripts/gaya.js')?>"></script>
    </body>
</html>
