<?php

include('db.php');


$sql = "SELECT id, name, email, created_at FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<h2>User List</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>";

    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["created_at"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}


$conn->close();
?>
