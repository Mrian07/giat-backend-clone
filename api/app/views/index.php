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
    <link href="<?php echo base_url() ?>asset/css/animate.css" rel="stylesheet"> 
    <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/slider.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/responsive-slider.css" rel="stylesheet">
    
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" /> -->      
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="toggled">
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

        <div class="col-md-4 col-xs-4 pull-right hidden-md-down">
            <div class="top-bar-right hidden-sm hidden-xs">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="top-download ios" href="#">
                            <img src="<?php echo base_url() ?>asset/images/app-store.png" width="118px" height="35px">
                            <!-- <div class="ripple-wrapper"></div> -->
                        </a>
                    </li>
                    <li>
                        <a class="top-download android" href="#">
                            <img src="<?php echo base_url() ?>asset/images/google-play.png" width="118px" height="35px">
                            <!-- <div class="ripple-wrapper"></div> -->
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
<section id="home">  
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/home/s1.jpg" alt="slider">                      
                
            </div>
            <div class="item">
                <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/home/s2.jpg" alt="slider" >  
                
            </div>
            <div class="item">
                <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/home/s3.jpg" alt="slider">  
                
            </div>              
        </div>
    </div>      
</section>
<!--/#home-->

<!-- APA ITU MANG-JEK -->

<section class="content-section" id="whatis">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12 image">
                <div class="img-wrapper">
                    <img src="<?php echo base_url() ?>asset/images/whatis.jpg" alt="Apa itu MANG-JEK">
                </div>
            </div>
            <div class="col-md-7 col-xs-12 text">
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


<section id="new-update" style="min-height: 500px">
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
        <div class="row" style="margin-top:-60px; min-height: 350px;">
            <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                <a href="<?php echo base_url() ?>index.php/c_utama/mang_car">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MCAR.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-CAR</h4>
                        <p>Berkendara dengan aman dan nyaman</p>
                    </div>
                </a>
                
            </div>
            
            <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                <a href="<?php echo base_url() ?>index.php/c_utama/mang_ride">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MRIDE.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-RIDE</h4>
                        <p>Atasi macet dan kejar waktu perjalanan anda</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                <a href="<?php echo base_url() ?>index.php/c_utama/mang_send">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSEND.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-SEND</h4>
                        <p>Kirim barang dengan mudah dan aman</p>
                    </div>
                </a>
            </div>
            
            <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                <a href="<?php echo base_url() ?>index.php/c_utama/mang_box">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MBOX.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-BOX</h4>
                        <p>Antar kota lintas propinsi</p>
                    </div>
                </a>
            </div>

        </div>
    
        <div class="row" style="margin-top:50px;min-height: 350px">
            <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                <a href="<?php echo base_url() ?>index.php/c_utama/mang_mart">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMART.png"  alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-STORE</h4>
                        <p>Belanja semakin mudah</p>
                    </div>
                </a>
            </div>
            
            <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                <a href="<?php echo base_url() ?>index.php/c_utama/mang_massage">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMASSAGE.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-MASSAGE</h4>
                        <p>Rilex dan menyegarkan</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                <a href="<?php echo base_url() ?>index.php/c_utama/mang_food">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MFOOD.png" alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-FOOD</h4>
                        <p>Makan enak tiap hari</p>
                    </div>
                </a>
            </div>
            
            <div class="col-md-3 col-sm-3 col-sm-3 new-update-list">
                <a href="<?php echo base_url() ?>index.php/c_utama/mang_service">
                    <img class="hidden-sm" src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSERVICE.png"  alt="What's Happening and Hot Deals Section">
                    <div class="update-content">
                        <h4>M-SERVICE</h4>
                        <p>Service AC dengan teknisi yg profesional</p>
                    </div>
                </a>
            </div>
            
            
        </div>
    </div>
    
</section>
<!-- ss -->

<section class="row" style="height: 100vh; background-image: url('<?= base_url()?>asset/images/screenshot/ss_home.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="col-md-5 col-xs-6" style="margin-top: 260px">
            <h4>Check your store</h4>
            <h1 style="font-size: 70px">Download Now!</h1>
        </div>
    </div>
    
</section>



<!-- BLOG -->
<div class="container section-top-align ">

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-xs-12 section-top-align wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;">

                    <h2 class="section-title">NEWS & PROMO</h2>
                    <div class="line"></div>
                    <p style="margin-top:-20px; margin-bottom:20px;">Temukan berita-berita terkini seputar perjalananmu dan dapatkan promo tiap bulannya
                        <br>
                    </p><div class="clearfix visible-xs-block visible-sm-block"></div>
                    <div class="section-bottom-align">
                        <a href="<?php echo base_url()?>/index.php/c_utama/Blog" class="btn btn-primary">Lihat Semua<div class="ripple-wrapper"></div></a>
                        
                    </div>
                </div>
                <div class="col-md-4 first2 section-top-align first">
                    <div class="img1">
                        <a href="<?php echo base_url()?>/index.php/c_utama/artikel" class="link_btn"> 
                            <img src="<?php echo base_url() ?>asset/images/screenshot/mride/ss_mride.jpg" alt="gallery2" class="img-responsive img-rounded" style="opacity: 1;">
                            <figcaption class="home_link" style="position: absolute;">

                                <span class="fa-stack fa-lg" style="margin-top:70px; " > 
                                    <i class="fa fa-circle link_circle fa-stack-2x" style="font-size: 60px;color:#ff6490"></i> 
                                    <i class="fa fa-link fa-stack-1x link_icon fa-rotate-90 fa-inverse" style="padding: 0 0 10px 8px;"></i> </span> 
                                    
                                </figcaption>
                            </a> 

                        </div>
                        <div class="text-center  bg-default-dark div_align lastdivs_border_bottom radius_5 how_text  ">
                            <h5 class="text-danger" style="font-size:20px;">M-JEK MOBILE APPLICATION</h5>
                            <p>Join driver sekarang!</p>
                            <hr class="hr_color">

                            <div class="row " style="padding-bottom:20px;">
                                <div class="col-md-5 col-xs-5 col-md-offset-1 col-xs-offset-1"><i class="fa fa-calendar" aria-hidden="true" style="margin-left:-30px;"></i> 01
                                    November, &nbsp;2016
                                </div>
                                <div class="col-md-6 col-sm-6"><i class="fa fa-tags" aria-hidden="true"></i> NEWS
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 second2 section-top-align wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;">
                        <div class="img1">
                            <img src="<?php echo base_url() ?>asset/images/screenshot/mcar/ss_mcar.jpg" alt="gallery1" class="img-responsive img-rounded " style="opacity: 1;">
                            <figcaption class="home_link" style="position: absolute;">
                                <a href="#" class="link_btn"> 
                                    <span class="fa-stack fa-lg" style="margin-top:70px; " > 
                                        <i class="fa fa-circle link_circle fa-stack-2x" style="font-size: 60px;color:#ff6490"></i> 
                                        <i class="fa fa-link fa-stack-1x link_icon fa-rotate-90 fa-inverse" style="padding: 0 0 10px 8px;"></i> </span> 
                                    </a> 
                                </figcaption>
                            </div>
                            <div class="text-center  bg-default-dark div_align lastdivs_border_bottom radius_5 how_text">
                                <h5 class="text-danger " style="font-size:20px;">M-CAR Location</h5>
                                <p> Nikmati berbagai kemudahan menggunakan M-JEK </p>
                                <hr class="hr_color">
                                <div class="row" style="padding-bottom:20px;">
                                    <div class="col-md-5 col-xs-5 col-md-offset-1 col-xs-offset-1"><i class="fa fa-calendar" aria-hidden="true" style="margin-left:-30px;"></i> 8
                                        November, &nbsp;2016
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




    <section class="section-top-align Want_to_see radius_5" style="margin-bottom: -6px">
        <div class="container  ">
            <div class="row text-center ">
                <div class="col-xs-12  section-top-align">
                    <span><i class="fa fa-user wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;"></i></span>
                </div>
                <div class="col-xs-12  ">
                    <p style="font-size:30px; ">Ingin Bergabung dengan MANG-JEK?</p>
                    <p>Daftarkan diri anda sebagai driver, mitra atau rekan bisnis kami</p>
                </div>
                <div class="col-xs-12  see_full_align wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;">
                    <a href="" class="btn btn-info btn btn-lg  Seo_section_testbtn">JOIN US</a>
                </div>
            </div>
        </div>
    </section>  






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
<!--     <script type="text/javascript" src="<?php echo base_url() ?>asset/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/js.js"></script> -->

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


</body>
</html>