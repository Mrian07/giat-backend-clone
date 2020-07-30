<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>M-MASSAGE| Mang-Jek</title>
    <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/style_kelebihan_animate.css" rel="stylesheet">	
	<link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/style_fitur.css" rel="stylesheet">
<!-- <link href="<?php echo base_url() ?>asset/css/style_kelebihan.css" rel="stylesheet"> -->
	<link href="<?php echo base_url() ?>asset/css/responsive-slider.css" rel="stylesheet">
<!-- 	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" /> -->
     
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
                    <a href="#" style="background:url(<?php echo base_url() ?>asset/images/logo-layanan/H-MMASSAGE.png)
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
    <div class="overlay"></div>

	<section id="layanan_isi" style="background:url('<?php echo base_url() ?>asset/images/massage4.jpg');
  width: 100%;
    height: 500px;
    background-position: center top;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    overflow: hidden;
    padding: 80px 0 100px;">
	       <div class="container">
      <div class="row">   
        
      </div>
      
    </div>  
			
	</section><!--/#explore-->

	



	

	

	<section id="layanan_isi-join">
    <div class="container" style="padding-bottom: 10px;">
      <div class="row">

      
        <div class="layanan_isi-join-judul">
          <p>Join With <font color='#FFCC00'>M-MESSAGE</font> in MANG-JEK Now</p>
        </div>

        <div class="col-md-12">
          <div class="line1"></div>
        </div>
                  
          
      </div>
        
          
          
          <div class="col-md-4 join_mmasage_judul">
              <div style="
    background: #fff;
    padding: 20px;
    margin-top: 30px;
    color: #9B9B9B;
    padding-bottom: 10px;
    border-radius: 5px;">
             <h2>BERGABUNGLAH DENGAN GO-MASSAGE ATAU REKOMENDASIKAN PEMIJAT ANDA</h2>


              </div>
          




          </div>
            
          <div class="col-md-8 col-sm-12 col-xs-12 join_mmasage_form">
          <form role="form" action="<?php echo base_url()?>index.php/c_upload/upload" enctype="multipart/form-data" method="post">
          <div class="datadiri">
            
              <h1 style="font-weight:bold; font-size:45px;">Biodata Diri</h1>
              <hr>
            
              <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                <label>Nama Lengkap</label>
                <input type="text" placeholder="nama lengkap" class="form-control" required>
              </div>
            
            
              <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control">
                  <option default></option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>

              <div class="col-md-6 form-group">
                <label>No. HP</label>
                <input type="phone" placeholder="no.HP" class="form-control">
              </div>

              <div class="col-md-6 form-group">
                <label>No. KTP</label>
                <input type="text" placeholder="no. ktp" class="form-control" name="no_ktp">
              </div>

              <div class="col-md-6 form-group">
                <label>Email</label>
                <input type="email" placeholder="email" class="form-control" name="email" required>
              </div>

              
          
            
              <div class="col-md-6 form-group">
                <label>Tempat Lahir</label>
                <input type="text" placeholder="tempat lahir" class="form-control" name="tempat_lahir">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir">
              </div>
            
              <div class="col-md-6 form-group">
                <label>Pendidikan Akhir</label>
                <select class="form-control">
                  <option default></option>
                  <option> SD / MA</option>
                  <option> SMP / MTS</option>
                  <option> SMA / MAN</option>
                  <option> D3 </option>
                  <option> S1</option>
                </select>
              </div>

               <div class="col-md-6 form-group">
                <label>Status</label>
                <select class="form-control">
                  <option default></option>
                  <option> Menikah</option>
                  <option> Belum Menikah</option>
                  <option> Pernah Menikah</option>
                </select>
              </div>

               <div class="col-md-6 form-group">
                <label>Nama Ibu Kandung</label>
                <input type="text" Placeholder="nama ibu kandung" class="form-control">
              </div>
              
              <div class="col-md-6 form-group">
                <label>Ukuran Seragam</label>
                <select class="form-control">
                  <option default></option>
                  <option> S</option>
                  <option> M</option>
                  <option> L</option>
                  <option> XL</option>
                  <option> XXL</option>
                  <option> XXXL</option>
                </select>
              </div>

              <div class="col-md-6 form-group">
                <label>Apakah Anda Memiliki Android</label>
                <select class="form-control">
                  <option default></option>
                  <option> Ya</option>
                  <option> Tidak</option>
                </select>
              </div>
            
              
            </div>  

          <div class="datadiri">
            <h1 style="font-weight:bold; font-size:45px;">Alamat Tinggal Sekarang</h1>
            <hr>
          
              <div class="col-md-6 form-group">
                <label>Alamat Tinggal</label>
                <input type="text" placeholder="contoh: Jalan Kemang No.05 Malang " class="form-control">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>Kecamatan</label>
                <input type="text" placeholder="contoh: Malang" class="form-control" name="tipe">
              </div>
            

              <div class="col-md-6 form-group">
                <label>Kota</label>
                <input type="text" placeholder="nomor kendaraan" class="form-control">
              </div>

              <div class="col-md-6 form-group">
                <label>Status Rumah yang Ditempati</label>
                
                <select class="form-control">
                  <option default></option>
                  <option>Sendiri</option>
                  <option>Orang Tua</option>
                  <option>Kontrak</option>
                </select>
              </div>

            </div>

            <div class="datadiri">
            <h1 style="font-weight:bold; font-size:45px;">Data Tambahan</h1>
            <hr>
          
              <div class="col-md-6 form-group">
                <label>Pengalaman Pijat</label>
                <select class="form-control">
                  <option> < 1 Tahun / Tidak ada</option>
                   <option>  1 - 2 Tahun </option>
                    <option> 2 - 3 Tahun</option>
                     <option> > 3 Tahun</option>
                </select>
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>Bidang Pekerjaan Terakhir</label>
                <input type="text" placeholder="contoh: Pijat keliling, spa" class="form-control" name="tipe">
              </div>
            

              <div class="col-md-6 form-group">
                <label>Penghasilan perBulan</label>
                <input type="text" placeholder="nomor kendaraan" class="form-control">
              </div>

              <div class="col-md-6 form-group">
               <div></div>
              </div>

            </div>

            <div class="datadiri">
            <h1 style="font-weight:bold; font-size:45px;">Servis Pijat</h1>
            <hr>
               <div class="col-md-12 form-group">
               <div class="col-md-12">
                  <label>Servis yang anda pilih (boleh pilih 1)</label>
               </div>
               
                <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
                 <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
                 <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
                 <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
              </div>
              
            </div>

            <div class="datadiri">
            <h1 style="font-weight:bold; font-size:45px;">Alokasi Waktu</h1>
            <hr>
               <div class="col-md-12 form-group">
               
                  <label>Waktu yang anda alokasikan untuk M-Massage, Full time ( Lebih dari 25 Jam/minggu) || Part Time ( Kurang dari 25 jam/minggu)</label>
                <select class="form-control">
                  <option default></option>
                  <option>Full Time</option>
                  <option>Part Time</option>
                </select>
               
                
              </div>
              
            </div>

            <div class="datadiri">
            <h1 style="font-weight:bold; font-size:45px;">Mengapa Tertarik di M-Massage?</h1>
            <hr>
               <div class="col-md-12 form-group">
               
                  <label>APA YANG MEMBUAT ANDA TERTARIK BERGABUNG DI M-MASSAGE</label>
                <select class="form-control">
                  <option default></option>
                  <option>Alasan satu</option>
                  <option>Alasan dua</option>
                  <option>Alasan tiga</option>
                </select>
               
                
              </div>


               <div class="col-md-12">
                 <div class="col-md-6 form-group" style="text-align:center; width:100%;">
                      <button type="submit" class="btn btn-default">Submit</button>
                 </div>
              </div>
              
            </div>
            </form>
          </div>
            
            
          
          
              
        

        
        
      </div>
      
    </div>
  </section><!--/#explore-->
	

	



	



   <!--  <footer class="wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">

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
    </footer>
 -->
  
  
	 <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/coundown-timer.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>    

    <script src="<?php echo base_url() ?>asset/js/modernizr.custom.63321.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>asset/js/jquery.catslider.js"></script>

    <script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
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