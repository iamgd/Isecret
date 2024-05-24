<?php
// Include the database connection file
include 'db_connect.php';

$id = $_POST['id'];

$sql = "DELETE FROM records WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
