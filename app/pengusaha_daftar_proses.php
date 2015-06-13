<?php
          if($_FILES['foto_ktp']['error']==0){
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
                echo "Gagal Broh !!!";
              }
            }
          }
          else {
            echo "Pendaftaran pengusaha gagal karena upload file gambar gagal";
          }
            
?>