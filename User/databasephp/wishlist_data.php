<?php
session_start();
$s_no=$_POST['s_no'];
$_SESSION['book']=$s_no;
$_SESSION['wishlist'][]=$s_no;
header("location:../book_buy.php");
?>