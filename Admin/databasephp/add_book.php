<?php
	include "connect.php";
	$conn=make_connection();
	$book_isbn_no=$_POST['book_isbn_no'];
	$book_name=$_POST['book_name'];
	$book_description=$_POST['book_description'];
	$book_genre=$_POST['book_genre'];
	$book_author=$_POST['book_author'];
	$book_cost=$_POST['book_cost'];
	$book_quantity=$_POST['book_quantity'];
	$book_image=$_POST['book_image'];
	$query1="Select * from book_details;";
	$result=mysqli_query($conn,$query1);

	if(mysqli_num_rows($result)==0){
		$query2="INSERT INTO `book_details` (`s_no`, `isbn_no`, `book_name`, `book_description`, `book_genre`, `book_author`, `book_image`,`cost`, `quantity`) VALUES (1, '$book_isbn_no', '$book_name', '$book_description', '$book_genre', '$book_author','$book_image','$book_cost', '$book_quantity');";
		mysqli_query($conn,$query2);
		$query4="INSERT INTO `book_rating` (`book_isbn`, `no_of_people_rated`, `total_rating`) VALUES ('$book_isbn_no', 0,0);";
		mysqli_query($conn,$query4);
		$msg = "done";
		header("Location:../add_remove.php?msg=$msg");
	}
	else{
		$query3="SELECT MAX(s_no) from book_details;";
		$count=mysqli_query($conn,$query3);
		$result=mysqli_fetch_array($count);
		$id=$result['MAX(s_no)']+1;
		$id=$result+1;
		$query2="INSERT INTO `book_details` (`s_no`, `isbn_no`, `book_name`, `book_description`, `book_genre`, `book_author`,`book_image`, `cost`, `quantity`) VALUES ($id, '$book_isbn_no', '$book_name', '$book_description', '$book_genre', '$book_author','$book_image', '$book_cost', '$book_quantity');";
		$res=mysqli_query($conn,$query2);
		$query4="INSERT INTO `book_rating` (`book_isbn`, `no_of_people_rated`, `total_rating`) VALUES ('$book_isbn_no', 0,0);";
		mysqli_query($conn,$query4);
		if(!res){
			echo "Not inserted";
		}
		else{
		$msg = "done";
		header("Location:../add_remove.php?msg=$msg");
		}
	}
?>