<?php
session_start();
include_once('./dbConnect.php');
$_SESSION["item"] = $_POST["item"];
$description;
$price;
$image = world.jpg;
$statement = $db->query("SELECT flower_price, image, FROM flower WHERE desription = $_SESSION['item']");
$statement->execute();
$price = $statement->fetch()['flower_price'];
$image = $statement->fetch()['image'];
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
<a href="/Prove05.php">Continue Shopping</a><br>
<a href="/cart.php">Cart</a>
<h1>Product Information</h1><br>
<img src="<?php echo $image; ?>"  alt="World"> 
<?php 

$_SESSION["item"] = htmlspecialchars($_POST["item"]);

//if (!empty(htmlspecialchars($_POST["item1"]))) {
	//array_push($_SESSION["cart"], $_POST["item1"]);
	
}
?>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
 <!-- <input type="hidden" id="address" name="item1" value=" --> <!--<?php echo htmlspecialchars($_SESSION['item']); ?>"> -->
  <p> <?php echo htmlspecialchars($_SESSION['item']);
	        echo "<br>";
			echo $price ?> <br>
    <input type="submit" name="submit" value="Add to Cart">  
  </p>
</form>		   

</body>
</html>