<?php
session_start();
$_SESSION["cart"];
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
</head>
<body>  

<?php
// define variables 
$num = 0;

$flowers = array("RS" => "Red Small    ", "RM" => "Red Med      ", "RL" => "Red Large    ", "BS" => "Blue Small   ", 
                 "BM" => "Blue Med     ", "BL" => "Blue Large   ", "YS" => "Yellow Small ", "YM" => "Yellow Med   ", 
				 "YL" => "Yellow Large ", "PS" => "Purple Small ", "PM" => "Purple Med    ", "PL" => "Purple Large ");
?>
<a href="/cart.php">Cart</a>

<br><br>
  <?php
   foreach($flowers as $key => $value){
	//   $pl = htmlspecialchars($key => $value);
	  // echo "<input type='checkbox' name='flower[]' value=$key>$value<br>";
   }
	
?> 
 <form method="POST" action="info.php">
   <div>
  <input type="radio" name="item" value="Red Small">RS<br />
  <?php $_SESSION["num"] = 1; ?>
  </div>
  <div>
  <input type="radio" name="item" value="Red Medium">RM<br />
  <?php $_SESSION["num"] = 2; ?>
  </div>
  <div>
  <input type="radio" name="item" value="Red Large">RL<br />
  </div>
  <div>
  <input type="radio" name="item" value="Blue Small">BS<br />
  </div>
	<input type="submit" name="submit" value="Submit">  		
			
</form>

  
  <br><br>

</body>
</html>



