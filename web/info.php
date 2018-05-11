<?php
session_start();
$_SESSION["item"] = $_POST["item"];
$d;
$f = $_SESSION["item"];

if($f == "Red Small") {
	$img = "Ashley.jpg";
	$d = "Small Bouquet of Red Roses";
	
}
else if($f == "Red Medium") {
	$img = "Ashley.jpg";
	$d = "Small Bouquet of Red Roses";
	
}
else if ($f == "Red Small") {
	$img = "Kristine.jpg";
	$d = "Small Bouquet of Blue Flowers";
}
else if ($f == "Blue Small") {
	$img = "Kristine.jpg";
	$d = "Small Bouquet of Blue Flowers";
}
else if($f == "Blue Medium") {
	$img = "Ashley.jpg";
	$d = "Small Bouquet of Red Roses";
	
}
else if ($f == "Blue Large") {
	$img = "Kristine.jpg";
	$d = "Small Bouquet of Blue Flowers";
}
else if($f == "Yellow Small") {
	$img = "Ashley.jpg";
	$d = "Small Bouquet of Red Roses";
	
}
else if ($f == "Yellow Medium") {
	$img = "Kristine.jpg";
	$d = "Small Bouquet of Blue Flowers";
}
else if ($f == "Yellow Large") {
	$img = "Kristine.jpg";
	$d = "Small Bouquet of Blue Flowers";
}
else if($f == "Purple Small") {
	$img = "Ashley.jpg";
	$d = "Small Bouquet of Red Roses";
	
}
else if ($f == "Purple Medium") {
	$img = "Kristine.jpg";
	$d = "Small Bouquet of Blue Flowers";
}
else if ($f == "Purple Large") {
	$img = "Kristine.jpg";
	$d = "Small Bouquet of Blue Flowers";
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
img {
	max-height: 340px;
	
}
p {
	text-align: center;
}
</style>
</head>
<body>
<a href="/Prove03.php">Continue Shopping</a><br>
<a href="/cart.php">Cart</a>
	<img src="<?php echo $img; ?>" style="margin:0px auto;display:block" alt="World"> 
<?php

// array_push($_SESSION["cart"], $f);

 //foreach ($_SESSION["cart"] as $fl) {
	 ?>
	 <form method="POST" action="cart.php">
	 <input type="hidden" id="address" name="item" value="<?php echo htmlspecialchars($f); ?>">
	 <p> <?php echo htmlspecialchars($f);
	           echo "<br>";
			   echo $d; ?> <br>
			<button type="submit" formmethod="POST">Add to Cart</button>   
			   </p>
	</form>		   
	 <?php
// }
 
 //echo "<br><br>" . count($_SESSION["cart"]);
 
 

?>

</body>
</html>