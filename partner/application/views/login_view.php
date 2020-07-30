<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GoTaxi - Panel Partner Go-Food</title>
         <link rel="shortcut icon" href="/asset/css_animasi/favicon.png">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
        
     
<script type="text/javascript" src="/asset/js_animasi/jquery.min.js"></script>
<script type="text/javascript" src="/asset/js_animasi/login-bg.js"></script> 
<style type = "text/css">

@media screen and (max-width: 568px) {

	div.topbg {
        	display: none;
	}

	h1 {
		font-size: 35px;
		margin: 25px auto;
	}
	h2 {
		margin-top: 90px;
		font-size: 26px;
		color: #445870;
		font-weight: 800;
	}
	
	::-webkit-input-placeholder {
        color: #b6b5b5;
	}

	::-moz-placeholder {
        color: #b6b5b5;
	}

	::-moz-placeholder {
        color: #b6b5b5;
	}

	::-ms-input-placeholder {
        color: #b6b5b5;
	}
	input[type="text"], input[type="password"] {
		width: 95%;
		padding: 15px 10px 15px 12px;
		font-size: 13px;
		border: 0px solid #FFF;
		border-radius: 4px;
		margin-bottom: 15px;
		border: 1px solid #d4d4d4;
                border-radius: 3px;
                outline: none;
                color: #445870;
	}
	input[type="text"] {
		background: #fafafa;
	}

	input[type="password"] {
                background: #fafafa;
	}
	ul.tick {
		margin-bottom: 20px;
	}
	ul.tick li input[type="checkbox"]+label {
		font-size: 15px;
	}
	ul.tick li input[type="checkbox"]+label span:first-child {
		width: 15px;
		height: 15px;
		top: 0;
		border: 1px solid #EEE;
	}
	input[type="submit"], input[type="button"] {
		font-size: 14px;
		padding: 13px 40px;
		border-radius: 4px;
        	color: #FFF;
		border: 1px solid #0762d3;
		background-color: #0762d3;
		margin-left:0px;
		font-weight: 600;
	}
	input[type="submit"]:hover, input[type="button"]:hover {
        color: #FFF;
        border: 1px solid #0762d3;
	background-color: #2d87f5;
	}
	.w3footeragile p {
		padding-top: 60px;
		font-size: 12px;
		color: #445870;
	}
	.aitssendbuttonw3ls p {
	text-align: left;
	padding-top: 15px;
	padding-left: 5px;
	font-size:12px;
	font-family: Open sans;
	color: #445870;
	}

	.aitssendbuttonw3ls p a {
        color: #0762d3;
        font-weight: bold;
	}

	.aitssendbuttonw3ls p a:hover {
        color: #445870;
	}

	.login-footer {
	color: #445870;
	}
}


/*--- Responsive Code ---*/



div.background {
        position:absolute;
        left:0px;
        top:0px;
        z-index:-1;
}
div.background img {
        position:fixed;
        list-style: none;
        left:0px;
        top:0px;
}
div.background ul li.show {
        z-index:500
}

.text-login {
display:block;text-align:left;font-size:16px;margin-bottom:5px;padding-left:20px;margin-top:5px;font-weight:500;
}

@media screen and (max-width: 800px) {
.text-login {
padding-left:0px;font-size:14px;
}
}


</style>





    </head>
    <body>
        
        <div class="topbg">
<div class="background">
<img src="<?php echo base_url(); ?>asset/foody.jpg" style="width:100%;height:100%;" />
<img src="<?php echo base_url(); ?>asset/foody.jpg" style="width:100%;height:100%;" />
</div>
</div>
        <div class="wrapper" style="background">
            <!-- right column -->
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <!-- Horizontal Form -->
                <div class="box box-info" style="margin-top: 40%">
                    <div class="box-header with-border">
                        <h3 class="box-title">Admin Panel ~ GoTaxi-App</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/login/pengecekan" method="post">
                        <div class="box-body">
                            <?php echo "<p style=\"color:red\" class=\"text-center\">$pesan</p> <br>" ?>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10">
                                    <input name="pass" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">LOGIN</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>

    </body>
</html>