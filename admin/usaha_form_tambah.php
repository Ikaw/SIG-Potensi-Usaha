<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("lib_func.php"); ?>
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
    <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
var htmlobjek;
$(document).ready(function(){
  //apabila terjadi event onchange terhadap object <select id=id_kec>
  $("#id_kec").change(function(){
    var id_kec = $("#id_kec").val();
    $.ajax({
        url: "ambilkota.php",
        data: "id_kec="+id_kec,
        cache: false,
        success: function(msg){
            //jika data sukses diambil dari server kita tampilkan
            //di <select id=id_desa>
            $("#id_desa").html(msg);
        }
    });
  });
  $("#id_desa").change(function(){
    var id_desa = $("#id_desa").val();
    $.ajax({
        url: "ambilkecamatan.php",
        data: "id_desa="+id_desa,
        cache: false,
        success: function(msg){
            $("#id_kec").html(msg);
        }
    });
  });
});

</script>
  </head>
  <body>
<!-- AWAL CONTENT  -- hapus dari sini kebawah (sampai AKHIR CONTENT) -->
    <table width="100%" align="center" border=0 > 
      <tr>
        <td colspan=2 align="center" >
          <?php header_web();?>
        </td>
      </tr>
      <tr> 
        <td width="20%" valign="top" align="center">
          <?php menu();?>
        </td>
        <td valign="top" width="80%">
          <!-- MULAI KODING DISINI -->
          <form method="POST" action="usaha_proses_tambah.php" enctype="multipart/form-data" class="form-horizontal">
            <table align="center" width="50%"
              <tr>
                <td align="center" colspan=2>
                  <br>
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title">Tambah Data Usaha</h3>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan=2>
                    <div class="form-group">
                      <label for="nama_usaha" class="col-sm-4 control-label">Nama Usaha</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha Anda">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="produk_utama" class="col-sm-4 control-label">Produk Utama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="produk_utama" name="produk_utama" placeholder="Produk Utama">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="deskripsi_usaha" class="col-sm-4 control-label">Deskripsi Usaha</label>
                      <div class="col-sm-8">
                        <textarea type="text" class="form-control" id="deskripsi_usaha" name="deskripsi_usaha"  placeholder="Deskripsi Usaha"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="skala" class="col-sm-4 control-label">Skala Usaha</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="skala" name="skala">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_sektor" class="col-sm-4 control-label">Sektor</label>
                      <div class="col-sm-8">
                        <select name="id_sektor">
                          <?php
                          $link = koneksi_db();
                          $sql="SELECT id_sektor, nama_sektor FROM sektor_usaha where dihapus='T'";
                          $result = mysql_query($sql, $link);
                          while ($data=mysql_fetch_array($result)) {
                            ?>
                              <option value="<?php echo "$data[id_sektor]";?>">
                                <?php echo "$data[nama_sektor]";?>
                              </option>
                            <?php }?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="alamat" class="col-sm-4 control-label">Alamat Usaha</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Usaha">
                      </div>
                    </div>
                    <!--<div class="form-group">
                      <label for="nama_kec" class="col-sm-4 control-label">Kecamatan</label>
                      <div class="col-sm-8">
                        <select name="id_kec">
                          <?php
                          $link = koneksi_db();
                          $sql="SELECT id_kec, nama_kec FROM kecamatan where dihapus='T'";
                          $result = mysql_query($sql, $link);
                          while ($data=mysql_fetch_array($result)) {
                            ?>
                              <option value="<?php echo "$data[id_kec]";?>">
                                <?php echo "$data[nama_kec]";?>
                              </option>
                            <?php }?>
                        </select>
                        
                      <label for="nama_desa" class="col-sm-4 control-label">Desa</label>
                        <select name="id_desa">
                          <?php
                          $link = koneksi_db();
                          
                          if ($id_kec = $_GET['id_kec']) {
                            $sql="SELECT id_desa, nama_desa FROM kecamatan where dihapus='T' and id_kec='$id_kec'";
                            $result = mysql_query($sql, $link);
                            while ($data=mysql_fetch_array($result)) {
                            ?>
                              <option value="<?php echo "$data[id_desa]";?>">
                                <?php echo "$data[nama_desa]";?>
                              </option>
                          
                          
                            <?php }

                            }?>
                        </select>
                      </div>
                    </div>-->
                    <div class="form-group">
                      <label for="lat" class="col-sm-4 control-label">Latitude</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="lat" name="lat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="lng" class="col-sm-4 control-label">Longitude</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="lng" name="lng">
                      </div>
                    </div>
                    <div class="form-group" align="center">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="Simpan">Simpan</button>
                      </div>
                    </div>
                </td>
              </tr>
            </table>
          </form>
          <p>&nbsp;</p>
        </td> 
      </tr>
      <tr>
        <td colspan=2>
          <?php footer_web();?>
        </td>
      </tr>
    </table>

<!-- AKHIR CONTENT - dari sini kebawah jgn dihapus -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <!--<script>
      $('#datetimepicker').datetimepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        minView: 2
      });
    </script>-->
    <script type="text/javascript">
            $(function () {
                $('#datepicker').datepicker({
                  format: 'yyyy-mm-dd'
                });
            });
        </script>
  </body>
</html>
