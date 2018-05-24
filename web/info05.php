
<?php
session_start();
include_once('/dbConnect.php');
$_SESSION["item"] = $_POST["item"];
$description = $_SESSION["item"];
$price;
$image = "world.jpg";
$statement = $db->query("SELECT flower_price FROM flower WHERE description = '{$description}';");
$statement->execute();
$price = $statement->fetch()['flower_price'];

	//$price = $row['flower_price'];
	//$image = $row['image'];
	

//$price = $statement->fetch()['flower_price'];
//$image = $statement->fetch()['image'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
<style>
</style>
<link rel="stylesheet" type="text/css" href="Prove03style.css">
</head>
<body>
<a href="/Week05.php">Continue Shopping</a><br>

<h1>Product Information</h1><br>
<img src="<?php echo $image; ?>"  alt="World"> 
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
  <input type="hidden" id="address" name="item1" value="<?php echo htmlspecialchars($description); ?>">
  <p> <?php echo htmlspecialchars($description);
	        echo "<br>";
			echo $price; ?> <br>
    <input type="submit" name="submit" value="Add to Cart">  
  </p>
</form>
	   

</body>
</html>