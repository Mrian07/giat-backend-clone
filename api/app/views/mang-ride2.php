<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mang-ride | Mang-Jek</title>

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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" /> 
  <link href="<?php echo base_url() ?>asset/css/style_fitur.css" rel="stylesheet">
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
                anchors: ['anchor1', 'anchor2','anchor3','anchor4','anchor5','anchor6'],
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
 
    
    <div class="main-nav fixed-menu animated slideInDown">
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
                        <li><a href=""><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MCAR.png" width="30" height="30" style="margin-top:-5px;"></i>M-CAR</a></li>
                        <li><a href="<?php echo base_url() ?>/index.php/c_utama/mang_ride"><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MRIDE.png" width="30" height="30" style="margin-top:-5px;"></i>M-RIDE</a></li>
                        <li><a href=""><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSEND.png" width="30" height="30" style="margin-top:-5px;"></i>MANG-SEND</a></li>
                        <li><a href=""><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MBOX.png" width="30" height="30" style="margin-top:-5px;"></i>M-BOX</a></li>
                        <li><a href=""><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMART.png" width="30" height="30" style="margin-top:-5px;"></i>M-MART</a></li>
                        <li><a href=""><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMASSAGE.png" width="30" height="30" style="margin-top:-5px;"></i>M-MASSAGE</a></li>
                        <li><a href=""><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MFOOD.png" width="30" height="30" style="margin-top:-5px;"></i>M-FOOD</a></li>
                        <li><a href=""><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSERVICE.png" width="30" height="30" style="margin-top:-5px;"></i>M-SERVICE</a></li>
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

                <

               
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
                     <a href="#" style="background:url(<?php echo base_url() ?>asset/images/logo-layanan/H-MRIDE.png)
                     no-repeat center center; 
                     background-size:cover; 
                     background-size: 140px 50px; 
                     height: 65px; display: block; 
                     text-indent: -9999px;
                     margin: 0 auto;
                     padding: 0px;
                     margin-top: -20px; ">
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

<section class="section" id="layanan_isi_detail1">
<div class="myContent">
<div class="container">
		<h2>WHY M-RIDE</h2>
       
        <center><font color="black" size="5px;">Kemudahan-kemudahan yang akan Anda dapatkan jika Anda menggunakan layanan <strong>M-RIDE</strong></font></center>
					<div class="col-md-3" style="padding: 0px;">
						
            <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;     padding: 40px 0;"></center>
            <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/workspace.png" alt="member-1" style="width: 100%; max-width: 134px;">
						<h2 style="margin-top: 0px; font-size: 35px; font-weight: bold; color:#0B405C;">UNGGUL1</h2>
              <!-- <img src="<?php echo base_url() ?>asset/images/zigzag-line.png"> -->
             </div>
             <div class="isi_unggul" style="padding:20px;">
						  <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</font></center>
              </div>

					</div>

					<div class="col-md-3" style="padding: 0px;">   
						
             <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;     padding: 40px 0;"></center>
             <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/workspace.png" alt="member-1" style="width: 100%; max-width: 134px;">
						<h2 style="margin-top: 0px; font-size: 35px; font-weight: bold; color:#0B405C;">UNGGUL1</h2>
             </div>
						<div class="isi_unggul" style="padding:20px;">
						  <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </font></center>
            </div>
					</div>

            <div class="col-md-3" style="padding: 0px;">   
            
             <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;     padding: 40px 0;">
             <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/workspace.png" alt="member-1" style="width: 100%; max-width: 134px;"></center>
            <h2 style="margin-top: 0px; font-size: 35px; font-weight: bold; color:#0B405C;">UNGGUL1</h2>
             </div>
                <div class="isi_unggul" style="padding:20px;">
                  <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </font></center>
                </div>
          </div>

            <div class="col-md-3" style="padding: 0px;">   
            
             <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;     padding: 40px 0;">
             <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/workspace.png" alt="member-1" style="width: 100%; max-width: 134px;"></center>
            <h2 style="margin-top: 0px; font-size: 35px; font-weight: bold; color:#0B405C;">UNGGUL1</h2>
             </div>
              <div class="isi_unggul" style="padding:20px;">
              <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </font></center>
              </div>
          </div>
    </div>
</div>
</section>

<section class="section" id="mangride-content">
<div class="myContent" style="margin-top: 40px;">
<div class="container"> 
         <center><font color="black" size="5px;"><h2><font color="#FFCC00"><strong>WHATS NEWS</strong></font></h2>
        Fitur fitur terbaru dari <strong>M-RIDE</strong></font></center>

</div>
<div class="container" style="margin-top: 50px;">

       
       
		<!-- <div id="mi-slider" class="mi-slider">
					<ul style="margin-bottom: -20px; margin-left: -70px;">
						<li><a href="#"><img src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE1.png" alt="img01" >
						<center><h4 style="margin-top:-10px;">Pilih Lokasi dan Tujuan</h4></center></a></li>
						
					</ul>
					<ul style="margin-bottom: -30px; margin-left: -50px;">
						<li><a href="#"><img src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE2.png" alt="img01"><h4>Pilih Set Pick Up</h4></a></li>
						
					</ul>
					<ul style="margin-bottom: -30px; margin-left: -50px;">
						<li><a href="#"><img src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE3.png" alt="img01"><h4>Pilih Metode pembayaan</h4></a></li>
						
					</ul>

					<ul style="margin-bottom: -30px; margin-left: -50px;">
						<li><a href="#"><img src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE4.png" alt="img01"><h4>Detail Driver akan muncul</h4></a></li>
						
					</ul>

					<ul style="margin-bottom: -30px; margin-left: -50px;">
						<li><a href="#"><img src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE5.png" alt="img01"><h4>Setelah proses selesai,beri rating</h4></a></li>
						
					</ul>
					
					<nav>
						<a href="#">Langkah1</a>
						<a href="#">Langkah2</a>
						<a href="#">Langkah3</a>
						<a href="#">Langkah4</a>
						<a href="#">Langkah5</a>
						
					</nav>
				</div> -->
                <div class="col-md-3 col-sm-3 col-sm-3 mangride-content-list">
                    <a href="">
                        <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE2.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>What's Happening and Hot Deals Section</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                    
                </div>

                 <div class="col-md-3 col-sm-3 col-sm-3 mangride-content-list">
                    <a href="">
                        <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE2.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>What's Happening and Hot Deals Section</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                    
                </div>

                 <div class="col-md-3 col-sm-3 col-sm-3 mangride-content-list">
                    <a href="">
                        <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE2.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                       <h4>What's Happening and Hot Deals Section</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                    
                </div>

                 <div class="col-md-3 col-sm-3 col-sm-3 mangride-content-list">
                    <a href="">
                        <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/MRIDE2.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>What's Happening and Hot Deals Section</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                    
                </div>
                
                

    </div>
</div>
</section>

<section class="section section-top-align Want_to_see radius_5">
  <div class="myContent">
    <div class="container ">
        <div class="row text-center ">
            <div class="col-xs-12  section-top-align">
                <span><i class="fa fa-user wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;"></i></span>
            </div>
            <div class="col-xs-12  ">
                <p style="font-size:30px; ">Ingin Bergabung dengan MANG-JEK?</p>
                <p>Are you curious of seeing all of our Projects?  No problem.  Have a look into our big portfolio.</p>
            </div>
            <div class="col-xs-12  see_full_align wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;">
                <a href="" class="btn btn-info btn btn-lg  Seo_section_testbtn">JOIN US</a>
            </div>
        </div>
    </div>
  </div>

</section>

    <section class="section fp-auto-height" id="mangride_download" style="
 color: #000; background: #FFCC00;
">
       <div class="myContent">
       <div class="container">
          		
        </div>
        </div>
    </section>
   
    <section class="section fp-auto-height wow fadeInUp animated" id="footer" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
        <div class="myContent">
         <div class="container">
       
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