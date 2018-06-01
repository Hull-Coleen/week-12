<?php
session_start();
include_once('dbConnect.php');
$occasion = htmlspecialchars($_POST["occasion"]);

$stmt = $db->prepare("SELECT f.flower_price, f.description, f.image FROM flower f, occasion o
WHERE (o.occasion_type = :occasion)
AND f.flower_type = o.occasion_id;");
$stmt->bindValue(':occasion', $occasion);
$stmt->execute();

?>
<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
<?php 
 
 if (!empty(htmlspecialchars($_POST["item2"]))) {
	 
    $_SESSION["cart"] += array($_POST["item2"] => 1);
	$id = getId($_POST["item2"]);
	//echo "search page" . $id;
	addCart($_SESSION["id"], $id);
 }
 
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
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
  <div>
  <?php
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
  ?>
	<div id="flowers1" ><p>
      <img id="flower" src="<?php echo $row['image'] ?>" alt="Flower"> <br>
      <input type="radio" name="item2" value="<?php echo $row['description'] ?>">
	  <?php echo $row['description'] ?><br />
	  <?php echo $row['flower_price'] ?></P> 
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


