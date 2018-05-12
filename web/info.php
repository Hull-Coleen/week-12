<?php
session_start();
$_SESSION["item"] = $_POST["item"];
$d;
$f = $_SESSION["item"];
$img = $_SESSION["image"];
$d = $_SESSION["d"];
if($f == "Red Small") {
	$img = "RedF.jpg";
	//$i = "RedF.jpg";
	$d = "Small Bouquet of Red Roses";
	
}
else if($f == "Red Medium") {
	$img = "RedF.jpg";
	$d = "Medium Bouquet of Red Roses";
	
}
else if ($f == "Red Large") {
	$img = "RedF.jpg";
	$d = "Large Bouquet of Blue Flowers";
}
else if ($f == "Blue Small") {
	$img = "BlueF.jpg";
	$d = "Small Bouquet of Blue Flowers";
}
else if($f == "Blue Medium") {
	$img = "BlueF.jpg";
	$d = "Medium Bouquet of Blue Flowers";
	
}
else if ($f == "Blue Large") {
	$img = "BlueF.jpg";
	$d = "Large Bouquet of Blue Flowers";
}
else if($f == "Yellow Small") {
	$img = "YellowF.jpg";
	$d = "Small Bouquet of Yellow Roses";
	
}
else if ($f == "Yellow Medium") {
	$img = "YellowF.jpg";
	$d = "Medium Bouquet of Yellow Flowers";
}
else if ($f == "Yellow Large") {
	$img = "YellowF.jpg";
	$d = "Large Bouquet of Yellow Flowers";
}
else if($f == "Purple Small") {
	$img = "PurpleF.jpg";
	$d = "Small Bouquet of Purple Flowers";
	
}
else if ($f == "Purple Medium") {
	$img = "PurpleF.jpg";
	$d = "Mediuml Bouquet of Purple Flowers";
}
else if ($f == "Purple Large") {
	$img = "PurpleF.jpg";
	$d = "Large Bouquet of Purple Flowers";
}
else {
	$img = "world.jpg";
	$d = "";
}
	
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
<a href="/Prove03.php">Continue Shopping</a><br>
<a href="/cart.php">Cart</a>
<h1>Product Information</h1><br>
<img src="<?php echo $i; ?>"  alt="World"> 
<?php 
$_SESSION["item"] = htmlspecialchars($_POST["item"]);

if (!empty(htmlspecialchars($_POST["item1"]))) {
	array_push($_SESSION["cart"], $_POST["item1"]);
	
}
?>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
  <input type="hidden" id="address" name="item1" value="<?php echo htmlspecialchars($f); ?>">
  <p> <?php echo htmlspecialchars($f);
	        echo "<br>";
			echo $d; ?> <br>
    <input type="submit" name="submit" value="Add to Cart">  
  </p>
</form>		   

</body>
</html>