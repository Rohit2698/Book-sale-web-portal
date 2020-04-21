<?php
session_start();
include "connect.php";
$conn=make_connection();
$id=$_SESSION['user_id'];
$curr_pass=$_POST['curr_pass'];
$new_pass=$_POST['pass'];

$query1="select user_password from user_details where user_id=$id;";
$result=mysqli_query($conn,$query1);
$data=mysqli_fetch_array($result);
if($data['user_password']==$curr_pass){
	$query2="Update user_details SET user_password='$new_pass';";
	mysqli_query($conn,$query2);
	$msg='pass_change';
	header("Location:../account.php?msg=$msg");
}
else{
	$msg='not';
	header("Location:../account.php?msg=$msg");	
}
?>