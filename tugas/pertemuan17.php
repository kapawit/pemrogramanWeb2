<div class="card p-4">
<h4>PERTEMUAN 17 - Contoh Error Handling</h4>
<?php
try {
  $file = fopen("buah.txt", "r");
  if (!$file) {
    throw new Exception("Gagal membuka file.");
  } else {
    while (!feof($file)) {
        echo fgets($file). "<br>";
      }
    }
    fclose($file);
  } catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
  }
?>

<div class="alert alert-info">
  <code>
    $file = fopen("buah.txt", "r");
  </code><br>
  Kode diatas ketika dijalankan akan mengalami error. Hal ini disebabkan karena lokasi file data.txt tidak sesuai. cara mengatasinya adalah dengan memasukan lokasi file data.txt yang benar.<br>  
  <code>
    $file = fopen("tugas/tmp/buah.txt", "r");
  </code>
  </div>

<?php
try {
    $file = fopen("tugas/tmp/buah.txt", "r");
    if (!$file) {
      throw new Exception("Gagal membuka file.");
    } else {
      while (!feof($file)) {
        echo fgets($file). "<br>";
      }
    }
    fclose($file);
  } catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
  }
  ?>

</div>

<div class="card p-4">
<h4>PERTEMUAN 17 - Contoh Error Handling Database</h4>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "testdb";

$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
}
echo "Connected successfully";
$connection->close();
?>
<div class="alert alert-info">
  <code>
  $servername = "127.0.0.1";<br>
  $username = "root";<br>
  $password = "";<br>
  $database = "testdb";<br>
  </code><br>
  koneksi sql di atas ketika dijalankan akan mengalami error. solusinya adalah dengan memastikan kredensial untuk terkoneksi ke mysql server sesuai.<br>  
  <code>
  $servername = "127.0.0.1";<br>
  $username = "db_pertemuan17";<br>
  $password = "(*AYSD*Y(BD*YB(SYD(B))))";<br>
  $database = "db_pertemuan17";<br>
  </code>
  </div>
  <?php
  $servername = "127.0.0.1";
  $username = "db_latihan17";
  $password = "(*AYSD*Y(BD*YB(SYD(B))))";
  $database = "db_latihan17";

$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
}
echo "Database Connected successfully";
$connection->close();
?>
</div>