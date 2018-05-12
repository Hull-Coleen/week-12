<?php
session_start();
if(!isset($_SESSION["cart"])){
    //If it doesn't, create an empty array.
    $_SESSION["cart"] = array();
}

$_SESSION["name"];
$_SESSION["address"];
$_SESSION["email"];
$_SESSION["item"];
$_SESSION["num"];

?>

<!DOCTYPE HTML>   
<html>
<head>
<!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style>
</style>
<link rel="stylesheet" type="text/css" href="Prove03style.css">
</head>
<body>  

<a href="/cart.php">Cart</a>

<br><br>
<h1>Welcome to our Website</h1><br>
 <form method="POST" action="info.php">
 <div  id="row">
   <div><p>
     <img src="RedF.jpg" alt="World"> 
     <input type="radio" name="item" value="Red Small">RS<br /></P> 
   </div>
   <div><p>
   <img src="RedF.jpg" alt="World">
     <input type="radio" name="item" value="Red Medium">RM<br /></P> 
   </div>
   <div><p>
   <img src="RedF.jpg" alt="World">
     <input type="radio" name="item" value="Red Large">RL<br /></P> 
   </div>
 </div>
 <div  id="row">
   <div><p>
   <img src="BlueF.jpg" alt="World">
  <input type="radio" name="item" value="Blue Small">BS<br /></P> 
  </div>
   <div><p>
   <img src="BlueF.jpg" alt="World"> 
  <input type="radio" name="item" value="Blue Medium">BM<br /></P> 
  
  </div>
  <div><p>
  <img src="BlueF.jpg" alt="World">
  <input type="radio" name="item" value="Blue Large">BL<br /></P> 
  </div>
  </div>
  <div  id="row2">
  <div><p>
  <img src="YellowF.jpg" alt="World">
  <input type="radio" name="item" value="Yellow Small">YS<br /></P> 
  </div>
  <div><p>
  <img src="YellowF.jpg" alt="World">
  <input type="radio" name="item" value="Yellow Medium">YM<br /></P> 
  </div>
   <div><p>
   <img src="YellowF.jpg" alt="World"> 
  <input type="radio" name="item" value="Yellow Large">YL<br /></P> 
  </div>
  </div>
  <div  id="row2">
  
  <div><p>
  <img src="PurpleF.jpg" alt="World">
  <input type="radio" name="item" value="Purple Small">PS<br /></P> 
  </div>
  <div><p>
  <img src="PurpleF.jpg" alt="World">
  <input type="radio" name="item" value="Purple Medium">PM<br /></P> 
  </div>
  <div><p>
  <img src="PurpleF.jpg" alt="World">
  <input type="radio" name="item" value="Purple Large">PL<br /></P> 
  </div>
  </div>
	<input type="submit" name="submit" value="Submit">  		
			
</form>

  
  <br><br>

</body>
</html>



