<?php include "koneksi.php";

$judul= $_POST['title'];
$penulis = $_POST['author'];
$lead = $_POST['abstraksi'];
$content = $_POST['content'];

$date = date("Y-m-d H:i:s");

$lead = str_replace("\r\n","<br>",$lead);
$content = str_replace("\r\n","<br>",$content);

$query = "INSERT INTO articles (judul,penulis,lead,content,waktu) values('$judul','$penulis','$lead','$content','$date')"; 
$result = mysqli_query($connection,$query);
if($result){
    echo "<h3 align=center>Proses penambahan artikel berhasil</h3>"; 
    echo "<A href=\"tampil_article.php\">List</A>";
}else{ 
    echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
}
    ?>
    