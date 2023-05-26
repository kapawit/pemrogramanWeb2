<?php 
$koneksi=mysqli_connect("localhost","root","","db_latihan13");
$cari=$_POST['nama'];
$cari2=$_POST['jurusan'];
$hasil=mysqli_query($koneksi,"select * from tabel_mahasiswa where nama like '%$cari%' and jurusan like '%$cari2%' order by nama asc"); 

echo
"<html>
<body>
<table>
<tr>
<th>NIM</th>
<th>nama</th>
<th>alamat</th>
<th>jurusan</th>
</tr>";
While($data=mysqli_fetch_array($hasil)){
echo "<tr>
<td>".$data['nama']."</td>
<td>".$data['nama']."</td>
<td>".$data['alamat']."</td>
<td>".$data['jurusan']."</td>
</tr>
</body>
</html>";
}
?>
