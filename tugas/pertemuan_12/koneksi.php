<?php
$dbhost1 = "localhost";
$dbuser1 = "pemrograman";
$dbpass1 = "LASJD*ASDUOIYO qoyiwyioOIASHDO OIH";
$dbname1= "db_latihan12";
//lakukan koneksi dengan mysql
$connection = mysqli_connect($dbhost1,$dbuser1,$dbpass1,$dbname1); 
if(!$connection) {
    echo "Tidak dapat terhubung dengan database". mysqli_error($connection);
}
?>
