<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hubungi Kami | Mang-Jek</title>
  <link href="<?php echo base_url() ?>asset/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
  <!-- <link href="<?php echo base_url() ?>asset/css/animate.css" rel="stylesheet"> -->
  <link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">	
  <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/responsive-slider.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" />   -->    
  <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logo.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body style="overflow-y: hidden;">
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

                         <!-- slider jadi satu -->
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
                <img src="<?= base_url() ?>asset/images/logo_header/mangjek.png" width="80%" style="margin-top:20px">
            </div>
              <div class="col-md-4 col-xs-5 pull-right hidden-md-down" style="margin-right:15px">
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

      <!-- <section id="hubungi_kami">
        <div class="container">
         <div class="row">		
          
         </div>
         
       </div>
     </section> -->

     

     <section id="hubungikami_detail">
      <div class="container" style="background-size:cover height:auto; ">
       <div class="about">
        <div class="row">
          <!-- <img class="img-responsive" src="<?php echo base_url() ?>asset/images/hubungi-bg.png"> -->
          <div class="col-lg-4 col-xs-12" style="background: #FFCC00;">

            <div class="hubungikami_kantor" style="padding: 150px 0; margin-bottom:80px">	
             <h2>KANTOR PUSAT</h2>
             <center>
             <!-- <div class="line" style="background:#fff"></div> -->
               <h1>Jl. Maysalim Batubara No 2312b Sekip Pangkal 20 Ilir I<br> Palembang, Sumatera Selatan</h1>
               <h1>071 1573 2222</h1>
             </center>
           </div>
         </div>

         <div class="col-lg-8 col-xs-12" style=" height:auto; vertical-align:middle; padding-bottom:20px; background:url(<?php echo base_url() ?>asset/images/dots-bg.png) repeat center center; backgroud-size:cover ">
           <h2 style="margin-top:90px">HUBUNGI KAMI</h2>
           <center><div class="line" style="background:#48879F"></div>
            <form role="form" class="contact-form">
             <div class="form-group">
              <div class="control">
               <input type="text" placeholder="nama" class="form-control">
             </div>
           </div>
           <div class="form-group">
            <div class="control">
             <input type="email" placeholder="email" style="width:100%;padding: 7px 14px;" class="form-control">
           </div>
         </div>
         <!-- <div class="form-group">
          <div class="control">
           <input type="text" placeholder="no. telepon" style="width:100%;padding: 7px 14px;" class="form-control">
         </div>
       </div> -->
       <div class="form-group">
        <div class="control">
         <input type="text" placeholder="subjek" style="width:100%;padding: 7px 14px;" class="form-control">
       </div>
     </div>
     <div class="form-group">
      <div class="control">
       <textarea placeholder="pesan" rows="6" style="resize:none;" class="form-control"></textarea>
     </div>
   </div>
   <div class="form-group">
    <div class="control">
     <button type="submit" class="btn btn-warning">Submit</button>
   </div>
 </div>
</form>
</div>

</div>

</div>

</div>
</section><!--/#about-->










<!-- footer -->
<?php
    include 'application/views/footer.php'
?>
 
 
 
 <div class="copyright" style="text-align:center; margin-top:25px;">
   <center><a href="" style="margin-bottom:50px;"><img class="img-responsive" src="<?php echo base_url() ?>asset/images/mangjek-logo.png" alt="logo" style="width:120px; height:50px;"></a></center>

   <p style="font-size:16px;">© Copyright 2016 MANG-JEK Indonesia</p>
 </div>
</section>



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