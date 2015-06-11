<?php empty( $app ) ? header('location:../index.php') : '' ;?>

<table width="100%" align="center" border=0 > 
       <td valign="top" width="80%">
          <!-- MULAI KODING DISINI -->
          <form method="POST" action="pengusaha_proses_tambah.php" enctype="multipart/form-data" class="form-horizontal">
            <table align="center" width="50%"
              <tr>
                <td align="center" colspan=2>
                  <br>
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title">Halaman Untuk Login Pemilik Usaha</h3>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan=2>
                    <div class="form-group">
                      <label for="no_ktp" class="col-sm-4 control-label">No. KTP</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nomor KTP">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-sm-4 control-label">Password</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Password">
                      </div>
                    </div>
                    
                    <div class="form-group" align="center">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn-info btn" id="Login">Login</button>
                        <button class="btn-warning btn" type="reset">Reset</button>
                      </div>
                    </div>
                </td>
              </tr>
            </table>
          </form>