<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sidak-Food Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">

                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>M</b>-Food</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- Control Sidebar Toggle Button -->

                            <li>                                
                                <a href="#"><b style="margin-right: 10px">Sign Out</b> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
                            </li>
                            <li>
                                <a href="ManageResto.php" style="background-color: #2d8297"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/logo.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Kedai palu</p>
                            <a href="#">Mitra Carry </a>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header"> MAIN NAVIGATION</li>
                        <li>
                            <a href="Dashboard.php">
                                <i class="active fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="fa fa-cutlery"></i> 
                                <span>Menu Makanan</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="TambahMakanan.php"><i style="margin-left: 10px" class="fa fa-circle-o"></i> Tambah Menu Makanan</a>
                        </li>
                        <li> 
                            <a href="ListMakanan.php"><i style="margin-left: 10px" class="fa fa-circle-o"></i> List Makanan</a>
                        </li>


                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Welcome Message</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <img style="width: 98%;"src="dist/img/welcomefood.jpg" class="img-responsive img-thumbnail center-block">
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./box-body -->

                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-8">

                            <!-- TABLE: LATEST ORDERS -->

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Informasi Detail Restoran/RM</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <table class="table table">
                                                <tr>
                                                    <td><b>Nama Resto</b></td>
                                                    <td><p class="text-left">RM Assalamualaikum</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Alamat</b></td>
                                                    <td><p class="text-left">Jl Malang ke Batu No 99</p></td>
                                                </tr>

                                                <tr>
                                                    <td><b>Kategori Resto</b></td>
                                                    <td><p class="text-left">Seafood</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Jam Buka </b></td>
                                                    <td><p class="text-left">06:00</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>jam Tutup </b></td>
                                                    <td><p class="text-left">17:00</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Deskripsi Resto </b></td>
                                                    <td><p class="text-left">Rumah makan ayam goreng paling laris di batu, dengan harga yang murah dan kualitas yang menjanjikan. dijamin puass banget..</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Kontak Telpon </b></td>
                                                    <td><p class="text-left">0343 158452</p></td>
                                                </tr>
                                            </table>
                                            <a class="btn btn-primary" href="ManageResto.php" role="button">Edit Informasi Resto</a>
                                        </div>
                                        <!-- /.col -->
                                    </div>

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4">
                            <!-- Info Boxes Style 2 -->
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="ion ion-bag"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">RM Assalamualaikum</span>
                                    <span class="info-box-number"></span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 100%"></div>
                                    </div>
                                    <span class="progress-description">
                                        Jl Malang ke Batu No 99<br>
                                        0343 158452
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->

                            <div class="info-box bg-yellow">  
                                <span class="info-box-icon"><i class="fa fa-cutlery"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Jumlah Menu</span>
                                    <span class="info-box-number">20</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 100%"></div>
                                    </div>
                                    <span class="progress-description">
                                        jumlah menu yang terdaftar saat ini
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->

                            <div class="info-box bg-blue">  
                                <span class="info-box-icon"><i class="ion-arrow-graph-up-right"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Jumlah Transaksi Hari Ini</span>
                                    <span class="info-box-number">20</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 100%"></div>
                                    </div>
                                    <span class="progress-description">
                                        Transaksi yang berhasil di lakukan pada hari ini
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->



                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <footer class="main-footer" >
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2017 - <a href="http://www.goocar.web.id/">Digijaya</a>.</strong> Hak Cipta Dilindungi.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab"></div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab"></div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>

        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="plugins/chartjs/Chart.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard2.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
    </body>
</html>