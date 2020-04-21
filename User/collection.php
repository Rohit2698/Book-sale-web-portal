<?php
	session_start();
	error_reporting(0);
	$genre=$_GET['data'];
	include "databasephp/connect.php";
	$conn=make_connection();
	if(isset($_GET['page'])){
		  $page = $_GET['page'];
	}
	else{
		  $page=1;
	}
		$num_per_page=20;
		$start_from = ($page-1)*20;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<link rel="stylesheet" type="text/css" href="css/dropdown.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	

</head>
<body>
<?php 

	if($_SESSION['user_id'])
		include "head.php";
	else
		include "header.php";
	
	?>
	<ul id="menu">
  <ul>
    <center>
		<li>
			<div class="dropdown">
                <button class="dropbtn" style="color: #adad85">Categories</button>
                    <div class="dropdown-content">
                        <a href="collection.php?data=literature">Literature</a>
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
		<li><a href="#">Sell</a></li>
		<li><a href="#">Contact</a></li>
	</center>
	</ul>
</ul>
<center><span style="font-size: 30px;font-family: Viner Hand ITC"><u>Best of <?php echo $genre;?></u></span></center><br><br>
<div style="width:90%;box-shadow: 1px 1px 10px black;border-width: 1px;height: 800px;margin-left: 90px">
	
	<?php 
				$query1="Select * from book_details where book_genre = '$genre' limit $start_from,$num_per_page;";
				$result1=mysqli_query($conn,$query1);
				$i=1;
				while($data1=mysqli_fetch_array($result1))
				{
			?>	
	<div class="img_recommend">
		<form action="book_buy.php" method="post">
					<input type="text" name="s_no" value="<?php echo $data1['s_no']; ?>" hidden>
					<button class="img_but"><img src="<?php echo $data1['book_image'];?>" width="100%" height="200px">
					</button>
					<center><span style="font-size: 10px"><?php echo $data1['book_name'];?></span></center><br>
					<span style="font-size: 13px">Rs. <?php echo $data1['cost']?></span><span style="float: right;font-size: 13px;color: red">Rs.<s><?php echo $data1['cost']+50;?></s></span>
		</form>
	</div>
				<?php ++$i; } ?>
	
</div><br><br>
	<center><?php 
$prquery = "Select * from book_details where book_genre = '$genre';";
$prresult=mysqli_query($conn,$prquery);
$totalrecord = mysqli_num_rows($prresult);

$totalpages = ceil($totalrecord/$num_per_page);
for($i=1;$i<=$totalpages;$i++)
{
  echo "<span style='font-size:20px;color:black;box-shadow:1px 1px 10px black'><a href='total_book.php?page=".$i."' class='btn btn-success'>$i</a></span>";
}
?></center>	
</div>
</body>
</html>