<?php
include "koneksi.php";

// Memeriksa apakah parameter id ada pada URL
if (isset($_GET["id"])) {
    $idKategori = $_GET["id"];

    // Memeriksa apakah form telah dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $namaKategori = $_POST["nama_kategori"];

        // Menyiapkan pernyataan SQL untuk memperbarui data kategori berita
        $sql = "UPDATE tblKategori SET nama_kategori = '$namaKategori' WHERE idKategori = '$idKategori'";

        if ($conn->query($sql) === TRUE) {
            echo "Data kategori berita berhasil diperbarui.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Mengambil data kategori berita berdasarkan id
    $sql = "SELECT * FROM tblKategori WHERE idKategori = '$idKategori'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $namaKategori = $row["nama_kategori"];
    } else {
        echo "Kategori berita tidak ditemukan.";
        $conn->close();
        exit();
    }
} else {
    echo "ID Kategori tidak ditemukan.";
    $conn->close();
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori Berita</title>
</head>
<body>
    <h2>Edit Kategori Berita</h2>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" . $idKategori; ?>">
        Nama Kategori: <input type="text" name="nama_kategori" value="<?php echo $namaKategori; ?>" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
