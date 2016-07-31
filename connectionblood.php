
<!DOCTYPE html>
<html>
<body>
<div>hello</div>
</body>
</html>
<?php
$servername="mysql wampserver";
$dbusername="root";
$dbpassword="";
$dbname="blood";

$fname=$_POST('fname');
$lname=$_POST('lname');
$email=$_POST('email');
$pass=$_POST('pass');

//create database
$conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);

//check connection

if($conn->connect_error) {
	die("connection failed" , $conn->connect_error);
}

if(empty($fname)) {
	echo "first bname cannot be blank";
	die();
} 

$sql="INSERT INTO Bloodbank(fname,lname,email)VALUES('$fname','$lname','$email')";

if($conn->query($sql)===TRUE){
	echo "success";
}else{
	echo "error";
}
		
	$conn->close();
	
?>