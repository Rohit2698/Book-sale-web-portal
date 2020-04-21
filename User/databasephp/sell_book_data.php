<?php
session_start();
include "connect.php";
$conn=make_connection();
$isbn=$_POST['isbn_no'];
$name=$_POST['book_name'];
$cost=$_POST['cost'];
$user_id=$_SESSION['user_id'];
$query="Select * from user_details;";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_array($result);
$email=$data['user_email_id'];
$query1="INSERT INTO `book_sell`(`s_no`, `user_email`, `book_isbn`, `book_name`, `user_cost`, `status`) VALUES ('$user_id','$email','$isbn','$name','$cost','pending');";

mysqli_query($conn,$query1);

$msg="done";
header("location:../sell_book.php?msg=$msg");
?>