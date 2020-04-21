<?php
session_start();
include "databasephp/connect.php";
$conn=make_connection();
if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else{
		$page=1;
	}
	$num_per_page=10;
	$start_from=($page-1)*10;
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
			<tr><td><a href="wishlist.php">>Wishlist</td></tr>
			<tr><td><a href="sellhistory.php">>Sell History</td></tr>
			<tr><td><a href="requestbook.php">>Requested Books</a></td></tr>
		</table>
	</div>
	<br><br><br><br>
	<div id="main">
		SELL HISTORY
		
		<hr>
		<?php  
		$s_no=$_SESSION['user_id'];
		$i=1;
				$query="Select * from book_sell where s_no='$s_no' limit $start_from,$num_per_page;";
				$result=mysqli_query($conn,$query);
				if(mysqli_num_rows($result)){
				while($data=mysqli_fetch_array($result))
				{
			?>
		
		<table width="900" style="box-shadow: 1px 1px 10px;margin-top: 50px;border-style: solid;border-width: 1px;font-size: 18px" cellspacing="10">
		
		<tr style="border-width: 1px;border-style: solid;box-shadow: 1px 1px 10px">
		<th width="60">S.no</th>
		<th width="102">ISBN NO</th>
		<th width="197">Book Name</th>
		<th width="102">Cost</th>
		<th width="138">Status</th>
		</tr>
		<tr style="border-width: 1px;border-style: solid;">
			<td style="text-align: center;"><?php echo $i; ?></td>
			<td style="text-align: center;"><?php echo $data['book_isbn'];?></td>
			<td style="text-align: center;"><?php echo $data['book_name'];?></td>
			<td style="text-align: center;"><?php echo $data['cost'];?></td>
			<td style="text-align: center;"><?php echo $data['status'];?></td>
			
		</tr>
	<?php ++$i; }}else{echo "<span style='font-size:30px;color:red;font-style:italic'>No Order</span>";}?>
	</table><br><br>
		<center><?php 
$prquery = "SELECT * FROM book_details;";
$prresult=mysqli_query($conn,$prquery);
$totalrecord = mysqli_num_rows($prresult);

$totalpages = ceil($totalrecord/$num_per_page);
for($i=1;$i<=$totalpages;$i++)
{
  echo "<a href='sellhistory.php?page=".$i."' class='btn btn-success'>$i</a>";
}
?></center>
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