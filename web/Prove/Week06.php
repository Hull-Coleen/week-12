<?php
session_start();

if(!isset($_SESSION["cart"])){
    //If it doesn't, create an empty array.
    $_SESSION["cart"] = array();
}
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
<?php
  include_once('./dbConnect.php');
  $statement = $db->prepare("SELECT flower_type, flower_size, flower_price, description, image FROM flower");
  $statement->execute();
 
?>

 <form method="POST" action="info06.php">
   <div>
   <?php
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
   ?>
	 <div id="flowers1" ><p>
       <img id="flower" src="<?php echo $row['image'] ?>" alt="Flower"> <br>
       <input type="radio" name="item" value="<?php echo $row['description'] ?>">
	   <?php echo $row['description'] ?><br /></P> 
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