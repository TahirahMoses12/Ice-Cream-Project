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

$sql = "SELECT topping FROM toppings WHERE topping = '$_POST[topping]'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	//output data of each row
	while($row = $result->fetch_assoc()){
		echo "id: " . $row["topping"].  "<br>"; }
}else {
		echo "0 results";
	}
$conn->close();
?>