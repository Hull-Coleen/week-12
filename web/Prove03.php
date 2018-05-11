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
 <div  id="row">
   <div>
     <img src="RedF.jpg" alt="World"> 
     <input type="radio" name="item" value="Red Small">RS<br /> 
   </div>
   <div>
     <input type="radio" name="item" value="Red Medium">RM<br />
   </div>
   <div>
     <input type="radio" name="item" value="Red Large">RL<br />
   </div>
 </div>
 
   <div>
  <input type="radio" name="item" value="Blue Small">BS<br />
  </div>
   <div>
   <img src="/world.jpg" alt="World"> 
  <input type="radio" name="item" value="Red Small">BM<br />
  
  </div>
  <div>
  <input type="radio" name="item" value="Red Medium">BL<br />
  <
  </div>
  <div>
  <input type="radio" name="item" value="Red Large">YS<br />
  </div>
  <div>
  <input type="radio" name="item" value="Blue Small">YM<br />
  </div>
   <div>
   <img src="/world.jpg" alt="World"> 
  <input type="radio" name="item" value="Red Small">YL<br />
  
  </div>
  <div>
  <input type="radio" name="item" value="Red Medium">PS<br />
  </div>
  <div>
  <input type="radio" name="item" value="Red Large">PM<br />
  </div>
  <div>
  <input type="radio" name="item" value="Blue Small">PL<br />
  </div>
	<input type="submit" name="submit" value="Submit">  		
			
</form>

  
  <br><br>

</body>
</html>



