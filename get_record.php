<?php
include 'db_connect.php'; // Include your database connection file

$conn = openConnection();

$id = $_GET['id'];
$sql = "SELECT * FROM records WHERE id = $id";
$result = $conn->query($sql);

$record = $result->fetch_assoc();

closeConnection($conn);

echo json_encode($record);
?>
