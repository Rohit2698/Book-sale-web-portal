<?php
error_reporting(0);
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
	
	<div id="main">
		<font style="font-size: 30px;font-family: Jokerman">REQUEST A BOOK</font>
		<div style="background-color: #e0e0d1;margin-top: 50px;font-size: 20px;text-align: center">
			We understand the frustration of not finding your desired book, now try our request a book & our team will do the work for you. We will provide you the best quality used books with irresistible rates.
		</div>
		<form action="databasephp/requestbook.php" method="post">
			<div style="background-color: #d6d6c2;margin-top: 80px">
				<table>
					<tr><td>Book Title<sup>*</sup></td></tr>
					<tr><td colspan="8" width="50px"><input type="text" name="book_title" placeholder="Book Title" size="50" style="height: 20px;width: 600px"></td></tr>
					<tr><td>ISBN</td></tr>
					<tr><td colspan="8" width="50px"><input type="text" name="book_isbn" placeholder="Enter ISBN no" size="50" style="height: 20px;width: 600px" required></td></tr>
					<tr><td>PUBLISHER</td></tr>
					<tr><td colspan="8" width="50px"><input type="text" name="book_publisher" placeholder="Enter Publisher Name" size="50" style="height: 20px;width: 600px"></td></tr>
					<tr><td>EDITION</td></tr>
					<tr><td colspan="8" width="50px"><input type="text" name="book_edition" placeholder="Enter Edition" size="50" style="height: 20px;width: 600px"></td></tr>
				</table>
				<input type="submit" value="REQUEST"style="margin-left: 550px" class="button">
			</div>

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
  echo '<script language="javascript">';
    echo 'alert("Thank you for the request :-)")';
    echo '</script>';
}
  ?>