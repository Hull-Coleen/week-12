<?php
session_start();
include_once('dbConnect.php');
$occasion = htmlspecialchars($_POST["occasion"]);

$stmt = $db->prepare("SELECT f.flower_price, f.description, f.image FROM flower f, occasion o
WHERE (o.occasion_type = '{$occasion}')
AND f.flower_type = o.occasion_id;");
$stmt->execute();

?>
<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>
<link rel="stylesheet" type="text/css" href="Prove03style.css">
</head>
<body>
<?php 
 
 if (!empty(htmlspecialchars($_POST["item2"]))) {
	 
    $_SESSION["cart"] += array($_POST["item2"] => 1);
 }
 
?>
<a href="/cart05.php">Back to Cart</a><br>
<h1>Please Enter your search criteria</h1>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<p>
  <label for="name">Occasion</label>
  <input type="text" placeholder="Occasion" id="occasion" name="occasion">
			
  <br /><br />
  <input type="submit" value="ENTER">
</p>
</form>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	?>
	<div><p>
     <img src="<?php echo $row['image'] ?>" alt="Flower"> <br>
     <input type="radio" name="item2" value="<?php echo $row['description'] ?>">
	 <?php echo $row['description'] ?><br />
	 <?php echo $row['flower_price'] ?></P> 
   </div>
<?php
}
?>
<br><br><br><div ><input type="submit" name="submit" value="Submit"></div> 
</form>


</body>
</html


