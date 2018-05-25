<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Check Out</title>
<link rel="stylesheet" type="text/css" href="Week05style.css">
</head>
<body>
<a href="/cart05.php">Back to Cart</a><br>

<div id="row">
<form method="POST" action="Week05confirm.php">
</p>
  <h1>If you have an account, Please sign in</h1><br>
  <label for="username">User Name</label>
  <input type="text" placeholder="Name" id="username" name="username"><br>
  <label for="passwprd">Password</label>
  <input type="text" placeholder="Password" id="password" name="password"><br><br>
  <input type="submit" value="Complete Checkout">
  </p>
</form>
</div>
<div id="row2">
  <h1>If you are a Guest, Please Enter your Check out Information</h1>
<form method="POST" action="Week05confirm.php">
<p>
  <label for="name">Name</label>
  <input type="text" placeholder="Name" id="name" name="name">
			
  <br /><br />

  <label for="email">Email</label>
  <input type="text" placeholder="Email Address" id="email" name="email">
  <br /><br />
  
  <label for="email">Address</label>
  <input type="text" placeholder="Address" id="address" name="address">
  <br /><br />
  <input type="submit" value="Complete Checkout">
</p>
</form>
</div>



</body>
</html>