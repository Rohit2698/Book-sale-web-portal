<?php
error_reporting(0);
?>
<?php 
	include "connect.php";
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
	<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
	<style>
		.add,td{
			padding: 5px;
			font-size: 20px;
		}
		.add,input[type='text']{
			border-radius: 5px;
			height: 30px;
			font-size: 15px;
		}
	</style>
	<script type="text/javascript">
		function req_book(){
			var x = document.getElementById("requested_book");
  			if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}
			function buy_book(){
			var x = document.getElementById("buyed_book");
  			if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}
	</script>
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

<span style="margin-left: 400px;font-size: 30px">Add Book<span style="margin-left: 300px">Remove Book</span></span>
<div id="add" style="box-shadow: 1px 1px 10px;margin-left: 300px;border-style: solid;border-width: 1px;width: 400px;text-shadow: 1px 1px 10px green">
	<form action="databasephp/add_book.php" method="post">
		<table>
			<tr>
				<td>Book Name:</td>
				<td><input type="text" name="book_name"></td>
			</tr>
			<tr>
				<td>Book ISBN No:</td>
				<td><input type="text" name="book_isbn_no"></td>
			</tr>
			<tr>
				<td>Book Author Name:</td>
				<td><input type="text" name="book_author"></td>
			</tr>
			<tr>
				<td>Book Description:</td>
				<td><textarea name="book_description"></textarea></td>
			</tr>
			<tr>
				<td>Book Image:</td>
				<td><input type="text" name="book_image"></td>
			</tr>
			<tr>
				<td>Book Genre:</td>
					<td><select style="border-radius: 5px;width: 150px" name="book_genre">
						<option value="Literature">Literature</option>
						<option value="Crime">Crime</option>
						<option value="Romance">Romance</option>
						<option value="Classic">Classic</option>
						<option value="Science Fiction">Science Fiction</option>
						<option value="Fanatsy">Fanatsy</option>
						<option value="Children">Children</option>
						<option value="Young Adult">Young Adult</option>	
					</select>
			</td>

			</tr>
			
			<tr>
				<td>Book Cost:</td>
				<td><input type="text" name="book_cost"></td>
			</tr>
			<tr>
				<td>Book Quantity</td>
				<td><input type="text" name="book_quantity"></td>
			</tr>
		</table> <br>
		<input type="submit" name="" value="Add a Book" style="width: 300px;height: 30px;margin-left: 50px;border-radius: 5px;box-shadow: 1px 1px 10px black;"><br><br>
	</form></div>
	<div id="remove" style="box-shadow: 1px 1px 10px;margin-top: -320px;margin-left:800px;border-style: solid; border-width: 1px;width:400px">
	<form action="databasephp/remove_book.php" method="post">
		<table>
			<tr>
				<td>Book ISBN No:</td>
				<td><input type="text" name="book_isbn_no"></td>
			</tr>
		</table> <br>
		<input style="width: 300px;height: 30px;margin-left: 50px;border-radius: 5px;box-shadow: 1px 1px 10px black;" type="submit" name="" style="width: 300px;height: 30px;margin-left: 50px"><br><br>
	</form>

</div><?php for($i=0;$i<15;$i++){echo '<br>';}?>
<div style="margin-left: 300px"><button onclick="req_book()" style="height: 40px;border-radius: 5px;box-shadow: 1px 1px 10px black">Requested Book</button>|<button onclick="buy_book()" style="margin-left: 300px;height: 40px;border-radius: 5px;box-shadow: 1px 1px 10px black">Buyed books</button></div><br><br>
<div id="requested_book" hidden>
<span style="text-align: center;margin-left: 600px;font-size: 30px">Requested Book</span>
	<table width="737" style="margin-left: 300px;margin-top: 50px;border-style: solid;border-width: 1px">
		<th width="60">S.no</th>
		<th width="197">Book Name</th>
		<th width="200">Book ISBN No</th>
		<th width="138">Publisher</th>
		<th width="138">Edition</th>
		<tr>
			<?php  
				$query="Select * from `book_request` where `status`='approved';";
				$result=mysqli_query($conn,$query);
				while($data=mysqli_fetch_array($result)){
			?><form action="databasephp/book_added.php" method="post">
			<td style="text-align: center;"><?php echo $data['s_no'];?><input type="text" hidden name="s_no" value="<?php echo $data['s_no'];?>"></td>
			<td style="text-align: center;"><?php echo $data['book_name'];?></td>
			<td style="text-align: center;"><?php echo $data['isbn_no'];?></td>
			<td style="text-align: center;"><?php echo $data['publisher'];?></td>
			<td style="text-align: center;"> <?php echo $data['edition'];?></td>
			<td style="text-align: center;"><input type="submit" name="" value="DONE"></td></form> 
		</tr><?php }
		?>
		<center><?php 
				$prquery = "Select * from `book_request` where `status`='approved';";
				$prresult=mysqli_query($conn,$query);
				$totalrecord = mysqli_num_rows($prresult);

				$totalpages = ceil($totalrecord/$num_per_page);
				for($i=1;$i<=$totalpages;$i++)
				{
				  echo "<a href='requested_book.php?page=".$i."' class='btn btn-success'>$i</a>";
				}
		?></center>
	</table></div>
	<div id="buyed_book" hidden>
		<span style="text-align: center;margin-left: 600px;font-size: 30px">Buyed Books</span>
	<table  width="737" style="box-shadow: 1px 1px 10px black;margin-left: 300px;margin-top: 50px;border-style: solid;border-width: 1px">
		<th width="60">S.no</th>
		<th width="197">Book Name</th>
		<th width="200">Book ISBN No</th>
		<form action="databasephp/delete_book.php" method="post">
		<tr>
			<?php  
				$query="Select * from `book_sell` where `status`='notpending';";
				$result=mysqli_query($conn,$query);
				while($data=mysqli_fetch_array($result)){
			?><form action="databasephp/book_added.php" method="post">
			<td style="text-align: center;"><?php echo $data['s_no'];?><input type="text" hidden name="s_no" value="<?php echo $data['s_no'];?>"></td>
			<td style="text-align: center;"><?php echo $data['book_name'];?></td>
			<td style="text-align: center;"><?php echo $data['book_isbn'];?></td>
			<td style="text-align: center;"><input type="submit" name="" value="DONE"></td></form> 
		</tr><?php }
		?></form>
	</table><br><center><?php 
				$prquery = "Select * from `book_sell` where `status`='notpending';";
				$prresult=mysqli_query($conn,$query);
				$totalrecord = mysqli_num_rows($prresult);

				$totalpages = ceil($totalrecord/$num_per_page);
				for($i=1;$i<=$totalpages;$i++)
				{
				  echo "<a href='requested_book.php?page=".$i."' class='btn btn-success'>$i</a>";
				}
		?></center>
	</div><br>
	
		
		
	
</center>

</body>
</html>
<?php 
 if($_GET['msg']=="done"){
  echo '<script language="javascript">';
    echo 'alert("Data Entered")';
    echo '</script>';
}
  ?>
  <?php 
 if($_GET['msg']=="not_found"){
  echo '<script language="javascript">';
    echo 'alert("ISBN Number not found check the ISBN number!")';
    echo '</script>';
}
  ?>
 <?php 
 if($_GET['msg']=="book_removed"){
  echo '<script language="javascript">';
    echo 'alert("Book Removed")';
    echo '</script>';
}
  ?> 