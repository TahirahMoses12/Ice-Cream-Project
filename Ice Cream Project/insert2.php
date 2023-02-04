<?php
$servername = "localhost:3308";
$username = "dev12dbuser";
$password = "FM12web2020";
$dbname = "dev12db";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

//sql to create a table
/*$sql = "CREATE TABLE toppings (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topping VARCHAR(50) NOT NULL,
firstname VARCHAR(30) NOT NULL,
secondscoop VARCHAR(30) NOT NULL,
email VARCHAR(30),
reg_date TIMESTAMP)";
*/
$sql="INSERT INTO icecream (toppings, firstname, secondscoop, email)
VALUES 
('$_POST[toppings]','$_POST[firstname]','$_POST[secondscoop]','$_POST[email]')";


if ($conn->query($sql) === TRUE){
	echo "New table created successfully.";
}
else{
	echo "Error: " . $sql . "<br>". $conn->error;
} 
$conn->close();
?>