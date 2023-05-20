<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kategori Berita</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Daftar Kategori Berita</h2>

    <?php
    include "koneksi.php";
    // Menyiapkan pernyataan SQL untuk mengambil data dari tabel
    $sql = "SELECT * FROM tblKategori";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Menampilkan tabel jika terdapat data kategori berita
        echo "<table>";
        echo "<tr><th>ID Kategori</th><th>Nama Kategori</th><th>Aksi</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["idKategori"] . "</td>";
            echo "<td>" . $row["nama_kategori"] . "</td>";
            echo "<td>";
            echo "<a href='edit_kategori.php?id=" . $row["idKategori"] . "'>Edit</a> | ";
            echo "<a href='hapus_kategori.php?id=" . $row["idKategori"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus kategori ini?\")'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "Tidak ada data kategori berita.";
    }

    $conn->close();
    ?>
</body>
</html>
