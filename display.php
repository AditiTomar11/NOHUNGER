<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT b_id, b_name, address, area, phone FROM branch";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Area</th><th>Phone</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["b_id"]. "</td><td>" . $row["b_name"]. "</td><td>" . $row["address"]. "</td><td>" . $row["area"]. "</td><td>" . $row["phone"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>