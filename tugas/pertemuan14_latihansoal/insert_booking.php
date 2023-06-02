<?php
include "koneksi.php";
$roomID = $_POST['roomID'];
$customerName = $_POST['customerName'];
$checkInDate = $_POST['checkInDate'];
$checkOutDate = $_POST['checkOutDate'];

$sql = "CALL BookRoom(?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isss", $roomID, $customerName, $checkInDate, $checkOutDate);
if ($stmt->execute()) {
  echo "Booking successful!";
} else {
  echo "Booking failed. Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
