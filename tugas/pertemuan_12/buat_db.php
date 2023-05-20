<?php
$servername1 = "localhost";
$username1 = "pemrograman";
$password1 = "LASJD*ASDUOIYO qoyiwyioOIASHDO OIH";
$conn1 = new mysqli($servername1, $username1, $password1);
if ($conn1->connect_error) { die("Connection failed: " . $conn1->connect_error);
}

$sql = "CREATE DATABASE db_latihan12"; 
if ($conn1->query($sql) === TRUE) { 
    echo "database berhasil dibuat";
} else { 
    echo "gagal membuat database: " . $conn1->error;
}
$conn1->close();
?>
