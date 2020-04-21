<?php
session_start();
include "databasephp/connect.php";
error_reporting(0);
$conn=make_connection(); 
foreach ($_SESSION['wishlist'] as $value) {
	$wishlist[]=$value;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<script type="text/javascript" src="js/login.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sinin.css">
	<link rel="stylesheet" type="text/css" href="css/wishlist.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: #ebebe0">
	<?php include "head.php";?>
<div id="parent_toggle">
	<div class="toggle">
		<table id="table">
					
			<tr><td><a href="account.php">>Login & Security</a></td></tr>
			<tr><td><a href="address.php">>Address Book</a></td></tr>
			<tr><td><a href="order.php">>Orders</a></td></tr>
			<tr><td><a href="wishlist.php">>Wishlist</td></tr>
			<tr><td><a href="sellhistory.php">>Sell History</td></tr>
			<tr><td><a href="requestbook.php">>Requested Books</a></td></tr>
		</table>
	</div>
	<div class="parent">
	<div style="background-color: white;height: 100px;width:100%; ">
		<span style="font-size: 40px;"><center>WISHLIST</center></span>
	</div>
	<table border="1px" style="width:100%;box-shadow: 1px 1px 10px black;border-width: 1px;border-style: solid;" cellspacing="2px">
		<th style="width: 60%;box-shadow: 1px 1px 10px black"></th>
		<tr style="box-shadow: 1px 1px 50px black">
			<td style="box-shadow: 1px 1px 10px black">
				<?php 
								foreach($wishlist as $val){
								$query="Select * from book_details where s_no=$val";
								$result=mysqli_query($conn,$query);
								while($data=mysqli_fetch_array($result)){ 
						?>
						
				<table style="box-shadow: 1px 1px 10px black;margin:10px; width: 90%">
						
						<th width="200px"><img src="<?php echo $data['book_image'];?>" style="height: 150px; width:150px"></th>
						<th style="box-shadow: 1px 1px 10px black">
							<td>
								<input type="text" name="s_no" value="<?php echo $val;?>" hidden>
								<span style="font-size: 20px">Isbn No:-</span><?php echo $data['isbn_no'];?><br><br>
								<span style="font-size: 20px">Name:-</span><?php echo $data['book_name'];?><br><br>
								<span style="font-size: 20px">Author:-</span><?php echo $data['book_author'];?><br><br>
								<span style="font-size: 20px">Cost:-</span><?php echo $data['cost'];?><br><br>
							</td>
							
						</th>
						<th></th>
				</table>
			<?php } }?>				
			</td>
</tr>
</table>
</body></html>