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
<?php

function header_web()
{ ?>
  <div class="page-header">
    <h1><font color="blue">Sistem Informasi Geografis Potensi Usaha 
      <br><small>Kabupaten Bandung Barat</small></font></h1>
  </div>
<?php } 

function footer_web()
{ ?> 
  <div class="panel-footer" align="center">
    <h4><small>Copyright2015</small></h4>
  </div> 
<?php }?> 

<?php 
function menu_pengusaha(){ ?>
<div class="list-group" align="center">
  <h3>Nanti diisi sama nama pengusaha yang Log-in</h3>
  <a href="pengusaha_view.php" class="list-group-item">Data Diri</a>
  <a href="#" class="list-group-item">Data Usaha</a>
  <a href="#" class="list-group-item"><font color="blue"><b>LOGOUT</b></font></a>
</div>


<?php } ?> 

<?php

function menu(){ 
$telahlogin=true; //Nanti di isi perintah pemeriksaan status login 
  if($telahlogin==false) 
    belum_login(); 
  else 
    menu_pengusaha(); 
} 

function koneksi_db(){ 

  $host = "localhost"; 
  $database = "db_sigbb"; 
  $user = "root"; 
  $password = ""; 
  $link = mysql_connect($host,$user,$password); 
  mysql_select_db($database,$link); 
  
  if(!$link) 
    echo "Error :".mysql_error(); 
    return $link; 

}?>

<!-- AKHIR CONTENT - dari sini kebawah jgn dihapus -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
