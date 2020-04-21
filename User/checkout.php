<?php
session_start();
error_reporting(0);
$cart=array();

$user_id=$_SESSION['user_id'];
foreach ($_SESSION['cart'] as $value) {
	$cart[]=$value;
}

include "databasephp/connect.php";
$conn=make_connection();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
</head>
<body>
<div class="parent">
	<div style="background-color: blue;height: 100px;width:100%; ">
	</div>
	<table border="1px" style="width:100%;box-shadow: 1px 1px 10px black;border-width: 1px;border-style: solid;" cellspacing="2px">
		<th style="width: 60%;box-shadow: 1px 1px 10px black">ITEMS BOUGHT</th>
		<th style="width: 40%;">Payment</th>
		<tr style="box-shadow: 1px 1px 50px black">
			<td style="box-shadow: 1px 1px 10px black">
				<?php 
								foreach($cart as $val){
								$query="Select * from book_details where s_no=$val";
								$result=mysqli_query($conn,$query);
								while($data=mysqli_fetch_array($result)){ 
						?>
				<table style="box-shadow: 1px 1px 10px black;margin:10px; width: 90%">
						
						<th width="200px"><img src="<?php echo $data['book_image'];?>" style="height: 150px; width:150px"></th>
						<th style="box-shadow: 1px 1px 10px black">
							<td><span style="font-size: 20px">Isbn No:-</span><?php echo $data['isbn_no'];?><br><br>
								<span style="font-size: 20px">Name:-</span><?php echo $data['book_name'];?><br><br>
								<span style="font-size: 20px">Author:-</span><?php echo $data['book_author'];?><br><br>
								<span style="font-size: 20px">Cost:-</span><?php echo $data['cost'];?>
							</td>
							
						</th>
						<th></th>
				</table>
			<?php } }?>				
			</td>
			<form action="databasephp/done.php" method="post">
			<td style="background-color: white;box-shadow: 1px 1px 10px black">
				<table border="0px" style="width:100%" class="payment" align="center">
					<tr>
						<td><table><th><img src="image/paytm.jpg" style="float: left;width: 200px;"></th><th><img src="image/paypal.jpg" style="float: right;width: 200px;margin-left: -78px;"></th></table></td>

					</tr>
					<tr>
						<td><span style="font-family: Rockwell;font-size: 20px;text-shadow: 1px 1px 20px black"><center>ATM card details</center></span></td>
					</tr>
					<tr>
						<td><center><input type="text" name="" placeholder="Enter card no" required></center></td>
					</tr>
					<tr>
						<td><center><input type="text" name="" placeholder="Enter cvv" required></center></td>
					</tr>
					<tr>
						<td><input style="margin-left:96px " id="cvv" type="text" placeholder="enter date" required>|<input id="cvv" type="text" placeholder="enter month" required></td>
					</tr>
					<tr>
						<td><button>Complete Checkout</button></td>
					</tr>
				</table>	
			</td></form>
		</tr>
			<tr>
					<th><div>
				<span style="font-size: 20px;font-family: MS Serif">TOTAL AMOUNT:-</span><span style="font-size: 25px;">&#x20b9;<?php echo $_SESSION['cost']; ?></span>
			</div></th>
				</tr>
		
	</table>
	
</div>
</body>
</html>