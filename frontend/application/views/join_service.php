<?php 
  $session_id = $this->session->userdata('form_isi');
  if($session_id == 1){
    ?>
      <script>
          alert('Registration Successful'); 
      </script>
    <?php
    $this->session->unset_userdata('form_isi'); 
    $this->session->set_userdata('form_isi', 0); 
  }
  else{
    $this->session->set_userdata('form_isi', 0);
  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>JOIN SERVICE AC | GOTAXI</title>
   <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/bootstrap-datepicker.standalone.css" rel="stylesheet">

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
     
 	<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css_animasi/app.css">

	
        <link rel="shortcut icon" href="/asset/css_animasi/favicon.png">
   
</head><!--/head-->

<body>

<header>    
   <nav class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/" class="logo"></a>
                <button class="burger burger3"><span></span></button>
                <ul class="menu">
                    <li>
                        <a href="/#download" class="call-to-action 
                            btn-primary">
                            Download                        </a>
                    </li>
                    <li>
                        <a href="/index.php/c_utama/join" class="call-to-action
                            btn-primary-o">
                            Join a driver                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</nav>
    </header>
    
    <!--/#header-->

    <div class="overlay"></div>

     <section class="join-mangjek"> 

<img class="img-responsive" src="/asset/banner/service_ac.jpg">
</section>

	

 

	

	


		<section id="layanan_isi-join-mride" >
		<div class="container" style="padding-bottom: 10px;">
			<div class="row text-center">

			<div class="layanan_isi-join-judul2-mride">
				    <br><br><br>
				   
				 <h2 class="heading">FORM REGISTRATION OF AC TECHNICIANS</h2>
				</div>
				
				<div class="layanan_isi-join-judul2">
					
				</div>
				<div class="col-md-12">
					<div class="line1"></div>
				</div>
								
			</div>
					
			
					
					
						
					<div class="col-md-7 col-sm-12 col-xs-12 join_mmasage_form">
          <form role="form" action="<?php echo base_url()?>index.php/c_upload/upload_mservice" enctype="multipart/form-data" method="post">
          <input name="redirect" type="hidden" value="<?php echo base_url()?>index.php/c_utama/join_service" />
          <input name="job" type="hidden" value="5" />
          <div class="datadiri">
            
              <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Personal Data</h1>
              <hr>
            
              <div class="col-md-12 form-group">
                <label>Full Name</label>
                <input type="text" placeholder="full name" class="form-control" name="nama_lengkap">
              </div>
            
               <div class="col-md-12 form-group">
                <label>Identity number</label>
                <input type="text" placeholder="12345xxxx" class="form-control" name="no_ktp">
              </div>


               <div class="col-md-12 form-group">
                <label>Photos Identity number<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_ktp">
              </div>
              
               <div class="col-md-12 form-group">
                <label>Profile Photo<br>(Format File JPG Max: 1MB)</label>
                <input type="file" class="form-control" accept="image/*" name="foto_diri">
              </div>

              <div class="col-md-12 form-group">
                <label>Number Mobile Phone</label>
                <input type="tel" placeholder="+91 123xxxx" class="form-control" name="no_telepon">
              </div>

              <div class="col-md-12 form-group">
                <label>Email</label>
                <input type="email" placeholder="ex: taxiclone@gmail.com" class="form-control" name="email">
              </div>
          
            
              <div class="col-md-12 form-group">
                <label>Address</label>
                <input type="text" placeholder="Address" class="form-control" name="alamat">
              </div>

               <div class="col-md-12 form-group">
                <label>Sub districts</label>
                <input type="text" placeholder="Sub districts" class="form-control" name="kecamatan">
              </div>

              <div class="col-md-12 form-group">
                <label>City</label>
                <input type="text" placeholder="City" class="form-control" name="kota">
              </div>

               <div class="col-md-6 form-group">
                <label>Place of Birth</label>
                <input type="text" placeholder="Place of Birth" class="form-control" name="tempat_lahir">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>Date of birth</label><br>
                <input style="margin: auto;" placeholder="Date of birth" type="text" class="tanggal form-control" name="tgl_lahir" />
              </div>
            
            
               <div class="col-md-12 form-group">
                    
                      <label>Equipment used</label>
                      
                
                    <div class="col-md-12">
                      <?php 
                      foreach ($jenis as $j) {
                        # code...
                        ?>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="checkbox" name="peralatan[]" value="<?php echo $j['id'] ?>"><?php echo $j['nama_peralatan'] ?>
                          </div>
                        <?php
                      }
                       ?>
                       
                
                    </div>
                
              </div>
              
              <div class="col-md-12 form-group">
                    
                      <label>Service Expertise</label>
                      
                
                    <div class="col-md-12">
                      <?php 
                      foreach ($keahlian as $k) {
                        # code...
                        ?>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="checkbox" name="keahlian[]" value="<?php echo $k['id'] ?>"><?php echo $k['jenis_service'] ?>
                          </div>
                        <?php
                      }
                       ?>
                       
                
                    </div>
                
              </div>
            
            
              <div class="col-md-12 form-group">
                <label>Work Area</label>
                <select name="area_kerja" class="form-control">
                      <option value="0">Select the work area</option>
                    <?php foreach ($area as $a) {
                      ?>
                        <option value="<?php echo $a['id'] ?>"><?php echo $a['cabang_perusahaan'] ?></option>
                      <?php
                    } ?>
                </select>
            
              </div>
            
            
            
            
            	<div class="col-md-12">
							   <div class="col-md-6 form-group" >
								      <button type="submit" class="call-to-action btn-primary">SUBMIT</button>
                 </div>
              </div>
            </div>  

					
						</form>
					</div>
			<div class="col-md-5 col-xs-12 col-sm-12 join_mservice_foto" style="">
              <!-- <div class="foto_mservice" style="background:url('<?php echo base_url()?>asset/images/service11.png') no-repeat center center / cover;
    height: 700px;
    padding: 20px;
    
    color: #9B9B9B;
    padding-bottom: 10px;
    border-radius: 5px;">
                
              </div> -->
              <img src="#" style="margin-top: 30px;">
          </div>	
			</div>

			
		</div>
	</section><!--/#explore-->
	

  <!-- javascript terbaru bro  -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script type="text/javascript" src="/asset/css_animasi/app.js"></script>
    <script type="text/javascript">
    
  
	<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap-datepicker.min.js"></script>
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
    
    <script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
</body>
</html>