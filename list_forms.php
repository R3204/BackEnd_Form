<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

$host = 'localhost';
$dbname = 'form_builder'; // Replace with your database name
$username = 'root'; // Replace with your username
$password = ''; // Replace with your password

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]));
}

$result = $conn->query("SELECT id, form_name, form_data FROM forms");

if ($result->num_rows > 0) {
    $forms = [];
    while ($row = $result->fetch_assoc()) {
        $forms[] = $row;
    }
    echo json_encode($forms);
} else {
    echo json_encode([]);
}

$conn->close();
?>
