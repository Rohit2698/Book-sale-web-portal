<!DOCTYPE html>
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

	$genre=$_POST['genre'];
 ?>
<html>
<head>
	<title>Bookistan</title>
		<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
		<link rel="stylesheet" type="text/css" href="css/card.css">
<style>
	a{
		color:black;
		font-size: 20px;
		padding: 5px;
	}
</style>
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
<span style="text-align: center;margin-left: 600px;font-size: 30px">Welcome To <?php echo $genre;?> Collection</span>
	<table width="1000" style="box-shadow: 1px 1px 10px;margin-left: 300px;margin-top: 50px;border-style: solid;border-width: 1px;font-size: 18px" cellspacing="10">
		<th width="60" style="box-shadow: 1px 1px 10px">S.no</th>
		<th width="160" style="box-shadow: 1px 1px 10px">Book ISBN No</th>
		<th width="197" style="box-shadow: 1px 1px 10px">Book Name</th>
		<th width="102" style="box-shadow: 1px 1px 10px">Author</th>
		<th width="88" style="box-shadow: 1px 1px 10px">Genre</th>
		<th width="138" style="box-shadow: 1px 1px 10px">Amount</th>
		<th width="138" style="box-shadow: 1px 1px 10px">Quantity</th>
		<?php  
				$query="Select * from book_details where `book_genre`='$genre' order by s_no ASC;";
				$result=mysqli_query($conn,$query);
				while($data=mysqli_fetch_array($result)){
			?>
		<tr>
			
			<td style="text-align: center;"><?php echo $data['s_no'];?></td>
			<td style="text-align: center;"><?php echo $data['isbn_no'];?></td>
			<td style="text-align: center;"><?php echo $data['book_name'];?></td>
			<td style="text-align: center;"><?php echo $data['book_author'];?></td>
			<td style="text-align: center;"><?php echo $data['book_genre'];?></td>
			<td style="text-align: center;"><?php echo $data['cost'];?></td>
			<td style="text-align: center;"><?php echo $data['quantity']; }?></td>
		</tr>
	</table><br><br>
<center><?php 
$prquery = "SELECT * FROM book_details where `book_genre`='$genre';";
$prresult=mysqli_query($conn,$query);
$totalrecord = mysqli_num_rows($prresult);

$totalpages = ceil($totalrecord/$num_per_page);
for($i=1;$i<=$totalpages;$i++)
{
  echo "<a href='total_book.php?page=".$i."' class='btn btn-success'>$i</a>";
}
?></center>
</div>
</body>
</html>