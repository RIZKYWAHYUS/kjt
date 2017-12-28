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
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDBTp3fK8iAxcPRwy09PYy24To7gcrkpz4"></script>
        <script src="<?php echo base_url('../assets/scripts/gmaps.js');?>"></script>
        <link href="<?php echo base_url('../assets/styles/css_contactus.css')?>" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
       
    </head>
    <body>

    <nav class="navbar sticky-top navbar-fixed-top navbar-expand-lg navbar-light bg-light">
                <div class="container">    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav nav" id="navbar">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#our-service">SERVICE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#our-product">PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#contact">CONTACTS</a>
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


       
       <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 subjudul">
                        <center><h4>Contact Us</h4></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-12">
                                <h3><?php foreach($nama_perusahaan as $row){ echo $row->isi; }?></h3>
                                <h5><?php foreach($nama_perusahaan_sub as $row){ echo $row->isi; }?></h5>
                                <div class="row address">
                                    <div class="col-lg-1">
                                        <img class="iconContact" src="<?php echo base_url('../assets/images/contactus1.png') ?>" alt="">
                                    </div>
                                    <div class="col-lg-8 textContact">  
                                        <?php foreach($alamat as $row){ echo $row->isi; }?>
                                    </div>
                                </div>
                                <div class="row address">
                                    <div class="col-lg-1">
                                        <img class="iconContact" src="<?php echo base_url('../assets/images/contactus4.png') ?>" alt="">
                                    </div>
                                    <div class="col-lg-8 textContact" >  
                                        <?php foreach($no_hp as $row){ echo $row->isi; }?>
                                    </div>
                                </div>
                                <div class="row address">
                                    <div class="col-lg-1 ">
                                        <img class="iconContact" src="<?php echo base_url('../assets/images/contactus3.png') ?>" alt="">
                                    </div>
                                    <div class="col-lg-8 textContact">  
                                        <?php foreach($no_telp as $row){ echo $row->isi; }?>
                                    </div>
                                </div>
                                <div class="row address">
                                    <div class="col-lg-1">
                                        <img class="iconContact" src="<?php echo base_url('../assets/images/contactus2.png') ?>" alt="">
                                    </div>
                                    <div class="col-lg-8 textContact">  
                                        <?php foreach($email as $row){ echo $row->isi; }?>
                                    </div>
                                </div>
                        </div>
                    </div>
               
                    <div class="col-lg-6">
                        <div id="map" class="peta"></div>
                        <script>

                            var map = new GMaps({
                                div: '#map',
                                lat: -12.043333,
                                lng: -77.028333
                              });

                              map.addMarker({
                                lat: -12.043333,
                                lng: -77.028333,
                                title: 'Lima',
                                infoWindow: {
                                    content: '<p>Kantor KJT</p>'
                                }
                                });
                                
                        </script>
                    </div>

                </div>
            </div>
       </div>
      


      <div class="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 subjudul">
                        <center><h4>Subscribe & Contact</h4></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="">
                            <div class="form-group form-inline">
                                <div class="col-lg-4 inputan">
                                    <center>
                                        <input class="form-control input-unit" type="text" name="name" id="name" placeholder="*name">                            
                                    </center>
                                </div>
                                <div class="col-lg-4 inputan">
                                    <center>
                                        <input class="form-control input-unit" type="text" name="company" id="company" placeholder="Company">                            
                                    </center>
                                </div>
                                <div class="col-lg-4 inputan">
                                    <center>
                                        <input class="form-control input-unit" type="text" name="email" id="email" placeholder="*email">                            
                                    </center>
                                </div>
                            </div>

                            <div class="form-group">
                                <center><input class="btn btn-default tombolSend" type="submit" value="SEND"><center>
                            </div>
                            
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
