<?php
$servername = "localhost:3308";
$username = "dev12dbuser";
$password = "FM12web2020";

//Create connection
$conn = new mysqli($servername, $username, $password);

//Check connection
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully.";
?>