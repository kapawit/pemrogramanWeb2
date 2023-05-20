<!DOCTYPE html>
<html>
<head>
    <title>Form Input Kategori</title>
</head>
<body>
    <h2>Form Input Kategori</h2>

    <?php
    include "koneksi.php";
    // Memeriksa apakah form telah dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $namaKategori = $_POST["nama_kategori"];
        // Menyiapkan pernyataan SQL untuk memasukkan data ke tabel
        $sql = "INSERT INTO tblKategori (nama_kategori) VALUES ('$namaKategori')";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil dimasukkan ke tabel Kategori.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nama Kategori: <input type="text" name="nama_kategori" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
