<!DOCTYPE html>
<html>
<body>
<div>hello</div>
</body>
</html>
<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="blood";
$fname='sree';
$lname='sree';
$email='sree1';
$pass= md5('123');
//create database
//echo "klklk";die;
$conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);
//print_r($conn);die;
//check connection
if($conn->connect_error) {
	die("connection failed" . $conn->connect_error);
}
if(empty($fname)) {
	echo "first bname cannot be blank";
	die();
} 
$sql="INSERT INTO Bloodbank(fname,lname,email)VALUES('$fname','$lname','$email')";
//echo $sql;die;
if($conn->query($sql)===TRUE){
	echo "success";
}else{

	echo "error"; die;
}
		
	$conn->close();
	
?>
