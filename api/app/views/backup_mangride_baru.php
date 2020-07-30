<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>M-ride | Mang-Jek</title>

    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-57-precomposed.png">


<link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/style_kelebihan_animate.css" rel="stylesheet">  
  <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/style_fitur.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/animate.css" rel="stylesheet">
<!--   <link href="<?php echo base_url() ?>asset/css/style_kelebihan.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/jquery.fullPage.css" />
   

 
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/examples.css" /> -->

    <!--[if IE]>
        <script type="text/javascript">
             var console = { log: function() {} };
        </script>
    <![endif]-->

    <script src="<?php echo base_url() ?>/asset/js/jquery-3.1.1.js"></script>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script> -->

   <script type="text/javascript" src="<?php echo base_url()?>asset/js/scrolloverflow.js"></script>

    <script type="text/javascript" src="<?php echo base_url()?>asset/js/jquery.fullPage.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url()?>asset/js/examples.js"></script> -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                verticalCentered: true,
              
                menu: '#menu'
                
            });
        });
    </script>

    <style>
      .myContent{
        height: 130px;
      }
    </style>

</head>
<body>
<header id="header" role="banner">      
 
        
        <div class="main-nav fixed-menu">
            <div class="container">   
                <div class="row">
                    <div class="col-md-4 col-xs-2">                 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div>
        <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        MANG-JEK
                    </a>
                </li>
                <li class="scroll active">

                    <a href="<?php echo base_url() ?>index.php/c_utama/home"><i class="fa fa-home"></i><span>HOME</span></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-spinner"></i>LAYANAN<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" style="background-color: #121212; margin-left: 20px;">
                        <li><a href="<?php echo base_url() ?>index.php/c_utama/mang_car"><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MCAR.png" width="30" height="30" style="margin-top:-5px;"></i>M-CAR</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/c_utama/mang_ride"><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MRIDE.png" width="30" height="30" style="margin-top:-5px;"></i>M-RIDE</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/c_utama/mang_send"><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSEND.png" width="30" height="30" style="margin-top:-5px;"></i>M-SEND</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/c_utama/mang_box"><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MBOX.png" width="30" height="30" style="margin-top:-5px;"></i>M-BOX</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/c_utama/mang_mart"><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMART.png" width="30" height="30" style="margin-top:-5px;"></i>M-MART</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/c_utama/mang_massage"><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMASSAGE.png" width="30" height="30" style="margin-top:-5px;"></i>M-MASSAGE</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/c_utama/mang_food"><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MFOOD.png" width="30" height="30" style="margin-top:-5px;"></i>M-FOOD</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/c_utama/mang_service"><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSERVICE.png" width="30" height="30" style="margin-top:-5px;"></i>M-SERVICE</a></li>
                  </ul>
                </li>
               <!--  <li class="sidebar-menu-item">
                    
                    <a class="dropdown-toggle" data-toggle="dropdown">Layanan<span class="caret"></span></a>
                                    <ul class="dropdown-menu" >
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MCAR.png" width="30" height="30" style="margin-top:-5px;">Mang-Car</a></li>
                        <li><a href="<?php echo base_url() ?>/index.php/c_utama/mang_ride"><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MRIDE.png" width="30" height="30" style="margin-top:-5px;">Mang-Ride</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSEND.png" width="30" height="30" style="margin-top:-5px;">Mang-Send</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MBOX.png" width="30" height="30" style="margin-top:-5px;">Mang-Box</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMART.png" width="30" height="30" style="margin-top:-5px;">Mang-Mart</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMASSAGE.png" width="30" height="30" style="margin-top:-5px;">Mang-Massage</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MFOOD.png" width="30" height="30" style="margin-top:-5px;">Mang-Food</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSERVICE.png" width="30" height="30" style="margin-top:-5px;">Mang-Service</a></li>                                    
                    </ul>
                </li> -->
                 <li>

                    <a href="<?php echo base_url() ?>index.php/c_utama/home"><i class="fa fa-user"></i><span>JOIN</span></a>
                </li>
                <li class="scroll">
                    <a href="<?php echo base_url() ?>index.php/c_utama/blog"><i class="fa fa-file-text"></i><span>BLOG</span></a>
                </li>
                </li>
                <li class="scroll">
                    <a href="<?php echo base_url() ?>index.php/c_utama/faq"><i class="fa fa-question-circle"></i><span>FAQ</span></a>
                </li>
                </li>
                <li class="scroll">
                    <a href="<?php echo base_url() ?>index.php/c_utama/SyaratKetentuan"><i class="fa fa-list-alt"></i><span>SYARAT & KETENTUAN</span></a>
                </li>
                <li class="no-scroll">
                    <a href="<?php echo base_url() ?>index.php/c_utama/kebijakanPrivasi"><i class="fa fa-lock"></i><span>KEBIJAKAN PRIVASI</span></a>
                </li>
                <li class="scroll">
                    <a href="<?php echo base_url()?>index.php/c_utama/hubungi_kami"><i class="fa fa-envelope"></i><span>HUBUNGI KAMI</span></a>
                </li>


               
            </ul>
          </nav>
        </div>
         <button onclick="#menu-toggle" class="hamburger is-closed" id="menu-toggle">
                            
                            <span class="hamb-top"></span>
                            <span class="hamb-middle"></span>
                            <span class="hamb-bottom"></span>

                        </button>
         </div>
        <!-- /#sidebar-wrapper -->
                       
                        </div>
                      
                        <!-- <a class="navbar-brand" href="index.html">
                            <img class="img-responsive" src="<?php echo base_url() ?>asset/images/mangjek-logo.png" alt="logo">
                        </a>  --> 
                     </div>                  
                    </div>
                      <div class="col-md-4 col-xs-8">
                         <h1 class="main-logo">
                         <a href="#">
                            <!-- <img class="img-responsive" src="<?php echo base_url() ?>asset/images/mangjek-logo.png" alt="logo"> -->
                         </a>
                         </h1>
            <!-- /.top-logo -->
                     </div>
                    <div class="col-md-4 hidden-md-down">
                         <div class="top-bar-right hidden-sm hidden-xs">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a class="top-download ios" href="#">
                                            <img src="<?php echo base_url() ?>asset/images/app-store.png" width="118px" height="35px">
                                            <div class="ripple-wrapper"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="top-download android" href="#">
                                            <img src="<?php echo base_url() ?>asset/images/google-play.png" width="118px" height="35px">
                                            <div class="ripple-wrapper"></div>
                                        </a>
                                    </li>
                                 </ul>
                    </div>
            <!-- /.top-bar-right -->
        </div>
                      
                </div>
            </div>
        </div>                    
    

   
    </header>
    <!--/#header--> 
 
<div class="overlay"></div>

<div class="section fp-auto-height" id="fullpage">

<section class="section" id="layanan_isi">  
<!-- <div id="main-slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
        <li data-target="#main-slider" data-slide-to="1"></li>
        <li data-target="#main-slider" data-slide-to="2"></li>
      </ol>
    <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/banner1(b).png" alt="slider">              
      </div>

      <div class="item">
          <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/nf.Banner2.png" alt="slider">  
          
      </div>

      <div class="item">
          <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/banner1(b).png" alt="slider">  
          
      </div>
    </div> 
      
</div> -->
<div id="main-slider" class="carousel slide" data-ride="carousel" style="margin-top: 30px;">
      <ol class="carousel-indicators">
        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
        <li data-target="#main-slider" data-slide-to="1"></li>
        <li data-target="#main-slider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/banner1(b).png" alt="slider">            
          
        </div>
        <div class="item">
          <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/nf.Banner2.png" alt="slider">  
          
        </div>
        <div class="item">
          <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/banner1(b).png" alt="slider">  
          
        </div>        
      </div>
    </div>  

</section>

<section class="section " id="layanan_isi_detail1">
<div class="myContent" >
<div class="container animated slideInDown ">
		<h2>Mengapa Menggunakan Aplikasi M-RIDE?</h2>
        
					<div class="col-md-3" style="margin-top: 30px;">
						
            <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;"></center>
            <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/workspace.png" alt="member-1" style="width: 100%; max-width: 134px;">
						<h2 style="margin-top: 0px; font-size: 25px; font-weight: bold; color:#0B405C;">UNGGUL1</h2>
              
    

             </div>
             <div class="isi_unggul" style="padding:20px;">
						  <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt 
							</font></center>
              </div>

					</div>

					<div class="col-md-3" style="margin-top: 30px;">
            
            <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;"></center>
            <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/workspace.png" alt="member-1" style="width: 100%; max-width: 134px;">
            <h2 style="margin-top: 0px; font-size: 25px; font-weight: bold; color:#0B405C;">UNGGUL1</h2>
              
    

             </div>
             <div class="isi_unggul" style="padding:20px;">
              <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt 
              </font></center>
              </div>

          </div>

            <div class="col-md-3" style="margin-top: 30px;">
            
            <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;"></center>
            <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/workspace.png" alt="member-1" style="width: 100%; max-width: 134px;">
            <h2 style="margin-top: 0px; font-size: 25px; font-weight: bold; color:#0B405C;">UNGGUL1</h2>
              
    

             </div>
             <div class="isi_unggul" style="padding:20px;">
              <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt 
              </font></center>
              </div>

          </div>

            <div class="col-md-3" style="margin-top: 30px;">
            
            <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;"></center>
            <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/workspace.png" alt="member-1" style="width: 100%; max-width: 134px;">
            <h2 style="margin-top: 0px; font-size: 25px; font-weight: bold; color:#0B405C;">UNGGUL1</h2>
              
    

             </div>
             <div class="isi_unggul" style="padding:20px;">
              <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt 
              </font></center>
              </div>

          </div>
    </div>
</div>
</section>

<section class="section" id="how-it-work" style="margin-top:30px;">
<div class="myContent" >
<div class="container ">
    <div id="kendaraan" class="pilihan-kendaraan">
        <div class="container">
           
              <h2>Cara Menggunakan M-RIDE</h2>
          
            

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="">

                    <!-- trucks -->
                    <!-- <ul class="truck-slide">
                        <li><img src="/assets/gobox/img/truk1.png" alt=""></li>
                    </ul> -->

                    <div id="how-to-slide1" class="carousel slide " data-interval="0">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item truknya active">
                                <img src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE1.png"  alt="Truk" style="width:25%; height:25%; margin: 20px 35%;">
                            </div>
                            <div class="item truknya">
                                <img src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE2.png" style="width:25%; height:25%; margin: 20px 35%;" alt="Truk">
                            </div>
                            <div class="item truknya">
                                <img src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE3.png" style="width:25%; height:25%; margin: 20px 35%;" alt="Truk">
                            </div>
                            <div class="item truknya">
                                <img src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE4.png"  style="width:25%; height:25%; margin: 20px 35%;" alt="Truk">
                            </div>
                            <div class="item truknya">
                                <img src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE5.png"  style="width:25%; height:25%; margin: 20px 35%;" alt="Truk">
                            </div>

                        </div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active" data-target="#how-to-slide1" data-slide-to="0">
                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab" target="_top" aria-expanded="true">1<div class="ripple-wrapper"></div></a>
                            </li>
                            <li role="presentation" data-target="#how-to-slide1" data-slide-to="1" class="">
                                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" target="_top" aria-expanded="false">2
                                    <div class="ripple-wrapper"></div></a>
                            </li>
                            <li role="presentation" data-target="#how-to-slide1" data-slide-to="2" class="">
                                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" target="_top" aria-expanded="false">3
                                    <div class="ripple-wrapper"></div></a>
                            </li>
                            <li role="presentation" data-target="#how-to-slide1" data-slide-to="3" class="">
                                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab" target="_top" aria-expanded="false">4
                                    <div class="ripple-wrapper"></div></a>
                            </li>
                            <li role="presentation" data-target="#how-to-slide1" data-slide-to="4" class="">
                                <a href="#5" aria-controls="5" role="tab" data-toggle="tab" target="_top" aria-expanded="false">5
                                    <div class="ripple-wrapper"></div></a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="box-desc tab-pane active" id="home">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="info-kendaraan">
                                            <h3 class="normal-font">Pilih Layanan M-RIDE</h3>

                                            <h5 class="normal-font">Lorem ipsum dolor sit amet, conse asvuqubs</h5>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <div role="tabpanel" class="box-desc tab-pane" id="profile">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="info-kendaraan">
                                            <h3 class="normal-font">Pilih Layanan M-RIDE</h3>

                                            <h5 class="normal-font">Lorem ipsum dolor sit amet, conse asvuqubs</h5>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div role="tabpanel" class="box-desc tab-pane" id="messages">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="info-kendaraan">
                                            <h3 class="normal-font">Pilih Layanan M-RIDE</h3>

                                            <h5 class="normal-font">Lorem ipsum dolor sit amet, conse asvuqubs</h5>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div role="tabpanel" class="box-desc tab-pane" id="settings">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="info-kendaraan">
                                            <h3 class="normal-font">Pilih Layanan M-RIDE</h3>

                                            <h5 class="normal-font">Lorem ipsum dolor sit amet, conse asvuqubs</h5>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div role="tabpanel" class="box-desc tab-pane" id="5">
                                <div class="row">
                                   <div class="col-md-8">
                                        <div class="info-kendaraan">
                                            <h3 class="normal-font">Pilih Layanan M-RIDE</h3>

                                            <h5 class="normal-font">Lorem ipsum dolor sit amet, conse asvuqubs</h5>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    </div>
</div>
</section>


<section class="section" id="joinus">
  <div class="myContent">
    <div class="container ">
              

            <h2>M-RIDE HADIR DI INDONESIA</h2>

            <p class="col-md-8 col-md-offset-2">JABODETABEK • BANDUNG • YOGYAKARTA • SEMARANG • SURABAYA • BALI • MEDAN • PALEMBANG • BALIKPAPAN • MAKASSAR • MALANG • SOLO</p>

            <div class="col-md-8 col-md-offset-2 join">
              <p class="" style="">Segera bergabung dengan M-RIDE di MANG-JEK</p>
              <div class="section-bottom-align">
                    <a href="<?php echo base_url()?>index.php/c_utama/join_mangride" class="btn btn-primary">JOIN WITH US <div class="ripple-wrapper"></div></a>
                        
                    </div>
            </div>
            
       
        </div>
        </div>
    </section>



    <section class="section" id="layanan_isi_download" style="
 color: #000;
">
       <div class="myContent">
       <div class="container">
          		<div class="col-md-6 " style="margin-top:50px;">
						<img class="img-responsive animated slideInLeft" src="<?php echo base_url() ?>asset/images/hp1.png" alt="member-1">
				</div>
				<div class="col-md-6" style="margin-top:50px;">
						<div class="layanan_isi-download1">
						<p  style="font-size:40px; font-weight:bold;">Download MANG-JEK <font color='#FFCC00'>Mobile App</font> today</p>
						</div>
				
				
							<p style="color: #9B9B9B;">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							
							</p>					
					
					<div class="download2" style="margin-top:20px">
				
					<div class="col-md-6">
					<a><img class="img-responsive" src="<?php echo base_url() ?>asset/images/app-store.png" style="float:right"></a>
					</div>

					<div class="col-md-6">
					<a><img class="img-responsive" src="<?php echo base_url() ?>asset/images/google-play.png"></a>
        			</div>
        </div>
        </div>
    </section>
   
    <section class="section fp-auto-height wow fadeInUp animated" id="footer" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
        <div class="myContent">
         <div class="container ">
       
          <div class="brand">
                <h1 class="brand_name">
                    <a href="./" style="color:#fff;">MANG-JEK</a>
                </h1>
                    <span class="brand_slogan">
                        MANG-JEK Indonesia
                    </span>
                    <p class="copyright">© <span id="copyright-year">2016</span> |
                    <a href="" style="color:#a1a194;">Privacy Policy</a></p><p>
            </p></div>

            <div class="mg-add3 mod-position2">
                <h4 class="color-1" style="font-size:30px; margin-left:40px; margin-bottom:15px; letter-spacing:3px;">Follow US</h4>

                <ul class="inline-list">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                </ul>
            </div>
       	
       	</div>     
	  </div>
		
        
        
       
       

</section>

</div>

	 <script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>

	<script src="<?php echo base_url() ?>asset/js/modernizr.custom.63321.js"></script>
	<script src="<?php echo base_url() ?>asset/js/jquery.catslider.js"></script>



    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
     <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script> 
   


<script>

    var trigger = $('.hamburger'),
    overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
     	 overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
         overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>



    
</body>
</html>