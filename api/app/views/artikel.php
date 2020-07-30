<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Artikel | MANG-JEK</title>
    <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
	<!-- <link href="<?php echo base_url() ?>asset/css/animate.css" rel="stylesheet"> -->
	<link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">	
	<!-- <link href="css/responsive.css" rel="stylesheet"> -->
	<link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/responsive-slider.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" /> -->

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
  	<link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header" role="banner">   
 
    
    <div class="main-nav fixed-menu">
      
            <div class="row">
              <div class="col-md-4 col-xs-2">             
                      <div class="navbar-header">
                   <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
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
                <div class="col-md-4 col-xs-5 hidden-md-down">
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
    

   
    </header>
    <!--/#header--> 

   

	

	<div id="blog" style="  padding-top:80px; padding-bottom:80px;background:url('<?php echo base_url()?>asset/images/pattern.png') repeat">
        <div class="container section-top-align " >

    <div class="row" style="background-color:#F5F5F5;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-xs-12 section-top-align wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <div class="breadcrumb">
                          <a href="">Home</a> / <a href="">Blog</a> / <a href="">News</a>
                        </div>
                        <h2 class="section-title">NEWS</h2>
                        <div class="line"></div>
                        <p style="margin-top:-20px; margin-bottom:20px;">Be the first who finds out about our latest blog news and notifications. &nbsp;<strong>Saucha Creative</strong> keeps you posted with everything you need.
                    <br>
                    </p><div class="clearfix visible-xs-block visible-sm-block"></div>
                    <div class="section-bottom-align">
                    
                    <a href="<?php echo base_url() ?>index.php/c_utama/news" class="btn btn-primary">News<div class="ripple-wrapper"></div></a>
                    <a href="<?php echo base_url() ?>index.php/c_utama/promo" class="btn btn-primary">Promos<div class="ripple-wrapper"></div></a>  
                    </div>
                </div>

                <div class="col-md-8 first2 section-top-align first">
                    <div class="img1">
                        <a href="#" target="_blank" class="category-label">News</a>
                        <img src="<?php echo base_url() ?>asset/images/blog/gallery2.jpg" alt="gallery2" class="img-responsive img-rounded" style="opacity: 1;">
                        

                    </div>
                    <div class="text-center  bg-default-dark div_align lastdivs_border_bottom radius_5 how_text  ">
                        <h5  style="font-size:40px;">Teaching An Old Dog New Tricks: <br>A Trip Into Social Media </h5>
                        <p style="margin-top:30px; text-align:left" > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                        <hr class="hr_color">

                        <div class="row " style="padding-bottom:20px;">
                            <div class="col-md-5 col-xs-5 col-md-offset-1 col-xs-offset-1"><i class="fa fa-calendar" aria-hidden="true" style="margin-left:-30px;"></i> 8
                                July, &nbsp;2016
                            </div>
                            <div class="col-md-6 col-sm-6"><i class="fa fa-tags" aria-hidden="true"></i> NEWS
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
</div>
</div>

    </div>
  



  <!-- <section id="twitter">
    <div id="twitter-feed" class="carousel slide" data-interval="false">
      <div class="twit">
        <img class="img-responsive" src="<?php echo base_url() ?>asset/images/twit.png" alt="twit">
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <h2>Kata Mereka</h2>
        <center><div class="line"></div></center>
          <div class="text-center carousel-inner center-block">
          
          
            <div class="item active">
              <img src="<?php echo base_url() ?>asset/images/twitter/twitter1.png" alt="">
              <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
              <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
            </div>
            <div class="item">
              <img src="<?php echo base_url() ?>asset/images/twitter/twitter2.png" alt="">
              <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
              <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
            </div>
            <div class="item">
              <img src="<?php echo base_url() ?>asset/images/twitter/twitter3.png" alt="">
              <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
              <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
            </div>
          </div>
          <a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
          <a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
      </div>
    </div>    
  </section><!-/#twitter-feed--> 






  <!-- <footer class="wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">

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

            <!-- {%FOOTER_LINK} -->
        </div>
    </footer> -->
  
     <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/coundown-timer.js"></script>
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