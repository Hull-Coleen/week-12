<?php
session_start();
include_once('./dbConnect.php');
if(!isset($_SESSION["cart"])){
    //If it doesn't, create an empty array.
    $_SESSION["cart"] = array();
}
echo $_SESSION['id'];
$items = getFlowers();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Prove Week 6</title>
	<script>
	</script>
	<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>

<body>
<a href="search06.php">Search Page</a><br>
<a href="homepage.php">Sign In</a><br>

 <form method="POST" action="info06.php">
   <div>
   <?php
   foreach ($items as $item)
   {
   ?>
	 <div id="flowers1" ><p>
       <img id="flower" src="<?php echo $item['image'] ?>" alt="Flower"> <br>
       <input type="radio" name="item" value="<?php echo $item['description'] ?>">
	   <?php echo $item['description'] ?><br /></P> 
     </div>
   <?php
   }
   ?>
  
   </div>
   <div id="after"></div>
   <br><br><br><div id="sub" ><input type="submit" name="submit" value="Submit"></div>  		
			
</form>
 </body>
</html>