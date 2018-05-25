<?php
session_start();
include_once('dbConnect.php');
$occasion = htmlspecialchars($_POST["occasion"]);
if ($occasion == 'Mother Day')
	$occ = 1;
else if ($occasion == 'Anniversary')
	$occ = 2;
else if ($occasion == 'Birthday')
    $occ = 3;
else 
	$occ = 1;
$stmt = $db->prepare("SELECT flower_price, description, image FROM flower WHERE (description = {$occ});");
$stmt->execute();
//$price = $stmt->fetch()['flower_price'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>
<link rel="stylesheet" type="text/css" href="Prove03style.css">
</head>
<body>
<a href="/cart.php">Back to Cart</a><br>
<h1>Please Enter your search criteria</h1>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<p>
  <label for="name">Occasion</label>
  <input type="text" placeholder="Occasion" id="occasion" name="occasion">
			
  <br /><br />
  <input type="submit" value="Complete Checkout">
</p>
</form>
<?php
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	?>
	<div id="flowers" ><p>
     <img src="<?php echo $row['image'] ?>" alt="Flower"> <br>
     <input type="radio" name="item" value="<?php echo $row['description'] ?>">
	 <?php echo $row['description'] ?><br />
	 <?php echo $row['flower_price'] ?></P> 
   </div>
<?php
}
?>


</body>
</html


