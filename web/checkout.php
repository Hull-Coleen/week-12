<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Check Out</title>
</head>
<body>
<a href="/cart.php">Cart</a>
<form method="POST" action="confirmation.php">
<p>
<label for="name">Name</label>
			<input type="text" placeholder="Name" id="name" name="name">
			<br />

			<label for="email">Email</label>
			<input type="text" placeholder="Email Address" id="email" name="email">
			<br />
			<label for="email">Adress</label>
			<input type="text" placeholder="Address" id="address" name="address">
			<br />
			</p>
			<input type="submit" value="Submit Answers">


		</form>



</body>
</html>
