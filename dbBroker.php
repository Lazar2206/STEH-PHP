<?php
$host = "localhost";
$user = "root";
$pass="";
$db = "kolokvijumi";
$conn= new mysqli($host, $user, $pass, $db);
if($conn->connect_error) {
    echo "Error connecting to the database: " . $conn->connect_errno;
    
}
else {
    echo "Connected to the database successfully!";
}