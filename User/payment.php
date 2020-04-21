<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		td{
			font-size: 20px;
		}
		td,input[type="text"]{
			height: 30px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<div style="margin-left: 400px;margin-top: 100px;border-width: 1px;border-style: solid;width:600px;height: 500px">
		<table>
			<tr>
				<td colspan="2">Payment Details</td>
			</tr>
			<tr>
				<td>Card Number</td>
			</tr>
			<tr>
				<td><input type="text" name="" id="card" width="500px"></td>
			</tr>
			<tr>
				<td>Expiry Date</td>
				<td>CV Code</td>
			</tr>
			<tr>
				<td><input type="text" name="" id="month" placeholder="MM">&nbsp&nbsp<input type="text" name="" id="month" placeholder="YY"></td>
				<td>
					<input type="text" name="" id="month" placeholder="MM">
				</td>
			</tr>
			<tr>
				<td>Final Payment: Rs 4500</td>
			</tr>
			<tr>
				<td><button >PAY</button></td>
			</tr>
		</table>
	</div>
</body>
</html>