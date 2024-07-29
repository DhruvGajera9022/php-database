<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbdata";

// Create Connection
$conn = new mysqli($servername, $username, $password, $database);

// Check Connection
if ($conn->connect_error) { 
    die("Connection failure: " . $conn->connect_error); 
    exit();
}


?>