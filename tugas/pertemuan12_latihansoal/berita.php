<!DOCTYPE html>
<html>
<head>
    <title>Daftar Berita</title>
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
    <h2>Daftar Berita</h2>

    <?php
    include "koneksi.php";
    // Menyiapkan pernyataan SQL untuk mengambil data dari tabel
    $sql = "SELECT * FROM tblBerita JOIN tblKategori on tblBerita.idKategori=tblkategori.idKategori ORDER BY tglDipublish DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Menampilkan tabel jika terdapat data berita
        echo "<table>";
        echo "<tr><th>ID Berita</th><th>Nama Kategori</th><th>Judul Berita</th><th>Isi Berita</th><th>Penulis</th><th>Tanggal Dipublish</th><th>Aksi</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["idBerita"] . "</td>";
            echo "<td>" . $row["nama_kategori"] . "</td>";
            echo "<td>" . $row["judulBerita"] . "</td>";
            echo "<td>" . $row["isiBerita"] . "</td>";
            echo "<td>" . $row["penulis"] . "</td>";
            echo "<td>" . $row["tglDipublish"] . "</td>";
            echo "<td>";
            echo "<a href='edit_berita.php?id=" . $row["idBerita"] . "'>Edit</a> | ";
            echo "<a href='hapus_berita.php?id=" . $row["idBerita"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus berita ini?\")'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "Tidak ada data berita.";
    }

    $conn->close();
    ?>
</body>
</html>
