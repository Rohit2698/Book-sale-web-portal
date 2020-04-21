<?php
session_start();
include "connect.php";
$conn=make_connection();
$s_no=$_SESSION['user_id'];
$books=array();
foreach ($_SESSION['cart'] as $value) {
	$books[]=$value;
}
foreach ($books as $value) {
	$query1="select * from book_details where s_no=$value;";
	$result=mysqli_query($conn,$query1);
	$data=mysqli_fetch_array($result);
	$isbn=$data['isbn_no'];
	$query="insert into user_order(user_id,book_isbn,quantity)values($s_no,'$isbn',1);";
	mysqli_query($conn,$query);
	$msg="done";
	header("location:../homepage.php?msg=$msg");
}

?>