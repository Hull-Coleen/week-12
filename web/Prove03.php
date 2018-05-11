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
   // foreach($flowers as $key => $value){
?>  
<form method="POST">
     <div>
	  <div>
	  <a href="info.php">
          <img src="Ashley.jpg" alt="HTML tutorial" class="c"  style="width:42px;height:42px;border:0;">
      </a>
	  <input type="hidden" name="name" value="a" />
	  <p><var id="myVar">Red Small</var></p>
	  <?php
	  //$_SESSION["item"] = "Red Small";
	//}
	//$_SESSION["cart"] = $_POST["flower"];
      ?>
	  </div>
	  </form><form method="POST">
	  <div>
	  <a href="info.php">
          <img src="Katelynn3.jpg" alt="HTML tutorial" class="c" style="width:42px;height:42px;border:0;">
      </a>
	  <p><var id="myVar">Red Medium</var></p>
	  <?php
	   // $_SESSION["item"] = "Red Medium";
	//}
	//$_SESSION["cart"] = $_POST["flower"];
  ?>
	  </div><form method="POST">
	  <div>
	  <a href="info.php">
          <img src="Krsitne.jpg" alt="HTML tutorial" class="c" style="width:42px;height:42px;border:0;">
      </a>
	  <p><var id="myVar">Red Large</var></p>
	  </div>
	  
	  </div>
	  </form>
	  <script>
	 // $(document).ready(function() {

    //$( ".c" ).click(function() {
      //$( "#info.php" ).submit();
    //});
     //}); </script>
    
	<?php
	//$_SESSION["item"] = myVar;
	//}
	//$_SESSION["cart"] = $_POST["flower"];
  ?>
  
  
  <br><br>

</body>
</html>



