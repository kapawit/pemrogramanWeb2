<h3><?= judul("Pertemuan 5 - Manipulasi Berkas")?></h3>
<hr>
<?php 
    $file = "tugas/tmp/buah.txt";
    if (file_exists($file)) {
        echo "file buah.txt ditemukan <br>";
        echo "Menggunakan fungsi readfile : ";
        echo readfile($file);
        echo "<br>";
        echo "Menggunakan fungsi file_get_contens ";
        echo file_get_contents($file);
    } else {
        echo "File buah.txt Tidak ditemukan";
    }
?>