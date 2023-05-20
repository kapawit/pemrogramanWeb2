<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
</head>
<body>
	<h2>Insert Data</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		NIM: <input type="text" name="nim"><br><br>
		Nama Mahasiswa: <input type="text" name="nama_mhs"><br><br>
		Mata Kuliah: <input type="text" name="matakuliah"><br><br>
		UTS: <input type="text" name="uts"><br><br>
		UAS: <input type="text" name="uas"><br><br>
		Tugas: <input type="text" name="tugas"><br><br>
		Jumlah Hadir: <input type="text" name="jmlhadir"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		// Connect to database
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_latihan11";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// Insert data into table
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nim = $_POST['nim'];
			$nama_mhs = $_POST['nama_mhs'];
			$matakuliah = $_POST['matakuliah'];
			$uts = $_POST['uts'];
			$uas = $_POST['uas'];
			$tugas = $_POST['tugas'];
			$jmlhadir = $_POST['jmlhadir'];

			$sql = "INSERT INTO nama_table (nim, nama_mhs, matakuliah, uts, uas, tugas, jmlhadir) VALUES ('$nim', '$nama_mhs', '$matakuliah', '$uts', '$uas', '$tugas', '$jmlhadir')";

			if (mysqli_query($conn, $sql)) {
				echo "Data inserted successfully.";
			} else {
				echo "Error inserting data: " . mysqli_error($conn);
			}
		}

		// Close database connection
		mysqli_close($conn);
	?>
</body>
</html>
