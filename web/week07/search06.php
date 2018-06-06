<?php
session_start();
include_once('dbConnect.php');
$occasion = htmlspecialchars($_POST["occasion"]);
$items = searchFlowers($occasion);
?>
<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
<?php 
 
// if (!empty(htmlspecialchars($_POST["item2"]))) {
	//$id = getFlowerId($_POST["item2"]);
	//addCart($_SESSION["id"], $id);
// }
 
?>

<div><a id="link" href="cart06.php">
  <img class="link" src="cart.png" alt="Cart">
</a></div>
<div><a id="link" href="Week06.php">
  <img class="link" src="flower.jpg" alt="Home"><br>
  <span>Home</span>
</a></div>

<h1>Please Enter your search criteria</h1>
<p>Enter either Mother's Day, Birthday, or Anniversary</p>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
  <p>
    <label for="name">Occasion</label>
    <input type="text" placeholder="Occasion" id="occasion" name="occasion">
    <br /><br />
    <input type="submit" value="ENTER">
  </p>
</form>
<form method="POST" action="info06.php">
  <div>
   <?php
  foreach ($items as $item)
  {
  ?>
	<div id="flowers1" ><p>
      <img id="flower" src="<?php echo $item['image'] ?>" alt="Flower"> <br>
      <input type="radio" name="item2" value="<?php echo $item['description'] ?>">
	  <?php echo $item['description'] ?><br />
	  <?php echo $item['flower_price'] ?></P> 
    </div>
  <?php
  }
  ?>
 
  </div>
  <div id="after" ></div>
  <br><br><div><p><input type="submit" name="submit" value="Add to Cart"></p></div> 
</form>


</body>
</html


