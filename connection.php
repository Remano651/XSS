<?php
$servername = "localhost";
$username = "Aiden";
$password = "PAD";
$dbname = "forum";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>



