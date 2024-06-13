<?php
// Include your database connection code here
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Database connection parameters
$dbHost = "localhost";
$dbUsername = "YourUsername";
$dbPassword = "YourPass";
$dbName = "YourDB";
// Database configuration
// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cadet_data"; 
$result = $conn->query($sql);

$data = array();
foreach ($result as $row) {
    //echo "Hello!";
    $data[] = $row;
}

$conn->close();

// Print data in JSON format
echo json_encode($data);
?>
        
?>
