<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, first_name, last_name,number,email FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"].
        "  number: " . $row["number"]."email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>