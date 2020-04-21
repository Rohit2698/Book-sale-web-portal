<?php
session_start();
include "connect.php";
$conn=make_connection();	
$id=$_SESSION['user_id'];

$add_line_1=$_POST['add_line_1'];
$add_line_2=$_POST['add_line_2'];
$landmark=$_POST['landmark'];
$mobile=$_POST['mobile'];
$pin=$_POST['pin'];
$city=$_POST['city'];
$state=$_POST['state'];
$address_type=$_POST['address_type'];
$query1="INSERT INTO `user_addres`(`s_no`, `user_address_line1`, `user_address_line2`, `user_landmark`, `user_pin`, `user_city`, `user_state`,`address_type`) VALUES ($id,'$add_line_1','$add_line_2','$landmark','$pin','$city','$state','$address_type')";
mysqli_query($conn,$query1);
$query2="UPDATE `user_details` SET `user_mobile`='$mobile' WHERE `user_id`=$id";
mysqli_query($conn,$query2);

$msg="done";
header("Location:../address.php?msg=$msg");
?>