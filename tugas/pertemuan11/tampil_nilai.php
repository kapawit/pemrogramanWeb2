<!DOCTYPE html>
<html>
<head>
	<title>Calculate Final Grade</title>
</head>
<body>
	<h2>Calculate Final Grade</h2>

	<table>
	<?php
		// Connect to MySQL database
		$servername = "localhost";
		$username = "pemrograman";
		$password = "LASJD*ASDUOIYO qoyiwyioOIASHDO OIH";
		$dbname = "db_latihan11";

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM nama_table";
		$result = $conn->query($sql);

        if ($result->num_rows > 0) {
			// Store the rows in an array
			$rows = array();
			while($row = $result->fetch_assoc()) {
				$rows[] = $row;
			}

			// Sort the rows by highest final_score
			usort($rows, function($a, $b) {
				$a_score = calculate_final_score($a);
				$b_score = calculate_final_score($b);
				return $b_score - $a_score;
			});

			// Display the sorted rows as a table
			echo "<table border='1'>";
			echo "<thead><tr><th>Nama Mahasiswa</th><th>Mata Kuliah</th><th>UTS</th><th>UAS</th><th>Tugas</th><th>Jumlah Hadir</th><th>Final Score</th><th>Final Grade</th></tr></thead>";
			echo "<tbody>";
			foreach($rows as $row) {
				$nama_mhs = $row['nama_mhs'];
				$matakuliah = $row['matakuliah'];
				$uts = $row['uts'];
				$uas = $row['uas'];
				$tugas = $row['tugas'];
				$jmlhadir = $row['jmlhadir'];

				$final_score = calculate_final_score($row);

				// Calculate final grade
				if ($final_score >= 80) {
					$final_grade = "A";
				} else if ($final_score >= 70) {
					$final_grade = "B";
				} else if ($final_score >= 60) {
					$final_grade = "C";
				} else if ($final_score >= 50) {
					$final_grade = "D";
				} else {
					$final_grade = "E";
				}

				// Display the row
				echo "<tr>";
				echo "<td>$nama_mhs</td>";
				echo "<td>$matakuliah</td>";
				echo "<td>$uts</td>";
				echo "<td>$uas</td>";
				echo "<td>$tugas</td>";
				echo "<td>$jmlhadir</td>";
				echo "<td>$final_score</td>";
				echo "<td>$final_grade</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
		} else {
			echo "No results found.";
		}

        function calculate_final_score($row) {
			$uts_weighted = $row['uts'] * 0.3 + $row['uas'] * 0.3 + $row['tugas'] * 0.2 + $row['jmlhadir'] * 0.1;
        return $uts_weighted;
        }

        
		// Close MySQL database connection
		$conn->close();
	?>
</table>

</body>
</html>
