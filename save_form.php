<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json");

$host = 'localhost';
$dbname = 'form_builder';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = json_decode(file_get_contents('php://input'), true);

    if (!$data || !isset($data['basicInfo']['firstName'])) {
        echo json_encode(['success' => false, 'message' => 'Invalid input']);
        exit;
    }

    $stmt = $conn->prepare('INSERT INTO forms (form_name, form_data) VALUES (:form_name, :form_data)');
    $stmt->bindParam(':form_name', $data['basicInfo']['firstName']);
    $stmt->bindParam(':form_data', json_encode($data));
    $stmt->execute();

    echo json_encode(['success' => true, 'message' => 'Form submitted successfully', 'id' => $conn->lastInsertId()]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
