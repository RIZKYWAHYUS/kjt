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
    <link href="../assets/styles/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/styles/css_admin.css" rel="stylesheet" />
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
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             Selamat datang kembali<strong> Admin !</strong>
                        </div>           
                    </div>
                </div>
                  <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                        <div class="div-square">
                            <a href="<?php echo base_url('admin/ubah_data_perusahaan'); ?>" >
                                    <i class="fa fa-circle-o-notch fa-5x"></i>
                                    <h4>Ubah Data Perusahaan</h4>
                            </a>
                        </div>
                    </div> 
                 
                    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                        <div class="div-square">
                            <a href="<?php echo base_url('admin/ubah_artikel');?>" >
                                    <i class="fa fa-envelope-o fa-5x"></i>
                                    <h4>Ubah</br> Artikel</h4>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                        <div class="div-square">
                            <a href="#gantigambar" >
                                    <i class="fa fa-lightbulb-o fa-5x"></i>
                                    <h4>New Issues</h4>
                            </a>
                        </div>
                    </div>
              </div>
               <!-- row text-center pad-top -->
           </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- WRAPPER -->

        <div class="footer">
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
                </div>
            </div>
        </div>
          

    
    <script src="../assets/scripts/js_admin.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
