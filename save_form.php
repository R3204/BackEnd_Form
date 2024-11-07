<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allows requests from any origin
header('Access-Control-Allow-Methods: POST, GET, OPTIONS'); // Specifies allowed HTTP methods
header('Access-Control-Allow-Headers: Content-Type'); // Specifies allowed headers

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200); // Handles preflight requests
    exit;
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$host = 'localhost'; // Hostname
$dbname = 'form_builder'; // Replace with your database name
$username = 'root'; // Replace with your MySQL username
$password = ''; // Replace with your MySQL password

// Establish database connection
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed' . $conn->connect_error]));
}

// Get the POSTed JSON data
$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    $basicInfo = $data['basicInfo'];
    $essentialDates = $data['essentialDates'];
    $contactInfo = $data['contactInfo'];
    $addressInfo = $data['addressInfo'];

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO forms (first_name, last_name, lead_type, lead_source, dob, anniversary_date, office_phone, primary_email, home_phone, address_line1, city, zip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "ssssssssssss",
        $basicInfo['firstName'],
        $basicInfo['lastName'],
        $basicInfo['leadType'],
        $basicInfo['leadSource'],
        $essentialDates['dob'],
        $essentialDates['anniversaryDate'],
        $contactInfo['officePhone'],
        $contactInfo['primaryEmail'],
        $contactInfo['homePhone'],
        $addressInfo['addressLine1'],
        $addressInfo['city'],
        $addressInfo['zip']
    );

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Form submitted successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to submit form'  . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
}

$conn->close();
?>
