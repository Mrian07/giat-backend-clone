<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RESTAURANT Dashboard</title>
        
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
<link rel="stylesheet" href="/asset/new_style/css/main_partner.css">
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
				<div class="logo-title">RESTAURANT Dashboard</div>
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
			<div class="breadcrumb">
		    
	Contact :  <?php echo "$kontak_telepon"; ?> </div>


<div class="top-banner">
	<div class="top-banner-title"><?php echo "$nama_resto"; ?></div>
	<div class="top-banner-subtitle">Welcome back, Admin, <i class="fa fa-map-marker"></i> <?php echo "$alamat"; ?></div>
</div>


<div class="content with-top-banner">
    
    
	<div class="content-header no-mg-top">
		<i class="fa fa-newspaper-o"></i>
		<div class="content-header-title">Dashboard</div>
		
	</div>
	
	
  <div class="panel">
	<div class="row">
    
            <div class="col-md-3 card-wrapper">
				<div class="card">
					<i class="ion ion-bag"></i>
					<div class="clear">
						<div class="card-title">
							<span class="timer" data-from="0" data-to="<?php echo $transbulanini[0]['jumlah'];;?>"><?php echo $transbulanini[0]['jumlah'];;?></span>
						</div>
						<div class="card-subtitle">Total Transactions Of The Month</div>
					</div>
				</div>
				
			</div>
			
			
			
			<div class="col-md-3 card-wrapper">
				<div class="card">
					<i class="fa fa-cutlery"></i>
					<div class="clear">
						<div class="card-title">
							<span class="timer" data-from="0" data-to="<?php echo $jumlahmakanan; ?>"><?php echo $jumlahmakanan; ?></span>
						</div>
						<div class="card-subtitle">Total Menu</div>
					</div>
				</div>
				
			</div>
    
    
    </div>
  </div>
	
	
	
	
	
	   <div class="content-header">
					<i class="fa fa-newspaper-o"></i>
					<div class="content-header-title">Restaurant Detail Information</div>
		</div>
				
				
                    <!-- Main row -->
                    
    	<div class="panel">                
                    <div class="row">
                        <!-- Left col -->
                      <div class="col-md-8">
                            
                

                            <div class="content-box">
                                <div class="box-header">
                                   

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
<!--                                            <img src="">-->
                                            <table class="table table">
                                                <img class="img-responsive img-thumbnail" style="width: 500px; height: 250;" src="<?php echo "http://$_SERVER[HTTP_HOST]/asset/berkas_mmart_mfood/foto_restoran/$foto";?>">
                                                <tr>
                                                    <td><b>Restaurant Name</b></td>
                                                    <td><p class="text-left"><?php echo "$nama_resto"; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Restaurant Category</b></td>
                                                    <td><p class="text-left"><?php echo "$kategori"; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Address</b></td>
                                                    <td><p class="text-left"><?php echo "$alamat"; ?></p></td>
                                                </tr>

                                                <tr>
                                                    <td><b>Opening time </b></td>
                                                    <td><p class="text-left"><?php echo "$jam_buka"; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b> Closing time </b></td>
                                                    <td><p class="text-left"><?php echo "$jam_tutup"; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Restaurant Description </b></td>
                                                    <td><p class="text-left"><?php echo "$deskripsi_resto"; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Mobile Phone </b></td>
                                                    <td><p class="text-left"><?php echo "$kontak_telepon"; ?></p></td>
                                                </tr>
                                            </table>
                                            <a class="btn btn-primary" href="<?php echo base_url() ?>index.php/manageresto" role="button">Edit Information</a>
                                        </div>
                                        <!-- /.col -->
                                    </div>

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                      
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    
                    
                    
                </div>
                
                

    <div class="content-header">
				
	  <i class="fa fa-signal"></i>
     <div class="content-header-title">Monthly Recap Transaction</div>	
    </div>
				
	
	<div class="panel">
      
                    <div class="row">
                        <div class="col-md-12">
                            
                        
				
                            <div class="content-box">
                                <div class="box-header with-border">
                                    
                                    
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="salesChart" style="height: 200px;"></canvas>
                                    </div>
                                    <!--                                    <div class="row">
                                                                            <img style="width: 98%;"src="<?php echo base_url(); ?>dist/img/welcomefood.jpg" class="img-responsive img-thumbnail center-block">
                                                                        </div>-->
                                    <!-- /.row -->
                                </div>
                                <!-- ./box-body -->

                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    
                    
</div>


       
    
              
              
              
            </div>
            <!-- /.content-wrapper -->


           

        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="<?php echo base_url(); ?>plugins/chartjs/Chart.min.js"></script>
        <!--data grafik batang-->
        <script>
            $(function () {

                'use strict';

                /* ChartJS
                 * -------
                 * Here we will create a few charts using ChartJS
                 */

                //-----------------------
                //- MONTHLY SALES CHART -
                //-----------------------

                // Get context with jQuery - using jQuery's .get() method.
                var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
                // This will get the first returned node in the jQuery collection.
                var salesChart = new Chart(salesChartCanvas);

                var salesChartData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
                    datasets: [
                        {
                            label: "2016",
                            fillColor: "rgba(60,141,188,0.9)",
                            strokeColor: "rgba(60,141,188,0.8)",
                            pointColor: "#3b8bba",
                            pointStrokeColor: "rgba(60,141,188,1)",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(60,141,188,1)",
                            data: [
                                    <?php echo $bln1[0]['jumlah']; ?>, 
                                    <?php echo $bln2[0]['jumlah']; ?>, 
                                    <?php echo $bln3[0]['jumlah']; ?>, 
                                    <?php echo $bln4[0]['jumlah']; ?>, 
                                    <?php echo $bln5[0]['jumlah']; ?>, 
                                    <?php echo $bln6[0]['jumlah']; ?>, 
                                    <?php echo $bln7[0]['jumlah']; ?>, 
                                    <?php echo $bln8[0]['jumlah']; ?>, 
                                    <?php echo $bln9[0]['jumlah']; ?>, 
                                    <?php echo $bln10[0]['jumlah']; ?>, 
                                    <?php echo $bln11[0]['jumlah']; ?>, 
                                    <?php echo $bln12[0]['jumlah']; ?>
]
                    }
                ]
            };

            var salesChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: "rgba(0,0,0,.05)",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            };

            //Create the line chart
            salesChart.Line(salesChartData, salesChartOptions);

            //---------------------------
            //- END MONTHLY SALES CHART -
            //---------------------------

            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
            var pieChart = new Chart(pieChartCanvas);
            var PieData = [
                {
                    value: 700,
                    color: "#f56954",
                    highlight: "#f56954",
                    label: "Chrome"
                },
                {
                    value: 500,
                    color: "#3a5068",
                    highlight: "#3a5068",
                    label: "IE"
                },
                {
                    value: 400,
                    color: "#38a0b9",
                    highlight: "#38a0b9",
                    label: "FireFox"
                },
                {
                    value: 600,
                    color: "#38a0b9",
                    highlight: "#38a0b9",
                    label: "Safari"
                },
                {
                    value: 300,
                    color: "#38a0b9",
                    highlight: "#38a0b9",
                    label: "Opera"
                },
                {
                    value: 100,
                    color: "#d2d6de",
                    highlight: "#d2d6de",
                    label: "Navigator"
                }
            ];
            var pieOptions = {
                //Boolean - Whether we should show a stroke on each segment
                segmentShowStroke: true,
                //String - The colour of each segment stroke
                segmentStrokeColor: "#fff",
                //Number - The width of each segment stroke
                segmentStrokeWidth: 1,
                //Number - The percentage of the chart that we cut out of the middle
                percentageInnerCutout: 50, // This is 0 for Pie charts
                //Number - Amount of animation steps
                animationSteps: 100,
                //String - Animation easing effect
                animationEasing: "easeOutBounce",
                //Boolean - Whether we animate the rotation of the Doughnut
                animateRotate: true,
                //Boolean - Whether we animate scaling the Doughnut from the centre
                animateScale: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,
                // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: false,
                //String - A legend template
                legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
                //String - A tooltip template
                tooltipTemplate: "<%=value %> <%=label%> users"
            };
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            pieChart.Doughnut(PieData, pieOptions);
            //-----------------
            //- END PIE CHART -
            //-----------------

            /* jVector Maps
             * ------------
             * Create a world map with markers
             */
            $('#world-map-markers').vectorMap({
                map: 'world_mill_en',
                normalizeFunction: 'polynomial',
                hoverOpacity: 0.7,
                hoverColor: false,
                backgroundColor: 'transparent',
                regionStyle: {
                    initial: {
                        fill: 'rgba(210, 214, 222, 1)',
                        "fill-opacity": 1,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 1
                    },
                    hover: {
                        "fill-opacity": 0.7,
                        cursor: 'pointer'
                    },
                    selected: {
                        fill: 'yellow'
                    },
                    selectedHover: {}
                },
                markerStyle: {
                    initial: {
                        fill: '#3a5068',
                        stroke: '#111'
                    }
                },
                markers: [
                    {latLng: [41.90, 12.45], name: 'Vatican City'},
                    {latLng: [43.73, 7.41], name: 'Monaco'},
                    {latLng: [-0.52, 166.93], name: 'Nauru'},
                    {latLng: [-8.51, 179.21], name: 'Tuvalu'},
                    {latLng: [43.93, 12.46], name: 'San Marino'},
                    {latLng: [47.14, 9.52], name: 'Liechtenstein'},
                    {latLng: [7.11, 171.06], name: 'Marshall Islands'},
                    {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
                    {latLng: [3.2, 73.22], name: 'Maldives'},
                    {latLng: [35.88, 14.5], name: 'Malta'},
                    {latLng: [12.05, -61.75], name: 'Grenada'},
                    {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
                    {latLng: [13.16, -59.55], name: 'Barbados'},
                    {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
                    {latLng: [-4.61, 55.45], name: 'Seychelles'},
                    {latLng: [7.35, 134.46], name: 'Palau'},
                    {latLng: [42.5, 1.51], name: 'Andorra'},
                    {latLng: [14.01, -60.98], name: 'Saint Lucia'},
                    {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
                    {latLng: [1.3, 103.8], name: 'Singapore'},
                    {latLng: [1.46, 173.03], name: 'Kiribati'},
                    {latLng: [-21.13, -175.2], name: 'Tonga'},
                    {latLng: [15.3, -61.38], name: 'Dominica'},
                    {latLng: [-20.2, 57.5], name: 'Mauritius'},
                    {latLng: [26.02, 50.55], name: 'Bahrain'},
                    {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
                ]
            });

            /* SPARKLINE CHARTS
             * ----------------
             * Create a inline charts with spark line
             */

            //-----------------
            //- SPARKLINE BAR -
            //-----------------
            $('.sparkbar').each(function () {
                var $this = $(this);
                $this.sparkline('html', {
                    type: 'bar',
                    height: $this.data('height') ? $this.data('height') : '30',
                    barColor: $this.data('color')
                });
            });

            //-----------------
            //- SPARKLINE PIE -
            //-----------------
            $('.sparkpie').each(function () {
                var $this = $(this);
                $this.sparkline('html', {
                    type: 'pie',
                    height: $this.data('height') ? $this.data('height') : '90',
                    sliceColors: $this.data('color')
                });
            });

            //------------------
            //- SPARKLINE LINE -
            //------------------
            $('.sparkline').each(function () {
                var $this = $(this);
                $this.sparkline('html', {
                    type: 'line',
                    height: $this.data('height') ? $this.data('height') : '90',
                    width: '100%',
                    lineColor: $this.data('linecolor'),
                    fillColor: $this.data('fillcolor'),
                    spotColor: $this.data('spotcolor')
                });
            });
        });
    
        </script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
    </body>

</html>