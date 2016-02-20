<?php
$servername = "us-cdbr-azure-east-a.cloudapp.net";
$username = "bdf7fc6b334bd9";
$password = "57c924c2";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>