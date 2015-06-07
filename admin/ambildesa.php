<?php
mysql_connect("localhost","root","");
mysql_select_db("db_sigbb");
$id_kec = $_GET['id_kec'];
$res = mysql_query("SELECT id_desa,nama_desa FROM desa WHERE id_kec='$id_kec' order by nama_desa");
echo "<option>-- Pilih Desa --</option>";
while($k = mysql_fetch_array($res)){
    echo "<option value=\"".$k['id_desa']."\">".$k['nama_desa']."</option>\n";
}
?>
