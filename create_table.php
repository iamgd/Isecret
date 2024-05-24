<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itrust";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    encryption VARCHAR(255) NOT NULL,
    version VARCHAR(50) NOT NULL,
    owner VARCHAR(255) NOT NULL,
    modified DATE NOT NULL,
    type VARCHAR(255) NOT NULL,
    algorithm VARCHAR(255) NOT NULL,
    size INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table records created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
