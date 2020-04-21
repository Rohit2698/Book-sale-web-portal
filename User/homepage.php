<?php
session_start();
error_reporting(0);
include "databasephp/connect.php";
$conn=make_connection();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<link rel="stylesheet" type="text/css" href="css/dropdown.css">
	<link rel="icon" href="image/logo.jpg" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	

	<script>
		function clickCounter(){
			if(typeof(Storage)!="undefined"){
				if(localStorage.clickCount){
					localStorage.clickCount=Number(localStorage.clickCount)+1;
				}else{
					localStorage.clickCount=1;
				}
		}
		else{
		}
		}
	</script>
</head>
<body onload="clickCounter()">
	<!-- Header page-->

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
</ul>

<!-- Slideshow container -->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image\12.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image\13.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image\14.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<!-- end of slideshow -->
<!-- script of slideshow-->
<script>
					var slideIndex = 0;
					showSlides();

					function showSlides() {
					  var i;
					  var slides = document.getElementsByClassName("mySlides");
					  var dots = document.getElementsByClassName("dot");
					  for (i = 0; i < slides.length; i++) {
					    slides[i].style.display = "none";  
					  }
					  slideIndex++;
					  if (slideIndex > slides.length) {slideIndex = 1}    
					  for (i = 0; i < dots.length; i++) {
					    dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block";  
					  dots[slideIndex-1].className += " active";
					  setTimeout(showSlides, 5000); // Change image every 2 seconds
					}
		</script>
<!-- End of script -->
<!-- BOOKS DETAIL-->
	<div class="start">
		<font style="font-size: 20px;margin-left: 40px">DEAL OF THE DAY</font>
<div class="main">
 <!--cards -->
 <?php  
				$query="Select * from book_details order by rand() limit 4;";
				$result=mysqli_query($conn,$query);
				while($data=mysqli_fetch_array($result))
				{
			?>			

			<div class="card">
					<form action="book_buy.php" method="post">
						<input type="text" name="s_no" value="<?php echo $data['s_no']; ?>" hidden>
							<div class="image">
			   					<img src="<?php echo $data['book_image']; ?>">
							</div>
							<div class="title">
			 					<span style="font-size: 15px;font-family: Verdana;color: black">
			 						<button class="book_name"><?php echo $data['book_name']; ?></button>
			 					</span>
							</div>
					
				<div class="des">
	 				<p style="font-size: 13px;font-style: italic;"><?php echo substr($data['book_description'],0,200);?>.......</p>
					<button>Read More...</button>
				</div>
				</form>	
			</div><?php ; } ?>
</div></div>

	<div class="start">
		<font style="font-size: 20px;margin-left: 40px">Reader's Choice</font>
<div class="main">
 <!--cards -->
<?php  
				$query="Select * from book_details order by rand() limit 4;";
				$result=mysqli_query($conn,$query);
				while($data=mysqli_fetch_array($result))
				{
			?>			

			<div class="card">
					<form action="book_buy.php" method="post">
						<input type="text" name="s_no" value="<?php echo $data['s_no']; ?>" hidden>
							<div class="image">
			   					<img src="<?php echo $data['book_image']; ?>">
							</div>
							<div class="title">
			 					<span style="font-size: 15px;font-family: Verdana;color: black">
			 						<button class="book_name"><?php echo $data['book_name']; ?></button>
			 					</span>
							</div>
					
				<div class="des">
	 				<p style="font-size: 13px;font-style: italic;"><?php echo substr($data['book_description'],0,200);?>.......</p>
					<button>Read More...</button>
				</div>
				</form>	
			</div><?php ; } ?>
</div></div>

<div style="margin-left: 150px;width: 900px;height: 350px;border-width: 10px;border-color: white">
		<font style="font-size: 20px;">In Spotlight</font>
		<?php 
			$query1="Select * from book_details order by rand() limit 1;";
			$result=mysqli_query($conn,$query);
			$data=mysqli_fetch_array($result)
		?>
		<div style="margin-left: -8px">
			<form>
				<button style="border-width: 0px;background-color: white;float: left"><img src="<?php echo $data['book_image']; ?>" height="200px" width="200px"></button>
				
			</form>
		</div>
		<div style="margin-left: 300px;margin-top: 50px">
				<span style="font-family: Castellar;font-size: 30px"><?php echo $data['book_name']; ?></span>
				<p style="font-style: italic;"><?php echo substr($data['book_description'],0,500);?>......Readmore</p>
				</div>
		
</div>
	<div class="start">
		<font style="font-size: 20px;margin-left: 40px">India's Top Reads</font>
<div class="main">
 <!--cards -->
 <?php  
				$query="Select * from book_details order by rand() limit 4;";
				$result=mysqli_query($conn,$query);
				while($data=mysqli_fetch_array($result))
				{
			?>			

			<div class="card">
					<form action="book_buy.php" method="post">
						<input type="text" name="s_no" value="<?php echo $data['s_no']; ?>" hidden>
							<div class="image">
			   					<img src="<?php echo $data['book_image']; ?>">
							</div>
							<div class="title">
			 					<span style="font-size: 15px;font-family: Verdana;color: black">
			 						<button class="book_name"><?php echo $data['book_name']; ?></button>
			 					</span>
							</div>
					
				<div class="des">
	 				<p style="font-size: 13px;font-style: italic;"><?php echo substr($data['book_description'],0,200);?>.......</p>
					<button>Read More...</button>
				</div>
				</form>	
			</div><?php ; } ?>
</div></div>

<div class="start">
		<font style="font-size: 20px;margin-left: 40px">Hot Picks</font>
<div class="main">
 <!--cards -->
<?php  
				$query="Select * from book_details order by rand() limit 4;";
				$result=mysqli_query($conn,$query);
				while($data=mysqli_fetch_array($result))
				{
			?>			

			<div class="card">
					<form action="book_buy.php" method="post">
						<input type="text" name="s_no" value="<?php echo $data['s_no']; ?>" hidden>
							<div class="image">
			   					<img src="<?php echo $data['book_image']; ?>">
							</div>
							<div class="title">
			 					<span style="font-size: 15px;font-family: Verdana;color: black">
			 						<button class="book_name"><?php echo $data['book_name']; ?></button>
			 					</span>
							</div>
					
				<div class="des">
	 				<p style="font-size: 13px;font-style: italic;"><?php echo substr($data['book_description'],0,200);?>.......</p>
					<button>Read More...</button>
				</div>
				</form>	
			</div><?php ; } ?>
</div>
</div>
<footer style="background-color: #111109 ;color: white">
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
	echo"<script>alert('Transaction Done.. Continue Shopping');</script>";
}

?>