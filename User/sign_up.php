<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login_signup.css">
	<script type="text/javascript" src="js/login.js"></script>
</head>
<body>
<?php include"header.php"?>
		<div class="container-login">
			<div class="wrap-login">
				<form class="login-form" onsubmit="signin_validation()" method="post" action="databasephp/sign_in.php">
					<span class="login-form-title" style="padding-bottom:100px;">
						Welcome
					</span>
					<div class="wrap-input">
						<input class="input-field" id="email" type="email" name="email" placeholder="*Email(abx@domain.com)">
					</div>

					<div class="wrap-input">
						<input class="input-field" id="pass" type="password" name="password" placeholder="*Password(must be between 5-10 character)">
					</div>

					<div class="wrap-input">
						<input class="input-field" id="conf_pass" type="password" name="con-password" placeholder="*Confirm Password">
					</div>

					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<div class="login-form-bgbtn"></div>
							<input type="submit" value="Sign In" id="login" name="login" class="login-form-btn">
						</div>
					</div>

					<div style="padding-top: 60px;text-align: center;">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="login.php">
							Login
						</a>
					</div>
				</form>
			</div>
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