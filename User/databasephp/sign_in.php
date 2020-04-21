<?php
	include "connect.php";
	$conn=make_connection();
	$email=$_POST['email'];
	$pass=$_POST['password'];


	$query1="Select * from user_details;";
	$result=mysqli_query($conn,$query1);
	if(mysqli_num_rows($result)==0){
		$query2="INSERT INTO `user_details` (`user_id`, `user_name`, `user_email_id`, `user_mobile`, `user_password`) VALUES (1, '', '$email', '', '$pass')";
		mysqli_query($conn,$query2);
		header("location:../login.php");
	}
	else{
		$query3="SELECT MAX(user_id) from user_details;";
		$count=mysqli_query($conn,$query3);
		$result=mysqli_fetch_array($count);
		$id=$result['MAX(user_id)']+1;
		$query4="INSERT INTO `user_details` (`user_id`, `user_name`, `user_email_id`, `user_mobile`, `user_password`) VALUES ('$id','', '$email', '', '$pass')";
		if(!mysqli_query($conn,$query4)){echo "failded";}
		$msg="done";
		header("location:../login.php?msg=$msg");
	}
?>