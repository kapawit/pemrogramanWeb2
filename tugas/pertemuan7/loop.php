<!DOCTYPE html>
<html>
<head>
	<title>angka genap dibagi 3</title>
</head>
<body>
	<h4>Menampilkan bilangan genap yang habis dibagi 3</h4>
	<form method="post">
		<label for="input1">Input 1:</label><br>
		<input type="number" id="input1" name="input1" required><br><br>
		<label for="input2">Input 2:</label><br>
		<input type="number" id="input2" name="input2" required><br><br>
		<button type="submit" name="find">Hitung</button>
	</form>
	<?php
		if(isset($_POST['find'])) {
			$input1 = $_POST['input1'];
			$input2 = $_POST['input2'];
			$sum = 0;
			echo "<p>The even numbers between ".$input1." and ".$input2." that are divisible by 3 are:</p>";
			for($i = $input1; $i <= $input2; $i++) {
				if($i % 2 == 0 && $i % 3 == 0) {
					echo $i."<br>";
					$sum += $i;
				}
			}
			echo "<p>The sum of the even numbers divisible by 3 is: ".$sum."</p>";
		}
	?>
</body>
</html>
