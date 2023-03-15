<?php 

define("JUDUL", "Menghitung Luas Lingkaran Dan segitiga <br>");
define("PI", 3.14);

$r = 5;
$a = 4;
$t = 3;

function hitungLuasLingkaran($r){
    $luas = PI * $r * $r;
    echo "rumus menghitung ".PI." x " . " $r " . " x " . $r ."<br>";
    echo "Luas Lingkaran adalah = $luas <br>";
}

function hitungLuasSegitiga($a,$t ){
    $luas = 1/2 * $a * $t;
    echo "rumus menghitung 1/2 x " . " $a " . " x " . $t ."<br>";
    echo "Luas Segitiga adalah = $luas <br>";
}

echo JUDUL;
hitungLuasLingkaran($r);
echo "<br>";
hitungLuasSegitiga($a,$t);


$nama = "johny";
$nim = "12345";

function setNamaNim($nama,$nim){
    echo "Nama = $nama <br>";
    echo "Nim = $nim <br><br>";
}

setNamaNim("pawit Wahib", "201011400274");

echo "Nama diluar fungsi = $nama <br>";
echo "NIM diluar fungsi = $nim";

?>
