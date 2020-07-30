<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Restaurant Dashboard</title>
        
        
      <meta content="template gotaxi" name="keywords">
		<meta content="go-taxi" name="author">
	<meta name="description" content="	food delivery, massage services, online taxi booking, taxi app, taxi booking app builder, taxi booking script, taxi rider app, Uber clone android script, uber clone app" />
	 <link rel="shortcut icon" href="/asset/images/favicon.png">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
   <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     
<link rel="stylesheet" href="/asset/new_style/css/dropzone.css"/>
<link rel="stylesheet" href="/asset/new_style/css/main.css">
<link rel="stylesheet" href="/asset/new_style/css/animate.css"/>

    
      <style type = "text/css">
        
        .label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:focus,.label-primary[href]:hover{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:focus,.label-success[href]:hover{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:focus,.label-danger[href]:hover{background-color:#c9302c}.
        </style>
        
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
				<div class="logo-title">Go-Food Dashboard</div>
				</a>
			</div>
		</div>
		
		
		<div class="top-nav-content">
			<div class="top-nav-box">
						<div class="quick-link">
					<div class="link-icon"><i class="fa fa-bars"></i></div>
					<ul class="animated bounceInUp">
						<li><a href="<?php echo base_url(); ?>index.php/listmakanan"><i class="fa fa-cutlery"></i> List Food</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/tambahmakanan"><i class="fa fa fa-plus"></i> Add Food</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/tambahmenumakanan"><i class="fa fa-cart-arrow-down"></i> Food Category</a></li>
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
						<div class="user-name">GOTAXI</div>
						<div class="user-group">Administrator</div>
						<ul class="user-top-menu animated bounceInUp">
						    
							<li><a href="<?php echo base_url(); ?>index.php/manageresto">Profile <div class="badge badge-yellow pull-right">1</div></a></li>
							
							
							<li><a href="<?php echo base_url(); ?>index.php/manageresto">Settings</a></li>
							
							
							<li><a href="<?php echo base_url(); ?>index.php/manageresto">Change Password</a></li>
							
							<li><a href="<?php echo base_url(); ?>index.php/signout">Logout</a></li>
						</ul>
					</div>
				</div>
				
				
				
				
			</div>
		</div>
		<div class="profile-nav-mobile"><i class="fa fa-cog"></i></div>
	</div>
</div>

    
        
        <div class="wrapper">
            <?php include 'SIDEBAR.php'; ?>

	<div class="main">
		



<div class="content with-top-banner">
	<div class="content-header no-mg-top">
		<i class="fa fa-newspaper-o"></i>
		<div class="content-header-title">List of Foods that have been registered</div>
		
	</div>
	

	
	
	<div class="panel">
	    
	    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content- box">
                                <div class="box-header">
                                

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <!--FORM KANAN-->
                                        <div class="col-md-12">
                                            <?php echo "$pesan"; ?>
                                            <!--<h4 class="box-title text-center">Menambahkan Menu Makanan</h4>-->
                                            <br><div class="box-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Food Name </th>
                                                            <th>Menu Category </th>
                                                            <th>Price ($)</th>
                                                            <!--<th>Foto</th>-->
                                                            <th>Menu Description</th>
                                                            <th></th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($makanan as $row) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row->nama_menu; ?></td>
                                                                <td><?php echo $row->menu_makanan; ?></td>
                                                                <td><?php echo $row->harga; ?></td>
                                                                <!--<td><img style="width: 300px"src="<?php // echo base_url() . "/fotomenumakanan/" . $row->foto; ?>" class="img-responsive img-thumbnail center-block"></td>-->
                                                                <td><?php echo $row->deskripsi_menu; ?></td>
                                                                <td>
                                                                    <a href="<?php echo base_url() ?>index.php/Listmakanan/editMakananForm/<?php echo "$row->id" ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                                                </td>
                                                                <td>
                                                                    <a href="<?php echo base_url() ?>index.php/Listmakanan/hapusMakanan/<?php echo "$row->id" ?>">
                                                                        <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to remove the menu ?')">
                                                                            <span class="glyphicon glyphicon-remove"></span>
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php }
                                                        ?>

                                                    </tbody>
                                                    <tfoot>
            <!--                                            <tr>
                                                            <th>Rendering engine</th>
                                                            <th>Browser</th>
                                                            <th>Platform(s)</th>
                                                            <th>Engine version</th>
                                                            <th>CSS grade</th>
                                                        </tr>-->
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <!--                                                <div class="box-footer">
                                            
                                                                                            </div>-->
                                        </div>
                                    </div>


                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            
            

          
        </div>
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
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
        <!-- page script -->
        <!-- Page script -->
        <script>
            $(function () {
                $("#example1").DataTable({
                    "order": [[ 1, "asc" ]]
                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "order": [[ 2, "desc" ]]
                });
            });
        </script>

    </body>
</html>
