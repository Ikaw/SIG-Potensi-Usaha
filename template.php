<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Geografis Potensi Usaha</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!-- AWAL CONTENT  -- hapus dari sini kebawah (sampai AKHIR CONTENT) -->
   <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        
        <ul class="nav nav-tabs">
          <li <?php echo $app=='home'?'class="active"':'';?>><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Beranda</a></li>
          <li <?php echo $app=='home_admin'?'class="active"' :'';?>><a href="index.php?app=usaha_cari"><i class="glyphicon-star"></i>  Cari Usaha Terdaftar</a></li>
          <li <?php echo $app=='home_user'?'class="active"' :'';?>><a href="index.php?app=pengusaha_daftar"><i class="icon-star-empty"></i>  Daftarkan Usaha</a></li>
          <li <?php echo $app=='about'?'class="active"' :'';?>><a href="index.php?app=about"><i class="icon-briefcase"></i>  About</a></li>
          
          <li class="dropdown pull-right">
          
          <?php if (isset($_SESSION['nama'])):?>
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> <?php echo $_SESSION['nama'];?> <strong class="caret"></strong></a>
            <ul class="dropdown-menu">
              <li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
              <?php else:?>
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="glyphicon-user"></i> Guest <strong class="caret"></strong></a>
            <ul class="dropdown-menu">
              <li><a href="index.php?app=login_pemilik_usaha"><i class="icon-user"></i> Login</a></li>
              <li class="divider"></li>
              <li><a href="index.php?app=pengusaha_input_form"><i class="icon-th-list"></i> Buat Akun Pengusaha</a></li>
              <?php endif;?>              
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
<!-- AKHIR CONTENT - dari sini kebawah jgn dihapus -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
