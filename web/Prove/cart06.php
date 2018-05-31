<?php
session_start();
include_once('dbConnect.php');
$t = $_GET['_delete'];
if ($t > -1) {
	unset($_SESSION["cart"][$t]);
	
}
echo $_SESSION['id'];
$id = 5;
//$stmt = $db->prepare("SELECT f.description, f.flower_price, f.image 
//FROM flower f, cart c 
//WHERE c.flower_id = f.flower_id");
//$stmt->bindValue(':id', $_SESSION["cart"], PDO::PARAM_INT);
//$stmt->execute();

$stmt = $db->prepare("SELECT user_id, flower_id FROM cart");
//$stmt->bindValue(':id', $_SESSION["cart"], PDO::PARAM_INT);
$stmt->execute();
founction getCart() {
	global $db;
	$query = "SELECT f.description, f.flower_price, f.image 
                     FROM flower f INNER JOIN cart c ON f.flower_id = c.flower_id
					 WHERE c.user_id = {$id}";
	 try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}				 
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
<a href="Week06.php">Continue Shopping</a><br>
<a href="Week06checkout.php">Checkout</a>
<h1>Shopping Cart</h1><br><br>

<?php

foreach($_SESSION['cart'] as $x => $x_value) {	
	?>
	<p> <?php
   echo $x;
   
   ?>
   <br>
   <input type="text" placeholder="1" maxlength="4" size="4" id="<?php echo $x ?>" name="num">
   <?php
   echo "<br>";
   echo "<a href='{$_SERVER["PHP_SELF"]}?_delete={$x}'>Delete</a>";
   ?>
   </p>
   <?php
}
//$cart = getCart();
foreach ($db->query('SELECT user_id, flower_id FROM cart') as $row)
{
  echo 'user: ' . $row['user_id'];
  echo ' password: ' . $row['flower_id'];
  echo '<br/>';
}
foreach ($db->query("SELECT f.description, f.flower_price, f.image 
                     FROM flower f, cart c WHERE f.flower_id = c.flower_id
					 AND c.user_id = {$id}") as $row)
{
  echo 'user: ' . $row['description'];
  echo ' password: ' . $row['flower_price'];
  echo '<br/>';
}
$cart = getCart();
foreach($cart as $c) {
	echo "cart " . $c['description'] . "<br>";
	echo $c['flower_price'];
}
while($rows = $stmt->fetch(PDO::FETCH_ASSOC))
 
  {
  ?>
	<div ><p>
      <!-- <img id="flower" src="<?php echo $row['image'] ?>" alt="Flower">  --><br>
      <?php echo /*$row['image']*/ $row['user_id'] ?><br />
	  <?php echo /*$row['description']*/$row['flower_id']  ?><br />
	  <?php /*echo $row['flower_price'] */?></p> 
    </div>
  <?php
  }
  ?>


</body>
</html>