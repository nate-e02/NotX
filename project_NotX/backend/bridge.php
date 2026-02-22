<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$database = "NotX";

$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
    echo "Connection failed: " . $conn->connect_error;
    exit();
}

?>