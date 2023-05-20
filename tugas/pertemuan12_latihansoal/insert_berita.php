<!DOCTYPE html>
<html>
<head>
    <title>Form Input Berita</title>
</head>
<body>
    <h2>Form Input Berita</h2>

    <?php
    include "koneksi.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $idKategori = $_POST["id_kategori"];
        $judulBerita = $_POST["judul_berita"];
        $isiBerita = $_POST["isi_berita"];
        $penulis = $_POST["penulis"];
        $tglDipublish = $_POST["tgl_publish"];

        // Menyiapkan pernyataan SQL untuk memasukkan data ke tabel
        $sql = "INSERT INTO tblBerita (idKategori, judulBerita, isiBerita, penulis, tglDipublish) 
                VALUES ('$idKategori', '$judulBerita', '$isiBerita', '$penulis', '$tglDipublish')";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil dimasukkan ke tabel Berita.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error();
        }

        $conn->close();
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        ID Kategori: <input type="text" name="id_kategori" required><br><br>
        Judul Berita: <input type="text" name="judul_berita" required><br><br>
        Isi Berita: <textarea name="isi_berita" required></textarea><br><br>
        Penulis: <input type="text" name="penulis" required><br><br>
        Tanggal Publish: <input type="date" name="tgl_publish" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
