<?php
session_start();
error_reporting(0);
include "databasephp/connect.php";
$conn=make_connection();
$id=$_SESSION['user_id'];
$query="Select user_name from user_details where user_id=$id;";
$query2="Select * from user_addres where s_no=$id;";
$result2=mysqli_query($conn,$query2);
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_array($result);
$data2=mysqli_fetch_array($result2);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" type="text/css" href="css\sinin.css">
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
			<tr><td><a href="">>Wishlist</td></tr>
			<tr><td><a href="sellhistory.php">>Sell History</td></tr>
			<tr><td><a href="requestbook.php">>Requested Books</a></td></tr>
			
		</table>
	</div>
	
	<div id="main">
		<div style="background-color: grey;height: 30px;">Add a new address</div>
		<hr>
		<form action="databasephp/addressbook.php" method="post">

			
				<table style="border-spacing: 20px">
				<tr>
					<td colspan="8" align="right" style="width: 100px">Name</td>
					<td colspan="8" width="50px"><input type="text" name="" placeholder="<?php if($data['user_name']!='') echo $data['user_name'];?>" size="50" style="height: 20px;width: 600px" <?php echo "disabled";?>></td>
				</tr>	
				<tr>
					<td colspan="8" align="right" style="width: 100px">Address Type</td>
					<td colspan="8" width="50px"><select style="height: 30px;width: 600px" name="address_type">
						<option value="Home">HOME</option>
						<option value="Company">Company</option>
						<option value="Friend">Friend</option>
						<option value="College/University">College/University</option>
					</select></td>
				</tr>	
				<tr>
					<td colspan="8" width="50px" align="right" style="width: 100px">Address Line 1</td>
					<td colspan="8" width="50px"><input type="text" name="add_line_1" placeholder="<?php if($data2['user_address_line1']!='') echo $data2['user_address_line1'];else echo 'Enter House number';?>"size="50" style="height: 20px;width: 600px"></td>
				</tr>	
				<tr>
					<td colspan="8" width="50px" align="right" style="width: 100px">Address Line 2</td>
					<td colspan="8" width="50px"><input type="text" name="add_line_2" placeholder="<?php if($data2['user_address_line2']!='') echo $data2['user_address_line2']; else echo 'Enter place,village etc.';?>" size="50" style="height: 20px;width: 600px"></td>
				</tr>	
				<tr>
					<td colspan="8" width="50px" align="right" style="width: 100px">LandMark</td>
					<td colspan="8" width="50px"><input type="text" name="landmark" placeholder="<?php if($data2['user_landmark']!='') echo $data2['user_landmark'];else echo 'Enter any landmark present'?>" size="50" style="height: 20px;width: 600px"></td>
				</tr>	
				<tr>
					<td colspan="8" width="50px" align="right" style="width: 100px">Mobile</td>
					<td colspan="8" width="50px"><input type="text" name="mobile" placeholder="Enter Mobile No" size="50" style="height: 20px;width: 600px"></td>
				</tr>	
				<tr>
					<td colspan="8" width="50px" align="right" style="width: 100px">Pin</td>
					<td colspan="8" width="50px"><input type="text" name="pin" placeholder="<?php if($data2['user_pin']!='') echo $data2['user_pin'];else echo 'Enter Pin'?>" size="50" style="height: 20px;width: 600px"></td>
				</tr>	
				<tr>
					<td colspan="8" width="50px" align="right" style="width: 100px">City</td>
					<td colspan="8" width="50px"><input type="text" name="city" placeholder="<?php if($data2['user_city']!='') echo $data2['user_city'];else echo 'Enter City'?>" size="50" style="height: 20px;width: 600px"></td>
				</tr>	
				<tr>
					<td colspan="8" width="50px" align="right" style="width: 100px">State</td>
					<td colspan="8" width="50px"><input type="text" name="state" placeholder="<?php if($data2['user_state']!='') echo $data2['user_state'];else echo 'Enter State'?>" size="50" style="height: 20px;width: 600px"></td>
				</tr>
			</table>		
			<button class="button" style="margin-left: 300px"><span>SAVE </span></button>
			<button id="cancel"><span>CANCEL </span></button>

		</form>
</div>
<footer style="background-color: #111109 ;color: white;margin-top: 200px">
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
<?php
	if($_GET['msg']=="done"){
		echo "<script>"; 
		echo "alert('Address Saved');"; 
		echo "</script>";
	}
?>