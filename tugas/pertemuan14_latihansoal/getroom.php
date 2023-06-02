<?php
function getAvailableRooms() {
  include "koneksi.php";
  $sql = "CALL GetAvailableRooms()";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  
  echo "<table class='table table-stripped'>";
  echo "<tr><th>Room ID</th><th>Room Type</th><th>Capacity</th><th>Price</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['room_id'] . "</td>";
    echo "<td>" . $row['room_type'] . "</td>";
    echo "<td>" . $row['capacity'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr>";
  }
  
  echo "</table>";
  
  $stmt->close();
  $conn->close();
}

getAvailableRooms();
?>
