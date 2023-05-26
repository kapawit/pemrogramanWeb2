<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_latihan13";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$resultsPerPage = 5;
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

$start = ($current_page - 1) * $resultsPerPage;

$sql = "SELECT * FROM customer LIMIT $start, $resultsPerPage";
$result = $conn->query($sql);

$totalRecordsQuery = "SELECT COUNT(*) AS total FROM customer";
$totalRecordsResult = $conn->query($totalRecordsQuery);
$totalRecords = $totalRecordsResult->fetch_assoc()['total'];

$totalPages = ceil($totalRecords / $resultsPerPage);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Customer Number</th>
                <th>Customer Name</th>
                <th>Contact Last Name</th>
                <th>Contact First Name</th>
                <th>Phone</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['customernumber']."</td>
                <td>".$row['customername']."</td>
                <td>".$row['contactlastname']."</td>
                <td>".$row['contactfirstname']."</td>
                <td>".$row['phone']."</td>
            </tr>";
    }
    echo "</table>";

    echo "<div class='pagination'>";
    if ($current_page > 1) {
        echo "<a href='?page=".($current_page - 1)."'>Previous</a>";
    }
    for ($i = 1; $i <= $totalPages; $i++) {
        echo "<a href='?page=".$i."'>".$i."</a>";
    }
    if ($current_page < $totalPages) {
        echo "<a href='?page=".($current_page + 1)."'>Next</a>";
    }
    echo "</div>";
} else {
    echo "No records found.";
}
$conn->close();
?>
