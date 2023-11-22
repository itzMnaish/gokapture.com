<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database configuration
    $host = 'localhost';
$username = "defexpo";
$password = "o@9(m6AO@eea";
$dbname = "defexpo";

    // Create a PDO connection to the database
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retrieve data from the AJAX request
        $name = $_POST['name'];
        $link = $_POST['link'];

        // Insert data into the database
        $stmt = $pdo->prepare("INSERT INTO names (name, link) VALUES (:name, :link)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':link', $link);
        $stmt->execute();

        // Return a success message
        echo json_encode(['message' => 'Data stored successfully']);
    } catch (PDOException $e) {
        // Handle database connection errors
        echo json_encode(['error' => 'Database connection error']);
    }
} else {
    // Handle non-POST requests
    echo json_encode(['error' => 'Invalid request']);
}
?>
