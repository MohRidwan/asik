<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	
    <!-- cek javascript browser -->
    <noscript>	
    <meta http-equiv="refresh" content="0;URL=<?php echo base_url() ?>assets/melon/js_disable.php" />
    </noscript>
    
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/melon/assets/img/icons/led/src/pill.png" type="image/gif">
    
    <title><?php echo $title." ".ucfirst($this->session->userdata('klinik_kode')); ?></title>
    
	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="<?php echo base_url() ?>assets/melon/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="<?php echo base_url() ?>assets/melon/assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/melon/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/melon/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/melon/assets/css/icons.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/melon/assets/css/fontawesome/font-awesome.min.css">
    <style type="text/css">
	.form-group{
		margin-bottom:2px;
		}
    </style>

	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	-->
	<!--=== JavaScript ===-->

	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/event.swipe/jquery.event.swipe.js"></script>

	<!-- General -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/respond/respond.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>

	<!-- Page specific plugins -->
	<!--Date Range Picker-->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/daterangepicker/daterangepicker.js"></script>
	
    <!-- Forms -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
    
    <!-- DataTables -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/datatables/tabletools/TableTools.min.js"></script> <!-- optional -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/datatables/colvis/ColVis.min.js"></script> <!-- optional -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/datatables/DT_bootstrap.js"></script>
    
	<!-- App -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/plugins.form-components.js"></script>
  
	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
		
		//body loading halaman
		$(window).load(function(){
		   $('#loading-overlay').fadeOut('fast');
		   $('#loading').fadeOut('fast');
		});
		//body loading halaman
		
		<!--header waktu-->
		$('.waktu').flipcountdown({
			size:"xs"
		});
		<!--header waktu-->
		
		<!--header tanggal -->
		var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
		var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
		var date = new Date();
		var day = date.getDate();
		var month = date.getMonth();
		var thisDay = date.getDay(),
			thisDay = myDays[thisDay];
		var yy = date.getYear();
		var year = (yy < 1000) ? yy + 1900 : yy;
		$('.tanggal').html(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
		$('.tgl_antrian_pasien').val('<?php echo date('d-m-Y');?>');
		<!--header tanggal-->
		
		//menu current
		$('#nav li').click(function() {
		   $('#nav li').removeClass('current');
		   $(this).addClass('current')
		});
		//menu current	
		
		//content tgl antrian pasien
		$('.tgl_antrian_pasien').datepicker({
			changeYear: true,
			changeMonth: true,
			showOtherMonths:true,
			autoSize: true,
			dateFormat: 'dd-mm-yy',
			onSelect: function(value) {
				console.log(value);
			}
		});
		//content tgl antrian pasien
		$('.content2').slimScroll({
			height:'80vh',
			alwaysVisible: false
		});
		
	});
	</script>
    
    <!--waktu-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/flipcountdown/jquery.flipcountdown.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/melon/plugins/flipcountdown/jquery.flipcountdown.css" />
</head>

<body>
	<div id="loading-overlay"></div>
    <div id="loading">
    	<span>LOADING</span>
    </div>
	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="fa fa-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="#">
				<img src="<?php echo base_url() ?>assets/melon/assets/img/logo-kp-70px.png" alt="logo" />
			</a>
			<!-- /logo -->
            
            <a href="#" class="toggle-sidebar2">
            	<span style="font-size:20px;"><strong><?php echo ucwords($klinik->nama); ?></strong></span>
            	<span style="font-size:12px;"><?php echo ucwords($klinik->alamat); ?></span>
            	<span style="font-size:12px;">Tlp. <?php echo ucwords($klinik->telepon); ?></span>
			</a>         

			<!-- /Sidebar Toggler -->
            <a href="#" class="toggle-sidebar4">
            <span class="waktu"></span>
            <span class="tanggal" style="font-size:11px;"></span>
			</a>     

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
                <a href="#" class="toggle-sidebar3">
                    <span style="font-size:16px;"><strong><?php echo ucwords($user->nama); ?></strong></span>
                    <span style="font-size:13px;"><strong><?php echo strtoupper($layan_ruang->nama); ?></strong></span>
                    <span style="font-size:13px;"><strong><?php echo strtoupper($shift_waktu->nama); ?></strong></span>
                </a>
				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" class="img-circle" src="<?php echo base_url() ?>assets/melon/assets/img/foto/<?php echo $user->foto; ?>" width="48px" />
                        <span class="badge">7</span>
						<!--<i class="fa fa-caret-down" aria-hidden="true"></i>-->
					</a>
					<ul class="dropdown-menu">
						<li><a href="pages_user_profile.html"><i class="fa fa-weixin" aria-hidden="true"></i> Chat</a></li>
						<li><a href="pages_user_profile.html"><i class="fa fa-info-circle" aria-hidden="true"></i> My Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url() ?>logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->
	</header> <!-- /.header -->