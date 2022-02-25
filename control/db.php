<?php

$servername = "localhost";

$username = "online_ide_user";

$password = "vanika";

$dbname = "online_ide";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

//echo "Connected successfully";

?>