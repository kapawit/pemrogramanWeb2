<h4>Pertemuan 5 - Manipulasi Berkas</h4>
<hr>
<?php 
    $file = "tugas/tmp/buah.txt";
    if (file_exists($file)) {
        echo "file buah.txt ditemukan <br>";
        echo "Menggunakan fungsi readfile() : <br>";
        echo readfile($file);
        echo "<br>";
        echo "Menggunakan fungsi file_get_contens(): <br>";
        echo file_get_contents($file);
        echo "Menggunakan fungsi nl2br(file_get_contens()) : <br>";
        echo nl2br(file_get_contents($file));
    } else {
        echo "File buah.txt Tidak ditemukan";
    }

    $test = "tugas/tmp/test.txt";
    if(file_exists($test)){
        echo "<br>";
        echo "Menggunakan fungsi fopen() dan fgets(): <br>";
        $data = fopen($test,'r');
        echo fgets($data). "<br>";
        fclose($data);
    }

    if(file_exists($test)){
        echo "<br>";
        echo "Menggunakan fungsi fopen() dan fgets() dan looping: <br>";
        $data = fopen($test,'r');
        while (!feof($data)) {
            echo fgets($data). "<br>";
        }
        fclose($data);
    }
?>
<hr>
<h4>Latihan 3 </h4>
<hr>
<?php
$counter="tugas/tmp/counter.dat";
if(file_exists($counter)){
    $berkas1 = fopen($counter, "r");
    $pencacah1 = (integer)trim(fgets($berkas1,255));
    $pencacah1++;
    fclose($berkas1);
} else {
    $pencacah1 = 1; 
    $berkas1 = fopen($counter, "w");
    fputs($berkas1, $pencacah1);
    fclose($berkas1);
}

echo "Anda Pengunjung ke {$pencacah1} <br>";
?>
<hr>
<h4>Latihan Soal - Buatlah form buku tamu menggunakan fopen() dan simpan di txt file</h4>
<hr>
<div class="container card p-4 my-4">
    <?php 
    $tamu = "tugas/tmp/tamu.txt";
    $no = 1;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $newcomment = $name."|".$email."|".$comment."\n";
        $file = fopen($tamu, 'a');
        fwrite($file, $newcomment);
        fclose($file);
    }
    if (file_exists($tamu)) {
        $data = fopen($tamu, 'r'); 
        if ($data) {
            $array = explode("\n", fread($data, filesize($tamu)));
        }
    } else {
        echo "File Tamu.txt Tidak ditemukan";
    }
    ?>
    <h5>Buku Tamu</h5>
    <hr>
    <form action="" method="post">
        <div class="row mb-3">
            <label class="col-sm-12 col-md-3" for="nama">Nama</label>
            <div class="col-sm-12 col-md-9">
                <input type="text" class="form-control" name="name" required placeholder="Nama">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-12 col-md-3" for="email">Email</label>
            <div class="col-sm-12 col-md-9">
                <input type="email" class="form-control" name="email" required placeholder="Email@email.com">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-12 col-md-3" for="komentar">Komentar</label>
            <div class="col-sm-12 col-md-9">
                <input type="text" class="form-control" name="comment" required placeholder="apa komentarmu ?">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
<table class="table table-stripped table-bordered">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>email</th>
        <th>Komentar</th>
    </thead>
    <tbody>
        <?php 
        $last_key = count($array);
        foreach ($array as $key => $val) {
            $tm = explode("|", $val); 
            if ($no != $last_key) { ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?= $tm[0];?></td>
                <td><?= $tm[1];?></td>
                <td><?= $tm[2];?></td>
            </tr>                       
        <?php }
        } ?>
    </tbody>
</table>