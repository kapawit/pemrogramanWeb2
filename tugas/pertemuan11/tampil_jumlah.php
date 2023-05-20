<?php
$koneksi=mysqli_connect("localhost","pemrograman","LASJD*ASDUOIYO qoyiwyioOIASHDO OIH","db_latihan11");
$hasil1=mysqli_query($koneksi,"select * from tbl_mhs");
$hit1=mysqli_num_rows($hasil1); echo "jumlah record $hit1";
?>
