<?php
// Include the database connection file
include 'db_connect.php';

$encryption = $_POST['encryption'];
$version = $_POST['version'];
$owner = $_POST['owner'];
$modified = $_POST['modified'];
$type = $_POST['type'];
$algorithm = $_POST['algorithm'];
$size = $_POST['size'];

$sql = "INSERT INTO records (encryption, version, owner, modified, type, algorithm, size)
VALUES ('$encryption', '$version', '$owner', '$modified', '$type', '$algorithm', '$size')";

if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
