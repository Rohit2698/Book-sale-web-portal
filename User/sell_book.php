<?php
session_start();
error_reporting(0);
if(!$_SESSION['user_id']){
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<link rel="stylesheet" type="text/css" href="css/dropdown.css">
</head>
<body>
<?php include "head.php";?>
<ul id="menu">
  <ul>
    <center>
		<li>
			<div class="dropdown">
                <button class="dropbtn" style="color: #adad85">Categories</button>
                    <div class="dropdown-content">
                        <a href="collection.php?data=Literature">Literature</a>
                        <a href="collection.php?data=crime">Crime</a>
                        <a href="collection.php?data=romance">Romance</a>
                        <a href="collection.php?data=classic">Classic</a>
                        <a href="collection.php?data=science fiction">Science Fiction</a>
                        <a href="collection.php?data=fantasy">Fantasy</a>
                        <a href="collection.php?data=children">Children</a>
                        <a href="collection.php?data=young adult">Young Adult</a>
                    </div>
          </div>
		</li>
		<li><a href="#">Best Sellers</a></li>
		<li><a href="#">Featured Books</a></li>
		<li><a href="#">Newly Added</a></li>
		<li><a href="sell_book.php">Sell</a></li>
		<li><a href="#">Contact</a></li>
	</center>
	</ul>
</ul><br><br>

<div style="float:left;background-color: #4d4dff;width: 300px;height: 550px;">
</div>
<span style="font-size: 30px;margin-left: 250px;text-shadow: 1px 1px 10px black">Enter Book Details</span><br>
<br><br><div id="change_add" style="box-shadow: 1px 1px 10px black;width: 40%;margin-left: 400px;">
		<form action="databasephp/sell_book_data.php" method="post">

			
				<table style="border-spacing: 20px">
				
				<tr>
					<td  width="50px" align="right" style="width: 200px">Book ISBN No:-</td>
					<td  width="50px"><input type="text" name="isbn_no" placeholder="Enter book isbn no" style="height: 25px;width: 250px;box-shadow: 1px 1px 10px black"></td>
				</tr>	
				<tr>
					<td  width="50px" align="right" style="width: 100px">Book Name:-</td>
					<td  width="50px"><input type="text" name="book_name" placeholder="Enter Book name" size="50" style="height: 25px;width: 250px;box-shadow: 1px 1px 10px black"></td>
				</tr>	
				<tr>
					<td  width="50px" align="right" style="width: 100px">Cost You Expected</td>
					<td  width="50px"><input type="text" name="cost" placeholder="Expected Cost" size="50" style="height: 25px;width: 250px;box-shadow: 1px 1px 10px black"></td>
				</tr>	
				
			</table>
			<input type="submit" value="SAVE" name="" style="margin-left: 150px;width: 90px;box-shadow: 1px 1px 10px black;height: 30px">		
			<input type="reset" name="" value="clear" style="width: 90px;margin-left: 40px;box-shadow: 1px 1px 10px black;height: 30px">
			

		</form><br><br>
	</div><br>
	<footer style="background-color: #111109 ;color: white;margin-top: 270px">
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

</body>
</html>
<?php
if($_GET['msg']=='done'){
	echo "<script>alert('We will contact you as soon as possible');</script>";
}
?>