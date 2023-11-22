<?php
// Database configuration
$host = 'localhost'; // Replace with your database host
$username = "defexpo";
$password = "o@9(m6AO@eea";
$dbname = "defexpo";
try {
    // Create a PDO connection to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch names from the database
    $stmt = $pdo->prepare("SELECT name, link, date FROM names ORDER BY date DESC");
    $stmt->execute();
    $names = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the names as JSON
    echo json_encode($names);
} catch (PDOException $e) {
    // Handle database connection errors
    echo json_encode(['error' => 'Database connection error']);
}
?>
