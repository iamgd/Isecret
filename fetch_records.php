<?php
// Include the database connection file
include 'db_connect.php';

$sql = "SELECT id, encryption, version, owner, modified, type, algorithm, size FROM records";
$result = $conn->query($sql);

$records = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $records[] = $row;
  }
} else {
  echo "0 results";
}
$conn->close();

echo json_encode($records);
?>
