<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marvel";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name =  $_POST['firstname'];
$city =  $_POST['city'];

$sql = "INSERT INTO register (name,city) VALUES ($name, $city)";
$result=mysqli_query($conn,$sql);
if($result){
	echo "You have been registered successfully:WELCOME TO COMIC-CON";
header ("refresh:3;url=project.html" );
}
else
	{
	echo "You have been registered successfully:WELCOME TO COMIC-CON";
header ("refresh:3;url=project.html" );
}
?>
