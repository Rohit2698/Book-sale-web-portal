<?php 
error_reporting(0);
session_start();
if(!$_SESSION['user_id']){
	header("location:login.php");
}
$s_no=$_POST['s_no'];
if($s_no)
	$_SESSION['cart'][]=$s_no;
		 
foreach($_SESSION['cart'] as $value){
    $books[]=$value;
}
include "databasephp/connect.php";
$conn=make_connection();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" href="css\font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>
<?php

	include "head.php";	
?>
<div>
	<center><img  src="image/cart.jpg" style="margin-top: 100px;" <?php if(count($_SESSION['cart'])!=0){echo "hidden";} ?>></center>
	<table width="737px" cellspacing="20" style="margin-left: 200px;margin-top: 50px;border-style: solid;border-width: 1px;" <?php if(count($_SESSION['cart'])==0){echo "hidden";} ?>>
		<tr>
		<th width="60">S.no</th>
		<th width="102">ISBN NO</th>
		<th width="600">Book Name</th>
		<th width="350">Author</th>
		<th width="138">Amount</th>
		<th width="138">Remove</th>
		<?php
			$i=0;
			foreach ($books as $var) {
				$query="select * from book_details where s_no=$var";
				$result=mysqli_query($conn,$query);
					while($data=mysqli_fetch_array($result)){
		?>
		<tr>
			<td style="padding: 1%"><?php echo ++$i ;?></td>
			<td style="padding: 1%"><?php echo $data['isbn_no'] ;?></td>
			<td style="padding: 1%"><?php echo $data['book_name'] ;?></td>
			<td style="padding: 1%"><?php echo $data['book_author'] ;?></td>
			<td style="padding: 1%"><?php echo $data['cost'] ;?></td>
			<td>
				<form action="databasephp/remove_from_cart.php" method="post">
					<input type="text" name="s_no" value="<?php echo $data['s_no'];?>" hidden>
					<button><i style="font-size:24px;color: red" class="fa">&#xf00d;</i></button>
				</form>
			</td>
		</tr>
	<?php }}?>
	</table>
</div>
<form action="homepage.php" method="post">
	<button style="width: 200px;height: 40px;background-color: #0059b3;font-size: 15px;font-family: Verdana;margin-left: 30px">Continue Shooping</button>
</form>
<div style="margin-left:1000px;margin-top: -90px">
	
	<table style="font-size: 20px">
		<?php
			$sum=0;
			foreach ($books as $var) {
				$query="select * from book_details where s_no=$var";
				$result=mysqli_query($conn,$query);
					while($data=mysqli_fetch_array($result)){
						$sum+=$data['cost'];
					}
				}
				$_SESSION['cost']=$sum;	
		?>
		<tr>
			<td>Sub Total</td>
			<td style="color: red">&nbsp&nbsp&nbsp&nbsp&#x20b9; <?php  echo $sum;?></td>
		</tr>
		<tr>
			<td>Shipping Cost</td>
			<td style="color: red">&nbsp&nbsp&nbsp&nbsp&#x20b9; 50</td>
		</tr>
		<tr>
			<td>Total</td>
			<td style="color: red">&nbsp&nbsp&nbsp&nbsp&#x20b9;<?php echo $sum+50; ?></td>
		</tr>
	</table><br>
	<form action="databasephp/complete.php" method="post">
		<button  style="background-color: #ffcc99;width: 100px;height: 30px;margin-left: 80px" <?php if(count($_SESSION['cart'])<1){echo "disabled";} ?>>Checkout</button>
	</form>
</div><br><br><br><br><br>

<!--footer-->
<footer style="background-color: #111109 ;color: white">
	<table width="874" height="318" border="0">
  <tr>
    <th width="390" height="37" scope="col">ABOUT US</th>
    <th width="17" scope="col">&nbsp;</th>
    <th width="297" scope="col">INFORMATION</th>
    
    <th width="152" scope="col">Contact Us</th>
  </tr>
  <tr>
    <th height="146" scope="row">Ever wanted to buy a book but could not because it was too expensive? worry not! because <strong>Bookistan</strong> is here! <strong>Bookistan</strong>, these days in news,is being called as the Robinhood of the world of books. <strong>Bookistan</strong> team is committed to bring to you all kinds of best books at the minimal prices ever seen anywhere. Yes, we are literally giving you away a steal.</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</footer>
<!-- end of footer-->
</body>
</html>