<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>  

<?php
// define variables 

$flowers = array("RS" => "Red Small", "RM" => "Red Med", "RL" => "Red Large", "BS" => "Blue Small", 
                 "BM" => "Blue Med", "BL" => "Blue Large", "YS" => "Yellow Small", "YM" => "Yellow Med", 
				 "YL" => "Yellow Large", "PS" => "Purple Small", "PM" => "Purple Med", "PL" => "Purple Large");
?>

<form>

  <?php
    foreach($flowers as $key => $value){
      echo "<input type='checkbox' name='flower' value=$key>$value/>";
	  $num;
	  $num++;
	  if ($num % 3)
         echo "<br>";
    }
  ?>
  
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>



