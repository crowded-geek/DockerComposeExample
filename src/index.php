<?php
$conn = new mysqli("database", "root", ".sweetpwd.", "my_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "use mydb";
$conn->query($sql1);
$sql = "SELECT users FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo $row['users']."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
