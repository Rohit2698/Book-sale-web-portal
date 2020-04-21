<?php

$rat=$_POST['star'];
$isbn=$_POST['isbn'];
include "connect.php";

$conn=make_connection();
$query="select * from book_rating where book_isbn='$isbn';";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_array($result);
$no_of_people_rated=$data['no_of_people_rated']+1;
$total_rating=$data['total_rating']+$rat;
echo $no_of_people_rated;
echo $total_rating;
echo $isbn;
$query1="UPDATE `book_rating` SET `no_of_people_rated`='$no_of_people_rated',`total_rating`='$total_rating' WHERE `book_isbn`='$isbn';";
mysqli_query($conn,$query1);

header("location:book_buy.php?msg=done");
?>