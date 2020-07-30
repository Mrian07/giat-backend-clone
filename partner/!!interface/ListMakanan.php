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
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
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
                            <p>Kedai Assalamualaikum</p>
                            <a href="#">Mitra M-Jek </a>
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
                        List Makanan 
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">List Makanan yang telah terdaftar</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table">
                                        <thead>
                                            <tr>
                                                <th>Nama Makanan</th>
                                                <th>Kategori Menu</th>
                                                <th>Harga</th>
                                                <th>Foto</th>
                                                <th>Deskripsi Menu</th>
                                                <th></th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lontong Balap</td>
                                                <td>Makanan Berat</td>
                                                <td>Rp 8.000</td>
                                                <td><img style="width: 300px"src="dist/img/makanan.jpg" class="img-responsive img-thumbnail center-block"></td>
                                                <td>Lontong balap adalah makanan khas Indonesia yang merupakan ciri khas kota Surabaya di Jawa Timur. Makanan ini terdiri dari lontong, taoge, tahu goreng, lentho, bawang goreng, kecap, dan sambal.</td>
                                                <td>
                                                    <a href="EditMakanan.php"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus menu tersebut ?')"><span class="glyphicon glyphicon-remove"></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Soto</td>
                                                <td>Makanan Berat</td>
                                                <td>Rp 8.000</td>
                                                <td><img style="width: 300px"src="dist/img/makanan2.jpg" class="img-responsive img-thumbnail center-block"></td>
                                                <td>Soto, sroto, sauto, tauto, atau coto adalah makanan khas Indonesia seperti sop yang terbuat dari kaldu daging dan sayuran. Daging yang paling sering digunakan adalah daging sapi dan ayam, tetapi ada pula yang menggunakan daging babi atau kambing.</td>
                                                <td>
                                                    <a href="EditMakanan.php"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus menu tersebut ?')"><span class="glyphicon glyphicon-remove"></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lontong Kupang</td>
                                                <td>Makanan Berat</td>
                                                <td>Rp 8.000</td>
                                                <td><img style="width: 300px"src="dist/img/makanan3.jpg" class="img-responsive img-thumbnail center-block"></td>
                                                <td>Lontong kupang atau kupang lontong adalah nama makanan khas daerah Jawa Timur. Makanan ini terkenal khususnya di daerah Surabaya, Sidoarjo dan Pasuruan. Di daerah pesisir timur Jawa Timur, lontong kupang yang terkenal adalah Kupang Keraton.</td>
                                                <td>
                                                    <a href="EditMakanan.php"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus menu tersebut ?')"><span class="glyphicon glyphicon-remove"></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lontong Balap</td>
                                                <td>Makanan Berat</td>
                                                <td>Rp 8.000</td>
                                                <td><img style="width: 300px"src="dist/img/makanan.jpg" class="img-responsive img-thumbnail center-block"></td>
                                                <td>Lontong balap adalah makanan khas Indonesia yang merupakan ciri khas kota Surabaya di Jawa Timur. Makanan ini terdiri dari lontong, taoge, tahu goreng, lentho, bawang goreng, kecap, dan sambal.</td>
                                                <td>
                                                    <a href="EditMakanan.php"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus menu tersebut ?')"><span class="glyphicon glyphicon-remove"></span></button>
                                                </td>
                                            </tr>

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
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2017 <a href="http://www.goocar.web.id/">Digijaya</a>.</strong> Hak Cipta
                Dilindungi.
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
        <!-- Select2 -->
        <script src="plugins/select2/select2.full.min.js"></script>
        <!-- InputMask -->
        <script src="plugins/input-mask/jquery.inputmask.js"></script>
        <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <!-- date-range-picker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap datepicker -->
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
        <!-- bootstrap time picker -->
        <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- iCheck 1.0.1 -->
        <script src="plugins/iCheck/icheck.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- Page script -->
        <script>
            $(function () {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();
            });
        </script>

    </body>
</html>
