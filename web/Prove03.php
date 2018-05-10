<?php
session_start();
$_SESSION["cart"];
?>

<!DOCTYPE HTML>   
<html>
<head>
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
<form method="POST" action="cart.php">
<br><br>
  <?php
    foreach($flowers as $key => $value){
      echo "<input type='checkbox' name='flower[]' value=$key>$value";
	 
	  $num++;
	  if ($num % 3 == 0)
         echo "<br><br>";
    }
	$_SESSION["cart"] = $_POST["flower"];
  ?>
  
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>



