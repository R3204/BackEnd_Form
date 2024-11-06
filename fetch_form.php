<?php
$host = 'localhost';
$dbname = 'form_builder';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET['id'];
    $stmt = $conn->prepare('SELECT * FROM forms WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $form = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($form);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
