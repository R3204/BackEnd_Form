<?php
$host = 'localhost';
$dbname = 'form_builder';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = json_decode(file_get_contents('php://input'), true);
    $stmt = $conn->prepare('UPDATE forms SET form_data = :form_data WHERE id = :id');
    $stmt->bindParam(':form_data', json_encode($data['form_data']));
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
