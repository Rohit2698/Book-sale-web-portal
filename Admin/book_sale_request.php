<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
</head>
<body>
	<div id="mySidenav" class="sidenav" style="width:250px;float: right">
	<span style="color: white;font-size: 40px">BOOKISTAN</span><br><br>
 <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
  <a href="admin_homepage.php">Home</a>
  <a href="total_book.php">Total Books</a>
  <a href="book_genre.php">Books By Genre</a>
  <a href="book_sale_request.php">Book Sale Request</a>
  <a href="add_remove.php">Add or Remove a book</a>
  <a href="donate.php">Donation of Book</a>
  <a href="requested_book.php">Requested Book</a>
</div>
<span style="text-align: center;margin-left: 600px;font-size: 30px"><u>Book sell Request</u></span>
	
	<form action="databasephp/book_sale.php" method="post">
			<table width="1000" style="box-shadow: 1px 1px 10px;margin-left: 300px;margin-top: 50px;border-style: solid;border-width: 1px;font-size: 18px" cellspacing="10">
				<th width="60">S.no</th>
				<th width="200">Email</th>
				<th width="197"> ISBN no.</th>
				<th width="600">Book Name </th>
				<th width="138">Cost</th>
				<?php 
		include "connect.php";
		$conn=make_connection();
		$query="select * from book_sell where status='pending';";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)){
			while($data=mysqli_fetch_array($result)){
		
	?>
				<tr>
					<input type="text" name="isbn_no" value="<?php echo $data['book_isbn'];?>" hidden>
					<input type="text" name="s_no" value="<?php echo $data['s_no'];?>" hidden>
					<td style="text-align: center;"><?php echo $data['s_no'];?></td>
					<td style="text-align: center;"><?php echo $data['user_email'];?></td>
					<td style="text-align: center;"><?php echo $data['book_isbn'];?></td>
					<td style="text-align: center;"><?php echo $data['book_name'];?></td>
					<td style="text-align: center;">&#x20b9;<?php echo $data['user_cost'];?></td>
					<td style="text-align: center;"><input type="submit" name="" value="Book accepted" style="border-radius: 5px;box-shadow: 1px 1px 10px;height: 30px;font-size: 15px"></td>
				</tr>
			</table>
		</form>
	<?php }} ?>
</body>
</html>