<?php
session_start();
$s_no=$_POST['s_no'];
$pos=array_search($s_no, $_SESSION['cart']);
unset($_SESSION['cart'][$pos]);

header("location:../cart.php");
?>