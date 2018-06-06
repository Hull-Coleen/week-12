
<?php
session_start();
include_once('dbConnect.php');

if (empty(htmlspecialchars($_POST["item2"]))) {
	
	$_SESSION['item'] = htmlspecialchars($_POST["item"]);
}else {
	$_SESSION['item'] = htmlspecialchars($_POST["item2"]);
}
$description = $_SESSION["item"];
$price = getPrice($description);
$image =getImage($description); 
if (!empty($image)) {
$_SESSION['image'] = $image;
}
if (!empty($price)) {
$_SESSION['price'] = $price;
}
if (!empty($image)) {
$_SESSION['desc'] = $description;
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
<div><a id="link" href="cart06.php">
  <img class="link" src="cart.png" alt="Cart">
</a></div>
<div><a id="link" href="Week06.php">
  <img class="link" src="flower.jpg" alt="Home"><br>
  <span>Home</span>
</a></div>

<h1>Product Information</h1><br>
<img id ="flower" src="<?php echo $_SESSION['image']; ?>"  alt="World">
 <?php 

 if (!empty(htmlspecialchars($_POST["item1"]))) {
     $id = getFlowerId($_POST["item1"]);
	 addCart($_SESSION["id"], $id);
 
 }
?>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
  <input type="hidden" id="address" name="item1" value="<?php echo htmlspecialchars($_SESSION['desc']); ?>">
  <p> <?php echo htmlspecialchars($_SESSION['desc']);
	        echo "<br>";
			echo $_SESSION['price']; ?> <br>
    <input class="button" type="submit" name="submit" value="Add to Cart">  
  </p>
</form>
	  

</body>
</html>