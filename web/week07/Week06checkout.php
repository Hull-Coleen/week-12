<?php
session_start();
include_once('dbConnect.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Check Out</title>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
<a href="cart06.php">Back to Cart</a><br>

<div id="row">
<h1>If you have an account,<br> Please sign in</h1><br>
<form method="POST" action="Week06confirm.php">
<p>
  
  <label for="username">User Name</label>
  <input type="text" placeholder="Name" id="username" name="username"><br><br>
  <label for="password">Password</label>
  <input type="text" placeholder="Password" id="password" name="password"><br><br>
  <br><br><br><br><input type="submit" value="Complete Checkout">
  </p>
</form>
</div>
<div id="row2">
  <h1>To create an account, Please Enter your Check out Information</h1>
<form method="POST" action="Week05confirm.php">
<p>
  <label for="name">Name</label>
  <input type="text" placeholder="Name" id="name" name="name">
  <br /><br />
  <label for="username">User Name</label>
  <input type="text" placeholder="user Name" id="username" name="username">
  <br /><br />
  <label for="password">Passwork</label>
  <input type="text" placeholder="Password" id="password" name="password">
			
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