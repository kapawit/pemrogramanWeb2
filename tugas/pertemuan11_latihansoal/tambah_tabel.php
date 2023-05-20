<?php
$koneksi=mysqli_connect("localhost","pemrograman","LASJD*ASDUOIYO qoyiwyioOIASHDO OIH","db_latihan11");
//membuat tabel
$sql = "CREATE TABLE nama_table (
    nim VARCHAR(9) PRIMARY KEY,
    nama_mhs VARCHAR(30),
    matakuliah VARCHAR(20),
    uts FLOAT(5,2),
    uas FLOAT(5,2),
    tugas FLOAT(5,2),
    jmlhadir INT(2)
  );";
mysqli_query($koneksi,$sql);
?>
