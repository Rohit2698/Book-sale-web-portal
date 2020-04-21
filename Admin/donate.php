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

<span style="font-size: 30px"><center><u>NGO's COLLECTION</u></center></span>
  <div class="literature">
    <form action="donation_book.php" method="post">
  <span><center>Hum Padenge NGO</center></span>
  <input type="text" name="ngo_name" value="Hum Padenge NGO" style="visibility: hidden"><br>
    <input type="submit" name="ngo_name" value="Click" style="margin-top: 130px;margin-left: 70px">
    </form>
</div>
<div class="Crime">
  <span><center>Education is right NGO</center></span>
  <input type="text" name="ngo_name" value="Education is right NGO" style="visibility: hidden"><br>
  <input type="submit" name="ngo_name" value="Click" style="margin-top: 130px;margin-left: 70px">
</div>
<div class="romance">
  <span><center>Girl education NGO</center></span>
  <input type="text" name="ngo_name" value="Girl education NGO" style="visibility: hidden"><br>
  <input type="submit" name="ngo_name" value="Click" style="margin-top: 130px;margin-left: 70px">
</div>
<div class="classic">
  <span><center>Padega India NGO</center></span>
  <input type="text" name="ngo_name" value="Padega India NGO" style="visibility: hidden"><br>
  <input type="submit" name="ngo_name" value="Click" style="margin-top: 130px;margin-left: 70px">
</div><br>
<div class="literature">
  <span><center>Namashkar NGO</center></span>
  <input type="text" name="ngo_name" value="Namashkar NGO" style="visibility: hidden"><br>
  <input type="submit" name="ngo_name" value="Click" style="margin-top: 130px;margin-left: 70px">
</div>
<div class="Crime">
  <span><center>Padega Tabhi Badega India NGO</center></span>
  <input type="text" name="ngo_name" value="Padega Tabhi Badega India NGO" style="visibility: hidden"><br>
  <input type="submit" name="ngo_name" value="Click" style="margin-top: 112px;margin-left: 70px">
</div>
<div class="romance">
  <span><center>Jyot NGO</center></span>
  <input type="text" name="ngo_name" value="Jyot NGO" style="visibility: hidden"><br>
  <input type="submit" name="ngo_name" value="Click" style="margin-top: 130px;margin-left: 70px">
</div>
<div class="classic">
  <span><center>Safalta NGO</center></span>
  <input type="text" name="ngo_name" value="Safalta NGO" style="visibility: hidden"><br>
  <input type="submit" name="ngo_name" value="Click" style="margin-top: 130px;margin-left: 70px">
</div>

<!--<span style="margin-left: 400px;font-size: 50px">ALL DONATIONS</span>
<table width="737" style="margin-left: 300px;margin-top: 50px;border-style: solid;border-width: 1px">
    <th width="60">S.no</th>
    <th width="300">Book Name</th>
    <th width="102">Author</th>
    <th width="88">Genre</th>
    <th width="200">Email Id</th>
    <th width="200">Donator Name</th>
    <th width="200">NGO name</th>
    <tr>
      <td style="text-align: center;">1.</td>
      <td style="text-align: center;">Fuck</td>
      <td style="text-align: center;">Rohit</td>
      <td style="text-align: center;">Awesome</td>
      <td style="text-align: center;">50</td>
    </tr>
  </table>-->
</body>
</html>