<!DOCTYPE html>
<html>
<head>
	<title>Hitung Nilai Akhir</title>
</head>
<body>

	<div class="container mt-5">
		<h1 class="mb-4">Hitung Nilai Akhir</h1>

		<form action="" method="post">
			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Nama:</label>
				</div>
				<div class="form-group col-md-8">
					<input type="text" class="form-control" name="nama">
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-4">
					<label>NIM:</label>
				</div>
				<div class="form-group col-md-8">
					<input type="text" class="form-control" name="nim">
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Mata Kuliah:</label>
				</div>
				<div class="form-group col-md-8">
					<input type="text" class="form-control" name="mata_kuliah">
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Jumlah Kehadiran:</label>
				</div>
				<div class="form-group col-md-8">
					<input type="text" class="form-control" name="jumlah_kehadiran">
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Nilai Tugas:</label>
				</div>
				<div class="form-group col-md-8">
					<input type="text" class="form-control" name="nilai_tugas">
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Nilai UTS:</label>
				</div>
				<div class="form-group col-md-8">
					<input type="text" class="form-control" name="nilai_uts">
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Nilai UAS:</label>
				</div>
				<div class="form-group col-md-8">
					<input type="text" class="form-control" name="nilai_uas">
				</div>
			</div>

			<button type="submit" class="btn btn-primary" name="submit">Hitung</button>
		</form>

		<?php

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $jumlah_kehadiran = $_POST['jumlah_kehadiran'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];

    // Validate jumlah_kehadiran
    if($jumlah_kehadiran > 18){
        echo '<div class="alert alert-danger">Jumlah kehadiran tidak boleh lebih dari 18</div>';
        exit;
    }

    // Calculate final grade
    $total_nilai = ($jumlah_kehadiran * 0.1) + ($nilai_tugas * 0.2) + ($nilai_uts * 0.3) + ($nilai_uas * 0.4);

    // Output final grade
    echo "<h2>Final Grade for $nama ($nim) in $mata_kuliah:</h2>";
    echo "<p>Total Nilai: $total_nilai</p>";

    if($total_nilai >= 80){
        echo "<p>Grade: A</p>";
    } elseif($total_nilai >= 70){
        echo "<p>Grade: B</p>";
    } elseif($total_nilai >= 60){
        echo "<p>Grade: C</p>";
    } elseif($total_nilai >= 50){
        echo "<p>Grade: D</p>";
    } else {
        echo "<p>Grade: E</p>";
    }

    // Output pass/fail status
    if($total_nilai >= 65){
        echo "<p>Status: Lulus</p>";
    } else {
        echo "<p>Status: Tidak Lulus</p>";
    }
}
?>


	</div>
</body>
</html>