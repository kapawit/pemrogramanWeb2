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
