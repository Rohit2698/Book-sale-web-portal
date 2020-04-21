<?php
	include "connect.php";
	$conn=make_connection();

	$book_isbn_no=$_POST['book_isbn_no'];
	
	$query1="Select * from `book_details` where `isbn_no`=$book_isbn_no;";
	$cn=mysqli_query($conn,$query1);
	if(mysqli_num_rows($cn)==0){
		$msg="not_found";
		header("Location:../add_remove.php?msg=$msg");
	}
	else{
		$query2="DELETE FROM `book_details` WHERE `isbn_no`=$book_isbn_no; ";
		mysqli_query($conn,$query2);
		$msg = "book_removed";
		header("Location:../add_remove.php?msg=$msg");
	}	
?>