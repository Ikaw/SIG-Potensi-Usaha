<?php 
$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/SIG-Potensi-Usaha/';

isset ($_GET['app']) ? $app = $_GET['app'] : $app = 'home_index';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("lib/lib_func.php"); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo $base_url;?>img/KBB_logo.ico">
    <title>Sistem Informasi Geografis Potensi Usaha</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

      a:link, a:visited{
        color: blue;
      }

      a.to-top:link,
      a.to-top:visited{
        margin-top: 1000px;
        display: block;
        font-weight: bold;
        padding-bottom: 30px;
        font-size: 30px;
      }

</style>
<style type="text/css">

.font1 {
    font-family: "Arial";
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
					<h1>
						Sistem Informasi Geografis<br> Potensi Usaha Bandung Barat</h1>
				</div>
				<ul class="nav nav-tabs">
					<li <?php echo $app=='home'?'class="active"':'';?>><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Beranda</a></li>
					<li <?php echo $app=='home_user'?'class="active"' :'';?>><a href="index.php?app=pengusaha_daftar"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>  Statistik Data Usaha</a></li>
					<li <?php echo $app=='about'?'class="active"' :'';?>><a href="index.php?app=about"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  About</a></li>
					
					<li class="dropdown pull-right">
					
					<?php if (isset($_SESSION['nama'])):?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> <?php echo $_SESSION['nama'];?> <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
							<?php else:?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Guest <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="index.php?app=login_pemilik_usaha"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login</a></li>
							<li class="divider"></li>
							<li><a href="index.php?app=pengusaha_daftar_form"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Buat Akun Pengusaha</a></li>
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
<div class="panel-footer" align="center">
    <h4><small><a>Developed By&nbsp;</a> Kelompok 4 Aplikasi Teknologi Online Universitas Komputer Indonesia&nbsp; &nbsp;</small></h4>
  </div>
</div>
</body>
</html>
