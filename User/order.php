<?php
	session_start();
	include "databasephp/connect.php";
	$conn=make_connection();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" type="text/css" href="css\sinin.css">
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
		<span style="font-size: 40px;"><center>Order</center></span>
	</div>
	<table border="1px" style="width:100%;box-shadow: 1px 1px 10px black;border-width: 1px;border-style: solid;" cellspacing="2px">
		<th style="width: 60%;box-shadow: 1px 1px 10px black"></th>
		<tr style="box-shadow: 1px 1px 50px black">
			<td style="box-shadow: 1px 1px 10px black">
				<?php 
				$user_id=$_SESSION['user_id'];
								$query="SELECT * from book_details INNER JOIN user_details ON book_details.s_no=user_details.user_id; ";
								$result=mysqli_query($conn,$query);
								if(mysqli_num_rows($result)){
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
						
				</table>
			<?php }}else{echo "<span style='font-size:30px;color:red;font-style:italic'>No Order</span>";} ?>				
			</td>
</tr>
</table></div>
<footer style="background-color: #111109 ;color: white;margin-top: 500px">
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

</body>
</html>