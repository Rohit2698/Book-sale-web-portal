<?php
	include "connect.php";
	$conn=make_connection();
	$book_isbn=$_POST['isbn_no'];
	$s_no=$_POST['s_no'];
	$query="select * from book_details where isbn_no=$book_isbn";
	$count=mysqli_query($conn,$query);

	if(mysqli_num_rows($count)){
		$data=mysqli_fetch_array($count);
		$val=$data['quantity']+1;
		$query2="update book_details set quantity=$val;";
		$query3="delete from book_sell where isbn_no=$book_isbn and s_no=$s_no;";
		mysqli_query($conn,$query);
		header("location:../book_sale_request.php");
	}
	else{
		$query4="UPDATE `book_sell` SET `status`='notpending' WHERE `book_isbn`='$book_isbn' and s_no=$s_no;";
		mysqli_query($conn,$query4);
		echo $book_isbn;
		echo $s_no;
		header("location:../book_sale_request.php");
	}

?>