<?php
include "connect.php";

$conn=make_connection();
$book_title=$_POST['book_title'];
$book_isbn=$_POST['book_isbn'];
$book_publisher=$_POST['book_publisher'];
$book_edition=$_POST['book_edition'];
$query="INSERT INTO `book_request`(`s_no`, `book_name`, `isbn_no`, `publisher`, `edition`,`status`) VALUES (NULL,'$book_title',$book_isbn,'$book_publisher','$book_edition','pending');";

mysqli_query($conn,$query);

$msg="done";
header("Location:../requestbook.php?msg=$msg");
?>