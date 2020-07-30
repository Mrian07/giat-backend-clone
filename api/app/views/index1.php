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
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" />      
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<div id="wrapper">
        <!-- Sidebar --> 
        <div id="sidebar-wrapper" class="pattern-bg">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        MANG-JEK
                    </a>
                </li>
                <li class="scroll active">

                    <a href="<?php echo base_url() ?>index.php/c_utama/home"><i class="fa fa-home"></i><span>HOME</span></a>
                </li>
                <li class="sidebar-menu-item">

                    <a href="" class="sidebar-menu-button" data-toggle="sidebar-dropdown"><i class="fa fa-spinner"></i><span>LAYANAN</span></a>
                    <ul class="sidebar-submenu">
                        <li class="sidebar-menu-item active"><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MCAR.png" width="30" height="30" style="margin-top:-5px;">Mang-Car</a></li>
                        <li><a href="<?php echo base_url() ?>/index.php/c_utama/mang_ride"><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MRIDE.png" width="30" height="30" style="margin-top:-5px;">Mang-Ride</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSEND.png" width="30" height="30" style="margin-top:-5px;">Mang-Send</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MBOX.png" width="30" height="30" style="margin-top:-5px;">Mang-Box</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMART.png" width="30" height="30" style="margin-top:-5px;">Mang-Mart</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MMASSAGE.png" width="30" height="30" style="margin-top:-5px;">Mang-Massage</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MFOOD.png" width="30" height="30" style="margin-top:-5px;">Mang-Food</a></li>
                        <li><a href=""><img src="<?php echo base_url() ?>asset/images/logo-layanan/H-MSERVICE.png" width="30" height="30" style="margin-top:-5px;">Mang-Service</a></li>                                    
                    </ul>
                </li>
                 <li class="scroll active">

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
        </div>        

   <div class="navbar navbar-default navbar-fixed-top">
    <div class="row">
        <div class="col-md-4 col-xs-2">
            <div class="navbar-header">
                <a href="#menu-toggle" class="btn btn-default menu-btn" id="menu-toggle"><span></span><div class="ripple-wrapper"></div></a>
            </div>
            <!-- /.navbar-header -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-xs-8">
            <h1 class="main-logo">
                <a href="https://www.go-jek.com">GO-JEK Indonesia</a>
            </h1>
            <!-- /.top-logo -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 hidden-md-down">
            <div class="top-bar-right hidden-sm hidden-xs">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown join-panel">
                        <a href="#">Gabung <i class="arrow fa fa-angle-down"></i></a>
                        <ul style="display: none;">
                            <li><a id="join-goride" href="http://www.go-ride.co.id/join" target="_blank"><i class="join-icon"><img src="/assets/gojek/images/join_icon/goride.svg"></i> Driver GO-RIDE</a></li>
                            <li><a id="join-gocar" href="http://www.go-car.co.id/join" target="_blank"><i class="join-icon"><img src="/assets/gojek/images/join_icon/gocar.svg"></i>  Driver GO-CAR</a></li>
                            <li><a id="join-gofood" href="http://www.go-food.co.id/join" target="_blank"><i class="join-icon"><img src="/assets/gojek/images/join_icon/gofood.svg"></i>  Merchant GO-FOOD</a></li>
                            <li><a id="join-gobox" href="http://www.go-box.co.id/join" target="_blank"><i class="join-icon"><img src="/assets/gojek/images/join_icon/gobox.svg"></i>  Partner GO-BOX</a></li>
                            <li><a id="join-gomassage" href="http://www.go-massage.co.id/join" target="_blank"><i class="join-icon"><img src="/assets/gojek/images/join_icon/gomassage.svg"></i>  Talent GO-MASSAGE</a></li>
                            <li><a id="join-goclean" href="http://www.go-clean.co.id/join" target="_blank"><i class="join-icon"><img src="/assets/gojek/images/join_icon/goclean.svg"></i>  Talent GO-CLEAN</a></li>
                            <li><a id="join-goglam" href="http://www.go-glam.co.id/join" target="_blank"><i class="join-icon"><img src="/assets/gojek/images/join_icon/goglam.svg"></i>  Talent GO-GLAM</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="single-download" href="https://goo.gl/htwDA4">
                            Download APP
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.top-bar-right -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

