
<?php
session_start();
include_once('dbConnect.php');

$_SESSION["item"] = htmlspecialchars($_POST["item"]);

$description = $_SESSION["item"];
$price = getPrice($description);
$image =getImage($description); 
if (!empty($image)) {
$_SESSION['image'] = $image
}
if (empty($image)) {
	$image = "RedF.jpg";
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
<style>
</style>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
<a href="Week06.php">Continue Shopping</a><br>
<a href="cart06.php">Cart</a><br>

<h1>Product Information</h1><br>
<img id ="flower" src="<?php echo $image; ?>"  alt="World">
 <?php 

 if (!empty(htmlspecialchars($_POST["item1"]))) {
     $id = getFlowerId($_POST["item1"]);
	 addCart($_SESSION["id"], $id);
 
 }
?>
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