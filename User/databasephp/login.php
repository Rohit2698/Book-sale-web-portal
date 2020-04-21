<?php
session_start();
error_reporting(0);
include "connect.php";
$conn=make_connection();
$email=$_POST['email'];
$pass=$_POST['password'];

$_SESSION['email']=$email;
$query="Select * from user_details where user_email_id='$email' and user_password='$pass';";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)){
	$data=mysqli_fetch_array($result);
	$_SESSION['user_id']=$data['user_id'];
	if(count($_SESSION['cart'])>=1)
		header("Location:../cart.php");
	else
		header("Location:../homepage.php");
}
else{
	$msg = "wrong";
	header("Location:../login.php?msg=$msg");
}

?>