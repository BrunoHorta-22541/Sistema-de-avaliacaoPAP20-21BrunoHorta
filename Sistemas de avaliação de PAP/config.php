<?php
$server = "localhost";
$username="root";
$password="";
$dbname="pap";

// Create connection
$conn = mysqli_connect($server, $username, $password , $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";



?>