<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
       
        <title>Aplikasi GIAT - Banner Go-food</title>
   
   <meta content="template gotaxi" name="keywords">
		<meta content="go-taxi" name="author">
		<meta content="On Demand All in One App Services Android" name="description">
	 <link rel="shortcut icon" href="/asset/images/favicon.png">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
      <style type = "text/css">
        
        .label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:focus,.label-primary[href]:hover{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:focus,.label-success[href]:hover{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:focus,.label-danger[href]:hover{background-color:#c9302c}.
        </style>
   <link rel="stylesheet" href="/asset/new_style/css/main.css">
   
      <link rel="stylesheet" href="/asset/new_style/css/animate.css"/>
      

 <script type="text/javascript" src="/asset/new_style/js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/asset/new_style/js/jquery.countTo.js"></script>
     <script type="text/javascript" src="/asset/new_style/js/moment.min.js"></script>
 <script type="text/javascript" src="/asset/new_style/js/app.js"></script>
    
    
    </head>
    <body>
        
        
 
 <div class="top-nav">
	<div class="top-nav-box">
		<div class="side-nav-mobile"><i class="fa fa-bars"></i></div>
		<div class="logo-wrapper">
			<div class="logo-box">
				<img alt="go-taxi" src="/asset/images/favicon.png">
				<a href="/">
					<div class="logo-title">GIAT</div>
				</a>
			</div>
		</div>
		
		
		<div class="top-nav-content">
			<div class="top-nav-box">
			    
						<div class="quick-link">
					<div class="link-icon"><i class="fa fa-bars"></i></div>
					<ul class="animated bounceInUp">
						<li><a href="<?php echo base_url(); ?>index.php/Listpelanggan"><i class="active fa fa-child"></i> Daftar Pengguna</a></li>
						
						<li><a href="<?php echo base_url(); ?>index.php/helpcenter"><i class="active fa fa-question-circle"></i> Help Center</a></li>
						
						<li><a href="<?php echo base_url(); ?>index.php/Withdraw"><i class="active fa fa-share-square-o"></i>Driver Withdraw</a></li>
						
						<li><a href="<?php echo base_url(); ?>index.php/bannermfood"><i class="fa fa-shopping-bag"></i> Promosi Warung</a></li>
						
							<li><a href="<?php echo base_url(); ?>index.php/listmitramfood"><i class="fa fa-cutlery"></i>Daftar Tempat Makan</a></li>
						
						<li><a href="<?php echo base_url(); ?>index.php/promotion"><i class="fa fa-paper-plane"></i> App Promotion</a></li>
					
					</ul>
				</div>
				
				
				
				<div class="global-search">
					<form class="form-inline">
					
						
					</form>
				</div>
				
				
	
				<div class="user-top-profile">
					<div class="user-image">
						<div class="user-on"></div>
						<img alt="go-ojek" src="/asset/images/profile.jpg">
					</div>
					<div class="clear">
						<div class="user-name">GIAT</div>
						<div class="user-group">Administrator</div>
						<ul class="user-top-menu animated bounceInUp">
						    
							<li><a href="<?php echo base_url(); ?>index.php/manageadmin">Profile <div class="badge badge-yellow pull-right">1</div></a></li>
							
							
							<li><a href="<?php echo base_url(); ?>">Settings</a></li>
							
							
							<li><a href="<?php echo base_url(); ?>">Change Password</a></li>
							
							<li><a href="<?php echo base_url(); ?>index.php/signout">Logout</a></li>
						</ul>
					</div>
				</div>
				
				
				
				
			</div>
		</div>
		<div class="profile-nav-mobile"><i class="fa fa-cog"></i></div>
	</div>
</div>



<!-- limit body -->


        
        
        
        
        <div class="wrapper">
            
                <?php include 'SIDEBAR.php'; ?>



        	<div class="main">
	




<div class="content with-top-banner">
	<div class="content-header no-mg-top">
		<i class="fa fa-newspaper-o"></i>
		<div class="content-header-title">Set Banner Go-food </div>
	
</div>
	
	
	

	
<div class="panel">
    
    
                  

                <!-- Main content -->
     
                    <div class="row">
                        
                        
                        

                        <div class="col-md-8">
                            <div class="content-box">
                                <div class="box-header">
                                  
                                  

                                </div>

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <?php echo $pesan; ?>
                                        <div class="col-md-12">

                                            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-style: solid;border-width: 3px;border-color: black;">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <div style="width: 700px; height: 134px;"></div>
  <!--<img src="#" style="width: 700px; height: 300px;" class="center-block">-->
                                                        <h2 class="text-center"> Preview </h2>
                                                        <div style="width: 700px; height: 133px;"></div>
                                                    </div>

                                                    <?php
                                                    $no = 1;
                                                    foreach ($promosi as $val) {
                                                        ?>
                                                        <div class="item">
                                                            <img src="<?php echo base_url(); ?>fotopromosimfood/<?php echo $val->foto; ?>" style="width: 700px; height: 300px;" class="center-block">
                                                            <p class="text-center">
                                                                <?php
                                                                echo "($no)";
                                                                $no++;
                                                                ?>
                                                                <?php echo $val->foto; ?>
                                                            </p>
                                                        </div>
                                                    <?php } ?>
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>

                                            <br><br>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Restaurant Name</th>
                                                        <th>Filename</th>
                                                        <th>information</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($promosi as $val) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                echo $no;
                                                                $no++;
                                                                ?>
                                                            </td>
                                                            <td><?php echo $val->nama_resto; ?></td>
                                                            <td><?php echo $val->foto; ?></td>
                                                            <td><?php echo $val->keterangan; ?></td>
                                                            <td><?php
                                                            if ($val->is_show == 1) {
                                                                echo '<span class="label label-success">ON</span>';
                                                            } else {
                                                                echo '<span class="label label-danger">OFF</span>';
                                                            }
                                                                ?>
                                                            </td>

                                                            <td><?php
                                                            if ($val->is_show == 1) {
                                                                    ?>
                                                                    <a href="<?php echo base_url(); ?>index.php/Bannermfood/turnoff/<?php echo $val->id; ?>">
                                                                        <button type="button" class="btn btn-default btn-sm">
                                                                            Turn OFF
                                                                        </button>
                                                                    </a>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <a href="<?php echo base_url(); ?>index.php/Bannermfood/turnon/<?php echo $val->id; ?>">
                                                                        <button type="button" class="btn btn-default btn-sm">
                                                                            Turn ON
                                                                        </button>
                                                                    </a>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </td>

                                                            <td>                                                    
                                                                <a href="<?php echo base_url(); ?>index.php/Bannermfood/hapusBannerMfood/<?php echo $val->id; ?>/<?php echo $val->foto; ?>">
                                                                    <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus Banner tersebut ?')">
                                                                        <span class="glyphicon glyphicon-remove"></span>
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr> 
                                                        <?php
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>


                        <div class="col-md-4">
                            <div class="content-box">
                                <div class="box-header with-border">
                                    
                                    <h3 class="box-title">Add Banner</h3>

                                   
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <!--box 2--> 
                                        <div class="col-md-12">
                                            <form role="form" action="<?php echo base_url(); ?>index.php/Bannermfood/tambahBannerMfood" method="POST" enctype="multipart/form-data">
                                                <br><br><label>Upload New Promotional Image: </label>
                                                <input type="file" name="userfile"><br>

                                                <div class="ui-widget">
                                                    <label for="tags">Restaurant name: </label>
                                                    <input id="tags" class="form-control" name="namarestoran">
                                                </div><br>
                                                
                                                <label for="exampleTextarea">Information</label>
                                                <textarea name="keterangan" class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                
                                                <br><br>
                                                <button type="submit" class="btn btn-primary pull-right">Add Banner</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.content -->
                <!-- ./box-body -->

            </div>
            <!-- /.content-wrapper -->
           

        </div>


       
    </div>
    <!-- ./wrapper -->

 
  
       
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.js"></script>
        
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>



</body>
</html>
