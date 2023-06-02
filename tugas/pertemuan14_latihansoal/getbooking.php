<?php
function getBookings() {
  include "koneksi.php";
  
  $sql = "SELECT * FROM bookings";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    echo "<table class='table table-stripped'>";
    echo "<tr><th>Booking ID</th><th>Room ID</th><th>Name</th><th>CI Date</th><th>CO Date</th></tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['booking_id'] . "</td>";
      echo "<td>" . $row['room_id'] . "</td>";
      echo "<td>" . $row['customer_name'] . "</td>";
      echo "<td>" . $row['check_in_date'] . "</td>";
      echo "<td>" . $row['check_out_date'] . "</td>";
      echo "</tr>";
    }
    
    echo "</table>";
  } else {
    echo "No bookings found.";
  }
  
  $conn->close();
}

getBookings();
?>
