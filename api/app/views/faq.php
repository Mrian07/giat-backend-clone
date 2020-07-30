<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FAQ | Mang-Jek</title>
    <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
	<!-- <link href="<?php echo base_url() ?>asset/css/animate.css" rel="stylesheet"> -->	
	<!-- <link href="css/responsive.css" rel="stylesheet"> -->
	<link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">
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
                <img src="<?= base_url() ?>asset/images/logo_header/mangjek.png" width="80%" style="margin-top:20px">
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


<section id="faq">
		<div class="container">
			<div class="about">
				<div class="row">
			
						<div class="col-md-12 col-xs-12 faq-judul" >
							
							<h2 style="text-align:left; font-size:40px; letter-spacing:3px;">Frequently Asked Questions</h2>
							
					

						</div>
						
						
						<div class=" col-md-12 col-xs-12 faq-border">
							<div class="col-md-12 col-xs-12 faq-detail">

							<button class="accordion">Apa itu Mang-jek?</button>
							<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>

							<button class="accordion">Bagaimana cara menggunakan Mang-jek?</button>
							<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>

							<button class="accordion">Dimana download Mang-jek?</button>
							<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>

							<button class="accordion">Fasilitas apa saja yang ada di Mang-jek?</button>
							<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>	

							<button class="accordion">Dimana cover area di Mang-jek?</button>
							<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>

							<button class="accordion">Bagaimana cara memberi rating pada driver?</button>
							<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>

							<button class="accordion">Apakah bisa pre-order layanan Mang-jek?</button>
							<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>

							<button class="accordion">Bagaimana cara mengganti nomor telepon dan email dalam aplikasi?</button>
							<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>

							<button class="accordion">Bagaimana cara melaporkan masalah dengan aplikasi atau kesulitan order?</button>
							<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>

							<button class="accordion">Apakah ada asuransinya?</button>
							<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
					

						</div>
						</div>
						
					
												</div>

					
					</div>	
				</div>
					
			</div>
			
		</div>
	</section><!--/#about-->	


<!-- <section id="faq_content" style="background:#FFCC00">
		<div class="container">
			<div class="about">
				<div class="row">
					<div class="judul_faq" style="">
					<div class=class="col-lg-6 mar-bot30" style="border:1px solid white">
					
						<h2>Frequently Asked Questions</h2>
							<center><div class="line" style="background:#48879F"></div></center>
						
					</div>
					</div>

					<div class="col-lg-6 mar-left10">
						<button class="accordion">Apa itu Mang-jek?</button>
						<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="col-md-9">
					<button class="accordion">Bagaimana cara menggunakan Mang-jek?</button>
						<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="col-md-9">
					<button class="accordion">Dimana download Mang-jek?</button>
						<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>	
					</div>
					<div class="col-md-9">
					<button class="accordion">Fasilitas apa saja yang ada di Mang-jek?</button>
						<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>	
					</div>
					<div class="col-md-9 content-wrapper">
					<button class="accordion">Dimana cover area di Mang-jek?</button>
						<div class="panel">
  								<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>	
					</div>
					
				</div>
					
			</div>
			
		</div>
	</section><!--/#about-->


	



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

           
        </div>
    </footer> -->

    <!-- footer -->
<?php
    include 'application/views/footer.php'
?>
  
  
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/coundown-timer.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>

   <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>

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