<?php
session_start();
error_reporting(0);
include "databasephp/connect.php";
$conn=make_connection();
$id=$_SESSION['user_id'];
$query="select * from user_details where user_id=$id";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<script type="text/javascript" src="js/login.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sinin.css">
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
	
	<div id="main">
		PERSONAL INFO
		<hr>
		<form action="databasephp/personal_info.php" method="post">
			<table>
				<tr><td colspan="8" width="50px">Name</td>
					<td colspan="8" width="50px">Date of birth</td>
				</tr>
				<tr>
					<td colspan="8" width="80px"><input type="text" name="name" size="50" style="width: 400px;height: 20px" placeholder="<?php if($data['user_name']!='') echo $data['user_name'];?>"<?php if($data['user_dob']!='') echo "disabled";?>></td>
					<td colspan="8"><input type="date" name="date" style="width: 400px;height: 20px" placeholder="<?php if($data['user_dob']!='') echo $data['user_dob'];?>"<?php if($data['user_dob']!='') echo "disabled";?>></td>
				</tr>
				<tr><td colspan="8" width="50px">Gender</td>
					<td colspan="8" width="50px">Email</td>
				</tr>
				<tr>
					<td colspan="8" width="80px"><select name="gender" style="width: 400px;height: 20px">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Transgender">Transgender</option>
					</select></td>
					<td colspan="8"><input  type="Email" name="date" style="width: 400px;height: 20px;font-size: 20px" placeholder="<?php echo $data['user_email_id']; ?> " disabled></td>
				</tr>
			</table><br>
			<button class="button" style="float: right"><span>SAVE </span></button>

		</form>
	</div>
	<div id="pass">
			Manage Password<hr>
			<form   onsubmit="password_validation()" action="databasephp/manage_pass.php" method="post">
			<table>
				<tr><td colspan="8" width="50px">Current Password</td>
				</tr>
				<tr>
					<td colspan="8" width="80px"><input type="Password" name="curr_pass" size="50" placeholder="Enter your Current password" style="width: 400px;height: 20px"></td>
				</tr>
				<tr><td colspan="8" width="50px">Password</td>
				</tr>
					<td colspan="8"><input type="Password" name="pass" id="password" placeholder="Enter new password" style="width: 400px;height: 20px"></td>
				</tr>
				<tr><td colspan="8" width="50px">Confirm Password</td>
				</tr>
					<td colspan="8"><input type="Password" name="conf_pass" id="conf_pass" placeholder="Confirm new password" style="width: 400px;height: 20px"></td>
				</tr>
			</table><br>
			<input type="submit" name="" class="button" style="float: right" value="SAVE">

		</form>
		
	</div>
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
		echo '<script>';
		echo "alert('data saved successfully')";
		echo '</script>';
	}
?>
<?php
	if($_GET['msg']=="pass_change"){
		echo '<script>';
		echo "alert('Password changed successfully')";
		echo '</script>';
	}
?>
<?php
	if($_GET['msg']=="not"){
		echo '<script>';
		echo "alert('Current Password is wrong!')";
		echo '</script>';
	}
?>