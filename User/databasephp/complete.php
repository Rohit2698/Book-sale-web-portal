<?php
session_start();
include "connect.php";
$conn=make_connection();
$user_id=$_SESSION['user_id'];
$cart=array();
foreach ($_SESSION['cart'] as $value) {
	$cart[]=$value;
}
$query1="select * from user_details where user_id=$user_id";
$query2="select * from user_addres where s_no=$user_id";
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);
$data1=mysqli_fetch_array($result1);
$data2=mysqli_fetch_array($result2);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<script type="text/javascript">
		function add(){
			var x = document.getElementById("change_add");
  			if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}
	</script>
</head>
<body>
<div class="form1" style="box-shadow: 1px 1px 10px black;height: 600px">
	<div style=";font-size: 20px;width: 20%;padding: 5px;margin-top: 10px;">
	<table cellspacing="10" style="margin-top: 50px;box-shadow: 1px 1px 10px black">
		<tr>
			<td>Name:</td>
			<td><?php echo $data1['user_name'];?></td>
		</tr>
		<tr>
			<td>Mobile no:</td>
			<td><?php echo $data1['user_mobile'];?></td>
		</tr>
	</table></div>
	<div style="box-shadow: 1px 1px 10px black;width:30%;margin-left: 300px;margin-top: -85px;font-size: 20px">
		<span>Current Address:</span>
		<div>
	
			<table cellspacing="20">
				<tr>
					<td>Address Type:</td>
					<td><?php echo $data2['address_type'];?></td>
				</tr>
				<tr>
					<td>Address Line 1:-</td>
					<td><?php echo $data2['user_address_line1'];?></td>
				</tr>
				<tr>
					<td>Address Line 2:-</td>
					<td><?php echo $data2['user_address_line2'];?></td>
				</tr>
				<tr>
					<td>Landmark:-</td>
					<td><?php echo $data2['user_landmark'];?></td>
				</tr>
				<tr>
					<td>PIN:-</td>
					<td><?php echo $data2['user_pin'];?></td>
				</tr>
				<tr>
					<td>City:-</td>
					<td><?php echo $data2['user_city'];?></td>
				</tr>
				<tr>
					<td>State-</td>
					<td><?php echo $data2['user_state'];?></td>
				</tr>
				<tr><td><button onclick="add()" style="box-shadow: 1px 1px 10px black;border-radius: 5px;">Want to change the shipping address</button></td></tr>	
			</table>


		
		</div>
	</div>

	<div id="change_add" style="box-shadow: 1px 1px 10px black;width: 40%;margin-left: 800px;margin-top: -435px" hidden>
		<form action="databasephp/addressbook.php" method="post">

			
				<table style="border-spacing: 20px">
				<tr>
					<td  align="right" style="width: 100px">Address Type</td>
					<td  width="50px"><select style="height: 30px;width: 200px" name="address_type">
						<option value="Home">HOME</option>
						<option value="Company">Company</option>
						<option value="Friend">Friend</option>
						<option value="College/University">College/University</option>
					</select></td>
				</tr>	
				<tr>
					<td  width="50px" align="right" style="width: 100px">Address Line 1</td>
					<td  width="50px"><input type="text" name="add_line_1" placeholder="<?php if($data2['user_address_line1']!='') echo $data2['user_address_line1'];else echo 'Enter House number';?>" style="height: 20px;width: 200px"></td>
				</tr>	
				<tr>
					<td  width="50px" align="right" style="width: 100px">Address Line 2</td>
					<td  width="50px"><input type="text" name="add_line_2" placeholder="<?php if($data2['user_address_line2']!='') echo $data2['user_address_line2']; else echo 'Enter place,village etc.';?>" size="50" style="height: 20px;width: 200px"></td>
				</tr>	
				<tr>
					<td  width="50px" align="right" style="width: 100px">LandMark</td>
					<td  width="50px"><input type="text" name="landmark" placeholder="<?php if($data2['user_landmark']!='') echo $data2['user_landmark'];else echo 'Enter any landmark present'?>" size="50" style="height: 20px;width: 200px"></td>
				</tr>	
				<tr>
					<td  width="50px" align="right" style="width: 100px">Mobile</td>
					<td  width="50px"><input type="text" name="mobile" placeholder="Enter Mobile No" size="50" style="height: 20px;width: 200px"></td>
				</tr>	
				<tr>
					<td  width="50px" align="right" style="width: 100px">Pin</td>
					<td  width="50px"><input type="text" name="pin" placeholder="<?php if($data2['user_pin']!='') echo $data2['user_pin'];else echo 'Enter Pin'?>" size="50" style="height: 20px;width: 200px"></td>
				</tr>	
				<tr>
					<td  width="50px" align="right" style="width: 100px">City</td>
					<td  width="50px"><input type="text" name="city" placeholder="<?php if($data2['user_city']!='') echo $data2['user_city'];else echo 'Enter City'?>" size="50" style="height: 20px;width: 200px"></td>
				</tr>	
				<tr>
					<td  width="50px" align="right" style="width: 100px">State</td>
					<td  width="50px"><input type="text" name="state" placeholder="<?php if($data2['user_state']!='') echo $data2['user_state'];else echo 'Enter State'?>" size="50" style="height: 20px;width: 200px"></td>
				</tr>
			</table>		
			<button style="margin-left: 150px;width: 90px;box-shadow: 1px 1px 10px black;height: 30px"><span>SAVE </span></button>
			<input type="reset" name="" value="clear" style="width: 90px;margin-left: 40px;box-shadow: 1px 1px 10px black;height: 30px">
			

		</form><br><br>
	</div><br>
	<form action="../checkout.php" method="post">
	<center><button  style="box-shadow: 1px 1px 10px black;width: 50%;font-size: 30px">Continue</button></center>
</form>
</div>
</body>
</html>