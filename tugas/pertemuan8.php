<?php
    if (isset($_POST['string']) && isset($_POST['function'])) {
        $string = $_POST['string'];
        $function = $_POST['function'];

        switch ($function) {
            case "strlen":
                $string = strlen($string);
                break;
            case "strrev":
                $string = strrev($string);
                break;
            case "strtolower":
                $string = strtolower($string);
                break;
            case "strtoupper":
                $string = strtoupper($string);
                break;
            case "ucfirst":
                $string = ucfirst($string);
                break;
            case "ucwords":
                $string = ucwords($string);
                break;
        }

        echo $string;
        exit;
    }
	?>

    <script>
		function updateString() {
			var string = document.getElementById("string").value;
			var functionRadios = document.getElementsByName("function");

			var selectedFunction = "";
			for (var i = 0; i < functionRadios.length; i++) {
				if (functionRadios[i].checked) {
					selectedFunction = functionRadios[i].value;
					break;
				}
			}

			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function() {
				if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
					document.getElementById("manipulated-string").innerHTML = this.responseText;
				}
			};
			xhr.open("POST", "tugas/pertemuan8.php", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.send("string=" + encodeURIComponent(string) + "&function=" + encodeURIComponent(selectedFunction));
		}
	</script>

<div class="card p-4">
    <h4>latihan Fungsi Manipulasi String</h4>
    <p>input</p>
<hr>
	<label for="string">Masukkan String:</label>
	<input type="text" id="string" class="form-control" name="string" onchange="updateString()">

	<p>Pilih Fungsi String</p>
	<div>
		<label><input type="radio" class="form-check-input" name="function" value="strlen" onchange="updateString()"> String Length</label><br>
		<label><input type="radio" class="form-check-input" name="function" value="strrev" onchange="updateString()"> Reverse String</label><br>
		<label><input type="radio" class="form-check-input" name="function" value="strtolower" onchange="updateString()"> Lowercase</label><br>
		<label><input type="radio" class="form-check-input" name="function" value="strtoupper" onchange="updateString()"> Uppercase</label><br>
		<label><input type="radio" class="form-check-input" name="function" value="ucfirst" onchange="updateString()"> Uppercase First</label><br>
		<label><input type="radio" class="form-check-input" name="function" value="ucwords" onchange="updateString()"> Uppercase Words</label>
	</div>
    <hr>
	<p>Output string:</p>
    <div class="alert alert-info">
        <p id="manipulated-string"></p>
    </div>
</div>