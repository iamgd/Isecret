<?php
// Include the database connection file
include 'db_connect.php';

$id = $_POST['id'];
$encryption = $_POST['encryption'];
$version = $_POST['version'];
$owner = $_POST['owner'];
$modified = $_POST['modified'];
$type = $_POST['type'];
$algorithm = $_POST['algorithm'];
$size = $_POST['size'];

$sql = "UPDATE records SET encryption='$encryption', version='$version', owner='$owner', modified='$modified', type='$type', algorithm='$algorithm', size='$size' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
