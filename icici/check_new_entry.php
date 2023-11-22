<?php
// Establish a database connection (you should have a database connection setup)
$servername = "localhost";
$username = "defexpo";
$password = "o@9(m6AO@eea";
$dbname = "defexpo"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the total row count in the 'names' table
$sqlRowCount = "SELECT COUNT(*) as total FROM names";
$resultRowCount = $conn->query($sqlRowCount);

$totalRowCount = 0;

if ($resultRowCount->num_rows > 0) {
    $row = $resultRowCount->fetch_assoc();
    $totalRowCount = $row['total'];
}

// Define the last checked row count (you may store this in a database or session)
$lastCheckedRowCount = 0;

// Check for new entries by comparing the row count
if ($totalRowCount > $lastCheckedRowCount) {
    // Calculate the number of new entries
    $newEntryCount = $totalRowCount - $lastCheckedRowCount;

    // Query to retrieve the new entries based on timestamp or ID
    $sql = "SELECT * FROM names ORDER BY date DESC LIMIT $newEntryCount"; // Replace 'timestamp_column' with your actual timestamp column

    $result = $conn->query($sql);

    $newEntries = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $newEntries[] = $row;
        }
    }

    // Update the last checked row count (you may store this in a database or session)
    $lastCheckedRowCount = $totalRowCount;

    // Close the database connection
    $conn->close();

    // Return the new entries as JSON
    echo json_encode($newEntries);
} else {
    // No new entries found
    echo json_encode([]);
}

?>
