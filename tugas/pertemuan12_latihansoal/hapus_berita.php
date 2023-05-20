<?php
include "koneksi.php";

// Memeriksa apakah parameter id ada pada URL
if (isset($_GET["id"])) {
    $idBerita = $_GET["id"];

    // Menyiapkan pernyataan SQL untuk menghapus data berita
    $sql = "DELETE FROM tblBerita WHERE idBerita = '$idBerita'";

    if ($conn->query($sql) === TRUE) {
        echo "Berita berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error();
    }
} else {
    echo "ID Berita tidak ditemukan.";
    $conn->close();
    exit();
}

$conn->close();
?>
