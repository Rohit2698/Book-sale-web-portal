<?php
session_start();
include "connect.php";
$conn=make_connection();
$id=$_SESSION['user_id'];

$user_name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['date'];

$query="UPDATE `user_details` SET `user_name`='$user_name',`user_dob`='$dob',`user_gender`='$gender' WHERE user_id=$id;";
mysqli_query($conn,$query);

$msg="done";
header("Location:../account.php?msg=$msg");
?>