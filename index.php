<?php 
$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/SIG-Potensi-Usaha/';

isset ($_GET['app']) ? $app = $_GET['app'] : $app = 'home_index';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sistem Informasi Geografis Potensi Usaha</title>
	<link href="<?php echo $base_url;?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $base_url;?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo $base_url;?>css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo $base_url;?>img/KBB_logo.ico">
	<script type="text/javascript" src="<?php echo $base_url;?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $base_url;?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $base_url;?>js/scripts.js"></script>

	<style type="text/css">
      html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
      }

      #full-screen-background-image {
        z-index: -999;
        min-height: 100%;
        min-width: 1024px;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
      }

      #wrapper {
  	  width: 1000px;
      margin: auto;
      background-color:rgba(255,255,255,0.9);
      }

      a:link, a:visited, a:hover {
        color: blue;
      }

      a.to-top:link,
      a.to-top:visited, 
      a.to-top:hover {
        margin-top: 1000px;
        display: block;
        font-weight: bold;
        padding-bottom: 30px;
        font-size: 30px;
      }

    </style>
<style type="text/css">

.font1 {
    font-family: "Baskerville Old Face";
	color : black;
	font-size : 35pt;
}
.font2 {
    font-family: "Comic Sans MS";
	color : orange;
	font-size : 13pt;
}
.font3 {
    font-family: "Palace Script MT";
	color : red;
	font-size : 30pt;
}
.font4 {
    font-family: "Kristen ITC";
	color : blue;
	font-size : 13pt;
}
</style>
</head>
<body>

<div id="container">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="page-header" align="center">
				<img src="img/KBB_logo.png" height="90" width="90" />
					<h3><a class="font1">
						Sistem Informasi Geografis<br> Potensi Usaha Bandung Barat</a></h3>
				</div>
				<ul class="nav nav-tabs">
					<li <?php echo $app=='home'?'class="active"':'';?>><a href="index.php"><i class="icon-home"></i>  Beranda</a></li>
					<li <?php echo $app=='home_admin'?'class="active"' :'';?>><a href="index.php?app=login"><i class="icon-user"></i>  Cari Usaha Terdaftar</a></li>
					<li <?php echo $app=='home_user'?'class="active"' :'';?>><a href="index.php?app=cari_buku_user"><i class="icon-star-empty"></i>  Daftarkan Usaha</a></li>
					<li <?php echo $app=='about'?'class="active"' :'';?>><a href="index.php?app=about"><i class="icon-briefcase"></i>  About</a></li>
					
					<li class="dropdown pull-right">
					
					<?php if (isset($_SESSION['nama'])):?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> <?php echo $_SESSION['nama'];?> <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
							<?php else:?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i>Login<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="index.php?app=login_petugas"><i class="icon-user"></i>  Login Pemilik Usaha</a></li>
							<li class="divider"></li>
							<li><a href="index.php?app=login_admin"><i class="icon-user"></i>  Login Admin Dinas</a></li>
							<?php endif;?>							
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
<div id="content">

<?php 	

//menampilkan pesan setelah berhasil login		
if(isset($_SESSION['pesan'])){echo $_SESSION['pesan']; unset($_SESSION['pesan']);}

//cek apakah ada file yang dituju pada direktori app jika tidak ada tampilkan pesan error	
if(file_exists('app/'.$app.'.php')){
	include ('app/'.$app.'.php'); 
}else{
	echo '<div class="well">Error : Aplikasi tidak menemukan adanya file <b>'.$app.'.php </b> pada direktori <b>app/..</b></div>';
}

?>
</div>
<p class="footer"><a>Developed By&nbsp;</a> Kelompok 4 Aplikasi Teknologi Online Universitas Komputer Indonesia&nbsp; &nbsp;</p>
</div>
</body>
</html>
