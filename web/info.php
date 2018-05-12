<?php
session_start();
$_SESSION["item"] = $_POST["item"];
$d;
$f = $_SESSION["item"];
$img = $_SESSION["image"];
$d = $_SESSION["d"];
if($f == "Red Small") {
	$_SESSION["image"] = "RedF.jpg";
	$_SESSION["d"] = "Small Bouquet of Red Roses";	
}
else if($f == "Red Medium") {
	$_SESSION["image"]= "RedF.jpg";
	$_SESSION["d"] = "Medium Bouquet of Red Roses";
	
}
else if ($f == "Red Large") {
	$_SESSION["image"] = "RedF.jpg";
	$_SESSION["d"] = "Large Bouquet of Blue Flowers";
}
else if ($f == "Blue Small") {
	$_SESSION["image"] = "BlueF.jpg";
	$_SESSION["d"] = "Small Bouquet of Blue Flowers";
}
else if($f == "Blue Medium") {
	$_SESSION["image"] = "BlueF.jpg";
	$_SESSION["d"] = "Medium Bouquet of Blue Flowers";
	
}
else if ($f == "Blue Large") {
	$_SESSION["image"] = "BlueF.jpg";
	$_SESSION["d"] = "Large Bouquet of Blue Flowers";
}
else if($f == "Yellow Small") {
	$_SESSION["image"] = "YellowF.jpg";
	$_SESSION["d"] = "Small Bouquet of Yellow Roses";
	
}
else if ($f == "Yellow Medium") {
	$_SESSION["image"] = "YellowF.jpg";
	$_SESSION["d"] = "Medium Bouquet of Yellow Flowers";
}
else if ($f == "Yellow Large") {
	$_SESSION["image"] = "YellowF.jpg";
	$_SESSION["d"] = "Large Bouquet of Yellow Flowers";
}
else if($f == "Purple Small") {
	$_SESSION["image"] = "PurpleF.jpg";
	$_SESSION["d"] = "Small Bouquet of Purple Flowers";
	
}
else if ($f == "Purple Medium") {
	$_SESSION["image"] = "PurpleF.jpg";
	$_SESSION["d"] = "Mediuml Bouquet of Purple Flowers";
}
else if ($f == "Purple Large") {
	$_SESSION["image"] = "PurpleF.jpg";
	$_SESSION["d"] = "Large Bouquet of Purple Flowers";
}
else {
	$img;
    $d;
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
<img src="<?php echo $_SESSION["image"]; ?>"  alt="World"> 
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
			echo $_SESSION["d"]; ?> <br>
    <input type="submit" name="submit" value="Add to Cart">  
  </p>
</form>		   

</body>
</html>