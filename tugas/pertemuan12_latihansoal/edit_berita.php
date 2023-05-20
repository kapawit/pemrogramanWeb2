<?php
include "koneksi.php";
// Memeriksa apakah parameter id ada pada URL
if (isset($_GET["id"])) {
    $idBerita = $_GET["id"];

    // Memeriksa apakah form telah dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $idKategori = $_POST["idKategori"];
        $judulBerita = $_POST["judulBerita"];
        $isiBerita = $_POST["isiBerita"];
        $penulis = $_POST["penulis"];
        $tglDipublish = $_POST["tglDipublish"];

        // Menyiapkan pernyataan SQL untuk memperbarui data berita
        $sql = "UPDATE tblBerita SET idKategori = '$idKategori', judulBerita = '$judulBerita', isiBerita = '$isiBerita', penulis = '$penulis', tglDipublish = '$tglDipublish' WHERE idBerita = '$idBerita'";

        if ($conn->query($sql) === TRUE) {
            echo "Data berita berhasil diperbarui.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error();
        }
    }

    // Mengambil data berita berdasarkan id
    $sql = "SELECT * FROM tblBerita WHERE idBerita = '$idBerita'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $idKategori = $row["idKategori"];
        $judulBerita = $row["judulBerita"];
        $isiBerita = $row["isiBerita"];
        $penulis = $row["penulis"];
        $tglDipublish = $row["tglDipublish"];
    } else {
        echo "Berita tidak ditemukan.";
        $conn->close();
        exit();
    }
} else {
    echo "ID Berita tidak ditemukan.";
    $conn->close();
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Berita</title>
</head>
<body>
    <h2>Edit Berita</h2>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" . $idBerita; ?>">
        ID Kategori: <input type="text" name="idKategori" value="<?php echo $idKategori; ?>" required><br><br>
        Judul Berita: <input type="text" name="judulBerita" value="<?php echo $judulBerita; ?>" required><br><br>
        Isi Berita: <textarea name="isiBerita" required><?php echo $isiBerita; ?></textarea><br><br>
        Penulis: <input type="text" name="penulis" value="<?php echo $penulis; ?>" required><br><br>
        Tanggal Dipublish: <input type="date" name="tglDipublish" value="<?php echo $tglDipublish; ?>" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
