<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mang-Jek</title>
    <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">
	<!-- <link href="<?php echo base_url() ?>asset/css/animate.css" rel="stylesheet"> --> <!--Pembuat navbar muncul dari atas-->	
	<link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/responsive-slider.css" rel="stylesheet">
	
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" />  -->     
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="toggled">
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
                        <li><a href="<?php  ?>"><i><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MCAR.png" width="30" height="30" style="margin-top:-5px;"></i>M-CAR</a></li>
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
   <section id="home">  
        <div id="main-slider" class="carousel slide" data-ride="carousel">
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
    <!--/#home-->

    <!-- APA ITU MANG-JEK -->

    <section class="content-section" id="whatis">
        <div class="container">
            <div class="row">
                <div class="col-md-5 image">
                    <div class="img-wrapper">
                        <img src="<?php echo base_url() ?>asset/images/whatis.jpg" alt="Apa itu MANG-JEK">
                    </div>
                </div>
                <div class="col-md-7 text">
                    <h2 class="section-title">Apa itu <span class="inline">MANG-JEK</span></h2>
                    <div class="line"></div>
                    <p>
                        <span class="inline">MANG-JEK</span> adalah sebuah perusahaan teknologi berjiwa sosial yang bertujuan untuk meningkatkan kesejahteraan pekerja di berbagai sektor informal di Indonesia. Kami bermitra dengan sekitar 200.000 pengendara ojek yang berpengalaman dan terpercaya di Indonesia, untuk menyediakan berbagai macam layanan, termasuk transportasi dan pesan antar makanan.
                        Kegiatan <span class="inline">MANG-JEK</span> bertumpu pada tiga nilai pokok: kecepatan, inovasi, dan dampak sosial. Para Driver MANG-JEK mengatakan bahwa pendapatan mereka meningkat semenjak bergabung sebagai mitra, mereka juga mendapatkan santunan kesehatan dan kecelakaan, serta mendapat akses ke lebih banyak pelanggan melalui aplikasi kami.
                    </p>
                        
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <!-- APA ITU MANG-JEK -->

    <!-- LAYANAN -->


    <section id="new-update">
        <div class="container">
            <div class="row">
              
                <div class="col-md-12 content">
                        <h2 class="section-title">LAYANAN <span class="inline">KAMI</span></h2>
                        <p>Layanan - layanan yang ada pada <b><span class="inline">MANG-JEK</span></b></p>
                        <div class="line"></div>
                </div>

                
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top:-60px;">
                <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                    <a href="">
                        <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MCAR.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-CAR</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                    
                </div>
                
                <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                    <a href="">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MRIDE.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-RIDE</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                    <a href="">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSEND.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-SEND</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                </div>
                
                <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                    <a href="">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MBOX.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-BOX</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                </div>

                </div>

                <div class="row" style="margin-top:50px;">
                <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                    <a href="">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMART.png"  alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-MART</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                </div>
                
                <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                    <a href="">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMASSAGE.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-MASSAGE</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                    <a href="">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MFOOD.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-FOOD</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                </div>
                
                <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                    <a href="">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSERVICE.png"  alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-SERVICE</h4>
                        <p>You can find happening events around you. We also offers you special deals for selected events!</p>
                    </div>
                    </a>
                </div>
                
              
            </div>
        </div>
        
    </section>

    <!-- LAYANAN -->



    <!-- MENGAPA MANG-JEK -->


        <section id="why-update">
        <div style="background:#0D6485;">
            
            <div class="container">
            <div class="row">
              
                <div class="col-md-12 content">
                        <h2 class="section-title">FITUR <span class="inline">MANG-JEK</span></h2>
                        <div class="line"></div>
                        
                        
                </div>
                <div class="container section-top-align wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; margin-top: -110px;">
    <div class="row section-top-align home1_expect">
        <div class="col-md-12">
            <div class="row" >
                <div class="col-md-4 text-center image-border-hover">
                    <img src="<?php echo base_url() ?>asset/images/hp1.png" alt="img1" class=" img-responsive what_section_img" style="opacity: 1;">
                    <br>
                    <div class="image-border-hover-desc" style="position: absolute;">
                    <h1> M-BOX kirim luar provinsi </h1>
                    </div>
                <span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span>
                </div>
                 <div class="col-md-4 text-center image-border-hover">
                    <img src="<?php echo base_url() ?>asset/images/hp1.png" alt="img1" class=" img-responsive what_section_img" style="opacity: 1;">
                    <br>
                    <div class="image-border-hover-desc" style="position: absolute;">
                    <h1> M-BOX kirim luar provinsi </h1>
                    </div>
                <span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span>
                </div>
                 <div class="col-md-4 text-center image-border-hover">
                    <img src="<?php echo base_url() ?>asset/images/hp1.png" alt="img1" class=" img-responsive what_section_img" style="opacity: 1;">
                    <br>
                    <div class="image-border-hover-desc" style="position: absolute;">
                    <h1> M-BOX kirim luar provinsi </h1>
                    </div>
                <span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span>
                </div>
               <!--  <div class="col-md-4 text-center image-border-hover">
                    <img src="<?php echo base_url() ?>asset/images/hp1.png" alt="img2" class="img-responsive img-responsive what_section_img" style="opacity: 1;">
                    <br>
                    <h1>Aplikasi Terbaik</h1>
                <span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span><span class="caret text-primary" style="position: absolute; margin-top: 1px; display: none;"></span>
                </div>
                <div class="col-md-4 text-center image-border-hover">
                    <img src="<?php echo base_url() ?>asset/images/hp1.png" alt="img3" class="img-responsive img-responsive what_section_img" style="opacity: 1;">
                    <br>
                    <h1> Semantic Integration</h1>
               </div> -->
            </div>
        </div>
    </div>
</div>

                
            </div>
            </div>
            
        </div>
        
      
        
    </section>

    <!-- MENGAPA MANG-JEK -->



















<section id="about">
        <div class="container">
            <div class="about">
                <div class="row">
            
                    <div class="why-mangjek">

                        
                            <h2>Mengapa Mang-jek</h2>
                            <center><div class="line"></div></center>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                    </div>
                        
                    
                        <div class="col-lg-6">
                            <img class="img-responsive" src="<?php echo base_url() ?>asset/images/hp1.png" alt="member-1">
                        </div>
                        
                        <div class="isi-whymangjek">
                            <div class="col-lg-6">
                            <div id="row-about">
                            <div class="company mar-left10">
                                <h1>1</h1>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac cursus etiam porta sem malesuada magna mollis euismod. commodo, Faccibus mollis interdum.</p>
                            </div>
                            <div class="company mar-left10">
                                <h1>2</h1>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac cursus etiam porta sem malesuada magna mollis euismod. commodo, Faccibus mollis interdum.</p>      
                            </div>
                            <div class="company mar-left10">
                                <h1>3</h1>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac cursus etiam porta sem malesuada magna mollis euismod. commodo, Faccibus mollis interdum.</p>
                            </div>
                    </div>
                        
                        </div>
                        </div>
                        
                    
                    </div>  
                </div>
                    
            </div>
            
        </div>
    </section><!--/#about-->


    <!-- BLOG -->
    <div class="container section-top-align ">

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-xs-12 section-top-align wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;">

                        <h2 class="section-title">NEWS & PROMO</h2>
                        <div class="line"></div>
                        <p style="margin-top:-20px; margin-bottom:20px;">Be the first who finds out about our latest blog news and notifications. &nbsp;<strong>Saucha Creative</strong> keeps you posted with everything you need.
                    <br>
                    </p><div class="clearfix visible-xs-block visible-sm-block"></div>
                    <div class="section-bottom-align">
                    <a href="<?php echo base_url()?>/index.php/c_utama/Blog" class="btn btn-primary">Lihat Semua<div class="ripple-wrapper"></div></a>
                        
                    </div>
                </div>
                <div class="col-md-4 first2 section-top-align first">
                    <div class="img1">
                        <img src="<?php echo base_url() ?>asset/images/blog/gallery2.jpg" alt="gallery2" class="img-responsive img-rounded" style="opacity: 1;">
                        <figcaption class="home_link" style="position: absolute;">
                        <a href="#" class="link_btn"> 
                            <span class="fa-stack fa-lg" style="margin-top:70px; " > 
                            <i class="fa fa-circle link_circle fa-stack-2x" style="font-size: 60px;color:#ff6490"></i> 
                            <i class="fa fa-link fa-stack-1x link_icon fa-rotate-90 fa-inverse" style="padding: 0 0 10px 8px;"></i> </span> 
                            </a> 
                        </figcaption>

                    </div>
                    <div class="text-center  bg-default-dark div_align lastdivs_border_bottom radius_5 how_text  ">
                        <h5 class="text-danger" style="font-size:20px;">Teaching An Old Dog New Tricks: <br>A Trip Into Social Media </h5>
                        <p> Learn to make your Local SEO campaign more productive with a few tips </p>
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
                <div class="col-md-4 second2 section-top-align wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;">
                    <div class="img1">
                        <img src="<?php echo base_url() ?>asset/images/blog/gallery1.jpg" alt="gallery1" class="img-responsive img-rounded " style="opacity: 1;">
                        <figcaption class="home_link" style="position: absolute;">
                        <a href="#" class="link_btn"> 
                            <span class="fa-stack fa-lg" style="margin-top:70px; " > 
                            <i class="fa fa-circle link_circle fa-stack-2x" style="font-size: 60px;color:#ff6490"></i> 
                            <i class="fa fa-link fa-stack-1x link_icon fa-rotate-90 fa-inverse" style="padding: 0 0 10px 8px;"></i> </span> 
                            </a> 
                        </figcaption>
                    </div>
                    <div class="text-center  bg-default-dark div_align lastdivs_border_bottom radius_5 how_text">
                        <h5 class="text-danger " style="font-size:20px;">How To Stay Organized Well:<br>When Doing Local SEO </h5>
                        <p> Learn to make your Local SEO campaign more productive with a few tips </p>
                        <hr class="hr_color">
                        <div class="row" style="padding-bottom:20px;">
                            <div class="col-md-5 col-xs-5 col-md-offset-1 col-xs-offset-1"><i class="fa fa-calendar" aria-hidden="true" style="margin-left:-30px;"></i> 8
                                July, &nbsp;2016
                            </div>
                            <div class="col-md-6 col-sm-6"><i class="fa fa-tags" aria-hidden="true"></i> PROMO
                               
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




<section class="section-top-align Want_to_see radius_5">
    <div class="container  ">
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
</section>  



<section id="gallery">
    <div class="container">
  <div class="row">
   
    <div class="row">
      <div class="col-lg-3 col-sm-4 col-xs-6" style="padding : 20px 20px;">
       <h2 class="section-title" >GALLERY</h2>
        <div class="line" style="margin-bottom:0px;"></div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 2" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/2255EE"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 3" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/449955/FFF"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 4" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/992233"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 5" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/2255EE"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 6" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/449955/FFF"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 8" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/777"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 9" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/992233"></a></div>
      
    </div>
    
  </div>
</div>
<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">×</button>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body">
        <div id="modalCarousel" class="carousel">
 
          <div class="carousel-inner">
           
          </div>
          
          <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </div>
</div>
</section>








    
<section id="download">
        <div class="container">
            <div class="row">           
                

                <div class="download1">
                    <p>Download MANG-JEK <font color='#FFCC00'>Mobile App</font> today</p>
                </div>
                
                
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    
                    </p>                    
                    
                </div>
            </div>
            <div class="download2" style="margin-top:20px">
                
                    <div class="col-md-6">
                    <a><img class="img-responsive" src="<?php echo base_url() ?>asset/images/app-store.png" style="float:right"></a>
                    </div>
        

                    <div class="col-md-6">
                    <a><img class="img-responsive" src="<?php echo base_url() ?>asset/images/google-play.png"></a>
                    
                </div>
                
                
            </div>
            
        </div>
    </section><!--/#explore-->



    <footer class="wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">

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
    </footer>

  
  
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/coundown-timer.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/js.js"></script>

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

        /* copy loaded thumbnails into carousel */
$('.row .thumbnail').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
    var item = $('<div class="item"></div>');
    var itemDiv = $(this).parents('div');
    var title = $(this).parent('a').attr("title");
    
    item.attr("title",title);
    $(itemDiv.html()).appendTo(item);
    item.appendTo('.carousel-inner'); 
    if (i==0){ // set first item active
     item.addClass('active');
    }
  }
});

/* activate the carousel */
$('#modalCarousel').carousel({interval:false});

/* change modal title when slide changes */
$('#modalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})

/* when clicking a thumbnail */
$('.row .thumbnail').click(function(){
    var idx = $(this).parents('div').index();
    var id = parseInt(idx);
    $('#myModal').modal('show'); // show the modal
    $('#modalCarousel').carousel(id); // slide carousel to selected
    
});



    </script>

<!-- <script src="<?php echo base_url() ?>asset/js/jquery.backstretch.js"></script>
    <script>
        $.backstretch([
          "<?php echo base_url() ?>/asset/images/whatis.jpg",
          "../coffee.jpg",
          "../dome.jpg"
        ], {
            fade: 750,
            duration: 4000
        });
    </script> -->
</body>
</html>