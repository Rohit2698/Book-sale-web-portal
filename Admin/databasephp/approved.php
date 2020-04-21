<?php 
	include "connect.php";
	$conn=make_connection();

	$s_no=$_POST['s_no'];
	echo $s_no;
	$query="update `book_request` set `status` ='approved' where `s_no`=$s_no;";
	mysqli_query($conn,$query);
	mysqli_close($conn);
	$msg="approved";
	header("Location:../requested_book.php?msg=$msg");
 ?>