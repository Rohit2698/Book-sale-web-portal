<?php 
	include "connect.php";
	$conn=make_connection();

	$s_no=$_POST['s_no'];
	$query="delete from `book_request` where `s_no`=$s_no;";
	mysqli_query($conn,$query);
	mysqli_close($conn);
	header("Location:../add_remove.php");
 ?>