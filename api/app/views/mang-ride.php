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
  <!--  <link href="<?php echo base_url() ?>asset/css/style_kelebihan_animate.css" rel="stylesheet">  --> 
  <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
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

                         <!-- slider jadi satu, -->
                         <?php
                         include 'application/views/slider.php';
                         ?> 

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
                   <!-- logo -->
            <div class="col-md-2 col-xs-6 col-xs-push-1 col-md-push-1 text-center">
                <img src="<?= base_url() ?>asset/images/logo_header/mride.png" width="60%" style="margin-top:20px">
            </div>

             <div class="col-md-4 col-xs-4 pull-right hidden-md-down">
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
      
      <div class="overlay"></div>

      <div class="section fp-auto-height trigger_fullpage" id="fullpage">

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
  <div id="main-slider" class="carousel slide" data-ride="carousel" style="height: 100vh; margin-top:30px">
    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <!-- <li data-target="#main-slider" data-slide-to="1"></li> -->
      <!-- <li data-target="#main-slider" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/mride/s1.jpg" alt="slider"  style="height: 100vh">            
        
      </div>
      <!-- <div class="item">
        <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/nf.Banner2.png" alt="slider">  
        
      </div>
      <div class="item">
        <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/banner1(b).png" alt="slider">  
        
      </div>  -->       
    </div>
  </div>  

</section>

<section class="section" id="layanan_isi_detail1">
  <div class="trigger myContent" >
    <div class="container animated slideInDown ">
      <h2>Mengapa Menggunakan Aplikasi M-RIDE?</h2>
      
      <div class="col-md-3 col-xs-6" style="margin-top: 30px;">
        
        <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;"></center>
          <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/kelebihan/mride/1.png" alt="member-1" style="width: 100%; max-width: 134px;">
            <h2 style="margin-top: 0px; font-size: 25px; font-weight: bold; color:#0B405C;">AMAN</h2>
            
            

          </div>
          <div class="isi_unggul" style="padding:20px;">
            <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt 
           </font></center>
         </div>

       </div>

       <div class="col-md-3 col-xs-6" style="margin-top: 30px;">
        
        <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;"></center>
          <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/kelebihan/mride/2.png" alt="member-1" style="width: 100%; max-width: 134px;">
            <h2 style="margin-top: 0px; font-size: 25px; font-weight: bold; color:#0B405C;">HARGA BERSAHABAT</h2>
            
            

          </div>
          <div class="isi_unggul" style="padding:20px;">
            <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt 
            </font></center>
          </div>

        </div>

        <div class="col-md-3 col-xs-6" style="margin-top: 30px;">
          
          <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;"></center>
            <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/kelebihan/mride/3.png" alt="member-1" style="width: 100%; max-width: 134px;">
              <h2 style="margin-top: 0px; font-size: 25px; font-weight: bold; color:#0B405C;">MUDAH DIGUNAKAN</h2>
              
              

            </div>
            <div class="isi_unggul" style="padding:20px;">
              <center><font color="#0B405C" size="4px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt 
              </font></center>
            </div>

          </div>

          <div class="col-md-3 col-xs-6" style="margin-top: 30px;">
            
            <div class="judul_unggul" style="background:url(<?php echo base_url() ?>asset/images/zigzag-line.png);    background-position: bottom center;     background-size: 100%; background-repeat:no-repeat; margin: 0 auto 20px;"></center>
              <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/kelebihan/mride/4.png" alt="member-1" style="width: 100%; max-width: 134px;">
                <h2 style="margin-top: 0px; font-size: 25px; font-weight: bold; color:#0B405C;">RESPON CEPAT</h2>
                
                

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
        <div class="trigger myContent" >
          <div class="container animated">
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
                            <img src="<?php echo base_url() ?>asset/images/workflow/mride/1.png"  alt="Truk">
                          </div>
                          <div class="item truknya">
                            <img src="<?php echo base_url() ?>asset/images/workflow/mride/2.png" alt="Truk">
                          </div>
                          <div class="item truknya">
                            <img src="<?php echo base_url() ?>asset/images/workflow/mride/3.png" alt="Truk">
                          </div>
                          <div class="item truknya">
                            <img src="<?php echo base_url() ?>asset/images/workflow/mride/4.png" alt="Truk">
                          </div>
                          <div class="item truknya">
                            <img src="<?php echo base_url() ?>asset/images/workflow/mride/5.png" alt="Truk">
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

             <section class="row section" style="height: 100vh; background-image: url('<?= base_url()?>asset/images/screenshot/mride/ss_mride.jpg'); background-repeat:no-repeat; background-size: cover;
            ">
               <div class="container">
                 <div class="col-lg-6 col-md-6 col-xs-12 pull-right text-center">
                   <h1 style="font-size: 50px"><b>M-RIDE HADIR DI</b></h1>
                   <h1>PALEMBANG • JAMBI • LAMPUNG</h1>

                   <h5>Segera bergabung dengan M-RIDE di MANG-JEK</h5>
                   <button class="btn btn-warning btn-lg text-center">JOIN DRIVER</button>
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
<!-- <script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>  -->



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


<script type="text/javascript">
 
 var windowWidth = $(window).width();

 if(windowWidth <= 991 ){
   $('.trigger_fullpage').removeAttr('id');
   $('.trigger').removeClass('myContent');
   $('.trigger').addClass('container');
   $('.animated').removeClass('container');
   $('.animated').removeClass('slideInDown');
   $('.animated').addClass('row');
   
 }
 else{
  
  
  
 }

</script>

</body>
</html>