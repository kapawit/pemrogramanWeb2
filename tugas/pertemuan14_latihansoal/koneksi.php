<?php
$conn=mysqli_connect("localhost","root","","db_latihan14");
 // Check for connection errors
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
