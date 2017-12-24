<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin KJT</title>
	<!-- BOOTSTRAP STYLES-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLES-->
    <link href="../../assets/styles/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../../assets/styles/css_admin.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand " href="#">
						<img style="width:220px;" class="logoAtas" src="<?php echo base_url('../assets/images/logo.png') ?>" />
                    </a> 
                </div>
            </div>
         </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="<?php echo base_url('admin');?>" ><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-table "></i>Keluar</a>
                    </li>
                </ul>
           </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     < <a href="<?php echo base_url('admin');?>">Dashboard</a> / Ubah Artikel
                    </div>
                </div>              
                 <!-- /. ROW  -->

                <?php
                    if(isset($_POST['sukses'])){
                        echo "<div class='row'>
                                 <div class='col-lg-12'>
                                    <div class='alert alert-info'>
                                        Perubahan Berhasil disimpan!
                                    </div>
                                </div>
                            </div>" ;
                    }
                ?>


                <hr />
          
                <div class="row">
                    <div class="col-lg-12">
                        <form action="<?php echo base_url('admin/simpanPerubahanArtikel');?>" method="POST">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3>Our Service</h3></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="artikel-our-service">Deskripsi Our Service</label>
                                        <textarea rows="5" type="text" name="artikel-our-service" id="artikel-our-service" class="form-control"> <?php foreach($our_service as $row){ echo $row->isi; }?> </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="artikel-our-service-penjualan">Our Service / Penjualan</label>
                                        <textarea rows="5" type="text" name="artikel-our-service-penjualan" id="artikel-our-service-penjualan" class="form-control"><?php foreach($our_service_penjualan as $row){ echo $row->isi; }?> </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="artikel-our-service-persewaan">Our Service / Persewaan</label>
                                        <textarea  rows="5"type="text" name="artikel-our-service-persewaan" id="artikel-our-service-persewaan" class="form-control"> <?php foreach($our_service_persewaan as $row){ echo $row->isi; }?> </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading"><h3>Our Product</h3></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="artikel-our-product">Deskripsi Our Product</label>
                                        <textarea  rows="5" type="text" name="artikel-our-product" id="artikel-our-product" class="form-control"> <?php foreach($our_product as $row) { echo $row->isi; }?> </textarea>
                                    </div>
                                </div>
                            </div>


                            
                            <input type="submit" class="btn btn-info" value="Simpan">
                  
                        </form>
                    </div>
                </div>
                
                  
        </div>
            <!-- /. PAGE INNER  -->
    </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
      <div class="footer">
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
                </div>
            </div>
      </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

      <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/scripts/js_admin.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
