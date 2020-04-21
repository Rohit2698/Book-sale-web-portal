<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
		<link rel="stylesheet" type="text/css" href="css/book_genre.css">
		<style>
      input[type='submit']{
        border-radius: 5px;
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
<span style="font-size: 30px"><center><u>COLLECTION BY GENRE</u></center></span>
	<form action="book_list_by_genre.php" method="post">
		<input type="text" name="genre" value="Literature" hidden>
		<div class="literature" style="box-shadow: 1px 1px 10px">
		<span><center>Literature</center></span>
		<center><img src="image/literature.jpg" width="110px" height="120px" ></center>
	    <input type="submit"  value="Click" style="margin-top: 30px;margin-left: 70px">
    </form>
</div>
<div class="Crime" style="box-shadow: 1px 1px 10px">
	<form action="book_list_by_genre.php" method="post">
		<span><center>Crime</center></span>
		<center><img src="image/crime.png" width="110px" height="120px" ></center>
		<input type="text" name="genre" value="Crime"  hidden>
	    <input type="submit"  value="Click" style="margin-top: 30px;margin-left: 70px">
	</form>    
</div>
<div class="romance" style="box-shadow: 1px 1px 10px">
	<form action="book_list_by_genre.php" method="post">
		<span><center>Romance</center></span>
		<center><img src="image/romance.jpg" width="110px" height="120px" ></center>
		<input type="text" name="genre" value="Romance"  hidden>
	    <input type="submit"  value="Click" style="margin-top: 30px;margin-left: 70px">
	</form>
</div>
<div class="classic" style="box-shadow: 1px 1px 10px">
	<form action="book_list_by_genre.php" method="post">	
		<span><center>Classic</center></span>
		<center><img src="image/classic.jpg" width="110px" height="120px" ></center>
		<input type="text" name="genre" value="Classic"  hidden>
	    <input type="submit"  value="Click" style="margin-top: 30px;margin-left: 70px">
	</form>
</div><br>
<div class="literature" style="box-shadow: 1px 1px 10px">
	<form action="book_list_by_genre.php" method="post">
		<span><center>Science Fiction</center></span>
		<center><img src="image/science.jpg" width="110px" height="120px" ></center>
		<input type="text" name="genre" value="Science Fiction" hidden>
	    <input type="submit"  value="Click" style="margin-top: 30px;margin-left: 70px">
	</form>    
</div>
<div class="Crime" style="box-shadow: 1px 1px 10px"> 
	<form action="book_list_by_genre.php" method="post">
		<span><center>Fantasy</center></span>
		<center><img src="image/fantasy.jpg" width="110px" height="120px" ></center>
		<input type="text" name="genre" value="Fantasy"  hidden>
	    <input type="submit"  value="Click" style="margin-top: 30px;margin-left: 70px">
	</form>
</div>
<div class="romance" style="box-shadow: 1px 1px 10px">
	<form action="book_list_by_genre.php" method="post">
		<span><center>Children</center></span>
		<center><img src="image/children.jpg" width="110px" height="120px" ></center>
		<input type="text" name="genre" value="Children"  hidden>
	    <input type="submit"  value="Click" style="margin-top: 30px;margin-left: 70px">
	</form>
</div>
<div class="classic" style="box-shadow: 1px 1px 10px">
	<form action="book_list_by_genre.php" method="post">
		<span><center>Young Adult</center></span>
		<center><img src="image/young.jpg" width="110px" height="120px" ></center>
		<input type="text" name="genre" value="Young Adult"  hidden>
	    <input type="submit" value="Click" style="margin-top: 30px;margin-left: 70px">
	</form>
</div>

</body>
</html>