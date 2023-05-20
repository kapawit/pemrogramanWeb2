<?php include "koneksi.php";

$articleID= $_POST['articleID'];
$judul= $_POST['title'];
$penulis = $_POST['author'];
$lead = $_POST['abstraksi'];
$content = $_POST['content'];
$date = date("Y-m-d H:i:s");

$sql="UPDATE articles SET judul='$judul', penulis='$penulis', lead='$lead', content='$content', waktu='$date' WHERE articleID ='$articleID'";
$hasil=mysqli_query($connection,$sql);

if ($hasil) { 
    echo "Artikel berhasil di update<br>";
    echo "<a href=\"tampil_article.php\">List</a>";
} else { 
    echo "Artikel gagal di update";
}
?>
