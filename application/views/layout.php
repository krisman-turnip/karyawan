<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css')?>">
	<script type="text/javascript" src="<?php echo base_url('assets/jquery/dist/jquery.min.js')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datepicker/dist/css/bootstrap-datepicker.min.css')?>">
	<script type="text/javascript" src="<?php echo base_url('assets/jquery/dist/jquery.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/jquery-ui/jquery-ui.js')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jquery-ui/jquery-ui.css')?>">
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js')?>"></script>
</head>
<body>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">				
				<!-- <li class="active"><a href="https://www.malasngoding.com">Home <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Profil</a></li> -->
				<!-- <li><a href="#">Tentang Kami</a></li> -->
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Karyawan
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('karyawan','Data Karyawan'); ?></li>
						<li><?php echo anchor('karyawan/tambah','Tambah Karyawan'); ?></li>
					</ul>
				</li>
                <li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Jabatan
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('Jabatan','Data Jabatan'); ?></li>
						<li><?php echo anchor('Jabatan/tambah','Tambah Jabatan'); ?></li>
					</ul>
				</li>
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Aturan Gaji
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('Aturan','Data Aturan'); ?></li>
						<li><?php echo anchor('Aturan/tambah','Tambah Aturan'); ?></li>
					</ul>
				</li>
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Gaji
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('gaji','Data Gaji'); ?></li>
						<li><?php echo anchor('gaji/tambah','Tambah Gaji'); ?></li>
					</ul>
				</li>
			</ul>
			
		</div><!-- /.navbar-collapse -->
	</div>
</nav>