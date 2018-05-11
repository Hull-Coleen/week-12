<?php
session_start();
$_SESSION["item"] = $_POST["item"];
$d;
$f = $_SESSION["item"];

if($f == "Red Small") {
	$img = "Ashley.jpg";
	$d = "Small Bouquet of Red Roses";
	
}
else if ($f == "Blue Small") {
	$img = "Kristine.jpg";
	$d = "Small Bouquet of Blue Flowers";
}
else {
	$img = "world.jpg";
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
<a href="/Prove03.php">Continue Shopping</a>
<a href="/cart.php">Cart</a>
	<img src="<?php echo $img; ?>" style="margin:0px auto;display:block" alt="World"> 
<?php


 echo $_SESSION["item"];

 array_push($_SESSION["cart"], $f);

 foreach ($_SESSION["cart"] as $fl) {
	 ?>
	 <p> <?php echo htmlspecialchars($fl);
	           echo "<br>"
			   echo $d; ?> </p>
	 <?php
 }
 
 echo "<br><br>" . count($_SESSION["cart"]);
 
 

?>

</body>
</html>