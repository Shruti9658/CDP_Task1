<?php
session_start();
$message="";
if(count($_POST)>0) {
	$type_code = 0;
	$con = mysqli_connect('localhost','root','','db1') or die('Unable To connect');
	$result = mysqli_query($con,"SELECT * FROM register WHERE email='" . $_POST["email"] . "' and password = '". $_POST["pass"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["email"] = $row['email'];
	$_SESSION["password"] = $row['password'];
	} else {
		header("Location:error.php");
	
	}
}
if(isset($_SESSION["password"])) {
	$type_code=1;
header("Location:Welcome.php");
}
else {
	header("Location:error.php");
}

?>