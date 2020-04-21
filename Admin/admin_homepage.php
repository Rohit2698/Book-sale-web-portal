<?php
 include "connect.php";
 $conn=make_connection();

$sum_literature=0;
$sum_crime=0;
$sum_romance=0;
$sum_classic=0;
$sum_science=0;
$sum_fantasy=0;
$sum_children=0;
$sum_young=0;
$query1="SELECT distinct(isbn_no) from book_details where book_genre='Literature' ";
$result=mysqli_query($conn,$query1);
while($data=mysqli_fetch_array($result)){
	$isbn=$data['isbn_no'];
	$query2="SELECT SUM(user_order.quantity),book_details.cost FROM `user_order` INNER JOIN `book_details` ON user_order.book_isbn=book_details.isbn_no where user_order.book_isbn='$isbn' and book_details.book_genre='Literature' ";
	$count=mysqli_query($conn,$query2);
	$result1=mysqli_fetch_array($count);
	$sum_literature+=$result1['cost'];
	
}
$query1="SELECT distinct(isbn_no) from book_details where book_genre='Crime' ";
$result=mysqli_query($conn,$query1);
while($data=mysqli_fetch_array($result)){
	$isbn=$data['isbn_no'];
	$query2="SELECT SUM(user_order.quantity),book_details.cost FROM `user_order` INNER JOIN `book_details` ON user_order.book_isbn=book_details.isbn_no where user_order.book_isbn='$isbn' and book_details.book_genre='Crime' ";
	$count=mysqli_query($conn,$query2);
	$result1=mysqli_fetch_array($count);
	$sum_crime+=$result1['cost'];
	
}
$query1="SELECT distinct(isbn_no) from book_details where book_genre='Romance' ";
$result=mysqli_query($conn,$query1);
while($data=mysqli_fetch_array($result)){
	$isbn=$data['isbn_no'];
	$query2="SELECT SUM(user_order.quantity),book_details.cost FROM `user_order` INNER JOIN `book_details` ON user_order.book_isbn=book_details.isbn_no where user_order.book_isbn='$isbn' and book_details.book_genre='Romance' ";
	$count=mysqli_query($conn,$query2);
	$result1=mysqli_fetch_array($count);
	$sum_romance+=$result1['cost'];
	
}
$query1="SELECT distinct(isbn_no) from book_details where book_genre='Classic' ";
$result=mysqli_query($conn,$query1);
while($data=mysqli_fetch_array($result)){
	$isbn=$data['isbn_no'];
	$query2="SELECT SUM(user_order.quantity),book_details.cost FROM `user_order` INNER JOIN `book_details` ON user_order.book_isbn=book_details.isbn_no where user_order.book_isbn='$isbn' and book_details.book_genre='Classic' ";
	$count=mysqli_query($conn,$query2);
	$result1=mysqli_fetch_array($count);
	$sum_classic+=$result1['cost'];
	
}
$query1="SELECT distinct(isbn_no) from book_details where book_genre='Science Fiction' ";
$result=mysqli_query($conn,$query1);
while($data=mysqli_fetch_array($result)){
	$isbn=$data['isbn_no'];
	$query2="SELECT SUM(user_order.quantity),book_details.cost FROM `user_order` INNER JOIN `book_details` ON user_order.book_isbn=book_details.isbn_no where user_order.book_isbn='$isbn' and book_details.book_genre='Science Fiction' ";
	$count=mysqli_query($conn,$query2);
	$result1=mysqli_fetch_array($count);
	$sum_science+=$result1['cost'];
	
}
$query1="SELECT distinct(isbn_no) from book_details where book_genre='Fantasy' ";
$result=mysqli_query($conn,$query1);
while($data=mysqli_fetch_array($result)){
	$isbn=$data['isbn_no'];
	$query2="SELECT SUM(user_order.quantity),book_details.cost FROM `user_order` INNER JOIN `book_details` ON user_order.book_isbn=book_details.isbn_no where user_order.book_isbn='$isbn' and book_details.book_genre='Fantasy' ";
	$count=mysqli_query($conn,$query2);
	$result1=mysqli_fetch_array($count);
	$sum_fantasy+=$result1['cost'];
	
}
$query1="SELECT distinct(isbn_no) from book_details where book_genre='Children' ";
$result=mysqli_query($conn,$query1);
while($data=mysqli_fetch_array($result)){
	$isbn=$data['isbn_no'];
	$query2="SELECT SUM(user_order.quantity) ,book_details.cost FROM `user_order` INNER JOIN `book_details` ON user_order.book_isbn=book_details.isbn_no where user_order.book_isbn='$isbn' and book_details.book_genre='Children' ";
	$count=mysqli_query($conn,$query2);
	$result1=mysqli_fetch_array($count);
	$sum_children+=$result1['cost'];
	
}
$query1="SELECT distinct(isbn_no) from book_details where book_genre='Young Adult' ";
$result=mysqli_query($conn,$query1);
while($data=mysqli_fetch_array($result)){
	$isbn=$data['isbn_no'];
	$query2="SELECT SUM(user_order.quantity) ,book_details.cost FROM `user_order` INNER JOIN `book_details` ON user_order.book_isbn=book_details.isbn_no where user_order.book_isbn='$isbn' and book_details.book_genre='Young Adult' ";
	$count=mysqli_query($conn,$query2);
	$result1=mysqli_fetch_array($count);
	$sum_young+=$result1['cost'];
	
}
$dataPoints = array( 
	array("y" => $sum_literature,"label" => "Literature" ),
	array("y" => $sum_crime,"label" => "Crime" ),
	array("y" => $sum_romance,"label" => "Romance" ),
	array("y" => $sum_classic,"label" => "Classic" ),
	array("y" => $sum_science,"label" => "Science Fiction" ),
	array("y" => $sum_fantasy,"label" => "Fantasy" ),
	array("y" => $sum_children,"label" => "Children" ),
	array("y" => $sum_young,"label" => "Young Adult" )
);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/admin_homepage.css">
	<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
	<link rel="stylesheet" type="text/css" href="css/card.css">
	<script>
			window.onload = function() {
			 
			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				title:{
					text: "Book sale by genre"
				},
				axisY: {
					title: "Total sale(in Rs)",
					prefix: "Rs",
					suffix:  ""
				},
				data: [{
					type: "bar",
					yValueFormatString: "Rs #,##0",
					indexLabel: "{y}",
					indexLabelPlacement: "inside",
					indexLabelFontWeight: "bolder",
					indexLabelFontColor: "white",
					dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart.render();
			var val=localStorage.getItem("clickCount");
			document.getElementById('visit1').innerHTML=val; 
			}


</script>
</head>
<body >
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
<div style="box-shadow: 1px 1px 10px;width: 80%;margin-left: 260px"> 
			<span style="margin-left: 65px;font-size: 30px;text-shadow: 1px 1px 10px black"><u>DASHBOARD</u></span>
			<div class="daily_visits" style="box-shadow: 1px 1px 10px;margin-left: 70px">
				<span><center><b>DAILY VISITS</b></center>
					<center><img src="image/eye.png" width="110px" ></center>
					<center><span id="visit1"style="font-size: 25px;font-weight: bold"></span></center>	
				</span>
				
			</div>
			<div class="sales" style="box-shadow: 1px 1px 10px;margin-left: 330px">
				<span><b><center>Total SALES(in Rs)</center></b></span>
				<center><img src="image/sales.png" width="110px" height="100px" ></center><br>
				<center><span style="font-size: 25px;font-weight: bold">34</span></center>	
			</div>
			<div class="comments" style="box-shadow: 1px 1px 10px;margin-left: 600px">
				<span><b><center>Book buyed</center></b></span>
				<center><img src="image/book.png" width="110px" height="100px" ></center><br>
				<center><span style="font-size: 25px;font-weight: bold">34</span></center>	
			</div>
			<div class="no_of_visit" style="box-shadow: 1px 1px 10px; margin-left: 850px">
				<span><center><b>Book Sales</b></center></span>
				<center><img src="image/book_sale.jpg" width="110px" height="120px" ></center>
				<center><span style="font-size: 25px;font-weight: bold">34</span></center>	
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="line_chart" style="box-shadow: 1px 1px 10px;margin-left: 70px;width: 900px">
				<div id="chartContainer" style="height: 300px; width: 100%;"></div>
				<script src="js/canvasjs.min.js"></script>
			</div>
			<div class="ngo" style="box-shadow: 1px 1px 10px;margin-left: 70px">
				<span><center>NGO'S RELATED</center></span>
			</div>
			<div class="top_genre" style="box-shadow: 1px 1px 10px;margin-left: 540px">
				<span><center>TOP GENRES</center></span>
			</div>
</div>
</body>
</html>	