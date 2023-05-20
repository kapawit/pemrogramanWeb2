<?php
include "koneksi.php";
// Memeriksa apakah parameter id ada pada URL
if (isset($_GET["id"])) {
    $idKategori = $_GET["id"];

    // Menyiapkan pernyataan SQL untuk menghapus data kategori berita
    $sql = "DELETE FROM tblKategori WHERE idKategori = '$idKategori'";

    if ($conn->query($sql) === TRUE) {
        echo "Data kategori berita berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error();
    }
} else {
    echo "ID Kategori tidak ditemukan.";
    $conn->close();
    exit();
}

$conn->close();
?>
