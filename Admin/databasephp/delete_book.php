<?php
include"connect.php";
$s_no=$_POST['s_no'];
$conn=make_connection();
$query="update book_sell set status='done';";
mysqli_query($conn,$query);
header("location:../add_remove.php");
?>