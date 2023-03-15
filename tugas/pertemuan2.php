<?php
$brg1 = "buku";
$brg2 = "Mouse";
$brg3 = "Flashdisk";
$brg4 = "Pulpen";

$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;

$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;

$harga = $th1 + $th2 + $th3 + $th4;

$pot = 5;

$tpot = ($pot * $harga)/100;
$tdibayar = $harga - $pot;

function rupiah($angka){
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Diskon</title>
</head>
<body>
    <center>
        <font face="comic sans serif" size=5 color="blue">
            Contoh Perhitungan dengan PHP
        </font>
            <h1><b>Pesanan Alat Kantor</b></h1>
        <table border="1" cellspacing="0" cellpadding="3">
            <thead>
                <th><b>Nama Alat</b></th>
                <th><b>Kwantitas</b></th>
                <th ><b>Harga Satuan</b></th>
                <th><b>Jumlah Harga</b></th>
            </thead>
            <tbody>
            <tr>
                <td><?=$brg1;?></td>
                <td><?=$jmlbrg1;?></td>
                <td><?=rupiah($harga1);?></td>
                <td><?=rupiah($th1);?></td>
            </tr>
            <tr>
                <td><?=$brg2;?></td>
                <td><?=$jmlbrg2;?></td>
                <td><?=rupiah($harga2);?></td>
                <td><?=rupiah($th2);?></td>
            </tr>
            <tr>
                <td><?=$brg3;?></td>
                <td><?=$jmlbrg3;?></td>
                <td><?=rupiah($harga3);?></td>
                <td><?=rupiah($th3);?></td>
            </tr>
            <tr>
                <td><?=$brg4;?></td>
                <td><?=$jmlbrg4;?></td>
                <td><?=rupiah($harga4);?></td>
                <td><?=rupiah($th4);?></td>
            </tr>
            
            <tr>
                <td colspan="3" align="right">
                    Diskon <?= $pot . "%";?>
                </td>
                <td align="right"><?= rupiah($tpot);?></td>
            </tr>
            <tr>
                <td colspan="3" align="right"> Jumlah Harus Dibayar</td>
                <td align="right"><?= rupiah($tdibayar);?></td>
            </tr>
            </tbody>
        </table>
    </center>

    
</body>
</html>