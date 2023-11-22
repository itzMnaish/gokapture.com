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

// Query to retrieve the last row based on the 'id' column
$sql = "SELECT * FROM $tableName ORDER BY id DESC LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch and display the last row
    $row = $result->fetch_assoc();
    print_r(json_encode($row)); // Replace with your desired way of handling the last row data
} else {
    echo "No rows found in table $tableName.";
}

// Close the database connection
$conn->close();
?>
