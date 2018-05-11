<?php
session_start();
$test;
$_SESSION["item"] = $_POST["item"];
$f = $_SESSION["item"];
//$a = $_SESSION["cart"];
$a = array($f);
if($f == "Red Small") {
	$img = "Ashley.jpg";
	
}
else if ($f == "Blue Small") {
	$img = "Kristine.jpg";
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
	 echo "session " . htmlspecialchars($fl);
 }
 
 echo "<br><br>" . count($_SESSION["cart"]);
 
 

?>

</body>
</html>