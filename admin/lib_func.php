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
<?php } 

function form_login(){ ?> 
<form method=post action="login.php"> 
<table border=0 width="100%" bgcolor="white" align="center"> 
  <tr>
    <td colspan=2 align="center" bgcolor="#CCCCCC">
      <b>LOGIN USER</b>
    </td>
  </tr> 
  
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" maxlength="8" size="9"></td>
  </tr> 
  
  <tr>
    <td>Password</td>
    <td><input type="password" name="userpass" maxlength="8" size="9"></td>
  </tr>
  
  <tr>
    <td></td>
    <td><input type="submit" name="btn_submit" value="Login"></td>
  </tr> 
</table> 
</form> 

<?php } 
function menu_admin(){ ?>
<!--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
      <h3>ADMINISTRATOR</h3>
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Data Pengusaha
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="list-group">
        <a href="pengusaha_form_tambah.php" class="list-group-item">Tambah</a>
        <a href="#" class="list-group-item">Ubah</a>
        <a href="#" class="list-group-item">Hapus</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Data Usaha
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="list-group">
        <a href="#" class="list-group-item">Tambah</a>
        <a href="#" class="list-group-item">Ubah</a>
        <a href="#" class="list-group-item">Hapus</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Data Kecamatan
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="list-group">
        <a href="#" class="list-group-item">Tambah</a>
        <a href="#" class="list-group-item">Ubah</a>
        <a href="#" class="list-group-item">Hapus</a>
      </div>
    </div>
  </div>
</div>-->

<div class="list-group" align="center">
  <h3>ADMINISTRATOR</h3>
  <a href="pengusaha_view.php" class="list-group-item">Data Pengusaha</a>
  <a href="sektor_view.php" class="list-group-item">Data Sektor Usaha</a>
  <a href="kecamatan_view.php" class="list-group-item">Data Kecamatan</a>
  <a href="desa_view.php" class="list-group-item">Data Desa</a>
  <a href="usaha_view.php" class="list-group-item">Data Usaha</a>
  <a href="#" class="list-group-item"><font color="blue"><b>LOGOUT</b></font></a>
</div>


<?php } 
function belum_login(){ ?> 
<div class="list-group">
  <h3>ADMINISTRATOR</h3>
  <a href="#" class="list-group-item disabled">Data Pengusaha</a>
  <a href="#" class="list-group-item disabled">Data Usaha</a>
  <a href="#" class="list-group-item disabled">Data Kelurahan</a>
  <a href="#" class="list-group-item disabled">Data Kecamatan</a>
  <a href="#" class="list-group-item disabled">Data Sektor Usaha</a>
  <a href="#" class="list-group-item disabled">Data Skala Usaha</a>
</div>

<?php }

function menu(){ 
$telahlogin=true; //Nanti di isi perintah pemeriksaan status login 
  if($telahlogin==false) 
    belum_login(); 
  else 
    menu_admin(); 
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
