<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "stupidkid";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$name = $_POST['name'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];
$phone = $_POST['phone'];
$address= $_POST['address'];
$dob=$_POST['dob'];
$College=$_POST['College'];


$sql = "INSERT INTO register(name,uname,pword,phone,address,dob,College)VALUES('$name', '$uname', '$pword', $phone ,'$address', '$dob','$College');";
$result=mysqli_query($conn,$sql);
if($result){
	echo "Registered successfully";
}
else
	echo "Error";
?>
<html>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
<body>
<?php
$sql = "SELECT name,uname,pword,phone,address,dob,College FROM register";
$result = $conn->query($sql);
?>
<table>
    		<tr>
    			<th>Name</th>
    			<th>Username</th>
        	 	<th>Password</th>
        	    <th>Contact no.</th>   
    		    <th>Address</th>
    		    <th>Date of Birth</th>
    		    <th>College</th> 
    		</tr>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$name = $row['name'];
$uname = $row['uname'];
$pword = $row['pword'];
$phone = $row['phone'];
$address= $row['address'];
$dob=$row['dob'];
$College=$row['College'];

    			echo "<tr><td>$name</td>
				<td>$uname</td>    	 
 				<td>$pword</td>
 				<td>$phone</td>
 				<td>$address</td>
 				<td>$dob</td>
 				<td>$College</td></tr>";  
    	}
    	echo "</table>";
} else {
    echo "0 results";
}?>
</body>
</html>