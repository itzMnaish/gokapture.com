<?php
// Database connection details (replace with your own)
$servername = "localhost";
$username = "defexpo";
$password = "o@9(m6AO@eea";
$dbname = "defexpo";
$tableName = "names"; // Replace with the name of your table

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the row count
$sql = "SELECT COUNT(*) AS row_count FROM $tableName";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the row count from the result
    $row = $result->fetch_assoc();
    $rowCount = $row['row_count'];
    echo $rowCount;
} else {
    echo "No rows found in table $tableName";
}

// Close the database connection
$conn->close();
?>
