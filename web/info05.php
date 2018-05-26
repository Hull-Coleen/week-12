
<?php
session_start();
include_once('dbConnect.php');
$_SESSION["item"] = htmlspecialchars($_POST["item"]);
$description = $_SESSION["item"];
$price;
$_SESSION['image'] = "world.jpg";    
$stmt = $db->prepare("SELECT flower_price, image FROM flower WHERE (description = '{$description}');");
$stmt->execute();
$_SESSION['price'] = $stmt->fetch()['flower_price'];
	
$stmt2 = $db->prepare("SELECT image FROM flower WHERE (description = '{$description}');");
$stmt2->execute();
$image = $stmt2->fetch()['image'];
if (!empty($image)) {
$_SESSION['image'] = $image;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
<style>
</style>
<link rel="stylesheet" type="text/css" href="Week05style.css">
</head>
<body>
<a href="/Week05.php">Continue Shopping</a><br>
<a href="/cart05.php">Cart</a><br>

<h1>Product Information</h1><br>
<img src="<?php echo $_SESSION['image']; ?>"  alt="World">
 <?php 
 $num = 1;
 if (!empty(htmlspecialchars($_POST["item1"]))) {
	 
    $_SESSION["cart"] += array($_POST["item1"] => 1);
 }
?>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
  <input type="hidden" id="address" name="item1" value="<?php echo htmlspecialchars($description); ?>">
  <p> <?php echo htmlspecialchars($description);
	        echo "<br>";
			echo $_SESSION['price']; ?> <br>
    <input type="submit" name="submit" value="Add to Cart">  
  </p>
</form>
	   

</body>
</html>