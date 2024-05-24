<?php
include 'db_connect.php';

try {
    $stmt = $conn->prepare("SELECT id, username, email, country, agreed_terms, created_at FROM users");
    $stmt->execute();

    // Set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $users = $stmt->fetchAll();

    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Country</th>
                <th>Agreed to Terms</th>
                <th>Created At</th>
            </tr>";

    foreach($users as $user) {
        echo "<tr>
                <td>" . $user['id'] . "</td>
                <td>" . $user['username'] . "</td>
                <td>" . $user['email'] . "</td>
                <td>" . $user['country'] . "</td>
                <td>" . ($user['agreed_terms'] ? 'Yes' : 'No') . "</td>
                <td>" . $user['created_at'] . "</td>
              </tr>";
    }
    echo "</table>";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
