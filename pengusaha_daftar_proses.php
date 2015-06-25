<head>
<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel='stylesheet' id='prettyphoto-css'  href="css/prettyPhoto.css" type='text/css' media='all'>
    <link href="css/fontello.css" type="text/css" rel="stylesheet">
    <!--[if lt IE 7]>
            <link href="css/fontello-ie7.css" type="text/css" rel="stylesheet">  
        <![endif]-->
    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/KBB_logo.ico">
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Load ScrollTo -->
    <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
    <!-- Load LocalScroll -->
    <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
    <!-- prettyPhoto Initialization -->
    <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
          });
        </script>
</head>
<body>    
<?php
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

	}
	echo "Berhasil";
	/*if($_FILES['foto_ktp']['error']==0){
            $link = koneksi_db();
            $nama = $_POST['nama'];
            $no_ktp = $_POST['no_ktp'];
            $alamat = $_POST['alamat'];
            $tpt_lahir = $_POST['tpt_lahir'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $foto_ktp = $_FILES['foto_ktp']['name'];
            $no_telp = $_POST['no_telp'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $namafilebaru="../admin/gambar/".$foto_ktp;
            if(move_uploaded_file($_FILES['foto_ktp']['tmp_name'], $namafilebaru)==true)
            {
              $sql = "INSERT INTO pemilik_usaha(nama, no_ktp, alamat, tpt_lahir, tgl_lahir, foto_ktp, no_telp, email, password) 
              VALUES
              ('$nama','$no_ktp','$alamat','$tpt_lahir','$tgl_lahir','$foto_ktp','$no_telp','$email','$password')";
              $result = mysql_query($sql, $link);
              if ($result) {
                echo "Data Berhasil disimpan";
              }
              else {
                echo "fuck";
              }
            }
          }
          else {
            echo "Penambahan produk gagal karena upload file gambar gagal";
          }*/

?>
<section id="news" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-alert"></i></div>
        <h1>Terjadi Kesalahan</h1>
        <!-- Three columns -->
        <a href="index.php#daftar" class="btn btn-large">Kembali</a> </div>
      <!-- /.container -->
    </section>
<!-- Loading the javaScript at the end of the page -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/site.js"></script>
    
    <!--ANALYTICS CODE-->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-29231762-1']);
	  _gaq.push(['_setDomainName', 'dzyngiri.com']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
    
</body>